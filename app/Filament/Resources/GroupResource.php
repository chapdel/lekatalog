<?php

namespace App\Filament\Resources;

use App\Filament\Resources\GroupResource\Pages;
use App\Filament\Resources\GroupResource\RelationManagers;
use App\Models\Group;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Grid;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Str;

class GroupResource extends Resource
{
    protected static ?string $model = Group::class;

    protected static ?string $navigationIcon = 'heroicon-o-archive';
    protected static ?string $navigationGroup = "Data";

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Grid::make([
                    'default' => 1,
                ])
                    ->schema([
                        Forms\Components\TextInput::make('name')
                            ->required()
                            ->reactive()
                            ->afterStateUpdated(fn ($state, callable $set) => $set('slug', Str::slug($state))),
                        Forms\Components\TextInput::make('slug')
                            ->disabled()
                            ->required()
                            ->unique(Group::class, 'slug', fn ($record) => $record),
                        Forms\Components\MarkdownEditor::make('desc')
                            ->columnSpan([
                                'sm' => 2,
                            ]),
                        FileUpload::make('poster')->columnSpan(['sm' => 2]),
                        Forms\Components\Toggle::make('is_visible')
                            ->label('Visible to visitor.')
                            ->default(true),
                    ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('slug')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\BooleanColumn::make('is_visible')
                    ->label('Visibility'),
                Tables\Columns\TextColumn::make('updated_at')
                    ->label('Last Updated')
                    ->date(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageGroups::route('/'),
        ];
    }
}
