<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBannersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('banners', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->softDeletes();
			$table->bigInteger('banner_group_id')->unsigned();
			$table->string('name', 64);
			$table->tinyInteger('status')->default('0');
			$table->integer('main_width');
			$table->integer('main_hight');
			$table->datetime('scheduled');
			$table->datetime('expired');

        });

        Schema::create('banner_groups', function(Blueprint $table) {
			$table->bigIncrements('id');
			$table->timestamps();
			$table->string('name');
			$table->integer('position');
			$table->tinyInteger('status')->default('0');
		});

		Schema::create('banner_histories', function(Blueprint $table) {
			$table->bigIncrements('id');
			$table->timestamps();
			$table->bigInteger('banner_id')->unsigned();
			$table->integer('show');
			$table->integer('clicked');
			$table->datetime('date');
        });

        Schema::create('images', function(Blueprint $table) {
			$table->bigIncrements('id');
			$table->timestamps();
			$table->softDeletes();
			$table->bigInteger('banner_id')->unsigned();
			$table->string('link',255);
			$table->string('image',255);
			$table->bigInteger('product_id')->unsigned();
			$table->tinyInteger('position');
			$table->text('params');
            $table->string('title', 100);
			$table->text('description');
			$table->text('custom_code');

		});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('banners');
        Schema::dropIfExists('banner_groups');
        Schema::dropIfExists('banner_histories');
        Schema::dropIfExists('images');
    }
}
