<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();
            // TODO: Figure out fields
            $table->timestamps();
        });

        Schema::create('people_project', function (Blueprint $table)
        {
            // People relation
            $table->integer('people_id')->unsigned()->index();
            $table->foreign('people_id')
                ->references('id')
                ->on('people')
                ->onDelete('cascade');

            // Project relation
            $table->integer('project_id')->unsigned()->index();
            $table->foreign('project_id')
                ->references('id')
                ->on('projects')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('people_project');
        Schema::drop('projects');
    }
}
