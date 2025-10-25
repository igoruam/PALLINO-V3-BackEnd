<?php

namespace App\Filament\Admin\Resources\Sanitarios\Pages;

use App\Filament\Admin\Resources\Sanitarios\SanitarioResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListSanitarios extends ListRecords
{
    protected static string $resource = SanitarioResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
