<?php

namespace App\Filament\Clusters\Product\Resources;

use App\Filament\Clusters\Product;
use App\Filament\Clusters\Product\Resources\ProductsResource\Pages;
use App\Filament\Clusters\Product\Resources\ProductsResource\RelationManagers;
use App\Models\Products;
use App\Models\Categories;
use App\Models\Tags;
use App\Models\Brands;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Set;
use Filament\Forms\Get;
use Illuminate\Support\Str;
use Illuminate\Support\Collection;
use Filament\Tables\Actions\ActionGroup;
use Filament\Notifications\Notification;


class ProductsResource extends Resource
{
    protected static ?string $model = Products::class;

    protected static ?string $navigationIcon = 'heroicon-m-shopping-bag';

    protected static ?string $modelLabel = 'Products';

    protected static ?int $navigationSort = 1;

    protected static ?string $cluster = Product::class;

    public static function form(Form $form): Form
    {
        return $form        
            ->schema([
                Forms\Components\Section::make()
                    ->schema([                 
                    Forms\Components\TextInput::make('name')
                        ->required()
                        ->maxLength(255)
                        ->autocapitalize()
                        ->live(onBlur: true)
                        ->afterStateUpdated(fn (Set $set, ?string $state) => $set('slug', Str::slug($state))),
                    Forms\Components\Hidden::make('slug')
                        ->unique(ignoreRecord: true),

                    Forms\Components\Grid::make()
                    ->schema([
                    Forms\Components\Select::make('brand_id')
                        ->label('Brand')
                        ->required()
                        ->options(Brands::all()->pluck('name', 'id'))
                        ->searchable(),
                    Forms\Components\TextInput::make('model')
                        ->label('Product Model')
                        ->required()
                        ->autocapitalize()
                        ->maxLength(255),
                    ])
                    ->columns(2),
                    
                    Forms\Components\Grid::make()
                    ->schema([
                    Forms\Components\Select::make('category_id')
                        ->label('Product Category')
                        ->required()
                        ->preload()
                        ->live()
                        ->options(Categories::all()->pluck('name', 'id'))
                        ->afterStateUpdated(fn (Set $set) => $set('tag_id', null)) 
                        ->searchable(),
                    Forms\Components\Select::make('tag_id')
                        ->label('Product Sub-Category')
                        ->required()
                        ->preload()
                        ->live()
                        ->options(fn(Get $get): Collection => Tags::query()
                            ->where('category_id', $get('category_id'))
                            ->pluck('name', 'id'))
                        ->searchable(),
                        ])
                        ->columns(2),
                    ])
                ->columnSpan(1),

                Forms\Components\Section::make()
                    ->schema([
                    Forms\Components\FileUpload::make('catalog')
                        ->label('Product Catalog')
                        ->helperText('Only upload Product Catalog PDF file.')
                        ->acceptedFileTypes(['application/pdf'])
                        ->required()
                        ->disk('public')
                        ->directory('product_catalog')
                        ->maxParallelUploads(1),
                    Forms\Components\FileUpload::make('image')
                        ->label('Product Image')
                        ->image()
                        ->required()
                        ->disk('public')
                        ->directory('product_img')
                        ->maxParallelUploads(1),
                    ])
                ->columnSpan(1),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image')
                    ->label('Product Image'),
                Tables\Columns\TextColumn::make('name')
                    ->label('Product Name')
                    ->sortable()
                    ->searchable(),
                /*Tables\Columns\TextColumn::make('slug')
                    ->searchable(),*/
                Tables\Columns\TextColumn::make('model')
                    ->label('Product Model')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('category.name')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('tag.name')
                    ->label('Sub-Category')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('brand.name')
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
                                ->title('Product deleted')
                                ->icon('heroicon-o-check-circle')
                                ->body('The product has been deleted successfully.'),
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
            'index' => Pages\ListProducts::route('/'),
            'create' => Pages\CreateProducts::route('/create'),
            'edit' => Pages\EditProducts::route('/{record}/edit'),
        ];
    }
}
