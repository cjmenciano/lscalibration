<?php

namespace App\Filament\Clusters\Services\Resources\FaqsResource\Pages;

use App\Filament\Clusters\Services\Resources\FaqsResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Filament\Notifications\Notification;

class CreateFaqs extends CreateRecord
{
    protected static string $resource = FaqsResource::class;

    protected function getCreatedNotification(): ?Notification
    {
        return Notification::make()
                ->success()
                ->color('success')
                ->title('FAQ\'s created')
                ->icon('heroicon-o-check-circle')
                ->body('The FAQ\'s has been created successfully.');
    }
}
