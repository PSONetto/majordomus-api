<?php

namespace App\Http\Middleware;

class ApiRedirect
{
    public function handle($request, \Closure $next)
    {
        // Check if the environment is production and the request URI contains "/api/"
        if (app()->environment('production') && substr_count($request->getRequestUri(), '/api/') === 1) {
            // Redirect the request to "/api/api/"
            $redirectedUri = str_replace('/api/', '', $request->getRequestUri());

            return redirect($redirectedUri, 301);
        }

        // Continue with the request for non-matching conditions
        return $next($request);
    }
}
