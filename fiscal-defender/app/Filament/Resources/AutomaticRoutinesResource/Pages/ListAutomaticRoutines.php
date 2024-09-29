<?php

namespace App\Filament\Resources\AutomaticRoutinesResource\Pages;

use App\Filament\Resources\AutomaticRoutinesResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAutomaticRoutines extends ListRecords
{
    protected static string $resource = AutomaticRoutinesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
