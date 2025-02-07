<?php

namespace App\Filament\Clusters\CompanyProfile\Resources\CompanyDetailsResource\Pages;

use App\Filament\Clusters\CompanyProfile\Resources\CompanyDetailsResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewCompanyDetails extends ViewRecord
{
    protected static string $resource = CompanyDetailsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
