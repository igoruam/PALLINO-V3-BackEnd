<?php

namespace App\Filament\Admin\Resources\Stufas\Pages;

use App\Filament\Admin\Resources\Stufas\StufaResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditStufa extends EditRecord
{
    protected static string $resource = StufaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
