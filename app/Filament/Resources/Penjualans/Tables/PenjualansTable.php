<?php

namespace App\Filament\Resources\Penjualans\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class PenjualansTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('penjualan_kode')
                ->label('Kode Transaksi')
                ->searchable(),
            TextColumn::make('user.nama')
                ->label('Kasir'),
            TextColumn::make('pembeli')
                ->searchable(),
            TextColumn::make('penjualan_tanggal')
                ->dateTime('d M Y H:i')
                ->sortable(),
            // Menampilkan jumlah item (menghitung relasi details)
            TextColumn::make('details_count')
                ->counts('details')
                ->label('Jumlah Item'),
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
