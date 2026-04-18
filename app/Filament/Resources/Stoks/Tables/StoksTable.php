<?php

namespace App\Filament\Resources\Stoks\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class StoksTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('supplier.supplier_nama') // Menampilkan Nama Supplier
                    ->label('Supplier'),
            
                TextColumn::make('barang.barang_nama')   // Menampilkan Nama Barang (bukan ID)
                    ->label('Nama Barang'),
            
                TextColumn::make('user.nama')           // Menampilkan Nama User
                    ->label('Petugas'),
            
                TextColumn::make('stok_tanggal')
                    ->dateTime()
                    ->sortable(),
            
                TextColumn::make('stok_jumlah')
                    ->label('Jumlah'),
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
