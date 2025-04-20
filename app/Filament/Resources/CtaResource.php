<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CtaResource\Pages;
use App\Filament\Resources\CtaResource\RelationManagers;
use App\Models\Cta; // Pastikan namespace model benar
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CtaResource extends Resource
{
    protected static ?string $model = Cta::class;

    protected static ?string $navigationIcon = 'heroicon-o-megaphone'; // Ganti icon

    protected static ?string $navigationGroup = 'Website Content'; // Kelompokkan

    // Ganti slug route jika diinginkan (opsional)
    // protected static ?string $slug = 'call-to-actions';

    public static function form(Form $form): Form
    {
        $ctaIcons = [
            // Komunikasi & Pemberitahuan
            'fa-bullhorn' => 'Bullhorn / Megaphone',
            'fa-comment' => 'Comment (Chat Bubble)',
            'fa-comment-o' => 'Comment Outline',
            'fa-comments' => 'Comments (Multiple Bubbles)',
            'fa-comments-o' => 'Comments Outline',
            'fa-envelope' => 'Envelope (Email)',
            'fa-envelope-o' => 'Envelope Outline',
            'fa-paper-plane' => 'Paper Plane (Send)',
            'fa-paper-plane-o' => 'Paper Plane Outline',
            'fa-bell' => 'Bell (Notifikasi)',
            'fa-bell-o' => 'Bell Outline',

            // Aksi & Status
            'fa-thumbs-up' => 'Thumbs Up',
            'fa-thumbs-o-up' => 'Thumbs Up Outline',
            'fa-heart' => 'Heart (Like)',
            'fa-heart-o' => 'Heart Outline',
            'fa-star' => 'Star (Bintang)',
            'fa-star-o' => 'Star Outline',
            'fa-check' => 'Check Mark (Centang)',
            'fa-check-circle' => 'Check Circle',
            'fa-check-circle-o' => 'Check Circle Outline',
            'fa-plus' => 'Plus (Tambah)',
            'fa-plus-circle' => 'Plus Circle',
            'fa-gift' => 'Gift (Hadiah/Promo)',
            'fa-tag' => 'Tag (Label)',
            'fa-tags' => 'Tags (Multiple Labels)',
            'fa-download' => 'Download',
            'fa-upload' => 'Upload',
            'fa-shopping-cart' => 'Shopping Cart',
            'fa-shopping-bag' => 'Shopping Bag',
            'fa-shopping-basket' => 'Shopping Basket',
            'fa-money' => 'Money',
            'fa-credit-card' => 'Credit Card',
            'fa-external-link' => 'External Link (Tautan Keluar)',
            'fa-link' => 'Link (Tautan)',
            'fa-camera' => 'Camera',
            'fa-video-camera' => 'Video Camera',
            'fa-image' => 'Image / Picture',
            'fa-lightbulb-o' => 'Lightbulb (Ide)',
            'fa-calendar' => 'Calendar',
            'fa-calendar-o' => 'Calendar Outline',
            'fa-clock-o' => 'Clock (Waktu)',
            'fa-info' => 'Info',
            'fa-info-circle' => 'Info Circle',
            'fa-question' => 'Question Mark',
            'fa-question-circle' => 'Question Circle',
            'fa-question-circle-o' => 'Question Circle Outline',
            'fa-exclamation' => 'Exclamation Mark',
            'fa-exclamation-circle' => 'Exclamation Circle',
            'fa-exclamation-triangle' => 'Warning Triangle',

            // Sosial Media (Contoh)
            'fa-facebook' => 'Facebook',
            'fa-twitter' => 'Twitter',
            'fa-linkedin' => 'LinkedIn',
            'fa-instagram' => 'Instagram',
            'fa-youtube' => 'YouTube',
            'fa-whatsapp' => 'WhatsApp',
            // Tambahkan ikon lain jika perlu
        ];

        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->required()
                    ->maxLength(255)
                    ->columnSpanFull(),
                Forms\Components\RichEditor::make('description')
                    ->nullable()
                    ->columnSpanFull(),

                // --- Perubahan disini ---
                Forms\Components\Select::make('icon')
                    ->options($ctaIcons) // Gunakan daftar ikon
                    ->searchable() // Memudahkan pencarian
                    ->nullable()
                    ->label('Icon'),
                // --- Akhir Perubahan ---

                Forms\Components\TextInput::make('link_text')
                    ->nullable()
                    ->maxLength(255),
                Forms\Components\TextInput::make('link_url')
                    ->nullable()
                    // ->url() // Komentari validasi URL agar bisa pakai '#'
                    ->helperText('Masukkan URL (http://...) atau link internal (#contact).')
                    ->maxLength(255),
                Forms\Components\Select::make('type')
                    ->options([
                        'social' => 'Social Media',
                        'quote' => 'Request Quote',
                        'promo' => 'Promotion',
                        'general' => 'General',
                    ])
                    ->nullable(),
                Forms\Components\Toggle::make('is_active')
                    ->required()
                    ->default(true)
                    ->label('Active?'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('type')
                    ->badge() // Tampilkan sebagai badge/label
                    ->formatStateUsing(fn(string $state): string => ucfirst($state)) // Kapitalisasi huruf pertama
                    ->color(fn(string $state): string => match ($state) { // Beri warna berbeda
                        'social' => 'info',
                        'quote' => 'warning',
                        'promo' => 'success',
                        default => 'gray',
                    })
                    ->sortable(),
                Tables\Columns\IconColumn::make('is_active')
                    ->boolean()
                    ->sortable()
                    ->label('Active'),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('type')
                    ->options([
                        'social' => 'Social Media',
                        'quote' => 'Request Quote',
                        'promo' => 'Promotion',
                        'general' => 'General',
                    ]),
                Tables\Filters\TernaryFilter::make('is_active')
                    ->label('Active Status')
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->defaultSort('title', 'asc');
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListCtas::route('/'),
            'create' => Pages\CreateCta::route('/create'),
            'edit' => Pages\EditCta::route('/{record}/edit'),
        ];
    }
}
