<?php

namespace App\Filament\Resources\Settings\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class SettingForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('address')->label('Alamat')->columnSpanFull(),
                TextInput::make('email')->email()->label('Email'),
                TextInput::make('phone')->label('Telepon'),
                TextInput::make('instagram')->label('Instagram URL')->url(),
                TextInput::make('facebook')->label('Facebook URL')->url(),
                TextInput::make('youtube')->label('YouTube URL')->url(),
            ]);
    }
}
