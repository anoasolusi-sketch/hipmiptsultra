<?php

namespace App\Filament\Resources\Entrepreneurs;

use App\Filament\Resources\Entrepreneurs\Pages\CreateEntrepreneur;
use App\Filament\Resources\Entrepreneurs\Pages\EditEntrepreneur;
use App\Filament\Resources\Entrepreneurs\Pages\ListEntrepreneurs;
use App\Filament\Resources\Entrepreneurs\Schemas\EntrepreneurForm;
use App\Filament\Resources\Entrepreneurs\Tables\EntrepreneursTable;
use App\Models\Entrepreneur;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class EntrepreneurResource extends Resource
{
    protected static ?string $model = Entrepreneur::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return EntrepreneurForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return EntrepreneursTable::configure($table);
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
            'index' => ListEntrepreneurs::route('/'),
            'create' => CreateEntrepreneur::route('/create'),
            'edit' => EditEntrepreneur::route('/{record}/edit'),
        ];
    }
}
