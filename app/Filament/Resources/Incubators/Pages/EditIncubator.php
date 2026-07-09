<?php

namespace App\Filament\Resources\Incubators\Pages;

use App\Filament\Resources\Incubators\IncubatorResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditIncubator extends EditRecord
{
    protected static string $resource = IncubatorResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
