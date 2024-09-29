<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TransportedFiscalNotesResource\Pages;
use App\Filament\Resources\TransportedFiscalNotesResource\RelationManagers;
use App\Models\TransportedFiscalNotes;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TransportedFiscalNotesResource extends Resource
{
    protected static ?string $model = TransportedFiscalNotes::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Documentos';
    
    protected static ?int $navigationSort = 3;

    protected static ?string $navigationLabel = 'NFs Transportadas';

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
            'index' => Pages\ListTransportedFiscalNotes::route('/'),
            'create' => Pages\CreateTransportedFiscalNotes::route('/create'),
            'edit' => Pages\EditTransportedFiscalNotes::route('/{record}/edit'),
        ];
    }
}
