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
            $table->integer('project_category_id')->unsigned();
            $table->string('name');
            $table->string('client')->nullable();
            $table->string('duration')->nullable();
            $table->string('materials')->nullable();
            $table->string('finish')->nullable();
            $table->text('description')->nullable();
            $table->text('credits')->nullable();
            $table->tinyInteger('size')->default(0)->unsigned();
            $table->string('url', 128);
            $table->timestamps();
            
            $table->foreign('project_category_id')->references('id')->on('project_categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('projects');
    }
}
