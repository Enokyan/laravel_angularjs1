<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMychatsTable extends Migration
{
    public function up()
    {
        Schema::create('mychats', function (Blueprint $table) {
            $table->increments('chat_id');
            $table->integer('from_user')->unsigned();
            $table->foreign('from_user')->references('id')->on('users');
            $table->integer('to_user');
            $table->text('msg');
            $table->integer('status')->default(0);
            $table->rememberToken();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('mychats');
    }
}
