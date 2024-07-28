<?php

namespace App\Filament\Auth;

use App\Models\Santri;
use Filament\Forms\Components\Select;
use Filament\Forms\Form;
use Filament\Pages\Auth\Register as AuthRegister;

class Register extends AuthRegister
{
    public function form(Form $form): Form
    {
        return $form 
            ->schema([
                $this->getNameFormComponent(),
                $this->getEmailFormComponent(),
                $this->getPasswordFormComponent(),
                $this->getPasswordConfirmationFormComponent(),

                Select::make('santri')
                    ->options(Santri::all()->pluck('nama', 'nama'))
            ])
            ->statePath('data');
    }
}