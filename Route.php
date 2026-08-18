<?php

       // Routes
    use App\Http\Controllers\Controller;
    use Symfony\Component\Routing\Route;


        Route::get('/products', [Controller::class, 'index']);
        Route::get('/products/{id}', [Controller::class, 'show']);
        Route::post('/products', [Controller::class, 'store']);
        Route::put('/products/{id}', [Controller::class, 'update']);
        Route::delete('/products/{id}', [Controller::class, 'destroy']);
        Route::get('/products-search', [Controller::class, 'search']);
        

?>
