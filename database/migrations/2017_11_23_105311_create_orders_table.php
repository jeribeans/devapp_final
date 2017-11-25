<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){

    Schema::create('orders', function(Blueprint $table) {
		    $table->engine = 'InnoDB';

		    $table->integer('order_id');
		    $table->string('order_customer_name', 45);
		    $table->string('order_customer_contactNo', 11);
		    $table->date('order_issued_date');
		    $table->date('order_accessed_date');
		    $table->string('order_accessed_by', 45);
		    $table->string('order_status', 45);
		    $table->integer('order_trackID');
		    $table->integer('order_orderType');
		    $table->integer('order_joID')->default(null);

		    $table->primary('order_id');

		    $table->unique('order_trackid','order_trackid_unique');

		    $table->index('order_ordertype','order_ordertype_idx');
		    $table->index('order_joid','order_joid_idx');

		    /*$table->foreign('order_ordertype')
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
        Schema::dropIfExists('orders');
    }
}
