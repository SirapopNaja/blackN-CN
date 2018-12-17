<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfileregTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profilereg', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('number_reg_id')->unsigned();
            $table->foreign('number_reg_id')->references('id')->on('userreg');
            $table->string('name_reg');
            $table->string('surname_reg');
            $table->string('sex_reg');
            $table->string('Birthday_reg');
            $table->string('phone_number_reg');
            $table->string('email_reg');
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
        Schema::dropIfExists('profilereg');
    }
}
