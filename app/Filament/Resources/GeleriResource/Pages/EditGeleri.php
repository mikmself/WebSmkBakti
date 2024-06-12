<?php

namespace App\Filament\Resources\GeleriResource\Pages;

use App\Filament\Resources\GeleriResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditGeleri extends EditRecord
{
    protected static string $resource = GeleriResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
