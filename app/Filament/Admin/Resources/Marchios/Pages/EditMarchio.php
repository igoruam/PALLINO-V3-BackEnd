<?php

namespace App\Filament\Admin\Resources\Marchios\Pages;

use App\Filament\Admin\Resources\Marchios\MarchioResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditMarchio extends EditRecord
{
    protected static string $resource = MarchioResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
