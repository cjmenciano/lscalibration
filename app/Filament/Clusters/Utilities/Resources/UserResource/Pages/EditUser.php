<?php

namespace App\Filament\Clusters\Utilities\Resources\UserResource\Pages;

use App\Filament\Clusters\Utilities\Resources\UserResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Filament\Notifications\Notification;

class EditUser extends EditRecord
{
    protected static string $resource = UserResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    protected function afterSave() : void
    {
        $this->record->syncRoles($this->data['role']);
    }

    protected function getSavedNotification(): ?Notification
    {
        return Notification::make()
                ->success()
                ->color('success')
                ->title('User updated')
                ->icon('heroicon-o-check-circle')
                ->body('The user has been updated successfully.');
    }
}
