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
        Schema::create('corpers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->index();
            $table->foreign('user_id')->on('users')->references('id')->cascadeOnDelete();
            $table->string('state_of_service');
            $table->string('batch_number');
            $table->string('profile_picture')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('corpers');
    }
};
