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
        Schema::create('order_item_by_id', function (Blueprint $table) {
            $table->id();
            $table->integer('order_id');
            $table->integer('food_id');
            $table->integer('quantity');
            $table->integer('total');
            $table->integer('adjustedTotal')->nullable();
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_item_by_id');
    }
};
