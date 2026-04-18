<?php

namespace App\Filament\Resources\Barangs\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class BarangForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('kategori_id')
                    ->relationship('kategori', 'kategori_nama')
                    ->required()
                    ->searchable(),

                // Kode Barang
                TextInput::make('barang_kode')
                    ->required()
                    ->maxLength(10),

                // Nama Barang
                TextInput::make('barang_nama')
                    ->required()
                    ->maxLength(100),

                // Harga Beli
                TextInput::make('harga_beli')
                    ->numeric()
                    ->required()
                    ->prefix('Rp'),

                // Harga Jual
                TextInput::make('harga_jual')
                    ->numeric()
                    ->required()
                    ->prefix('Rp'),
            ]);
    }
}
