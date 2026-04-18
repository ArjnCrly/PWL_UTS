<?php

namespace App\Filament\Resources\Suppliers\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class SupplierForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                // Kode Supplier
                TextInput::make('supplier_kode')
                    ->required()
                    ->maxLength(10),

                // Nama Supplier
                TextInput::make('supplier_nama')
                    ->required()
                    ->maxLength(100),

                // Alamat Supplier
                Textarea::make('supplier_alamat')
                    ->required()
                    ->columnSpanFull(),
            ]);
    }
}
