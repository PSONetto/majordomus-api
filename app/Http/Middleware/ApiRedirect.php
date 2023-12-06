<?php

namespace App\Http\Middleware;

class ApiRedirect
{
    public function handle($request, \Closure $next)
    {
        // Check if the environment is production and the request URI contains "/api/"
        if (app()->environment('production') && strpos($request->getRequestUri(), '/api/') !== false) {
            // Redirect the request to "/api/api/"
            $redirectedUri = str_replace('/api/', '/api/', $request->getRequestUri());

            return redirect($redirectedUri, 301);
        }

        // Continue with the request for non-matching conditions
        return $next($request);
    }
}
