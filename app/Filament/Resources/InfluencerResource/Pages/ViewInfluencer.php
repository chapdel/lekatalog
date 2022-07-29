<?php

namespace App\Filament\Resources\InfluencerResource\Pages;

use App\Filament\Resources\InfluencerResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewInfluencer extends ViewRecord
{
    protected static string $resource = InfluencerResource::class;

    protected function getActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
