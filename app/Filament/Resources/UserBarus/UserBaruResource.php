<?php

namespace App\Filament\Resources\UserBarus;

use App\Filament\Resources\UserBarus\Pages\CreateUserBaru;
use App\Filament\Resources\UserBarus\Pages\EditUserBaru;
use App\Filament\Resources\UserBarus\Pages\ListUserBarus;
use App\Filament\Resources\UserBarus\Schemas\UserBaruForm;
use App\Filament\Resources\UserBarus\Tables\UserBarusTable;
use App\Models\UserBaru;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class UserBaruResource extends Resource
{
    protected static ?string $model = UserBaru::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'nama';

    public static function form(Schema $schema): Schema
    {
        return UserBaruForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return UserBarusTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListUserBarus::route('/'),
            'create' => CreateUserBaru::route('/create'),
            'edit' => EditUserBaru::route('/{record}/edit'),
        ];
    }
}
