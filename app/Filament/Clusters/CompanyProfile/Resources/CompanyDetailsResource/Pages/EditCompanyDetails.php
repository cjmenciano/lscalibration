<?php

namespace App\Filament\Clusters\CompanyProfile\Resources\CompanyDetailsResource\Pages;

use App\Filament\Clusters\CompanyProfile\Resources\CompanyDetailsResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Filament\Notifications\Notification;

class EditCompanyDetails extends EditRecord
{
    protected static string $resource = CompanyDetailsResource::class;

    protected function getSavedNotification(): ?Notification
    {
        return Notification::make()
                ->success()
                ->color('success')
                ->title('Company Detail updated')
                ->icon('heroicon-o-check-circle')
                ->body('The company detail has been updated successfully.');
    }
}
