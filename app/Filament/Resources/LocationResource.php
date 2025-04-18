<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LocationResource\Pages;
use App\Filament\Resources\LocationResource\RelationManagers;
use App\Models\Location;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class LocationResource extends Resource
{
    protected static ?string $model = Location::class;

    protected static ?string $navigationIcon = 'heroicon-o-map-pin'; // Ganti icon sesuai keinginan

    protected static ?string $navigationGroup = 'Website Content'; // Kelompokkan di sidebar

    public static function form(Form $form): Form
    {
        // Daftar ikon yang tersedia (SESUAIKAN DENGAN TEMPLATE ANDA!)
        $locationIcons = [
            'fa-map-marker' => 'Map Marker (Pin Utama)',
            'fa-map-pin' => 'Map Pin (Jarum)',
            'fa-building' => 'Building (Gedung)',
            'fa-building-o' => 'Building Outline (Gedung Outline)',
            'fa-home' => 'Home (Rumah)',
            'fa-hospital-o' => 'Hospital (Rumah Sakit)',
            'fa-industry' => 'Industry (Industri/Pabrik)',
            'fa-location-arrow' => 'Location Arrow (Panah Lokasi)',
            'fa-compass' => 'Compass (Kompas)',
            'fa-flag' => 'Flag (Bendera)',
            'fa-flag-o' => 'Flag Outline (Bendera Outline)',
            'fa-phone' => 'Phone (Telepon)',
            'fa-fax' => 'Fax',
            'fa-envelope' => 'Envelope (Amplop)',
            'fa-envelope-o' => 'Envelope Outline (Amplop Outline)',
            'fa-globe' => 'Globe (Bola Dunia)',
            'fa-briefcase' => 'Briefcase (Koper)',
            'fa-car' => 'Car (Mobil)',
            'fa-train' => 'Train (Kereta)',
            'fa-ship' => 'Ship (Kapal)',
            'fa-plane' => 'Plane (Pesawat)',
            // Tambahkan ikon lain jika perlu
        ];
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255)
                    ->columnSpanFull(),
                Forms\Components\Textarea::make('address')
                    ->required()
                    ->rows(4)
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('phone')
                    ->tel()
                    ->maxLength(255)
                    ->nullable(),
                // Perhatikan nama field 'Maps_url' di model Anda mungkin typo?
                // Jika ya, perbaiki di model dan migration juga. Saya asumsikan typo dan seharusnya 'Maps_url'
                Forms\Components\TextInput::make('Maps_url') // <-- Sesuaikan jika nama field beda
                    ->url()
                    ->maxLength(255)
                    ->nullable()
                    ->label('Google Maps URL'),

                // --- Perubahan disini ---
                Forms\Components\Select::make('icon')
                    ->options($locationIcons) // Gunakan daftar ikon
                    ->searchable() // Memudahkan pencarian jika daftar panjang
                    ->nullable()
                    ->label('Icon'), // Label field
                // --- Akhir Perubahan ---

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
                Tables\Columns\TextColumn::make('name')
                    ->searchable() // Aktifkan pencarian
                    ->sortable(), // Aktifkan pengurutan
                Tables\Columns\TextColumn::make('phone')
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true), // Sembunyikan default, bisa ditampilkan
                Tables\Columns\IconColumn::make('is_active')
                    ->boolean() // Tampilkan ikon check/x
                    ->sortable()
                    ->label('Active'),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true), // Sembunyikan default
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                // Filter berdasarkan status aktif/tidak aktif
                Tables\Filters\TernaryFilter::make('is_active')
                    ->label('Active Status')
                    ->trueLabel('Only Active Locations')
                    ->falseLabel('Only Inactive Locations')
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(), // Tambahkan aksi hapus
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->defaultSort('name', 'asc'); // Urutkan berdasarkan nama secara default
    }

    public static function getRelations(): array
    {
        return [
            // Definisikan relasi jika ada
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListLocations::route('/'),
            'create' => Pages\CreateLocation::route('/create'),
            'edit' => Pages\EditLocation::route('/{record}/edit'),
        ];
    }
}
