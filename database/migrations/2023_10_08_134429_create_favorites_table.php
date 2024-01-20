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
        Schema::create('favorites', function (Blueprint $table) {
            $table->id();
            $table->foreignId('corper_id')->index();
            $table->foreign('corper_id')->on('corpers')->references('id')->cascadeOnDelete();
            $table->foreignId('house_id')->index()->nullable();
            $table->foreign('house_id')->on('houses')->references('id')->cascadeOnDelete();
            $table->foreignId('item_id')->index()->nullable();
            $table->foreign('item_id')->on('items')->references('id')->cascadeOnDelete();
            $table->string('status')->nullable(); //deleted or active
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('favorites');
    }
};
