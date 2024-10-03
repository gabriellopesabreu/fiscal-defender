<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ElectronicFiscalNotesResource\Pages;
use App\Filament\Resources\ElectronicFiscalNotesResource\RelationManagers;
use App\Models\ElectronicFiscalNote;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ElectronicFiscalNotesResource extends Resource
{
    protected static ?string $model = ElectronicFiscalNote::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Documentos';
    
    protected static ?int $navigationSort = 1;

    protected static ?string $navigationLabel = 'NF-e';

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
                Tables\Columns\TextColumn::make('')
                ->label('Situação'),
                Tables\Columns\IconColumn::make('')
                ->label('XML')
                ->boolean(),
                Tables\Columns\TextColumn::make('')
                ->label('Manifesto'),
                Tables\Columns\TextColumn::make('')
                ->label('Data Emissão')
                ->sortable(),
                Tables\Columns\TextColumn::make('')
                ->label('Número NF')
                ->sortable(),
                Tables\Columns\TextColumn::make('')
                ->label('Vlr NF')
                ->sortable(),
                Tables\Columns\TextColumn::make('')
                ->label('Emitente')
                ->sortable(),
                Tables\Columns\TextColumn::make('')
                ->label('Natureza da Operação'),
                Tables\Columns\TextColumn::make('')
                ->label('Série'),
                Tables\Columns\TextColumn::make('')
                ->label('Chave'),
                Tables\Columns\TextColumn::make('')
                ->label('Emitente CNPJ'),
                Tables\Columns\TextColumn::make('')
                ->label('Emitente IE'),
                Tables\Columns\TextColumn::make('')
                ->label('Transportador CNPJ'),
                Tables\Columns\TextColumn::make('')
                ->label('Transportador'),
                Tables\Columns\TextColumn::make('')
                ->label('Transportador IE'),
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
            'index' => Pages\ListElectronicFiscalNotes::route('/'),
            'create' => Pages\CreateElectronicFiscalNotes::route('/create'),
            'edit' => Pages\EditElectronicFiscalNotes::route('/{record}/edit'),
        ];
    }
}
