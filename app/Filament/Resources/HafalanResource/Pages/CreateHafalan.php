<?php

namespace App\Filament\Resources\HafalanResource\Pages;

use App\Filament\Resources\HafalanResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateHafalan extends CreateRecord
{
    protected static string $resource = HafalanResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
