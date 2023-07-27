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
        Schema::create('item_order', function (Blueprint $table) {
            $table->unsignedBigInteger('item_id');
	        $table->foreign('item_id')->references('id')->on('items')->cascadeOnDelete();

	        $table->unsignedBigInteger('order_id');
	        $table->foreign('order_id')->references('id')->on('orders')->cascadeOnDelete();

	        $table->tinyInteger('qt_item');

	        $table->primary(['item_id', 'order_id']);
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
        Schema::dropIfExists('item_order');
    }
};
