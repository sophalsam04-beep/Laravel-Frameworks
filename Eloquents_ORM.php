// Eloquent ORM In laravel

<?php
       namespace app\Models;
  use Illuminate\Database\Eloquent\Model;

class Post extends PostController{

  // Core Concepts
    protected $fillable = [ "title", "body", "user_id"];

    // BASIC CRUD
  $post = Post::create([
      "title"=>"Route",
      "body"=>"Learning Route LARAVEL",
  ]);

  // READ
$post = Post::find(1);
$post = Post::where("published", true)->get();
$post = Post::where("title", "Hello")->first();

// UPDATE
$post->title = "Updated title";
$post->save();

  $post::where('id', 1)->update(['title'=> 'updated']);


// DELETE
$post->delete();



    


}







?>
