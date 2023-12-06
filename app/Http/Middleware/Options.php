<?php

namespace App\Http\Middleware;

use Closure;

class OptionsMiddleware
{
    public function handle($request, Closure $next)
    {
        // If the request method is OPTIONS, return a 200 OK response with CORS headers
        if ($request->isMethod('OPTIONS')) {
            return response('', 200)
                ->header('Access-Control-Allow-Origin', 'https://majordomus-tasker.vercel.app')
                ->header('Access-Control-Allow-Methods', 'OPTIONS, GET, POST, PUT, PATCH, DELETE')
                ->header('Access-Control-Allow-Headers', 'Content-Type, Authorization');
        }

        return $next($request);
    }
}
