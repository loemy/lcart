<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCouponsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coupons', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('code', 64)->unique();
			$table->bigInteger('type_id')->unsigned();
			$table->bigInteger('setting_id')->unsigned();
			$table->decimal('coupon_discount', 15,4)->default('0.0000');
			$table->tinyInteger('logged');
			$table->tinyInteger('shipping');
			$table->decimal('total', 15,4)->default('0.0000');
			$table->datetime('date_start')->nullable();
			$table->datetime('expire');
			$table->integer('uses_total');
			$table->string('uses_customer', 11);
			$table->tinyInteger('status')->default('1');
			$table->decimal('min_order', 15,4)->default('0.0000');
			$table->smallInteger('uses_per_coupon');
            $table->string('name', 64);
			$table->string('descriptions');
        });

        Schema::create('coupon_histories', function(Blueprint $table) {
			$table->bigIncrements('id');
			$table->timestamps();
			$table->bigInteger('coupon_id')->unsigned();
			$table->bigInteger('order_id')->unsigned();
			$table->bigInteger('customer_id')->unsigned();
			$table->decimal('amount', 15,4)->default('0.0000');

		});


		Schema::create('coupon_redeems', function(Blueprint $table) {
			$table->bigIncrements('id');
			$table->timestamps();
			$table->bigInteger('coupon_id')->unsigned();
			$table->bigInteger('customer_id')->unsigned();
			$table->bigInteger('order_id')->unsigned();
			$table->datetime('redeem_date');
			$table->string('redeem_ip');



		});

		Schema::create('coupon_tracks', function(Blueprint $table) {
			$table->bigIncrements('id');
			$table->timestamps();
			$table->bigInteger('coupon_id')->unsigned();
			$table->bigInteger('customer_id')->unsigned();
			$table->string('firstname');
			$table->string('lastname');
			$table->string('email')->unique;
			$table->datetime('date_sent');

		});
		Schema::create('coupon_store', function(Blueprint $table) {
			$table->timestamps();
			$table->bigInteger('coupon_id')->unsigned();
			$table->bigInteger('store_id')->unsigned();

		});
		Schema::create('coupon_restrict', function(Blueprint $table) {
			$table->bigIncrements('id');
			$table->timestamps();
			$table->bigInteger('coupon_id')->unsigned();
			$table->bigInteger('restrict_id')->unsigned();
			$table->boolean('is_restrict')->default(false);
			$table->string('exclude')->nullable();

		});
        //how to merge coupon,gift, voucher
		Schema::create('restricts', function(Blueprint $table) {
			$table->bigIncrements('id');
			$table->timestamps();
			$table->bigInteger('setting_id')->unsigned();
			$table->bigInteger('customer_group_id')->unsigned()->nullable()->index()->default('0');
			$table->bigInteger('category_id')->unsigned()->nullable()->index()->default('0');
			$table->bigInteger('product_id')->unsigned()->nullable()->index()->default('0');
			$table->string('name');
			$table->text('description');
		});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('coupons');
        Schema::dropIfExists('coupon_histories');
        Schema::dropIfExists('coupon_redeems');
        Schema::dropIfExists('coupon_tracks');
        Schema::dropIfExists('coupon_store');
        Schema::dropIfExists('coupon_restrict');
        Schema::dropIfExists('restricts');

    }
}
