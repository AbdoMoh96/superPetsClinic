<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code' , 15 )->unique();
            $table->string('slug' , 500)->unique();
            $table->unsignedInteger('admin_id');
            $table->text('thumbnail');
            $table->float('price');
            $table->integer('quantity');
            $table->boolean('top')->default(0);
            $table->softDeletes();
            $table->timestamps();
        });
    }

    // '#'.Str::random(4).time();
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
