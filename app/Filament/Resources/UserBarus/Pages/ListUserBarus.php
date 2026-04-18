<?php

namespace App\Filament\Resources\UserBarus\Pages;

use App\Filament\Resources\UserBarus\UserBaruResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListUserBarus extends ListRecords
{
    protected static string $resource = UserBaruResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
