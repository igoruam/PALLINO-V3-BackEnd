<?php

namespace App\Filament\Admin\Resources\BoxDoccias\Pages;

use App\Filament\Admin\Resources\BoxDoccias\BoxDocciaResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditBoxDoccia extends EditRecord
{
    protected static string $resource = BoxDocciaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
