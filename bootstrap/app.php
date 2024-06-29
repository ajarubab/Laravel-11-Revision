<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use App\Http\Middleware\AgeCheck;
use App\Http\Middleware\CountryCheck;
use App\Http\Middleware\IAgreeCheck;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        //
        $middleware->appendToGroup('Consent', [
            AgeCheck::class,
            CountryCheck::class,
            IAgreeCheck::class,
        ]);
        $middleware->appendToGroup('AgeCountryOnly', [
            AgeCheck::class,
            CountryCheck::class,
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
