<?php

namespace App\Http\Middleware;

use Filament\Http\Middleware\Authenticate;

class RedirectIfNotFilamentAuthenticated extends Authenticate
{
    protected function redirectTo($request): ?string
    {
        return route('filament.auth.auth.login');
    }
}
