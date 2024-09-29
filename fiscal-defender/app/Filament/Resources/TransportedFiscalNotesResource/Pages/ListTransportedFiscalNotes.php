<?php

namespace App\Filament\Resources\TransportedFiscalNotesResource\Pages;

use App\Filament\Resources\TransportedFiscalNotesResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTransportedFiscalNotes extends ListRecords
{
    protected static string $resource = TransportedFiscalNotesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
