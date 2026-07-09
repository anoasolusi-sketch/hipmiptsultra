<?php

namespace App\Filament\Resources\Incubators\Pages;

use App\Filament\Resources\Incubators\IncubatorResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListIncubators extends ListRecords
{
    protected static string $resource = IncubatorResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
