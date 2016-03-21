<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGreetingsTableNew extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('greetings', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('category_id')->unsigned()->nullable();
            $table->string('home_heading');
            $table->text('home_description');
            $table->string('team_heading');
            $table->text('team_description');
            $table->string('about_heading');
            $table->text('about_description');
            $table->string('process_heading');
            $table->text('process_description');
            $table->string('projects_heading');
            $table->text('projects_description');
            $table->string('reviews_heading');
            $table->text('reviews_description');
            $table->string('questions_heading');
            $table->text('questions_description');
            $table->string('blog_heading');
            $table->text('blog_description');
            $table->string('partners_heading');
            $table->text('partners_description');
            $table->string('contacts_heading');
            $table->text('contacts_description');
            $table->timestamps();

            $table->foreign('category_id')->references('id')->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('greetings');
    }
}
