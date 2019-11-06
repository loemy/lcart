<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWishlistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wishlists', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->bigInteger('customer_id')->unsigned();
			$table->bigInteger('product_id')->unsigned();
        });

        Schema::create('wishlist_options', function(Blueprint $table) {
            $table->bigIncrements('id');
			$table->timestamps();
			$table->bigInteger('wishlist_id')->unsigned();
			$table->bigInteger('option_id')->unsigned();
			$table->bigInteger('option_value_id')->unsigned();
		});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('wishlists');
        Schema::dropIfExists('wishlist_options');
    }
}
