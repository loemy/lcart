<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->softDeletes();
			$table->integer('service_no')->unique();
			$table->string('description');
			$table->string('problem');
			$table->string('solution');
			$table->string('product');
			$table->string('model');
			$table->string('image');
			$table->string('serial_no',32);
			$table->integer('quantity');
			$table->tinyInteger('warranty_check')->default('0');
			$table->decimal('service_price', 15,4)->default('0.0000');
			$table->decimal('estimate_price', 15,4)->default('0.0000');
			$table->decimal('min_charge', 15,4)->default('0.0000');
			$table->decimal('part_cost', 15,4)->default('0.0000');
			$table->decimal('other_charge', 15,4)->default('0.0000');
			$table->tinyInteger('status')->default('0');
			$table->tinyInteger('is_free')->default('0');
			$table->tinyInteger('quote')->default('0');
			$table->text('comment');
			$table->text('accessory');
			$table->tinyInteger('service_warranty')->default('0');
			$table->datetime('date_order');
			$table->datetime('date_finish');
			$table->string('contact_person',64);
            $table->bigInteger('product_id')->unsigned();
			$table->bigInteger('customer_id')->unsigned();
			$table->bigInteger('address_id')->unsigned();
			$table->bigInteger('brand_id')->unsigned();
			$table->bigInteger('tax_rate_id')->unsigned();
			$table->bigInteger('status_id')->unsigned();
        });

        Schema::create('service_actions', function(Blueprint $table) {
			$table->bigIncrements('id');
			$table->timestamps();
			$table->bigInteger('user_id')->unsigned();
			$table->string('name');
			$table->string('note');
			$table->bigInteger('priority_id')->unsigned();
			$table->datetime('repair_received');
			$table->datetime('repair_completed');
			$table->boolean('completed')->default(0);
			$table->bigInteger('service_id')->unsigned();
		});
		Schema::create('service_category', function(Blueprint $table) {
			$table->timestamps();
			$table->bigInteger('service_id')->unsigned();
			$table->bigInteger('category_id')->unsigned();
		});

		Schema::create('service_histories', function(Blueprint $table) {
			$table->bigIncrements('id');
			$table->timestamps();
			$table->softDeletes();
			$table->bigInteger('service_id')->unsigned();
			$table->bigInteger('history_id')->unsigned();



		});
		Schema::create('service_options', function(Blueprint $table) {
			$table->bigIncrements('id');
			$table->timestamps();
			$table->string('name');
			$table->string('type');
			$table->smallInteger('position');
			$table->bigInteger('service_id')->unsigned();
		});
		//consider related purchase order, status to reflect the availability of the part
		Schema::create('service_parts', function(Blueprint $table) {
			$table->bigIncrements('id');
			$table->timestamps();
			$table->softDeletes();
			$table->bigInteger('service_id')->unsigned();
			$table->bigInteger('supplier_id')->unsigned();
			$table->string('model');
			$table->string('name');
			$table->decimal('price', 15,4);
			$table->decimal('discount', 4,2);
			$table->decimal('amount', 15,4);
			$table->decimal('products_tax', 7,2);
			$table->float('quantity');
			$table->string('part_no', 128);
			$table->tinyInteger('availability')->default('1');
			$table->tinyInteger('service_returned')->default('0');
			$table->tinyInteger('replacement_serviced')->default('0');
		});
		Schema::create('priorities', function(Blueprint $table) {
			$table->bigIncrements('id');
			$table->timestamps();
			$table->softDeletes();
			$table->string('name');
			$table->string('description');
			$table->tinyInteger('status')->default('1');
			$table->tinyInteger('is_default');
		});
		Schema::create('service_shippings', function(Blueprint $table) {
			$table->bigIncrements('id');
			$table->timestamps();
			$table->softDeletes();
			$table->bigInteger('service_id')->unsigned();
			$table->bigInteger('package_id')->unsigned();
			$table->string('name');

		});


		Schema::create('service_types', function(Blueprint $table) {
			$table->bigIncrements('id');
			$table->timestamps();
			$table->string('name');
			$table->morphs('typable');
			$table->string('image');
			$table->tinyInteger('status');
			$table->bigInteger('service_id')->unsigned();
			$table->bigInteger('contract_id')->unsigned();
		});

		Schema::create('service_warranty', function(Blueprint $table) {
			$table->timestamps();
			$table->bigInteger('service_id')->unsigned();
			$table->bigInteger('warranty_id')->unsigned();
		});

		Schema::create('order_service', function(Blueprint $table) {
			$table->timestamps();
			$table->bigInteger('order_id')->unsigned();
			$table->bigInteger('service_id')->unsigned();
		});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('services');
        Schema::dropIfExists('service_actions');
        Schema::dropIfExists('service_category');
        Schema::dropIfExists('service_histories');
        Schema::dropIfExists('service_options');
        Schema::dropIfExists('service_parts');
        Schema::dropIfExists('priorities');
        Schema::dropIfExists('service_types');
        Schema::dropIfExists('service_warranty');
        Schema::dropIfExists('order_service');
    }
}
