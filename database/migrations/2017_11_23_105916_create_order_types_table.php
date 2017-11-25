<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('order_type', function(Blueprint $table) {
      $table->engine = 'InnoDB';

      $table->integer('ordertype_id');
      $table->string('walkin_type', 45)->default(null);
      $table->string('business_type', 45)->default(null);

      $table->primary('ordertype_id');

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
        Schema::dropIfExists('order_types');
    }
}
