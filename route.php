<?php

      use Illuminate\Support\Facades\Route;

      Route::get("/route", function () {
            return "Welcome to Route in Laravel";
      });


      Route::post("/route", function (){
            return "create Route succesfully...!\n"
      });


      Route::put("/route", function (){
            return "Updated route succesfully...!\n"
      });

      
      Route::patch("/route", function (){
            return "Updated one id succesfully...!\n"
      });


      Route::delete("/route", function (){
            return "Deleted succesfully...\n"
      });


      



?>
