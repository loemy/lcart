<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->softDeletes();
			$table->string('image');
			$table->dateTime('published_at')->nullable();
			$table->boolean('viewed')->default(0);
			$table->tinyInteger('status')->default('0');
            $table->string('title',250);
			$table->string('slug');
			$table->text('description');
			$table->bigInteger('tag_id')->unsigned();
            $table->bigInteger('meta_id')->unsigned();
			$table->bigInteger('store_id')->unsigned();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('news');
    }
}
