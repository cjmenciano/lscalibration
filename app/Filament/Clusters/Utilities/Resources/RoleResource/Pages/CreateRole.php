<?php

namespace App\Filament\Clusters\Utilities\Resources\RoleResource\Pages;

use App\Filament\Clusters\Utilities\Resources\RoleResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Filament\Notifications\Notification;

class CreateRole extends CreateRecord
{
    protected static string $resource = RoleResource::class;

    protected function getCreatedNotification(): ?Notification
    {
        return Notification::make()
                ->success()
                ->color('success')
                ->title('Role created')
                ->icon('heroicon-o-check-circle')
                ->body('The role has been created successfully.');
    }
}
