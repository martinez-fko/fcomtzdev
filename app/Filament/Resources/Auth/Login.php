<?php
// app/Filament/Auth/Login.php

namespace App\Filament\Resources\Auth;

use Filament\Auth\Pages\Login as BaseLogin;
use Filament\Forms\Components\TextInput;

class Login extends BaseLogin
{
    protected function getCredentialsFromFormData(array $data): array
    {
        return [
            'username' => $data['username'],
            'password' => $data['password'],
        ];
    }

    protected function getEmailFormComponent(): TextInput
    {
        return TextInput::make('username')
            ->label('Usuario')
            ->required()
            ->autocomplete();
    }
}