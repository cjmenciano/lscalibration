<?php

namespace App\Filament\Clusters\Utilities\Resources\UserResource\Pages;

use App\Filament\Clusters\Utilities\Resources\UserResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Filament\Notifications\Notification;

class CreateUser extends CreateRecord
{
    protected static string $resource = UserResource::class;

    protected function afterCreate() : void
    {
        $this->record->syncRoles($this->data['role']);
    }

    protected function getCreatedNotification(): ?Notification
    {
        return Notification::make()
                ->success()
                ->color('success')
                ->title('User created')
                ->icon('heroicon-o-check-circle')
                ->body('The user has been created successfully.');
    }
}
