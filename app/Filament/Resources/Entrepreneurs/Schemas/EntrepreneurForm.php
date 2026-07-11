<?php

namespace App\Filament\Resources\Entrepreneurs\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class EntrepreneurForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),
                TextInput::make('campus')
                    ->required(),
                TextInput::make('business_name')
                    ->required(),
                TextInput::make('business_sector')
                    ->required(),
                TextInput::make('phone')
                    ->tel()
                    ->required(),
                FileUpload::make('image')
                    ->image()
                    ->directory('entrepreneurs'),
                Select::make('status')
                    ->options(['pending' => 'Pending', 'active' => 'Active', 'rejected' => 'Rejected'])
                    ->default('pending')
                    ->required(),
            ]);
    }
}
