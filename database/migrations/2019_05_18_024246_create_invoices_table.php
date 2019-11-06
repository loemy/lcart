<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->softDeletes();
			$table->bigInteger('store_id')->unsigned()->index();
			$table->string('invoice_prefix', 26);
			$table->string('invoice_number')->unique();
			$table->bigInteger('order_id')->unsigned()->index();
			$table->string('invoice_status_code');
			$table->date('invoiced_at');
			$table->date('due_at');
			$table->double('amount', 15,4);
			$table->string('currency_code');
			$table->bigInteger('currency_id')->unsigned()->index();
			$table->bigInteger('customer_id')->unsigned()->index();
			$table->bigInteger('address_id')->unsigned();
			$table->text('notes');
			$table->string('attachment')->nullable();
        });

        Schema::create('invoice_history', function(Blueprint $table) {
			$table->bigIncrements('id');
			$table->timestamps();
			$table->bigInteger('invoice_id')->unsigned()->index();
			$table->BigInteger('history_id')->unsigned()->index();
		});

        Schema::create('invoice_payments', function(Blueprint $table) {
			$table->bigIncrements('id');
			$table->timestamps();
		    $table->softDeletes();
			$table->bigInteger('store_id')->unsigned()->index();
            $table->bigInteger('invoice_id')->unsigned();
		    $table->bigInteger('payment_method_id')->unsigned();
			$table->biginteger('currency_id')->unsigned();
            $table->date('paid_at');
            $table->double('amount', 15, 4);
            $table->double('currency_rate', 15, 8);
            $table->text('description')->nullable();
            $table->string('reference')->nullable();
            $table->string('attachment')->nullable();
		});

        Schema::create('invoice_status', function(Blueprint $table) {
			$table->bigIncrements('id');
			$table->timestamps();
			$table->bigInteger('invoice_id')->unsigned();
			$table->bigInteger('status_id')->unsigned();
		});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('invoices');
        Schema::dropIfExists('invoice_history');
        Schema::dropIfExists('invoice_payments');
        Schema::dropIfExists('invoice_status');
    }
}
