<?php

namespace App\Filament\Clusters\Services\Resources;

use App\Filament\Clusters\Services;
use App\Filament\Clusters\Services\Resources\TrainingsResource\Pages;
use App\Filament\Clusters\Services\Resources\TrainingsResource\RelationManagers;
use App\Models\Trainings;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Actions\ActionGroup;
use Filament\Notifications\Notification;

class TrainingsResource extends Resource
{
    protected static ?string $model = Trainings::class;

    protected static ?string $navigationIcon = 'heroicon-m-bolt';

    protected static ?string $navigationLabel = 'Taining Programs';

    protected static ?string $modelLabel = 'Taining Programs';

    protected static ?string $cluster = Services::class;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make()
                    ->schema([
                    Forms\Components\TextInput::make('code')
                        ->required()
                        ->maxLength(255),
                    Forms\Components\TextInput::make('title')
                        ->required()
                        ->autocapitalize()
                        ->maxLength(255),
                    Forms\Components\Select::make('training_type')
                        ->required()
                        ->options([
                            'on-site' => 'On-site Training',
                            'other' => 'Other Training Programs',
                        ]),
                    ])
                ->columnSpan(1)
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('code')
                    ->searchable(),
                Tables\Columns\TextColumn::make('title')
                    ->searchable(),
                Tables\Columns\TextColumn::make('training_type')
                    ->searchable(),
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
                                ->title('Training deleted')
                                ->icon('heroicon-o-check-circle')
                                ->body('The training has been deleted successfully.'),
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
            'index' => Pages\ListTrainings::route('/'),
            'create' => Pages\CreateTrainings::route('/create'),
            'edit' => Pages\EditTrainings::route('/{record}/edit'),
        ];
    }
}
