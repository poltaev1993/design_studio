<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DropAllForeignKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('abouts', function(Blueprint $table) {
            $table->dropForeign('abouts_category_id_foreign');
        });

        Schema::table('blogs', function(Blueprint $table) {
            $table->dropForeign('blogs_category_id_foreign');
        });

        Schema::table('faq', function(Blueprint $table) {
            $table->dropForeign('faq_category_id_foreign');
        });

        Schema::table('greetings', function(Blueprint $table) {
            $table->dropForeign('greetings_category_id_foreign');
        });

        Schema::table('members', function(Blueprint $table) {
            $table->dropForeign('members_category_id_foreign');
        });

        Schema::table('orders', function(Blueprint $table) {
            $table->dropForeign('orders_category_id_foreign');
        });

        Schema::table('partners', function(Blueprint $table) {
            $table->dropForeign('partners_category_id_foreign');
        });

        Schema::table('processes', function(Blueprint $table) {
            $table->dropForeign('processes_category_id_foreign');
        });

        Schema::table('reviews', function(Blueprint $table) {
            $table->dropForeign('reviews_category_id_foreign');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
