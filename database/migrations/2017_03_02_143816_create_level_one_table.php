<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLevelOneTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('level_one_models', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_email')->unique();
            //$table->foreign('user_email')->references('email')->on('users')->onDelete('cascade');
            $table->integer('followers')->default(0);
            $table->boolean('active')->default(false);
            $table->integer('completed')->default(0);
            $table->integer('stop_count')->default(1);
            //$table->foreign('downline')->references('email')->on('users')->onDelete('cascade');
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
        //Schema::dropForeign(['email']);
        Schema::dropIfExists('level_one_models');
    }
}
