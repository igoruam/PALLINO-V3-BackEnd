<?php

namespace App\Filament\Admin\Resources\Marchios;

use App\Filament\Admin\Resources\Marchios\Pages\CreateMarchio;
use App\Filament\Admin\Resources\Marchios\Pages\EditMarchio;
use App\Filament\Admin\Resources\Marchios\Pages\ListMarchios;
use App\Filament\Admin\Resources\Marchios\Schemas\MarchioForm;
use App\Filament\Admin\Resources\Marchios\Tables\MarchiosTable;
use App\Models\Marchio;
use BackedEnum;
use Filament\Resources\Resource;
use UnitEnum;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class MarchioResource extends Resource
{
    protected static ?string $model = Marchio::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static string | UnitEnum | null $navigationGroup = 'Fornitori';

    protected static ?string $recordTitleAttribute = 'Marchi';

    public static function form(Schema $schema): Schema
    {
        return MarchioForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return MarchiosTable::configure($table);
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
            'index' => ListMarchios::route('/'),
            'create' => CreateMarchio::route('/create'),
            'edit' => EditMarchio::route('/{record}/edit'),
        ];
    }
}
