<?php

// =====================================
    // Relationship with Laravel
            // Eloquent with laravel
// =====================================


class User extends Model
{

    // Eloquent ORM using to hasMany -> one to many
    public function posts()
    {
        return $this->hasMany(User::class);
    }
}

class Post extends Model
{
    // BelongTo -> inverse
    public function user()
    {
        return $this->belongTo(User::class);
    }
}





?>
