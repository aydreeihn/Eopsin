<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInventoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventory', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('pid')->unsigned();
			$table->integer('staff_id')->unsigned();
            $table->integer('room_id')->unsigned();
            $table->integer('status_id')->unsigned();
            $table->string('name', 125);
            $table->string('description');
            $table->timestamp('created')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated')->default(DB::raw('CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inventory');
    }
}
