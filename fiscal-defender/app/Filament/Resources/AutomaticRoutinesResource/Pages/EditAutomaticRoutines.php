<?php

namespace App\Filament\Resources\AutomaticRoutinesResource\Pages;

use App\Filament\Resources\AutomaticRoutinesResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAutomaticRoutines extends EditRecord
{
    protected static string $resource = AutomaticRoutinesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
