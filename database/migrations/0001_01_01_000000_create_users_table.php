<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('username')->unique();
            $table->string('password')->nullable(false);
            $table->rememberToken();
            $table->timestamp('created_at')->nullable();
            $table->unsignedInteger('updated_at')->nullable();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
