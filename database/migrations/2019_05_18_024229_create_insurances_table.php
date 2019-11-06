<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInsurancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('insurances', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->boolean('required');
			$table->string('type');
			$table->datetime('period');
			$table->decimal('increment_amount', 15,4)->default('0.0000');
			$table->tinyInteger('status');
			$table->decimal('percentage');
			$table->decimal('min_fee');
			$table->bigInteger('shipping_id')->unsigned();
			$table->bigInteger('order_id')->unsigned();
			$table->bigInteger('insurance_rate_id')->unsigned();
			$table->bigInteger('insurance_rule_id')->unsigned();
        });

        Schema::create('insurance_rates', function(Blueprint $table) {
            $table->bigIncrements('id');
			$table->timestamps();
			$table->decimal('fee', 15,4);
			$table->bigInteger('geo_id')->unsigned();
			$table->tinyInteger('status');
		});
		Schema::create('insurance_rules', function(Blueprint $table) {
            $table->bigIncrements('id');
            $table->softDeletes();
            $table->timestamps();
            $table->string('name');
            $table->tinyInteger('position')->nullable();
            $table->enum('allow', ['allow','restrict']);
            $table->string('key', 64);
            $table->string('value')->nullable();
            $table->boolean('required_insurance_amount');
            $table->boolean('excluded_free_shipping');
            $table->boolean('excluded_gift_voucher');
            $table->boolean('excluded_download_product');
            $table->smallInteger('multiple')->nullable()->default('0');

		});
		Schema::create('insurance_taxes', function(Blueprint $table) {
			$table->timestamps();
			$table->bigInteger('insurance_id')->unsigned();
			$table->bigInteger('tax_rate_id')->unsigned();
		});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('insurances');
        Schema::dropIfExists('insurance_rates');
        Schema::dropIfExists('insurance_rules');
        Schema::dropIfExists('insurance_taxes');
    }
}
