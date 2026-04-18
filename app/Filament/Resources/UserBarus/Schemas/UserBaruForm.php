<?php

namespace App\Filament\Resources\UserBarus\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class UserBaruForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('level_id')
                    ->required()
                    ->numeric(),
                TextInput::make('username')
                    ->required(),
                TextInput::make('nama')
                    ->required(),
                TextInput::make('password')
                    ->password()
                    ->required(),
            ]);
    }
}
