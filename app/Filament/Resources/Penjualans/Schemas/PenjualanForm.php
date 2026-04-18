<?php

namespace App\Filament\Resources\Penjualans\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select; 
use Filament\Forms\Components\Repeater;
use Filament\Schemas\Schema;

class PenjualanForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('user_id')
                    ->relationship('user', 'nama') 
                    ->required(),
                TextInput::make('pembeli')
                    ->required(),
                TextInput::make('penjualan_kode')
                    ->required(),
                DateTimePicker::make('penjualan_tanggal')
                    ->required(),
                
                \Filament\Forms\Components\Repeater::make('details')
                ->relationship('details') 
                ->schema([
                    \Filament\Forms\Components\Select::make('barang_id')
                        ->relationship('barang', 'barang_nama')
                        ->required()
                        ->searchable(),
                    \Filament\Forms\Components\TextInput::make('harga')
                        ->numeric()
                        ->required()
                        ->prefix('Rp'),
                    \Filament\Forms\Components\TextInput::make('jumlah')
                        ->numeric()
                        ->required()
                        ->default(1),
                ])
                ->columns(3)
                ->columnSpanFull(), 
            ]);
    }
}
