<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->softDeletes();
			$table->string('name');
			$table->bigInteger('store_id')->unsigned()->index();
			$table->bigInteger('payment_method_id')->unsigned()->index();
			$table->bigInteger('supplier_id')->unsigned()->index();
			$table->datetime('paid_at');
			$table->double('amount', 15,4)->default('0.0000');
			$table->bigInteger('currency_id')->unsigned()->index();
			$table->text('description')->nullable();
			$table->string('reference')->nullable();
			$table->string('attachment')->nullable();
        });

        Schema::create('payment_methods', function(Blueprint $table) {
            $table->bigIncrements('id');
			$table->timestamps();
			$table->softDeletes();
			$table->string('name');
			$table->bigInteger('module_id')->unique()->unsigned();
            $table->bigInteger('merchant_id')->unique()->unsigned();
			$table->tinyInteger('position');
			$table->tinyInteger('status')->default('0');
		});

        Schema::create('payment_settings', function(Blueprint $table) {
            $table->bigIncrements('id');
			$table->timestamps();
			$table->bigInteger('payment_method_id')->unsigned();
			$table->bigInteger('setting_id')->unsigned();
			$table->string('name');
			$table->longText('value');
		});
        //provice service provice details
        Schema::create('merchants', function(Blueprint $table) {
            $table->bigIncrements('id');
			$table->timestamps();
			$table->bigInteger('supplier_id')->unsigned();

		});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payments');
        Schema::dropIfExists('payment_methods');
        Schema::dropIfExists('payment_settings');
        Schema::dropIfExists('merchants');
    }
}
