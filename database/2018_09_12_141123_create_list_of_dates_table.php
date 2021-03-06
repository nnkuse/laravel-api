<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateListOfDatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('list_of_dates', function (Blueprint $table) {
            $table->increments('ListOfDateID');
            $table->integer('ListItemID')->unsigned()->index();
            $table->foreign('ListItemID')
                ->references('ListItemID')
                ->on('list_items')
                ->onDelete('cascade');
            $table->date('InDate');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('list_of_dates');
    }
}
