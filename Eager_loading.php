<?php

use Symfony\Component\VarDumper\Cloner\Data;
    // Eager loading in laravel

    // N+1
    // (100 + 1)


$posts = Post::with('users')->get(); // 1 query

    foreach ($posts as $post){
        echo $post->post->title;
    }

    $data = Data::with('Data')->get();

    foreach ($data as $d){
        echo $d->data->title;
    }


    // ALot of Relationship of Eager one
$value = Post::with(['user','comments','tag'])->get();




?>
