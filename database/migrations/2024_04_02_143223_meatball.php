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
        Schema::dropIfExists('meatball');
        Schema::create('meatball', function (Blueprint $table) {
            $table->increments('meatball_id');
            $table->string('name', 50);
            $table->integer('price');
            $table->integer('amount')->default(0);
            $table->string('image', 255)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('meatball');
    }
};
