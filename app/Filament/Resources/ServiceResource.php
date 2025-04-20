<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ServiceResource\Pages;
use App\Models\Service;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\IconColumn; // Tambahkan use IconColumn
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Blade; // Tambahkan use Blade

class ServiceResource extends Resource
{
    protected static ?string $model = Service::class;

    protected static ?string $navigationIcon = 'heroicon-o-briefcase';
    protected static ?string $navigationGroup = 'Website Content'; // Kelompokkan

    public static function form(Form $form): Form
    {
        // Daftar ikon Font Awesome 4.6.3 untuk Service
        $serviceIcons = [
            'fa-briefcase' => 'Briefcase (General)',
            'fa-camera' => 'Camera (Photo)',
            'fa-video-camera' => 'Video Camera',
            'fa-paint-brush' => 'Paint Brush (Design)',
            'fa-code' => 'Code (Development)',
            'fa-cogs' => 'Cogs (Technical)',
            'fa-wrench' => 'Wrench (Support)',
            'fa-diamond' => 'Diamond (Premium)',
            'fa-plane' => 'Plane (Travel)',
            'fa-graduation-cap' => 'Graduation Cap (Training)',
            'fa-heart' => 'Heart (Wedding/Personal)',
            'fa-cutlery' => 'Cutlery (Food)',
            'fa-medkit' => 'Medkit (Health)',
            'fa-film' => 'Film (Movie)', // Ganti 'movie' ke 'fa-film'
            // Tambahkan ikon lain jika perlu
        ];

        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->required()
                    ->maxLength(255)
                    ->columnSpanFull(), // Lebarkan field title
                Forms\Components\KeyValue::make('includes')
                    ->label('Included Features')
                    ->keyLabel('Item') // Ganti label key
                    ->valueLabel('Feature Description') // Ganti label value
                    ->reorderable() // Bisa diurutkan
                    ->addActionLabel('Add Feature') // Ganti label tombol tambah
                    ->columnSpanFull() // Lebarkan
                    ->nullable(),
                Forms\Components\Grid::make(2) // Buat grid 2 kolom untuk harga dan unit
                    ->schema([
                        Forms\Components\TextInput::make('price')
                            ->required()
                            ->numeric()
                            ->prefix('$'),
                        Forms\Components\TextInput::make('price_unit')
                            ->required()
                            ->maxLength(50) // Kurangi max length
                            ->helperText('e.g., /day, /hour, /project, /image'), // Beri contoh
                    ]),

                // --- Perubahan Select Icon ---
                Forms\Components\Select::make('icon')
                    ->options($serviceIcons) // Gunakan daftar ikon FA
                    ->searchable()
                    ->nullable()
                    ->placeholder('Choose an icon (Optional)')
                    ->label('Icon'),
                // --- Akhir Perubahan Select Icon ---

                // --- Tambahkan Toggle is_active ---
                Forms\Components\Toggle::make('is_active')
                    ->required()
                    ->default(true)
                    ->label('Is Active?')
                    ->helperText('Only active services will be shown on the website.'),
                // --- Akhir Tambahan Toggle ---
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')->sortable()->searchable(), // Tambahkan searchable

                // --- Menampilkan Ikon di Tabel ---
                TextColumn::make('icon')
                    ->label('Icon')
                    ->html() // Render sebagai HTML
                    // Format state untuk menampilkan ikon FA (aman karena input dari Select)
                    ->formatStateUsing(fn(?string $state): string => $state ? Blade::render('<i class="fa ' . $state . ' fa-fw"></i>') : ''),

                TextColumn::make('price')->money('usd')->sortable(),
                TextColumn::make('price_unit'),

                // --- Tambahkan Kolom is_active ---
                IconColumn::make('is_active')
                    ->boolean()
                    ->sortable()
                    ->label('Active'),
                // --- Akhir Tambahan Kolom ---

                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true), // Sembunyikan default
            ])
            ->filters([
                Tables\Filters\TernaryFilter::make('is_active') // Tambah filter aktif
                    ->label('Active Status'),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(), // Tambahkan DeleteAction
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->defaultSort('title', 'asc'); // Default sort berdasarkan title
    }

    // getRelations() dan getPages() tetap sama
    // ...
    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListServices::route('/'),
            'create' => Pages\CreateService::route('/create'),
            'edit' => Pages\EditService::route('/{record}/edit'),
        ];
    }
}
