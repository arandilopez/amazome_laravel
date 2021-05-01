<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class BanDeleteMethod
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if ($request->method() === 'DELETE') {
            return response('No estás autorizado a ejecutar peticiones DELETE', 405);
        }
        return $next($request);
    }
}
