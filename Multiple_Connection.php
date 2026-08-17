<?php
        // Multiple Connections

    use Illuminate\Support\Facades\DB;

    // Database name
$users = DB::Connection('mysql')->select('SELECT * FROM users');
$client = DB::Connection('mysql')->select('SELECT * FROM clients');


// Multiples connections
   class Order extends Model
   {
        // variable store
       protected string $connections = 'pgsql';
   }
   


?>
