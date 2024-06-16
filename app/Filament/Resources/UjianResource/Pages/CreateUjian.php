<?php

namespace App\Filament\Resources\UjianResource\Pages;

use App\Filament\Resources\UjianResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateUjian extends CreateRecord
{
    protected static string $resource = UjianResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
