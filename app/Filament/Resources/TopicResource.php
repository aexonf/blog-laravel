<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TopicResource\Pages;
use App\Filament\Resources\TopicResource\Pages\CreateTopic;
use App\Filament\Resources\TopicResource\Pages\EditTopic;
use App\Filament\Resources\TopicResource\Pages\ListTopics;
use App\Filament\Resources\TopicResource\RelationManagers;
use App\Models\Topic;
use App\Models\Topics;
use Filament\Actions\DeleteAction;
use Filament\Actions\EditAction;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Actions\BulkActionGroup;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Str;


class TopicsResource extends Resource
{
    protected static ?string $model = Topics::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->live()
                    ->debounce(500)
                    ->afterStateUpdated(fn (Forms\Set $set, string $state) => $set('slug', Str::slug($state)))
                    ->required()
                    ->maxLength(255)->unique(ignoreRecord: true) ->validationMessages([ 'unique' => 'Topic ini sudah tersedia.', ]),
                Forms\Components\TextInput::make('slug')
                    ->readOnly()
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->label('Nama')
                    ->searchable(),
                Tables\Columns\TextColumn::make('slug')
                    ->searchable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListTopics::route('/'),
            'create' => Pages\CreateTopic::route('/create'),
            'edit' => Pages\EditTopic::route('/{record}/edit'),
        ];
    }
}
