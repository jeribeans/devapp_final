<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('products', function(Blueprint $table) {
          $table->engine = 'InnoDB';

          $table->integer('product_id');
          $table->string('product_name', 45);
          $table->decimal('product_price', 10, 5);
          $table->string('product_uom', 10);

          $table->primary('product_id');

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
        Schema::dropIfExists('products');
    }
}
