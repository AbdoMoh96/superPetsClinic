<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('about', function (Blueprint $table) {
            $table->increments('id');
            $table->text('description_image')->nullable();
            $table->text('about_image')->nullable();
            $table->text('vision_image')->nullable();
            $table->text('mission_image')->nullable();
            $table->text('values_image')->nullable();
            $table->text('approach_image')->nullable();
            $table->text('goals_image')->nullable();
            $table->text('features_image')->nullable();
            $table->text('bio_image')->nullable();
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
        Schema::dropIfExists('about');
    }
}
