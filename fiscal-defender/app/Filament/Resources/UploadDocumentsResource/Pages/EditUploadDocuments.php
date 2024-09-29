<?php

namespace App\Filament\Resources\UploadDocumentsResource\Pages;

use App\Filament\Resources\UploadDocumentsResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditUploadDocuments extends EditRecord
{
    protected static string $resource = UploadDocumentsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
