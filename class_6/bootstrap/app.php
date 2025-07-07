<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use App\Http\Middleware\CheckAge;
use App\Http\Middleware\checkCountry;
use App\Http\Middleware\Groupdata;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {

        //global middleware
        $middleware->append(CheckAge::class);
        // $middleware->append(checkCountry::class);

         //route  middleware
        $middleware->appendToGroup("checkdata" , [
                checkCountry::class,
                 groupdata::class
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
