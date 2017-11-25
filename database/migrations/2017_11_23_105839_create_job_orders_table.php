<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('job_order', function(Blueprint $table) {
      $table->engine = 'InnoDB';

      $table->integer('job_order_id');
      $table->date('jo_date_issued');
      $table->string('jo_requested_by', 45);
      $table->string('jo_status', 45);

      $table->primary('job_order_id');

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
        Schema::dropIfExists('job_orders');
    }
}
