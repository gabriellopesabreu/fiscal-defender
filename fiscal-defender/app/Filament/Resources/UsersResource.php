<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UsersResource\Pages;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class UsersResource extends Resource
{
    protected static ?string $model = User::class;

    protected static ?string $navigationIcon = 'heroicon-o-users';

    protected static ?string $navigationLabel = 'Usuários';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                ->required()
                ->label('Nome'),
                Forms\Components\TextInput::make('email')
                ->required()
                ->label('E-mail'),
                Forms\Components\TextInput::make('phone')
                ->required()
                ->label('Telefone'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                ->label('Nome'),
                Tables\Columns\TextColumn::make('email')
                ->label('E-mail'),
                Tables\Columns\TextColumn::make('phone')
                ->label('Telefone'),
                Tables\Columns\TextColumn::make('user')
                ->label('Usuário'),
                Tables\Columns\IconColumn::make('status')
                ->label('Status')
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
            'index' => Pages\ListUsers::route('/'),
            'create' => Pages\CreateUsers::route('/create'),
            'edit' => Pages\EditUsers::route('/{record}/edit'),
        ];
    }
}
