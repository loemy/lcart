<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePurchasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchases', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->softDeletes();
            $table->bigInteger('brand_id')->unsigned()->index();
			$table->bigInteger('supplier_id')->unsigned()->index();
			$table->bigInteger('tax_id')->unsigned()->index();
			$table->string('po_number')->unique();
			$table->string('name', 255);
			$table->string('model', 64);
			$table->string('image', 255);
			$table->decimal('price', 15,4)->default('0.0000');
			$table->decimal('price_per_piece', 15,4)->default('0.0000');
			$table->decimal('ship_cost', 15,4)->default('0.0000');
			$table->decimal('total_cost', 15,4)->default('0.0000');
			$table->decimal('avg_cost', 15,4)->default('0.0000');
			$table->bigInteger('unit');
			$table->string('colour', 64);
			$table->string('size', 64);
			$table->decimal('quantity', 15,4);
			$table->decimal('length', 15,8)->default('0.00000000');
			$table->decimal('width', 15,8)->default('0.00000000');
			$table->decimal('height', 15,8)->default('0.00000000');
			$table->decimal('weight', 15,8)->default('0.00000000');
			$table->tinyInteger('status')->default('1');
			$table->bigInteger('length_id')->unsigned();
			$table->bigInteger('weight_id')->unsigned();
        });

        Schema::create('purchase_attributes', function(Blueprint $table) {
			$table->timestamps();
			$table->bigInteger('purchase_id')->unsigned();
			$table->bigInteger('attribute_id')->unsigned();
			$table->text('text');
        });

        Schema::create('purchase_returns', function(Blueprint $table) {
			$table->bigIncrements('id');
			$table->timestamps();
			$table->softDeletes();
			$table->bigInteger('purchase_id')->unsigned();
			$table->bigInteger('supplier_id')->unsigned();
			$table->bigInteger('product_id')->unsigned();
			$table->integer('return_quantity');
			$table->string('return_number')->unique();
			$table->datetime('return_date');
			$table->string('reason', 64);
			$table->tinyInteger('status')->default('0');

		});
        Schema::create('stocks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->softDeletes();
			$table->datetime('purchase_date');
			$table->tinyInteger('status')->default('1');
			$table->datetime('receive_date');
			$table->tinyInteger('receive')->default('0');
			$table->tinyInteger('pending')->default('1');
			$table->integer('balance_qty');
			$table->text('remark');
        });


		//whose can perform the purchase
		Schema::create('stock_receives', function(Blueprint $table) {
			$table->bigIncrements('id');
			$table->timestamps();
			$table->softDeletes();
			$table->integer('quantity');
			$table->bigInteger('product_id')->unsigned();
			$table->bigInteger('supplier_id')->unsigned();
			$table->bigInteger('purchase_id')->unsigned();
			$table->bigInteger('stock_id')->unsigned();

		});

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('purchases');
        Schema::dropIfExists('purchase_attributes');
        Schema::dropIfExists('purchase_returns');
        Schema::dropIfExists('stocks');
        Schema::dropIfExists('stock_receives');



    }
}
