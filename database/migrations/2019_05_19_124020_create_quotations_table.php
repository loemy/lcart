<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuotationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quotations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->softDeletes();
			$table->bigInteger('customer_id')->unsigned()->index();
			$table->datetime('quote_send');
			$table->bigInteger('store_id')->unsigned()->index();
			$table->bigInteger('tax_id')->unsigned();
			$table->bigInteger('requote_id')->unsigned();
			$table->bigInteger('currency_id')->unsigned();
			$table->date('expiry_date');
			$table->string('description');
			$table->string('subject');
            $table->string('term');
			$table->string('payment_term');
			$table->string('delivery_term');
			$table->string('ref', 64)->unique();

        });

        Schema::create('quotation_history', function(Blueprint $table) {
			$table->bigIncrements('id');
			$table->timestamps();
			$table->bigInteger('history_id')->unsigned();
			$table->bigInteger('quote_id')->unsigned();
		});

        Schema::create('quotation_products', function(Blueprint $table) {
			$table->bigIncrements('id');
			$table->timestamps();
			$table->bigInteger('product_id')->unsigned();
			$table->bigInteger('quote_id')->unsigned();
			$table->integer('quantity');
			$table->decimal('price', 15,4)->default('0.00');
			$table->decimal('subtotal', 15,4)->default('0.00');
			$table->string('description');
			$table->decimal('base_price', 15,4);
		});

        Schema::create('quotation_status', function(Blueprint $table) {
			$table->bigIncrements('id');
			$table->timestamps();
			$table->bigInteger('status_id')->unsigned()->index();
			$table->bigInteger('quote_id')->unsigned();
		});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('quotations');
        Schema::dropIfExists('quotation_history');
        Schema::dropIfExists('quotation_products');
        Schema::dropIfExists('quotation_status');
    }
}
