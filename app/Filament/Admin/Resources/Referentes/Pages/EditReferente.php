<?php

namespace App\Filament\Admin\Resources\Referentes\Pages;

use App\Filament\Admin\Resources\Referentes\ReferenteResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditReferente extends EditRecord
{
    protected static string $resource = ReferenteResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
