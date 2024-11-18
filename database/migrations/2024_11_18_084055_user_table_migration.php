<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Create the users table
        Schema::create('users', function (Blueprint $table) {
            $table->id(); // Auto-incrementing ID field
            $table->string('name'); // Name field
            $table->string('email')->unique(); // Email field, should be unique
            $table->timestamp('email_verified_at')->nullable(); // Email verification timestamp (nullable)
            $table->string('password'); // Password field
            $table->rememberToken(); // Remember token for "remember me" functionality
            $table->timestamps(); // Created at and updated at timestamps
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Drop the users table if the migration is rolled back
        Schema::dropIfExists('users');
    }
};
