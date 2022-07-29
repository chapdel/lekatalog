<?php

namespace App\Filament\Resources\InfluencerResource\Pages;

use App\Filament\Resources\InfluencerResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListInfluencers extends ListRecords
{
    protected static string $resource = InfluencerResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
