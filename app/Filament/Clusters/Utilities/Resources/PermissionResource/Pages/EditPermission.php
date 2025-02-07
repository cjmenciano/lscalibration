<?php

namespace App\Filament\Clusters\Utilities\Resources\PermissionResource\Pages;

use App\Filament\Clusters\Utilities\Resources\PermissionResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Filament\Notifications\Notification;

class EditPermission extends EditRecord
{
    protected static string $resource = PermissionResource::class;

    protected function getSavedNotification(): ?Notification
    {
        return Notification::make()
                ->success()
                ->color('success')
                ->title('Permission updated')
                ->icon('heroicon-o-check-circle')
                ->body('The permission has been updated successfully.');
    }
}
