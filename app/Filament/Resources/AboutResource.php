<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AboutResource\Pages;
use App\Models\About;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Model; // Tambahkan ini jika ingin check $model::count()

class AboutResource extends Resource
{
    protected static ?string $model = About::class;

    protected static ?string $navigationIcon = 'heroicon-o-information-circle';
    protected static ?string $navigationGroup = 'Website Content'; // Kelompokkan

    // Fungsi untuk memeriksa apakah bisa membuat record baru
    // Hanya izinkan create jika belum ada record About sama sekali
    public static function canCreate(): bool
    {
        return static::$model::count() === 0;
    }

    // Fungsi untuk memeriksa apakah bisa menghapus record
    // Jangan izinkan hapus jika hanya ada satu record tersisa
    public static function canDelete(Model $record): bool
    {
        return false; // Secara umum jangan biarkan halaman About dihapus
    }

    // Fungsi untuk memeriksa apakah bisa menghapus banyak record
    public static function canDeleteAny(): bool
    {
        return false; // Jangan izinkan hapus massal
    }


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->required()
                    ->columnSpanFull()
                    ->maxLength(255),
                Forms\Components\TextInput::make('tagline') // Tambahkan tagline jika belum ada
                    ->nullable()
                    ->columnSpanFull()
                    ->maxLength(255)
                    ->helperText('Tagline singkat yang muncul di bawah logo.'),
                Forms\Components\TextInput::make('seo_title') // Tambahkan SEO Title jika belum ada
                    ->nullable()
                    ->columnSpanFull()
                    ->maxLength(255)
                    ->helperText('Judul yang tampil di tab browser (SEO).'),
                Forms\Components\RichEditor::make('description')
                    ->label('Main Description')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\FileUpload::make('image')
                    ->label('About Image')
                    ->image()
                    ->directory('about')
                    ->visibility('public')
                    ->columnSpanFull()
                    ->required(),
                Forms\Components\Textarea::make('bio')
                    ->label('Bio / Short Text')
                    ->nullable()
                    ->rows(4) // Sesuaikan tinggi
                    ->columnSpanFull()
                    ->helperText('Teks singkat yang muncul di sebelah kanan gambar.'),
                Forms\Components\KeyValue::make('social_media')
                    ->label('Social Media Links')
                    ->keyLabel('Platform (e.g., facebook, twitter, instagram)') // Instruksi Key
                    ->valueLabel('Full URL (e.g., https://...)') // Instruksi Value
                    ->columnSpanFull() // Lebarkan
                    ->reorderable() // Bisa diurutkan
                    ->nullable(),
                Forms\Components\TextInput::make('email')
                    ->label('Contact Email')
                    ->email()
                    ->nullable()
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')
                    ->searchable(), // Tambahkan pencarian jika perlu (meski cuma 1)
                ImageColumn::make('image')
                    ->width(100) // Atur lebar preview gambar
                    ->height('auto'),
                TextColumn::make('email')
                    ->toggleable(isToggledHiddenByDefault: true), // Sembunyikan email defaultnya
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->label('Last Updated'), // Ganti label
            ])
            ->filters([
                // Tidak perlu filter jika hanya 1 record
            ])
            ->actions([
                Tables\Actions\EditAction::make(), // Hanya aksi edit
            ])
            ->bulkActions([
                // Hapus aksi massal karena hanya ada 1 record
                // Tables\Actions\BulkActionGroup::make([
                //     Tables\Actions\DeleteBulkAction::make(),
                // ]),
            ]);
    }

    // getRelations() dan getPages() tetap sama seperti sebelumnya
    // ...
    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        // Sesuaikan halaman jika perlu, tapi defaultnya sudah OK
        return [
            'index' => Pages\ListAbouts::route('/'),
            'create' => Pages\CreateAbout::route('/create'), // Hanya bisa diakses jika belum ada data
            'edit' => Pages\EditAbout::route('/{record}/edit'),
        ];
    }
}
