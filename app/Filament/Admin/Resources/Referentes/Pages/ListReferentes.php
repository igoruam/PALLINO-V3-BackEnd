<?php

namespace App\Filament\Admin\Resources\Referentes\Pages;

use App\Filament\Admin\Resources\Referentes\ReferenteResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListReferentes extends ListRecords
{
    protected static string $resource = ReferenteResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
