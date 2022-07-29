<?php

namespace App\Filament\Resources;

use App\Filament\Resources\InfluencerResource\Pages;
use App\Filament\Resources\InfluencerResource\RelationManagers;
use App\Models\Group;
use App\Models\Influencer;
use Filament\Forms;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Select;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Widgets\StatsOverviewWidget;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Str;

class InfluencerResource extends Resource
{
    protected static ?string $model = Influencer::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    protected function getHeaderWidgets(): array
    {
        return [
            StatsOverviewWidget::class
        ];
    }

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
                            ->unique(Influencer::class, 'slug', fn ($record) => $record),
                        Select::make('group_id')
                            ->label(__("Category d'influenceur"))
                            ->options(Group::all()->pluck('name', 'id'))
                            ->searchable(),
                        Forms\Components\MarkdownEditor::make('about')
                            ->columnSpan([
                                'sm' => 2,
                            ]),
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
                Tables\Columns\BooleanColumn::make('is_visible')
                    ->label('Visibility'),
                Tables\Columns\TextColumn::make('updated_at')
                    ->label('Last Updated')
                    ->date(),
            ])
            ->filters([
                Tables\Filters\TrashedFilter::make(),
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
                Tables\Actions\RestoreBulkAction::make(),
                Tables\Actions\ForceDeleteBulkAction::make(),
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
            'index' => Pages\ListInfluencers::route('/'),
            'create' => Pages\CreateInfluencer::route('/create'),
            'view' => Pages\ViewInfluencer::route('/{record}'),
            'edit' => Pages\EditInfluencer::route('/{record}/edit'),
        ];
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->withoutGlobalScopes([
                SoftDeletingScope::class,
            ]);
    }
}
