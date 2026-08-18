<?php
    // Schema Builder

    // Create Table
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;

        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('content');
            $table->unsignedBigInteger('users_id');
            $table->boolean('published')->default(false);
            $table->timestamp();

            $table->foreign('users_id')->references('id')->on('users');

        });


        // Update Table -> Modifying the table
    Schema::table('posts', function (Blueprint $table) {
        $table->string('slug')->after('title')->nullable();
    });


    // Delete Table
    Schema::dropIfExists('posts');


    // drop column table
    // show table and column
    Schema::dropColumns('posts', 'slug');









?>
