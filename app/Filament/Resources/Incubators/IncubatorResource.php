<?php

namespace App\Filament\Resources\Incubators;

use App\Filament\Resources\Incubators\Pages\CreateIncubator;
use App\Filament\Resources\Incubators\Pages\EditIncubator;
use App\Filament\Resources\Incubators\Pages\ListIncubators;
use App\Filament\Resources\Incubators\Schemas\IncubatorForm;
use App\Filament\Resources\Incubators\Tables\IncubatorsTable;
use App\Models\Incubator;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class IncubatorResource extends Resource
{
    protected static ?string $model = Incubator::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Schema $schema): Schema
    {
        return IncubatorForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return IncubatorsTable::configure($table);
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
            'index' => ListIncubators::route('/'),
            'create' => CreateIncubator::route('/create'),
            'edit' => EditIncubator::route('/{record}/edit'),
        ];
    }
}
