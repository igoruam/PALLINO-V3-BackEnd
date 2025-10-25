<?php

namespace App\Filament\Admin\Resources\PavimentoRivestimentoBattiscopas;

use App\Filament\Admin\Resources\PavimentoRivestimentoBattiscopas\Pages\CreatePavimentoRivestimentoBattiscopa;
use App\Filament\Admin\Resources\PavimentoRivestimentoBattiscopas\Pages\EditPavimentoRivestimentoBattiscopa;
use App\Filament\Admin\Resources\PavimentoRivestimentoBattiscopas\Pages\ListPavimentoRivestimentoBattiscopas;
use App\Filament\Admin\Resources\PavimentoRivestimentoBattiscopas\Schemas\PavimentoRivestimentoBattiscopaForm;
use App\Filament\Admin\Resources\PavimentoRivestimentoBattiscopas\Tables\PavimentoRivestimentoBattiscopasTable;
use App\Models\PavimentoRivestimentoBattiscopa;
use BackedEnum;
use Filament\Resources\Resource;
use UnitEnum;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class PavimentoRivestimentoBattiscopaResource extends Resource
{
    protected static ?string $model = PavimentoRivestimentoBattiscopa::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static string | UnitEnum | null $navigationGroup = 'Inventario';

    protected static ?string $recordTitleAttribute = 'prodotto';

    public static function form(Schema $schema): Schema
    {
        return PavimentoRivestimentoBattiscopaForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return PavimentoRivestimentoBattiscopasTable::configure($table);
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
            'index' => ListPavimentoRivestimentoBattiscopas::route('/'),
            'create' => CreatePavimentoRivestimentoBattiscopa::route('/create'),
            'edit' => EditPavimentoRivestimentoBattiscopa::route('/{record}/edit'),
        ];
    }
}
