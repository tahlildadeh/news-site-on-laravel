<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Item extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('item', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 255);
            $table->string('url', 255);
            $table->string('imgNews', 255);
            $table->text('intro_text');
            $table->longText('full_text');
            $table->boolean('published')->default(false);
            $table->boolean('admin_publish')->default(false);
            $table->integer('userWrite');
 
            $table->integer('cat_id')->unsigned();
            $table->foreign('cat_id')->references('id')->on('cat');
            $table->string('meta_keyword', 255);
            $table->string('meta_descriotion', 255);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('item');
    }
}
