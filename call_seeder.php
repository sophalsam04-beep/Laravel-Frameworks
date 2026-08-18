<?php
    // Call Seeder from the database
    namespace Database\Seeders;
    use Illuminate\Database\Seeder;

    class DatabaseSeeder extends Seeder
    {
        public function run(): void
        {
                $this->call([
                    DB_Controller::class,
                    Seeder::class,
                    CategorySeeder::class,
                ]);

                // call only one seeder
            $this->call(UserController::class);
        }
    }






?>
