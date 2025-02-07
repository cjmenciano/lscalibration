<?php

namespace App\Filament\Clusters\CompanyProfile\Resources;

use App\Filament\Clusters\CompanyProfile;
use App\Filament\Clusters\CompanyProfile\Resources\CompanyDetailsResource\Pages;
use App\Filament\Clusters\CompanyProfile\Resources\CompanyDetailsResource\RelationManagers;
use App\Models\CompanyDetails;
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

class CompanyDetailsResource extends Resource
{
    protected static ?string $model = CompanyDetails::class;

    protected static ?string $navigationIcon = 'heroicon-m-building-office-2';

    protected static ?string $modelLabel = 'Company Details';

    protected static ?string $cluster = CompanyProfile::class;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make()
                ->schema([
                Forms\Components\TextInput::make('company_name')
                    ->prefixIcon('heroicon-m-building-office-2')
                    ->required()
                    ->maxLength(255)
                    ->autocapitalize()
                    ->default('LS Advance Calibration and Services'),
                Forms\Components\TextInput::make('address')
                    ->prefixIcon('heroicon-m-map-pin')
                    ->required()
                    ->maxLength(255)
                    ->autocapitalize()
                    ->default('Fitness Zone Bldg. Circumferential Road, Cor. E. Rodriguez Ave., Brgy. Dalig'),
                
                Forms\Components\Grid::make()
                ->schema([
                Forms\Components\TextInput::make('contact')
                    ->prefixIcon('heroicon-m-phone')
                    ->tel()
                    ->required()
                    ->default('9155656265'),
                Forms\Components\TextInput::make('email')
                    ->prefixIcon('heroicon-m-envelope')
                    ->email()
                    ->required()
                    ->maxLength(255)
                    ->unique(ignoreRecord: true)
                    ->default('ls.calibrationservices@gmail.com'),
                ])
                ->columns(2),

                Forms\Components\Fieldset::make('Working Days')
                    ->schema([
                Forms\Components\Select::make('start_working_day')
                    ->label('Start')
                    ->prefixIcon('heroicon-m-calendar-days')
                    ->required()
                    ->live()
                    ->preload()
                    ->options([
                        'Monday' => 'Monday',
                        'Tuesday' => 'Tuesday',
                        'Wednesday' => 'Wednesday',
                        'Thursday' => 'Thursday',
                        'Friday' => 'Friday',
                    ])
                    ->afterStateUpdated(fn (Set $set) => $set('end_working_day', null)) 
                    ->searchable()
                    ->default('Monday'),
                Forms\Components\Select::make('end_working_day')
                    ->label('End')
                    ->prefixIcon('heroicon-m-calendar-days')
                    ->required()
                    ->live()
                    ->preload()
                    ->options([
                        'Monday' => 'Monday',
                        'Tuesday' => 'Tuesday',
                        'Wednesday' => 'Wednesday',
                        'Thursday' => 'Thursday',
                        'Friday' => 'Friday',
                    ])
                    // ->afterStateUpdated(fn (Set $set) => $set('tag_id', null)) 
                    ->searchable()
                    ->default('Friday'),
                    ])
                    ->columnSpan(1)
                    ->columns(2),
                
                Forms\Components\Fieldset::make('Working Hours')
                    ->schema([
                Forms\Components\Select::make('start_working_hours')
                    ->label('Start')
                    ->prefixIcon('heroicon-m-clock')
                    ->required()
                    ->options([
                        '7:00 AM' => '7:00 AM',
                        '8:00 AM' => '8:00 AM',
                        '9:00 AM' => '9:00 AM',
                        '10:00 AM' => '10:00 AM',
                        '11:00 AM' => '11:00 AM',
                        '12:00 PM' => '12:00 PM',
                        '1:00 PM' => '1:00 PM',
                        '2:00 PM' => '2:00 PM',
                        '3:00 PM' => '3:00 PM',
                        '4:00 PM' => '4:00 PM',
                        '5:00 PM' => '5:00 PM',
                        '6:00 PM' => '6:00 PM',
                        '7:00 PM' => '7:00 PM',
                        '8:00 PM' => '8:00 PM',
                        '9:00 PM' => '9:00 PM',
                    ])
                    ->afterStateUpdated(fn (Set $set) => $set('end_working_hours', null)) 
                    ->searchable()
                    ->default('8:00 AM'),
                Forms\Components\Select::make('end_working_hours')
                    ->label('End')
                    ->prefixIcon('heroicon-m-clock')
                    ->required()
                    ->searchable()
                    ->options([
                        '7:00 AM' => '7:00 AM',
                        '8:00 AM' => '8:00 AM',
                        '9:00 AM' => '9:00 AM',
                        '10:00 AM' => '10:00 AM',
                        '11:00 AM' => '11:00 AM',
                        '12:00 PM' => '12:00 PM',
                        '1:00 PM' => '1:00 PM',
                        '2:00 PM' => '2:00 PM',
                        '3:00 PM' => '3:00 PM',
                        '4:00 PM' => '4:00 PM',
                        '5:00 PM' => '5:00 PM',
                        '6:00 PM' => '6:00 PM',
                        '7:00 PM' => '7:00 PM',
                        '8:00 PM' => '8:00 PM',
                        '9:00 PM' => '9:00 PM',
                    ])
                    ->default('5:00 PM'),
                ])
            ])
            ->columnSpan(1),

                Forms\Components\Section::make()
                ->schema([
                Forms\Components\FileUpload::make('image')
                    ->label('Company Logo')
                    ->image()
                    ->required()
                    ->disk('public')
                    ->directory('company_img')
                    ->maxParallelUploads(1),
                Forms\Components\Fieldset::make('Map Coordinates')
                    ->schema([
                Forms\Components\TextInput::make('latitude')
                    ->prefixIcon('heroicon-o-map-pin')
                    ->required()
                    ->maxLength(255)
                    ->default('14.581000'),
                Forms\Components\TextInput::make('longtitude')
                    ->prefixIcon('heroicon-o-map-pin')
                    ->required()
                    ->maxLength(255)
                    ->default('121.180220'),
                    ])
                    ->columns(2),
                ])
                ->columnSpan(1),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image')
                    ->label('Company Logo'),
                Tables\Columns\TextColumn::make('company_name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('address')
                    ->searchable(),
                Tables\Columns\TextColumn::make('contact')
                    ->searchable(),
                Tables\Columns\TextColumn::make('email')
                    ->searchable(),
                Tables\Columns\TextColumn::make('latitude')
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('longtitude')
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('start_working_day')
                    ->searchable(),
                Tables\Columns\TextColumn::make('end_working_day')
                    ->searchable(),
                Tables\Columns\TextColumn::make('start_working_hours')
                    ->searchable(),
                Tables\Columns\TextColumn::make('end_working_hours')
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
                    Tables\Actions\ViewAction::make(),
                    Tables\Actions\EditAction::make(),
                    Tables\Actions\DeleteAction::make()
                        ->successNotification(
                            Notification::make()
                                ->success()
                                ->color('success')
                                ->title('Company Detail deleted')
                                ->icon('heroicon-o-check-circle')
                                ->body('The company detail has been deleted successfully.'),
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
            'index' => Pages\ListCompanyDetails::route('/'),
            'create' => Pages\CreateCompanyDetails::route('/create'),
            'view' => Pages\ViewCompanyDetails::route('/{record}'),
            'edit' => Pages\EditCompanyDetails::route('/{record}/edit'),
        ];
    }
}
