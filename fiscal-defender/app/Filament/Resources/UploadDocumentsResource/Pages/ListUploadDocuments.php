<?php

namespace App\Filament\Resources\UploadDocumentsResource\Pages;

use App\Filament\Resources\UploadDocumentsResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListUploadDocuments extends ListRecords
{
    protected static string $resource = UploadDocumentsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
