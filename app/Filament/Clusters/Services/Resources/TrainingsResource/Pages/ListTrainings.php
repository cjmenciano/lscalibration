<?php

namespace App\Filament\Clusters\Services\Resources\TrainingsResource\Pages;

use App\Filament\Clusters\Services\Resources\TrainingsResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTrainings extends ListRecords
{
    protected static string $resource = TrainingsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
