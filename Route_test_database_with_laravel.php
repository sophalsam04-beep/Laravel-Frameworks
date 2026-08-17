<?php

    // Testing the Connections
    // Route database with Laravel
    // Route test
    use Illuminate\Support\Facades\DB;
    use Symfony\Component\Routing\Route;
    use Symfony\Component\Routing\RouteCollection;

        // Routing the db
         Route::get('/db-test', function () {
             try{
                   DB::connection()->getPdo();
                   return "Connected to database". DB::connection()->getDatabaseName();
             }catch (\Exception $e){
                    return "Could not connected...!" . $e->getMessage();
             }
         });





?>
