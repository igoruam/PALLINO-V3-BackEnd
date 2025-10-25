<?php

namespace App\Filament\Admin\Resources\BoxDoccias\Pages;

use App\Filament\Admin\Resources\BoxDoccias\BoxDocciaResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListBoxDoccias extends ListRecords
{
    protected static string $resource = BoxDocciaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
