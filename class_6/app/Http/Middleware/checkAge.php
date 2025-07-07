<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class checkAge
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if($request->age < 18){
            // http://127.0.0.1:8000/?checkCountry=pakistan&age=22
            // ?age=17
            echo "your age must be greather than 18 or equal to 18";
            // exit;
            // abort('403' , 'your age must be greather than 18 or equal to 18');
            // abort('403' , 'you are not access to this website page ');
            // echo "Age middle ware ";
        }
        return $next($request);
    }
}
