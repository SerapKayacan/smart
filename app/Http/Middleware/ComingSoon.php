<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ComingSoon
{
    public function handle(Request $request, Closure $next): Response
    {
        if (config('app.coming_soon', false)) {
            return response()->view('coming-soon');
        }

        return $next($request);
    }
}
