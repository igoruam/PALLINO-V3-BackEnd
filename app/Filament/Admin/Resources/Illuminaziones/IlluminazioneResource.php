<?php

namespace App\Filament\Admin\Resources\Illuminaziones;

use App\Filament\Admin\Resources\Illuminaziones\Pages\CreateIlluminazione;
use App\Filament\Admin\Resources\Illuminaziones\Pages\EditIlluminazione;
use App\Filament\Admin\Resources\Illuminaziones\Pages\ListIlluminaziones;
use App\Filament\Admin\Resources\Illuminaziones\Schemas\IlluminazioneForm;
use App\Filament\Admin\Resources\Illuminaziones\Tables\IlluminazionesTable;
use App\Models\Illuminazione;
use BackedEnum;
use Filament\Resources\Resource;
use UnitEnum;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class IlluminazioneResource extends Resource
{
    protected static ?string $model = Illuminazione::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static string | UnitEnum | null $navigationGroup = 'Inventario';

    protected static ?string $recordTitleAttribute = 'prodotto';

    public static function form(Schema $schema): Schema
    {
        return IlluminazioneForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return IlluminazionesTable::configure($table);
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
            'index' => ListIlluminaziones::route('/'),
            'create' => CreateIlluminazione::route('/create'),
            'edit' => EditIlluminazione::route('/{record}/edit'),
        ];
    }
}
