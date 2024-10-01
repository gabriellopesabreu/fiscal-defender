<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AutomaticRoutinesResource\Pages;
use App\Filament\Resources\AutomaticRoutinesResource\RelationManagers;
use App\Models\AutomaticRoutine;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AutomaticRoutinesResource extends Resource
{
    protected static ?string $model = AutomaticRoutine::class;

    protected static ?string $navigationIcon = 'heroicon-o-bolt';

    protected static ?string $navigationLabel = 'Rotinas Automáticas';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListAutomaticRoutines::route('/'),
            'create' => Pages\CreateAutomaticRoutines::route('/create'),
            'edit' => Pages\EditAutomaticRoutines::route('/{record}/edit'),
        ];
    }
}
