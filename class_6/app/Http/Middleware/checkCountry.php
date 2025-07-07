<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class checkCountry
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        if($request->checkCountry !="pakistan"){

            //http://127.0.0.1:8000/?checkCountry=pakistan&age=22 
            echo "welcome in pakistan";
          exit;
        }
        return $next($request);
    }
}
