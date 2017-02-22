<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectProjectTagTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_project_tag', function (Blueprint $table) {
            $table->integer('project_id')->unsigned();
            $table->integer('project_tag_id')->unsigned();
            
            $table->foreign('project_id')->references('id')->on('projects');
            $table->foreign('project_tag_id')->references('id')->on('project_tags');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('project_images');
    }
}
