<?php

namespace App\Filament\Resources\Kategoris\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class KategoriForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                // Kode Kategori
                TextInput::make('kategori_kode')
                    ->required()
                    ->maxLength(10),

                // Nama Kategori
                TextInput::make('kategori_nama')
                    ->required()
                    ->maxLength(100),
            ]);
    }
}
