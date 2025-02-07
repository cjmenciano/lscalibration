<?php

namespace App\Filament\Clusters\Product\Resources\TagsResource\Pages;

use App\Filament\Clusters\Product\Resources\TagsResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Filament\Notifications\Notification;

class CreateTags extends CreateRecord
{
    protected static string $resource = TagsResource::class;

    protected function getCreatedNotification(): ?Notification
    {
        return Notification::make()
                ->success()
                ->color('success')
                ->title('Sub-category created')
                ->icon('heroicon-o-check-circle')
                ->body('The sub-category has been created successfully.');
    }
}
