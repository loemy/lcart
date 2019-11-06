<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->bigInteger('product_id')->unsigned();
			$table->bigInteger('customer_id')->unsigned();
			$table->tinyInteger('approved')->default('0');
			$table->ipAddress('ip');
			$table->datetime('date_create');
			$table->float('rating');
			$table->integer('rating_sum');
			$table->integer('rating_count');
			$table->string('author', 100);
			$table->string('title');
			$table->text('text');
        });

        Schema::create('rating_types', function(Blueprint $table) {
			$table->bigIncrements('id');
			$table->timestamps();
			$table->bigInteger('category_id')->unsigned();
			$table->string('name');
			$table->smallInteger('position')->default('0');

		});
		Schema::create('rating_summaries', function(Blueprint $table) {
			$table->bigIncrements('id');
			$table->timestamps();
			$table->bigInteger('product_id')->unsigned();
			$table->bigInteger('rating_type_id')->unsigned();
			$table->bigInteger('rating_sum');
			$table->bigInteger('rating_count');
			$table->float('rating');

		});
		Schema::create('ratings', function(Blueprint $table) {
			$table->bigIncrements('id');
			$table->timestamps();
			$table->bigInteger('product_id')->unsigned();
			$table->bigInteger('customer_id')->unsigned();
			$table->bigInteger('review_id')->unsigned();
			$table->bigInteger('rating_type_id')->unsigned();
			$table->integer('rating');
			$table->ipAddress('ip');


		});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reviews');
        Schema::dropIfExists('rating_types');
        Schema::dropIfExists('rating_summaries');
        Schema::dropIfExists('ratings');
    }
}
