<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AgeCountryCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Try with "?country=usa&&age=12"
        // Try with "?country=usa&&age=22"
        // Try with "?country=india&&age=12"
        // Try with "?country=india&&age=22"
        if($request->country == 'india') {
            if($request->age < 18) {
                die ('You must be above 18 years to cast your vote in this election.');
            } else {
                echo "Middleware validations passed successfully <br>";
                return $next($request);
            }
        } else {
            die('You must be an Indian to cast your vote in this election.');
        }
    }
}
