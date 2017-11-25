<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductIngredientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('product_ingredient', function(Blueprint $table) {
      $table->engine = 'InnoDB';

      $table->integer('id_productIngredient');
      $table->integer('productID');
      $table->integer('product_ingredient_id');

      $table->primary('id_productIngredient');

      $table->index('productid','product_id_idx');
      $table->index('product_ingredient_id','product_ingredient_id_idx');

      /*
      $table->foreign('productid')
          ->references('ingredient_id')->on('t');
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
        Schema::dropIfExists('product_ingredients');
    }
}
