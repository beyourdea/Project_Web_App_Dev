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
        Schema::dropIfExists('order_detail');
        Schema::create('order_detail', function (Blueprint $table) {
            $table->increments('order_detail_id');
            $table->unsignedInteger('meatball_id');
            $table->integer('amount');
            $table->unsignedInteger('order_id');

            $table->index('meatball_id');
            $table->index('order_id');

            $table->foreign('meatball_id')
                ->references('meatball_id')
                ->on('meatball')
                ->onDelete('NO ACTION')
                ->onUpdate('NO ACTION');

            $table->foreign('order_id')
                ->references('order_id')
                ->on('order')
                ->onDelete('NO ACTION')
                ->onUpdate('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_detail');
    }
};
