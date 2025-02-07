<?php

namespace App\Filament\Clusters\Services\Resources\TrainingsResource\Pages;

use App\Filament\Clusters\Services\Resources\TrainingsResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Filament\Notifications\Notification;

class CreateTrainings extends CreateRecord
{
    protected static string $resource = TrainingsResource::class;

    protected function getCreatedNotification(): ?Notification
    {
        return Notification::make()
                ->success()
                ->color('success')
                ->title('Training created')
                ->icon('heroicon-o-check-circle')
                ->body('The training has been created successfully.');
    }
}
