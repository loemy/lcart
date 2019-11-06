<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLoyaltiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loyalties', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->softDeletes();
			$table->bigInteger('customer_id')->unsigned()->index();
			$table->bigInteger('customer_group_id')->unsigned()->index();
			$table->bigInteger('store_id')->unsigned()->index();
			$table->decimal('points', 15,4);
			$table->decimal('pending_points', 15,4);
			$table->string('points_comment');
			$table->text('description');
        });

        Schema::create('loyalty_groups', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->softDeletes();
			$table->bigInteger('product_id')->unsigned()->index();
			$table->bigInteger('setting_id')->unsigned();
			$table->tinyInteger('scope')->default('0');
			$table->integer('scope_id')->unique()->default('0');
			$table->decimal('point_ratio', 15,4);
			$table->decimal('bonus_points', 15,4);
			$table->decimal('redeem_ratio', 15,4);
			$table->decimal('redeem_points', 15,4);
			$table->string('points_type');
			$table->datetime('points_expires');
        });

        Schema::create('loyalty_statuses', function(Blueprint $table) {
			$table->bigIncrements('id');
			$table->timestamps();
			$table->bigInteger('loyalty_id')->unsigned();
			$table->bigInteger('order_id')->unsigned();
			$table->bigInteger('customer_id')->unsigned()->index();
			$table->datetime('date');
			$table->decimal('points', 15,4);
			$table->tinyInteger('status')->default('1');
		});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('loyalties');
        Schema::dropIfExists('loyalty_groups');
        Schema::dropIfExists('loyalty_statuses');
    }
}
