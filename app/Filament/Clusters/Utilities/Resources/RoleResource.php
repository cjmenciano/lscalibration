<?php

namespace App\Filament\Clusters\Utilities\Resources;

use App\Filament\Clusters\Utilities;
use App\Filament\Clusters\Utilities\Resources\RoleResource\Pages;
use App\Filament\Clusters\Utilities\Resources\RoleResource\RelationManagers;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Spatie\Permission\Models\Role;
use Filament\Tables\Actions\ActionGroup;
use Filament\Notifications\Notification;

class RoleResource extends Resource
{
    protected static ?string $model = Role::class;

    protected static ?string $navigationIcon = 'heroicon-m-user-circle';

    protected static ?string $navigationLabel = 'Manage Roles';

    protected static ?string $modelLabel = 'Roles';

    //protected static ?string $navigationGroup = 'System Management';

    protected static ?string $cluster = Utilities::class;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make()
                    ->schema([  
                Forms\Components\TextInput::make('name')
                        ->required()
                        ->unique(ignoreRecord: true),
                        //]->unique('roles', 'name'),
                Forms\Components\CheckboxList::make('permissions')
                        ->relationship('permissions', 'name')
                        ->columns(3),
                    ])
                    ->columnSpan(1),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                /*Tables\Columns\TextColumn::make('permissions.name')
                    ->searchable(),*/
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
                                ->title('Role deleted')
                                ->icon('heroicon-o-check-circle')
                                ->body('The role has been deleted successfully.'),
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
            'index' => Pages\ListRoles::route('/'),
            'create' => Pages\CreateRole::route('/create'),
            'edit' => Pages\EditRole::route('/{record}/edit'),
        ];
    }
}
