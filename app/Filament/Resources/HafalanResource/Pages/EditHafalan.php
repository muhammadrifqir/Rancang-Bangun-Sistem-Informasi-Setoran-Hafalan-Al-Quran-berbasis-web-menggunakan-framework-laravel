<?php

namespace App\Filament\Resources\HafalanResource\Pages;

use App\Filament\Resources\HafalanResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditHafalan extends EditRecord
{
    protected static string $resource = HafalanResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
