<?php

namespace App\Filament\Resources\UserBarus\Pages;

use App\Filament\Resources\UserBarus\UserBaruResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditUserBaru extends EditRecord
{
    protected static string $resource = UserBaruResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
