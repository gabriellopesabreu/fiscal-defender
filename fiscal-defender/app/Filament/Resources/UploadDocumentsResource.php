<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UploadDocumentsResource\Pages;
use App\Models\UploadDocument;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class UploadDocumentsResource extends Resource
{
    protected static ?string $model = UploadDocument::class;

    protected static ?string $navigationIcon = 'heroicon-o-cloud-arrow-up';

    protected static ?string $navigationLabel = 'Upload de Notas';

    public static function getLabel(): string
    {
        return 'Upload de Nota';
    }

    public static function getPluralLabel(): string
    {
        return 'Upload de Notas';
    }

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
                Tables\Columns\TextColumn::make('id')
                ->label('#'),
                Tables\Columns\TextColumn::make('file')
                ->label('Arquivo'),
                Tables\Columns\TextColumn::make('size')
                ->label('Tamanho'),
                Tables\Columns\TextColumn::make('speed')
                ->label('Velocidade'),
                Tables\Columns\IconColumn::make('status')
                ->label('Status')
                ->boolean(),
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
                ->modalSubmitActionLabel('Sim, excluir')
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
            'index' => Pages\ListUploadDocuments::route('/'),
            'create' => Pages\CreateUploadDocuments::route('/create'),
            'edit' => Pages\EditUploadDocuments::route('/{record}/edit'),
        ];
    }
}
