<?php

        // Basic Where claude in laravel
    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Support\Facades\DB;


    // Basic where
        DB::table('users')->where('vote', '>', 100)->get();


        // Multiple conditional
                // AND by default
    DB::table('users')
       ->where('vote', '>', 100)
       ->where('name', 'sophal')
       ->get();


    // orWhere
DB::table('users')
    ->where('vote', '>', 100)
    ->orWhere('name', 'dara')
    ->get();


        // WhereBetween    | WhereNotBetween

    DB::table('users')->whereBetween('vote', [1,100] )->get();
    DB::table('users')->whereNotBetween('vote', [1,100] )->get();

        // Where In      | Where Not In
        DB::table('users')->whereIn('id', [1,2,3])->get();
        DB::table('users')->whereNotIn('id', [1,2,3])->get();

    // Where null    | Where not Null
DB::table('users')->whereNull('update_at')->get();
DB::table('users')->whereNotNull('update_at')->get();



     // Group Conditional
   DB::table('users')
      ->where('name', '=', 'sophal')
      ->where( function ($query) {
           $query->where('vote', '>', 100)
               ->orWhere('title', '=', 'Admin');
      })
        ->get();

   // Espisode 2 -> Group Conditional
DB::table('users')
    ->where('name', '=', 'Virak')
        ->where( function ($query) {
            $query->where('vote', '>', 100)
                ->orWhere('body', '=', 'welcome to Laravel');
        })
        ->get();








      // Ordering / Grouping / Limiting

// 1. ORDERING
DB::table('users')->orderBy('name', 'desc')->get();
        // compare value largest to smallest
DB::table('client')->orderBy('age', 'desc')->get();
DB::table('employee')->orderBy('id', 'desc')->get();
DB::table('students')->orderBy('name','desc')->get();



// 2. GROUPING + BY
DB::table('users')
    ->groupBy('user_id')
    ->having('user_id', '>', 100)
    ->get();

DB::table('users')
     ->skip('10')
     ->take(5)

->get();
DB::table('clients')
    ->groupBy('client_id')
    ->having('client_id', '>', 100)
    ->get();


DB::table('clients')
    ->skip(10)
    ->take(4)
  ->get();


     // Joining
DB::table('clients')
    // join -> sum the column name
    ->join('phone', 'clients_id','=','phone.clients_id')
    ->select('clients.*', 'phone.number')
    ->get();

DB::table('employees')
    ->join('address', 'employee_name', '=', 'addresss.employee_name')
    ->select('employee.*', 'address.*')
    ->get();




        // Insert / Update \ Delete

// 1- Insert
DB::table('users')->insert([
    'email'=>'sophalsam04@gmail.com',
    'vote'=>0,
]);

DB::table('emp')->insert([
    'name'=>'samsophal',
    'address'=>'kandal'
]);


// 2- Update
DB::table('users')
    ->where('id',1)
    ->update(['vote'=>1]);

DB::table('clients')
    ->where('id', 1)
    ->update(['address'=>'kompong thom']);


// Increment / Decrement
DB::table('users')->where('id', 1)->increment('vote');
DB::table('users')->where('id', 1)->decrement('vote', 5);


// Delete
DB::table('users')->where('id', '<', 100)->delete();
DB::table('clients')->where('id', '>', 100)->delete();



    // Agregated
    $count = DB::table('users')->count();
    $avg = DB::table('users')->avg('price');
    $max = DB::table('order')->max('price');
    $min = DB::table('order')->min('price');






?>
