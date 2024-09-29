<?php

namespace App\Filament\Resources\ElectronicFiscalNotesResource\Pages;

use App\Filament\Resources\ElectronicFiscalNotesResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditElectronicFiscalNotes extends EditRecord
{
    protected static string $resource = ElectronicFiscalNotesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
