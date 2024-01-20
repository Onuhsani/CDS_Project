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
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->index();
            $table->foreign('user_id')->on('users')->references('id')->cascadeOnDelete();
            $table->foreignId('category_id')->index();
            $table->foreign('category_id')->on('categories')->references('id')->cascadeOnDelete();
            $table->string('item_name');
            $table->text('description');
            $table->string('price');
            $table->string('condition'); // new or used
            $table->string('item_image')->nullable();
            $table->string('status')->nullable(); //deleted or active
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('items');
    }
};
