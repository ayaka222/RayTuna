<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('event_user_id')->unsigned();
            $table->tinyInteger('status')->nullable();
            $table->string('title')->nullable();
            $table->dateTime('event_datetime')->nullable();
            $table->string('place_name')->nullable();
            $table->integer('event_numbers')->nullable();
            $table->tinyInteger('entry_fee')->nullable();
            $table->mediumText('recruitment_information')->nullable();
            $table->string('event_img_name')->nullable();
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
        Schema::dropIfExists('events');
    }
}
