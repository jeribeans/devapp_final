<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobOrderItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('job_order_items', function(Blueprint $table) {
  $table->engine = 'InnoDB';

  $table->integer('order_details_id');
  $table->integer('jo_orderID');
  $table->integer('jo_stockID');

  $table->primary('order_details_id');

  $table->index('jo_orderid','jo_orderid_idx');
  $table->index('jo_stockid','jo_inventoryid_idx');

  /*
  $table->foreign('jo_stockid')
      ->references('job_order_id')->on('r');
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
        Schema::dropIfExists('job_order_items');
    }
}
