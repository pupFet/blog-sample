<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ContentTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       
        Schema::create('contents', function (Blueprint $table) {
            $table->increments('content_id');
            $table->foreign('category_id')->references('category_id')->on('category');
            $table->foreign('user_id')->references('user_id')->on('users');
            $table->string('category_name');
            $table->string('category_desc');
        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('category');
    }
}
