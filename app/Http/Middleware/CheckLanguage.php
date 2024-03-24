<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckLanguage
{
    /**
     * Handle an incoming request.
     *
     * @param \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        app()->setLocale('ar');
        if (!empty($language)) {
            $language = $request->input('lang');
            if ($language === 'en') {
                app()->setLocale('en'); // Set to English
            } else {
                app()->setLocale('ar'); // Default to Arabic
            }
        }
        // Continue processing the request
        return $next($request);
    }
}
