<?php

namespace App\Filament\Resources\Barangs\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class BarangsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('barang_kode')
                ->sortable()
                ->searchable(),
            TextColumn::make('barang_nama')
                ->sortable()
                ->searchable(),
            TextColumn::make('kategori.kategori_nama') // Menampilkan nama kategori dari relasi
                ->sortable(),
            TextColumn::make('harga_beli')
                ->money('IDR')
                ->sortable(),
            TextColumn::make('harga_jual')
                ->money('IDR')
                ->sortable(),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
