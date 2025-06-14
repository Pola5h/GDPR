<?php

namespace Pola5h\GdprCookieConsentManager\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckGdprConsent
{
    public function handle(Request $request, Closure $next)
    {
        // Check for consent cookie or preferences
        return $next($request);
    }
}
