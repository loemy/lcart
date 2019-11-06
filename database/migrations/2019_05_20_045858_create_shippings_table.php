<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShippingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shippings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('name');
			$table->bigInteger('module_id')->unique()->unsigned();
            $table->bigInteger('supplier_id')->unique()->unsigned();
			$table->tinyInteger('position')->nullable();
			$table->tinyInteger('status')->default('0');
        });

        Schema::create('shipping_settings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
			$table->bigInteger('shipping_id')->unique()->unsigned();
            $table->bigInteger('setting_id')->unique()->unsigned();
        });

        Schema::create('shipping_markups', function(Blueprint $table) {
			$table->bigIncrements('id');
			$table->timestamps();
			$table->softDeletes();
			$table->bigInteger('shipping_id')->unsigned();
			$table->bigInteger('state_id')->unsigned();
			$table->decimal('min_weight', 15,4);
			$table->decimal('max_weight', 15,4);
			$table->decimal('min_total', 15,4);
			$table->decimal('max_total', 15,4);
			$table->decimal('min_item', 15,4);
			$table->decimal('max_item', 15,4);
			$table->decimal('flat', 15,4);
			$table->decimal('percentage', 15,4);
			$table->decimal('per_item', 15,4);
			$table->decimal('per_weight', 15,4);
		});

		Schema::create('shipping_rates', function(Blueprint $table) {
			$table->bigIncrements('id');
			$table->timestamps();
			$table->softDeletes();
			$table->bigInteger('supplier_id')->unsigned();
			$table->bigInteger('shipping_id')->unsigned();
			$table->float('weight_range_start');
			$table->float('weight_range_end');
			$table->float('subtotal_Range_Start');
			$table->float('subtotal_Range_end');
			$table->float('flat_charge');
			$table->float('per_Item_Charge');
			$table->float('subtotal_Percent_Charge');
			$table->float('per_Kg_Charge');
			$table->text('per_Item_Charge_Class');
			$table->float('max_length');
			$table->float('min_length');
			$table->float('max_height');
			$table->float('min_height');
			$table->float('max_width');
			$table->float('min_width');
			$table->decimal('length_Plus_Girth_Max', 11,4);
			$table->decimal('length_Height_Width_Sum_Max', 11,1);
			$table->decimal('over_size_Limit', 11,1);
			$table->tinyInteger('allowed_As_Return_Service');
			$table->bigInteger('weight_id')->unsigned();
			$table->bigInteger('length_id')->unsigned();
			$table->bigInteger('geo_id')->unsigned();
			$table->bigInteger('surcharge_id')->unsigned();
		});

		Schema::create('shipping_tax', function(Blueprint $table) {
			$table->timestamps();
			$table->bigInteger('tax_rate_id')->unsigned();
			$table->bigInteger('shipping_id')->unsigned();
		});



		Schema::create('surcharges', function(Blueprint $table) {
			$table->bigIncrements('id');
			$table->timestamps();
			$table->tinyInteger('type');
			$table->string('name');
			$table->decimal('amount', 15,4)->default('0.0000');
		});



       Schema::create('packages', function(Blueprint $table) {
            $table->bigIncrements('id');
			$table->timestamps();
			$table->softDeletes();
			$table->bigInteger('order_id')->unsigned();
			$table->string('package_no');
			$table->string('name');
			$table->string('description',255);
			$table->smallInteger('status');
			$table->smallInteger('quotetype');
			$table->decimal('width', 15,4);
			$table->decimal('length', 15,4);
			$table->decimal('height', 15,4);
			$table->decimal('min_weight', 15,4);
			$table->decimal('max_weight', 15,4);
			$table->decimal('cost', 15,4);
			$table->tinyInteger('notify_carrier');
			$table->tinyInteger('on_shipment');
			$table->datetime('pickup_date');
			$table->string('tracking_no', 40)->unique()->nullable();

		});

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shippings');
        Schema::dropIfExists('shipping_settings');
        Schema::dropIfExists('shipping_markups');
        Schema::dropIfExists('shipping_rates');
        Schema::dropIfExists('surcharges');
        Schema::dropIfExists('shipping_tax');
        Schema::dropIfExists('packages');
    }
}
