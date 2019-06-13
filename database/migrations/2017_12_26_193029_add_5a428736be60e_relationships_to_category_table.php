<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Add5a428736be60eRelationshipsToCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('categories', function(Blueprint $table) {
            if (!Schema::hasColumn('categories', 'language_id')) {
                $table->integer('language_id')->unsigned()->nullable();
                $table->foreign('language_id')->references('id')->on('languages')->onDelete('cascade');
                }

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('categories', function(Blueprint $table) {

        });
    }
}
