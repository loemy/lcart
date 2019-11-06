<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTaxesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('taxes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->softDeletes();
			$table->string('title', 32);
			$table->string('description', 255);
        });
        Schema::create('tax_rates', function(Blueprint $table) {
			$table->bigIncrements('id');
			$table->timestamps();
			$table->softDeletes();
			$table->bigInteger('geo_id')->unsigned()->index();
			$table->string('name', 32);
			$table->decimal('rate', 15,4)->default('0.0000');
			$table->tinyInteger('type');
			$table->bigInteger('customer_group_id')->unsigned();
		});

		Schema::create('tax_rules', function(Blueprint $table) {
			$table->bigIncrements('id');
			$table->timestamps();
			$table->softDeletes();
			$table->bigInteger('tax_rate_id')->unsigned();
			$table->bigInteger('tax_id')->unsigned();
			$table->string('based');
			$table->tinyInteger('position');

		});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('taxes');
        Schema::drop('tax_rules');
		Schema::drop('tax_rates');

    }
}
