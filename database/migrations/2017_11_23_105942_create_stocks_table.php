<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStocksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('stocks', function(Blueprint $table) {
      $table->engine = 'InnoDB';

      $table->integer('inventory_id');
      $table->integer('productID');
      $table->integer('product_count');
      $table->date('date_accessed');
      $table->string('accessed_by', 45);

      $table->primary('inventory_id');

      $table->index('productid','productid_idx');

      /*
      $table->foreign('productid')
          ->references('product_id')->on('s');
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
        Schema::dropIfExists('stocks');
    }
}
