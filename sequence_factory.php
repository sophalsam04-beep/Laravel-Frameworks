<?php
    // Sequence the factory

        // Basic Factory
    use Illuminate\Database\Eloquent\Factories\Sequence;
    use App\Models\Post;
    use App\Models\User;

    User::factory()
        ->count(10)
        ->state(new Sequence(
            ['role'=> 'admin'],
            ['role'=> 'user'],
        ))
    ->create();

    // using to Closure
      User::factory()
         ->count(10)
         ->state(new Sequence(
             // using to closure
         fn ($sequence)=> ['role' => 'admin' .$sequence->role ],
         ))
    ->create();
      
      
      User::factory()
          ->count(10)
          ->state(new Sequence(
              fn ($table)=> ['role'=>'user' . $table->role],
          ));



?>
