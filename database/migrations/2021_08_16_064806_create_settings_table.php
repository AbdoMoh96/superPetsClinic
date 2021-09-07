<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->increments('id');
            $table->text('h_logo')->nullable();
            $table->text('f_logo')->nullable();
            $table->text('clinic_logo')->nullable();
            $table->text('store_logo')->nullable();
            $table->text('admin_logo')->nullable();
            $table->boolean('active')->nullable();
            $table->string('lang' , 2);
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
        Schema::dropIfExists('settings');
    }
}
