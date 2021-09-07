<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConstraintsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::table('slides', function (Blueprint $table) {
            $table->foreign('slider_id')
                ->references('id')
                ->on('sliders');

            $table->foreign('admin_id')
                ->references('id')
                ->on('admins');
        });

        Schema::table('slides_lang', function (Blueprint $table) {
            $table->foreign('slide_id')
                ->references('id')
                ->on('slides');

            $table->foreign('lang')
                ->references('code')
                ->on('languages');
        });

        Schema::table('about_lang', function (Blueprint $table) {

            $table->foreign('about_id')
                ->references('id')
                ->on('about');

            $table->foreign('lang')
                ->references('code')
                ->on('languages');
        });

        Schema::table('settings', function (Blueprint $table) {
            $table->foreign('lang')
                ->references('code')
                ->on('languages');
        });

        Schema::table('settings_lang', function (Blueprint $table) {

            $table->foreign('setting_id')
                ->references('id')
                ->on('settings');

            $table->foreign('lang')
                ->references('code')
                ->on('languages');

        });

        Schema::table('contact_lang', function (Blueprint $table) {

            $table->foreign('contact_id')
                ->references('id')
                ->on('contact');

            $table->foreign('lang')
                ->references('code')
                ->on('languages');

        });

        Schema::table('products', function (Blueprint $table) {
            $table->foreign('admin_id')
                ->references('id')
                ->on('admins');
        });

        Schema::table('products_lang', function (Blueprint $table) {
            $table->foreign('product_id')
                ->references('id')
                ->on('products');

            $table->foreign('lang')
                ->references('code')
                ->on('languages');
        });

        Schema::table('products_images', function (Blueprint $table) {
            $table->foreign('product_id')
                ->references('id')
                ->on('products');
        });


        Schema::table('cart', function (Blueprint $table) {
            $table->foreign('user_id')
                ->references('id')
                ->on('users');

            $table->foreign('product_id')
                ->references('id')
                ->on('products');
        });


        Schema::table('orders', function (Blueprint $table) {
            $table->foreign('user_id')
                ->references('id')
                ->on('users');

            $table->foreign('address_id')
                ->references('id')
                ->on('addresses');
        });

        Schema::table('order_details', function (Blueprint $table) {
            $table->foreign('order_id')
                ->references('id')
                ->on('orders');

            $table->foreign('product_id')
                ->references('id')
                ->on('products');
        });

        Schema::table('addresses', function (Blueprint $table) {
            $table->foreign('user_id')
                ->references('id')
                ->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
    }
}
