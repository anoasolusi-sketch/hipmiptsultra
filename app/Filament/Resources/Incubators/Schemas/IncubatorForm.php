<?php

namespace App\Filament\Resources\Incubators\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\RichEditor;
use Filament\Schemas\Schema;

class IncubatorForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),
                TextInput::make('category'),
                RichEditor::make('description')
                    ->columnSpanFull(),
                TextInput::make('logo'),
                TextInput::make('status')
                    ->required()
                    ->default('active'),
            ]);
    }
}
