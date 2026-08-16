<?php

        // Register Middleware Alias
    use App\Http\Middleware\CheckAge;

    ->withMiddleware(function (Middleware $middleware) {
            $middleware->alias([
                'age'=>CheckAge::class,

        ]);
    });


    // Global Middleware
    use App\Http\Middleware\Logrequest;

    ->withMiddleware(function (Middleware $middleware) {
        $middleware->append(Logrequest::class);
    });


    Route::get('/admin', [AdminController::class, 'index'])
    ->middleware(CheckAge::class);






?>
