<?php
    // write logic to set seeder data
    namespace Database\Seeders;
    use App\Models\User;

    class DB_Controller extends Seeders
    {
        final public function run(): void
        {
            // input data only
            User::created([
                'name'=>'Admin user',
                'email' => 'sophalsam04@gmail.com',
                'password'=>bcrypt('password'),
            ]);

            // using to factory for alot data
            User::factory()->count(50)->create();





        }


    }







?>
