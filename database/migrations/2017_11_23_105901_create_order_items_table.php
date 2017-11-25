<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('order_items', function(Blueprint $table) {
  $table->engine = 'InnoDB';

  $table->integer('order_items_id');
  $table->integer('orderItem_stockID');
  $table->integer('orderItem_orderID');

  $table->primary('order_items_id');

  $table->index('orderitem_stockid','order_inventoryid_idx');
  $table->index('orderitem_orderid','orderitem_orderid_idx');

  /*
  $table->foreign('orderitem_orderid')
      ->references('inventory_id')->on('s');
      */

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
        Schema::dropIfExists('order_items');
    }
}
