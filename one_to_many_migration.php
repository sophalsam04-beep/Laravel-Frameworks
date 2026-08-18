<?php
    // Relationship one to many
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

        // One to many

    class Phone extends Migration
        {
            public function up(): BelongsTo
            {
                 return $this->belongTo(Data::class);

            }
        }



?>
