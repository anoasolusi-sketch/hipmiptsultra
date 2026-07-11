<?php

namespace App\Filament\Resources\Entrepreneurs\Pages;

use App\Filament\Resources\Entrepreneurs\EntrepreneurResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditEntrepreneur extends EditRecord
{
    protected static string $resource = EntrepreneurResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
