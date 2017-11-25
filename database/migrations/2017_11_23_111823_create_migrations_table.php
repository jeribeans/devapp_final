<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMigrationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::enableForeignKeyConstraints();
        
        Schema::table('inventories', function (Blueprint $table) {
          $table->foreign('productid')
              ->references('product_id')->on('products');
        });

        Schema::table('orders', function (Blueprint $table) {
          $table->foreign('order_ordertype')
  		        ->references('job_order_id')->on('job_order');
        });

        Schema::table('job_order_items', function (Blueprint $table) {
          $table->foreign('jo_stockid')
              ->references('job_order_id')->on('job_order');
        });

        Schema::table('order_items', function (Blueprint $table) {
          $table->foreign('orderitem_orderid')
              ->references('inventory_id')->on('inventories');
        });

        Schema::table('product_ingredient', function (Blueprint $table) {
          $table->foreign('productid')
              ->references('ingredient_id')->on('ingredient');
        });

        Schema::table('stocks', function (Blueprint $table) {
          $table->foreign('productid')
              ->references('product_id')->on('products');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('migrations');
    }
}
