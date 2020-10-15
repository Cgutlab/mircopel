<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->bigIncrements('id');
            $table->string('code')->nullable();
            $table->text('title_es')->nullable();
            $table->text('text_es')->nullable();
            $table->text('keyword_es')->nullable();
            $table->string('order')->nullable();
            $table->string('outstanding')->nullable();
            $table->bigInteger('category_id')->unsigned()->nullable();
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->timestamps();
        });

        Schema::create('products_colors', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('product_id')->unsigned()->nullable();
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
            $table->bigInteger('color_id')->unsigned()->nullable();
            $table->foreign('color_id')->references('id')->on('colors')->onDelete('cascade');
            $table->timestamps();
        });

        Schema::create('products_sizes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('product_id')->unsigned()->nullable();
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
            $table->bigInteger('size_id')->unsigned()->nullable();
            $table->foreign('size_id')->references('id')->on('sizes')->onDelete('cascade');
            $table->timestamps();
        });

        Schema::create('products_presentations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('product_id')->unsigned()->nullable();
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
            $table->bigInteger('presentation_id')->unsigned()->nullable();
            $table->foreign('presentation_id')->references('id')->on('presentations')->onDelete('cascade');
            $table->timestamps();
        });

        Schema::create('products_grammages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('product_id')->unsigned()->nullable();
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
            $table->bigInteger('grammage_id')->unsigned()->nullable();
            $table->foreign('grammage_id')->references('id')->on('grammages')->onDelete('cascade');
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
        Schema::dropIfExists('products');
    }
}
