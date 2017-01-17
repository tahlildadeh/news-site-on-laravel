<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Comment extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comment', function (Blueprint $table) {

            $table->increments('id');
            $table->integer('item_id')->unsigned();
            $table->text('text');
            $table->integer('ip');
            $table->integer('timestamp');
            $table->integer('vote');
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
                Schema::drop('comment');
    }
}
