<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CertificatesResource\Pages;
use App\Filament\Resources\CertificatesResource\RelationManagers;
use App\Models\Certificate;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Actions\Action;

class CertificatesResource extends Resource
{
    protected static ?string $model = Certificate::class;

    protected static ?string $navigationIcon = 'heroicon-o-key';

    protected static ?string $navigationLabel = 'Certificados';

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
                Tables\Columns\TextColumn::make('cnpj_id')
                ->label('Raiz do CNPJ'),
                Tables\Columns\TextColumn::make('name')
                ->label('Razão Social'),
                Tables\Columns\TextColumn::make('uf')
                ->label('UF'),
                Tables\Columns\TextColumn::make('due_date')
                ->label('Vencimento')
                ->dateTime('d-m-Y'),
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
                Action::make('download')
                ->label('Baixar')
                ->icon('heroicon-o-arrow-down-on-square') 
                ->color('success')

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
            'index' => Pages\ListCertificates::route('/'),
            'create' => Pages\CreateCertificates::route('/create'),
            'edit' => Pages\EditCertificates::route('/{record}/edit'),
        ];
    }
}
