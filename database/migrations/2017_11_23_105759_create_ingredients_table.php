<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIngredientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('ingredient', function(Blueprint $table) {
      $table->engine = 'InnoDB';

      $table->integer('ingredient_id');
      $table->string('ingredient_name', 45);

      $table->primary('ingredient_id');

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
        Schema::dropIfExists('ingredients');
    }
}
