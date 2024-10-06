<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CompaniesResource\Pages;
use App\Filament\Resources\CompaniesResource\RelationManagers;
use App\Models\Company;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CompaniesResource extends Resource
{
    protected static ?string $model = Company::class;

    protected static ?string $navigationIcon = 'heroicon-o-briefcase';

    protected static ?string $navigationLabel = 'Empresas';

    public static function getLabel(): string
    {
        return 'Empresa';
    }

    // Define o nome plural do recurso
    public static function getPluralLabel(): string
    {
        return 'Empresas';
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('cnpj')
                ->required()
                ->label('CNPJ'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('cnpj')
                ->label('CNPJ'),
                Tables\Columns\TextColumn::make('name')
                ->label('Empresa'),
                Tables\Columns\TextColumn::make('uf')
                ->label('UF'),
                Tables\Columns\IconColumn::make('status')
                ->label('Status')
                ->boolean(),
                Tables\Columns\IconColumn::make('certificate')
                ->label('Certificado')
                ->boolean(),
                Tables\Columns\IconColumn::make('main')
                ->label('Principal')
                ->boolean(),
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
            'index' => Pages\ListCompanies::route('/'),
            'create' => Pages\CreateCompanies::route('/create'),
            'edit' => Pages\EditCompanies::route('/{record}/edit'),
        ];
    }
}
