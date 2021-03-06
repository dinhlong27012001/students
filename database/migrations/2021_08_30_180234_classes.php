<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Classes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('classes', function (Blueprint $table) {
            $table->increments('cId');
            $table->unsignedInteger('cMajor');
            $table->string('cName', 30);
            $table->integer('course');
            $table->foreign('cMajor')->references('mId')->on('major');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::drop('classes');
    }
}
