<?php

namespace App\Filament\Resources\TransportKnowledgeNotesResource\Pages;

use App\Filament\Resources\TransportKnowledgeNotesResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTransportKnowledgeNotes extends ListRecords
{
    protected static string $resource = TransportKnowledgeNotesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
