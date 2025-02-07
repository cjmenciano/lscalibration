<?php

namespace App\Filament\Clusters\CompanyProfile\Resources\CompanyDetailsResource\Pages;

use App\Filament\Clusters\CompanyProfile\Resources\CompanyDetailsResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Filament\Notifications\Notification;

class CreateCompanyDetails extends CreateRecord
{
    protected static string $resource = CompanyDetailsResource::class;

    protected function getCreatedNotification(): ?Notification
    {
        return Notification::make()
                ->success()
                ->color('success')
                ->title('Company Detail created')
                ->icon('heroicon-o-check-circle')
                ->body('The company detail has been created successfully.');
    }
}
