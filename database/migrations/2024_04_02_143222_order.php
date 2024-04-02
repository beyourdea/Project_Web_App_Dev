<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::dropIfExists('order');
        Schema::create('order', function (Blueprint $table) {
            $table->increments('order_id');
            $table->unsignedInteger('customer_id');
            $table->unsignedInteger('payment_id');
            $table->unsignedInteger('sauce_id');
            $table->unsignedInteger('side_dishes_id');
            $table->unsignedInteger('promotion_id')->nullable();
            $table->dateTime('order_date')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->dateTime('payment_date')->nullable();
            $table->integer('total_price')->default(0);
            
            $table->index('customer_id');
            $table->index('payment_id');
            $table->index('sauce_id');
            $table->index('side_dishes_id');
            $table->index('promotion_id');
            
            $table->foreign('customer_id')->references('customer_id')->on('customer')->onDelete('NO ACTION')->onUpdate('NO ACTION');
            $table->foreign('payment_id')->references('payment_id')->on('payment')->onDelete('NO ACTION')->onUpdate('NO ACTION');
            $table->foreign('sauce_id')->references('sauce_id')->on('sauce')->onDelete('NO ACTION')->onUpdate('NO ACTION');
            $table->foreign('side_dishes_id')->references('side_dishes_id')->on('side_dishes')->onDelete('NO ACTION')->onUpdate('NO ACTION');
            $table->foreign('promotion_id')->references('promotion_id')->on('promotion')->onDelete('NO ACTION')->onUpdate('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order');
    }
};
