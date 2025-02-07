<?php

namespace App\Filament\Clusters\Services\Resources\ClientsResource\Pages;

use App\Filament\Clusters\Services\Resources\ClientsResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Filament\Notifications\Notification;

class CreateClients extends CreateRecord
{
    protected static string $resource = ClientsResource::class;

    protected function getCreatedNotification(): ?Notification
    {
        return Notification::make()
                ->success()
                ->color('success')
                ->title('Client created')
                ->icon('heroicon-o-check-circle')
                ->body('The client has been created successfully.');
    }
}
