<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TransportKnowledgeNotesResource\Pages;
use App\Filament\Resources\TransportKnowledgeNotesResource\RelationManagers;
use App\Models\TransportKnowledgeNote;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TransportKnowledgeNotesResource extends Resource
{
    protected static ?string $model = TransportKnowledgeNote::class;

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
                Tables\Columns\TextColumn::make('')
                ->label('Chave'),
                Tables\Columns\IconColumn::make('')
                ->label('Situação')
                ->boolean(),
                Tables\Columns\TextColumn::make('')
                ->label('Número CTe'),
                Tables\Columns\TextColumn::make('')
                ->label('vTotTrib')
                ->sortable(),
                Tables\Columns\TextColumn::make('')
                ->label('vTPrest')
                ->sortable(),
                Tables\Columns\TextColumn::make('')
                ->label('vRec')
                ->sortable(),
                Tables\Columns\TextColumn::make('')
                ->label('Transportador')
                ->sortable(),
                Tables\Columns\TextColumn::make('')
                ->label('Transportador CNPJ'),
                Tables\Columns\TextColumn::make('')
                ->label('Transportador IE'),
                Tables\Columns\TextColumn::make('')
                ->label('Remetente'),
                Tables\Columns\TextColumn::make('')
                ->label('Remetente CNPJ'),
                Tables\Columns\TextColumn::make('')
                ->label('Remetente IE'),
                Tables\Columns\TextColumn::make('')
                ->label('Destinatario'),
                Tables\Columns\TextColumn::make('')
                ->label('Destinatario CNPJ'),
                Tables\Columns\TextColumn::make('')
                ->label('Destinatario IE'),
                Tables\Columns\TextColumn::make('')
                ->label('Emitente'),
                Tables\Columns\TextColumn::make('')
                ->label('Emitente CNPJ'),
                Tables\Columns\TextColumn::make('')
                ->label('Emitente IE'),
                Tables\Columns\TextColumn::make('')
                ->label('Município de envio do CT-e'),
                Tables\Columns\TextColumn::make('')
                ->label('UF de envio do CT-e'),
                Tables\Columns\TextColumn::make('')
                ->label('Município do início da prestação'),
                Tables\Columns\TextColumn::make('')
                ->label('UF do início da prestação'),
                Tables\Columns\TextColumn::make('')
                ->label('Município do término da prestação'),
                Tables\Columns\TextColumn::make('')
                ->label('UF do término da prestação'),
                Tables\Columns\TextColumn::make('')
                ->label('CFOP'),
                Tables\Columns\TextColumn::make('')
                ->label('Natureza da Operação'),
                Tables\Columns\TextColumn::make('')
                ->label('Modelo'),
                Tables\Columns\TextColumn::make('')
                ->label('Série'),
                Tables\Columns\TextColumn::make('')
                ->label('Observação'),
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
