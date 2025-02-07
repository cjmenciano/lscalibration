<?php

namespace App\Filament\Clusters\Services\Resources\ClientsResource\Pages;

use App\Filament\Clusters\Services\Resources\ClientsResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Filament\Notifications\Notification;

class EditClients extends EditRecord
{
    protected static string $resource = ClientsResource::class;

    protected function getSavedNotification(): ?Notification
    {
        return Notification::make()
                ->success()
                ->color('success')
                ->title('Client updated')
                ->icon('heroicon-o-check-circle')
                ->body('The client has been updated successfully.');
    }
}
