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
                Tables\Columns\TextColumn::make('name')
                ->label('Empresa'),
                Tables\Columns\TextColumn::make('cnpj')
                ->label('CNPJ'),
                Tables\Columns\TextColumn::make('document')
                ->label('Documento'),
                Tables\Columns\TextColumn::make('hour')
                ->label('Hora'),

            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make()
                ->requiresConfirmation()
                ->modalHeading('Confirmar exclusão')
                ->modalDescription('Tem certeza que deseja excluir este registro?')
                ->modalSubmitActionLabel('Sim, excluir'),
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
