<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('histories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->bigInteger('type_id')->unsigned();
			$table->tinyInteger('notify');
			$table->text('comment')->nullable();
			$table->tinyInteger('status')->default('1');
        });

        Schema::create('types', function(Blueprint $table) {
			$table->bigIncrements('id');
			$table->timestamps();
            $table->string('name');
            $table->morphs('typeable');
            $table->bigInteger('parent_id')->unsigned()->index();
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
        Schema::dropIfExists('histories');
        Schema::dropIfExists('types');
    }
}
