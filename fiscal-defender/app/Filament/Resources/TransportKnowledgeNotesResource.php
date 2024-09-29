<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TransportKnowledgeNotesResource\Pages;
use App\Filament\Resources\TransportKnowledgeNotesResource\RelationManagers;
use App\Models\TransportKnowledgeNotes;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TransportKnowledgeNotesResource extends Resource
{
    protected static ?string $model = TransportKnowledgeNotes::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Documentos';
    
    protected static ?int $navigationSort = 2;

    protected static ?string $navigationLabel = 'CT-e';

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
            'index' => Pages\ListTransportKnowledgeNotes::route('/'),
            'create' => Pages\CreateTransportKnowledgeNotes::route('/create'),
            'edit' => Pages\EditTransportKnowledgeNotes::route('/{record}/edit'),
        ];
    }
}
