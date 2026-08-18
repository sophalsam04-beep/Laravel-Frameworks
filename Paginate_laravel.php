<?php

// Paginate using to handle value of object into function

    use App\Models\User;
    use Symfony\Component\VarDumper\Cloner\Data;

return new class
    {
        public function index()
        {
            // using to paginate
            $users = Data::paginate(15);
                return view("users.index", compact('users'));

        }
    }



?>
