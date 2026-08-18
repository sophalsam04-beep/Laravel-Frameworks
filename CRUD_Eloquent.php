<?php
    // Prepare Model

    use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';
    protected $primaryKey = 'id';
    protected $fillable = ['title','body', 'user_id'];



}


    // CRUD Operations
    // Create posts
    $posts = Post::create([
        'title'=>'Lavavel',
        'body'=>'welcome to lavavel'
    ]);


    $name = Post::create([
        'id'=>101,
        'address'=>'kandal'
    ]);


    // READ
    Post::all();
    Post::find(1);
    Post::where('title','body', 'user_id');
    Post::first();

    // Update
    $test = Post::find(1);
    $test->title = "New title Laravel!";
    $test->save();

    // Delete
   Post::find(1)->delete();
   Post::find(2)->delete();





?>
