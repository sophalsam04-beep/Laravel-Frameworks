<?php
    // column type of schema

    // Modifying the schema migrations
    use Illuminate\Support\Facades\Schema;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Database\Migrations\Migration;

    return new class extends Migration
    {
        public function up(): void
        {
            Schema::table('emp', function (Blueprint $table) {
                $table->string('status')->default('draft')->after('title');
            });
        }


        public function down(): void
        {
            Schema::table('status', function (Blueprint $table) {
                $table->dropColumn('status');
            });
        }
    };





?>
