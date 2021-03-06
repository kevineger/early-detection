<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePeoplesTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('people', function (Blueprint $table)
        {
            $table->increments('id');
            $table->string('name');
            $table->string('type');
            $table->string('position')->nullable();
            $table->text('education')->nullable();
            $table->text('description')->nullable();
            $table->string('image')->default("placeholder.jpg");
            $table->string('image2')->default("placeholder2.png");
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
        Schema::drop('people');
    }
}
