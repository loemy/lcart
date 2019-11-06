<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFaqsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('faqs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->bigInteger('faq_group_id')->unsigned();
			$table->bigInteger('tag_id')->unsigned();
            $table->bigInteger('meta_id')->unsigned();
			$table->smallInteger('position');
			$table->tinyInteger('status')->default('1');
            $table->string('question');
			$table->string('answer');

        });

        Schema::create('faq_store', function(Blueprint $table) {
			$table->timestamps();
			$table->bigInteger('faq_id')->unsigned();
			$table->bigInteger('store_id')->unsigned();

		});
		Schema::create('faq_groups', function(Blueprint $table) {
			$table->bigIncrements('id');
			$table->timestamps();
			$table->smallInteger('position');
			$table->string('name');
			$table->tinyInteger('status')->default('1');
			$table->bigInteger('parent_id')->unsigned()->nullable()->index();

		});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('faqs');
        Schema::dropIfExists('faq_store');
        Schema::dropIfExists('faq_groups');
    }
}
