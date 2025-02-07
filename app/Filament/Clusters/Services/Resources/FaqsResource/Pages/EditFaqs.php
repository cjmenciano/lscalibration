<?php

namespace App\Filament\Clusters\Services\Resources\FaqsResource\Pages;

use App\Filament\Clusters\Services\Resources\FaqsResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Filament\Notifications\Notification;

class EditFaqs extends EditRecord
{
    protected static string $resource = FaqsResource::class;

    protected function getSavedNotification(): ?Notification
    {
        return Notification::make()
                ->success()
                ->color('success')
                ->title('FAQ\'s updated')
                ->icon('heroicon-o-check-circle')
                ->body('The FAQ\'s has been updated successfully.');
    }
}
