<?php

namespace App\Filament\Resources\Levels\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class LevelForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                // Kode Level (Misal: ADM, STF)
                TextInput::make('level_kode')
                    ->required()
                    ->maxLength(10),

                // Nama Level (Misal: Administrator, Staff)
                TextInput::make('level_nama')
                    ->required()
                    ->maxLength(100),
            ]);
    }
}
