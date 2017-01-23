<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('profile_id')->unsigned();
            $table->integer('service_id')->unsigned();
            $table->integer('subservice_id')->unsigned();
            $table->date('cleaning_time');
            $table->text('manager_comment', 500);
            $table->boolean('approved');
            $table->timestamps();

            $table->foreign('profile_id')->references('id')->on('profiles');
            $table->foreign('service_id')->references('id')->on('services');
            $table->foreign('subservice_id')->references('id')->on('subservices');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('orders');
    }
}
