<?php

namespace App\Http\Middleware;

use Closure;

class Seller
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if ($request->user() && $request->user()->type !='seller')
        {
            return redirect('/login');
        }
        return $next($request);
    }
}
