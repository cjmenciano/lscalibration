<?php

namespace App\Filament\Clusters\Services\Resources\TrainingsResource\Pages;

use App\Filament\Clusters\Services\Resources\TrainingsResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Filament\Notifications\Notification;

class EditTrainings extends EditRecord
{
    protected static string $resource = TrainingsResource::class;

    protected function getSavedNotification(): ?Notification
    {
        return Notification::make()
                ->success()
                ->color('success')
                ->title('Training updated')
                ->icon('heroicon-o-check-circle')
                ->body('The training has been updated successfully.');
    }
}
