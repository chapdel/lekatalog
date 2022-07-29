<?php

namespace App\Filament\Resources\InfluencerResource\Pages;

use App\Filament\Resources\InfluencerResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditInfluencer extends EditRecord
{
    protected static string $resource = InfluencerResource::class;

    protected function getActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
            Actions\ForceDeleteAction::make(),
            Actions\RestoreAction::make(),
        ];
    }
}
