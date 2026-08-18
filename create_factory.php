<?php

        // Create a Factory
    namespace Database\Factories;
    use App\Models\User;
    use App\Models\Post;
    use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Schema\PostgresSchemaState;

class PostFactory extends Factory
    {
            // protect data
        protected $model = Post::class;
        public function definition(): array
        {
            return [
                'title'=> $this->faker->sentence(),
                'body'=> $this->faker->paragraph(3, true),
                'user_id'=> User::factory(),
                'published_at'=>$this->faker->optional()->dateTime(),

            ];


        }
    }










?>
