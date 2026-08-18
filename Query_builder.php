<?php
    // Using to Query builder
    // basic usage

    use Illuminate\Support\Facades\DB;

    // retrieve all row
        $users = DB::table('users')->get();

        // retrieve a single row
      $user = DB::table('users')->where('id', 2)->first();

      // Retrieve a single column values
    $email = DB::table('users')->where('id', 1)->value('email');


        // retrieve a collections column value
    $emails = DB::table('users')->where('id')->pluck('email');



        // Select statements
   $user = DB::table('users')
         ->select('name', 'email as user_email')
         ->get();

   $users = DB::table('users')
          ->select('id', 'id as user_name')
          ->get();

   // Adding a query from selected
        $users->addSelect('age');
        $user = DB::table('users')->distinct()->get();


   // Where claude
     DB::table('users')
         ->where('vote' , '> ', 100)
         ->where('name', 'sophal')
         ->get();






?>
