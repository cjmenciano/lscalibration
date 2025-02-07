<?php

namespace App\Filament\Clusters\Utilities\Resources\PermissionResource\Pages;

use App\Filament\Clusters\Utilities\Resources\PermissionResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Spatie\Permission\Models\Permission;
use Filament\Notifications\Notification;

class CreatePermission extends CreateRecord
{
    protected static string $resource = PermissionResource::class;

    protected function getCreatedNotification(): ?Notification
    {
        return Notification::make()
                ->success()
                ->color('success')
                ->title('Permission created')
                ->icon('heroicon-o-check-circle')
                ->body('The permission has been created successfully.');
    }
}
