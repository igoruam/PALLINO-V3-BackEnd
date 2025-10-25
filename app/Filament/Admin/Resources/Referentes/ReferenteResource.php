<?php

namespace App\Filament\Admin\Resources\Referentes;

use App\Filament\Admin\Resources\Referentes\Pages\CreateReferente;
use App\Filament\Admin\Resources\Referentes\Pages\EditReferente;
use App\Filament\Admin\Resources\Referentes\Pages\ListReferentes;
use App\Filament\Admin\Resources\Referentes\Schemas\ReferenteForm;
use App\Filament\Admin\Resources\Referentes\Tables\ReferentesTable;
use App\Models\Referente;
use BackedEnum;
use Filament\Resources\Resource;
use UnitEnum;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class ReferenteResource extends Resource
{
    protected static ?string $model = Referente::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static string | UnitEnum | null $navigationGroup = 'Fornitori';

    protected static ?string $recordTitleAttribute = 'nome';

    public static function form(Schema $schema): Schema
    {
        return ReferenteForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ReferentesTable::configure($table);
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
            'index' => ListReferentes::route('/'),
            'create' => CreateReferente::route('/create'),
            'edit' => EditReferente::route('/{record}/edit'),
        ];
    }
}
