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
        Schema::create('houses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('agent_id')->index();
            $table->foreign('agent_id')->on('house_agents')->references('id')->cascadeOnDelete();
            $table->string('location')->default('lafia');
            $table->text('description'); //Single room or self contain
            $table->string('rent_amount')->default('0');
            $table->boolean('negotiable')->default('1');
            $table->string('number_of_bedrooms');
            $table->string('status')->nullable(); //deleted or active
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('houses');
    }
};
