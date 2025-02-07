<?php

namespace App\Filament\Clusters\Product\Resources;

use App\Filament\Clusters\Product;
use App\Filament\Clusters\Product\Resources\TagsResource\Pages;
use App\Filament\Clusters\Product\Resources\TagsResource\RelationManagers;
use App\Models\Tags;
use App\Models\Categories;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Set;
use Illuminate\Support\Str;
use Filament\Tables\Actions\ActionGroup;
use Filament\Notifications\Notification;

class TagsResource extends Resource
{
    protected static ?string $model = Tags::class;

    protected static ?string $navigationIcon = 'heroicon-m-bars-3-center-left';

    protected static ?string $navigationLabel = 'Sub-Category';

    protected static ?string $modelLabel = 'Sub-Category';

    protected static ?int $navigationSort = 4;

    protected static ?string $cluster = Product::class;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make()
                ->schema([
                Forms\Components\TextInput::make('name')
                    ->label('Product Sub-Category')
                    ->required()
                    ->maxLength(255)
                    ->autocapitalize()
                    ->live(onBlur: true)
                    ->afterStateUpdated(fn (Set $set, ?string $state) => $set('slug', Str::slug($state))),
                Forms\Components\Hidden::make('slug')
                    ->unique(ignoreRecord: true),
                Forms\Components\Select::make('category_id')
                    ->label('Product Category')
                    ->helperText('This is the Main Category of your Sub-Category')
                    ->required()
                    ->options(Categories::all()->pluck('name', 'id'))
                    ->searchable(),
                ])
                ->columnSpan(1)                
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable()
                    ->sortable(),
                /*Tables\Columns\TextColumn::make('slug')
                    ->searchable(),*/
                Tables\Columns\TextColumn::make('category.name')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                ActionGroup::make([
                    Tables\Actions\EditAction::make(),
                    Tables\Actions\DeleteAction::make()
                        ->successNotification(
                            Notification::make()
                                ->success()
                                ->color('success')
                                ->title('Sub-category deleted')
                                ->icon('heroicon-o-check-circle')
                                ->body('The sub-category has been deleted successfully.'),
                    ),
                ])
                ->icon('heroicon-m-ellipsis-vertical'),
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
            'index' => Pages\ListTags::route('/'),
            'create' => Pages\CreateTags::route('/create'),
            'edit' => Pages\EditTags::route('/{record}/edit'),
        ];
    }
}
