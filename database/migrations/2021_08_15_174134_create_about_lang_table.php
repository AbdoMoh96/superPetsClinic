<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutLangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('about_lang', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('about_id');
            $table->string('lang' , 2);
            $table->text('title')->nullable();
            $table->text('subtitle')->nullable();
            $table->text('description_text')->nullable();
            $table->text('about_title')->nullable();
            $table->text('about_subtitle')->nullable();
            $table->text('about_description_text')->nullable();
            $table->text('vision_text')->nullable();
            $table->text('mission_text')->nullable();
            $table->text('values_text')->nullable();
            $table->text('approach_text')->nullable();
            $table->text('goals_text')->nullable();
            $table->text('features_text')->nullable();
            $table->text('bio_text')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('about_lang');
    }
}
