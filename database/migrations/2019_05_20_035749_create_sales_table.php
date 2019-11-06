<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sales', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->softDeletes();
			$table->morphs('saleable');
			$table->tinyInteger('position');
			$table->tinyInteger('status')->default('1');
			$table->tinyInteger('condition')->default('0');
			$table->string('name');
			$table->decimal('deduction_value', 15,4)->default('0.0000');
			$table->decimal('price_range_from', 15,4)->default('0.0000');
			$table->decimal('price_range_to', 15,4)->default('0.0000');
			$table->datetime('date_start');
			$table->datetime('date_end');
        });

        Schema::create('sale_product', function(Blueprint $table) {
            $table->bigIncrements('id');
			$table->timestamps();
			$table->bigInteger('product_id')->unsigned();
			$table->bigInteger('sale_id')->unsigned();


        });

        Schema::create('sale_store', function(Blueprint $table) {
			$table->timestamps();
			$table->bigInteger('store_id')->unsigned();
			$table->bigInteger('sale_id')->unsigned();


		});


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sales');
        Schema::dropIfExists('sale_product');
        Schema::dropIfExists('sale_store');
    }
}
