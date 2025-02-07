<?php

namespace App\Filament\Clusters\Product\Resources\TagsResource\Pages;

use App\Filament\Clusters\Product\Resources\TagsResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Filament\Notifications\Notification;

class EditTags extends EditRecord
{
    protected static string $resource = TagsResource::class;

    protected function getSavedNotification(): ?Notification
    {
        return Notification::make()
                ->success()
                ->color('success')
                ->title('Sub-category updated')
                ->icon('heroicon-o-check-circle')
                ->body('The sub-category has been updated successfully.');
    }
}
