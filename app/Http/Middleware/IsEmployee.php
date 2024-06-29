<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class IsEmployee
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if($request->isemp === 'true') {
            echo "Verified, Welcome to the Organisation.<br>";
            return $next($request);
        } else {
            die('XXX Unauthorised Access XXX');
        }
    }
}
