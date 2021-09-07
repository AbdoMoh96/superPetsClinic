<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSlidesLangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('slides_lang', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('slide_id');
            $table->string('lang' , 2);
            $table->string('title' , 250)->nullable();
            $table->string('subtitle' , 250)->nullable();
            $table->string('description' , 400)->nullable();
            $table->string('btn_text' , 200)->nullable();
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
        Schema::dropIfExists('slides_lang');
    }
}
