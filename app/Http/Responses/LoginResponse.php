<?php

namespace App\Http\Responses;

use Filament\Pages\Dashboard;
use Illuminate\Http\RedirectResponse;
use Livewire\Features\SupportRedirects\Redirector;
use Illuminate\Support\Facades\Auth;

class LoginResponse extends \Filament\Auth\Http\Responses\LoginResponse
{
    public function toResponse($request): RedirectResponse|Redirector
    {
        if (Auth::user()->hasRole("super_admin")) {
            return redirect()->to(Dashboard::getUrl(panel: 'admin'));
        }

        return parent::toResponse($request);
    }
}
