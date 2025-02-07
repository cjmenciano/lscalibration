<?php

namespace App\Filament\Clusters\Utilities\Resources\RoleResource\Pages;

use App\Filament\Clusters\Utilities\Resources\RoleResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Filament\Notifications\Notification;

class EditRole extends EditRecord
{
    protected static string $resource = RoleResource::class;

    protected function getSavedNotification(): ?Notification
    {
        return Notification::make()
                ->success()
                ->color('success')
                ->title('Role updated')
                ->icon('heroicon-o-check-circle')
                ->body('The role has been updated successfully.');
    }
}
