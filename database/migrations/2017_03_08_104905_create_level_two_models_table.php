<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLevelTwoModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('level_two_models', function (Blueprint $table) {
            $table->increments('id');
            //$table->string('user_id')->unique();
            //$table->foreign('user_email')->references('email')->on('users')->onDelete('cascade');
            $table->integer('followers')->default(0);
            $table->boolean('active')->default(false);
            $table->integer('completed')->default(0);
            $table->integer('stop_count')->default(1);
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
        Schema::dropIfExists('level_two_models');
    }
}
