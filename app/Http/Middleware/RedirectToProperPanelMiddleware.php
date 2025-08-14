<?php

namespace App\Http\Middleware;

use Symfony\Component\HttpFoundation\Response;
use Auth;
use Closure;
use Illuminate\Http\Request;
use Filament\Pages\Dashboard;

class RedirectToProperPanelMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param Closure(Request):Response $next
     */
    public function handle(Request $request, Closure $next)
    {
        if (Auth::check() && Auth::user()->hasRole('super_admin')) {
            return redirect()->to(Dashboard::getUrl(panel: 'admin'));
        }

        return $next($request);
    }
}
