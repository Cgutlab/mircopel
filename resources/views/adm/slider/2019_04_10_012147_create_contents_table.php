<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contents', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('section')->nullable();
            $table->string('type')->nullable();
            $table->string('order')->nullable();

            $table->text('image1')->nullable();
            $table->text('image2')->nullable();
            $table->text('image3')->nullable();
            $table->text('title_es')->nullable();
            $table->text('text_es')->nullable();
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
        Schema::dropIfExists('contents');
    }
}
