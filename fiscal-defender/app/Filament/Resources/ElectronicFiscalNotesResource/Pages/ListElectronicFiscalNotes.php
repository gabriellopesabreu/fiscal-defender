<?php

namespace App\Filament\Resources\ElectronicFiscalNotesResource\Pages;

use App\Filament\Resources\ElectronicFiscalNotesResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListElectronicFiscalNotes extends ListRecords
{
    protected static string $resource = ElectronicFiscalNotesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
