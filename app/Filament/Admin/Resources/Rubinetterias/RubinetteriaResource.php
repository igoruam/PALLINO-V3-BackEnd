<?php

namespace App\Filament\Admin\Resources\Rubinetterias;

use App\Filament\Admin\Resources\Rubinetterias\Pages\CreateRubinetteria;
use App\Filament\Admin\Resources\Rubinetterias\Pages\EditRubinetteria;
use App\Filament\Admin\Resources\Rubinetterias\Pages\ListRubinetterias;
use App\Filament\Admin\Resources\Rubinetterias\Schemas\RubinetteriaForm;
use App\Filament\Admin\Resources\Rubinetterias\Tables\RubinetteriasTable;
use App\Models\Rubinetteria;
use BackedEnum;
use Filament\Resources\Resource;
use UnitEnum;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class RubinetteriaResource extends Resource
{
    protected static ?string $model = Rubinetteria::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static string | UnitEnum | null $navigationGroup = 'Inventario';

    protected static ?string $recordTitleAttribute = 'prodotto';

    public static function form(Schema $schema): Schema
    {
        return RubinetteriaForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return RubinetteriasTable::configure($table);
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
            'index' => ListRubinetterias::route('/'),
            'create' => CreateRubinetteria::route('/create'),
            'edit' => EditRubinetteria::route('/{record}/edit'),
        ];
    }
}
