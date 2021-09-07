<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contact', function (Blueprint $table) {
            $table->increments('id');
            $table->string('email', '191')->nullable();
            $table->string('email_alt', '191')->nullable();
            $table->string('phone', '191')->nullable();
            $table->string('phone_alt', '191')->nullable();
            $table->text('location')->nullable();
            $table->text('facebook')->nullable();
            $table->text('messenger')->nullable();
            $table->text('twitter')->nullable();
            $table->text('instagram')->nullable();
            $table->text('youtube')->nullable();
            $table->text('linkedin')->nullable();
            $table->text('snapchat')->nullable();
            $table->text('whatsapp')->nullable();
            $table->text('google_plus')->nullable();
            $table->text('pinterest')->nullable();
            $table->text('behance')->nullable();
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
        Schema::dropIfExists('contact');
    }
}
