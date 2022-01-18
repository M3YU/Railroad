<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateToTeamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('teams', function (Blueprint $table) {
            $table->string('category_id');
            $table->dropColumn('end_time');
            $table->dropColumn('start_time');
            $table->dropColumn('data');
            $table->string('timing');
            $table->date('date');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('teams', function (Blueprint $table) {
            $table->dropColumn('category_id');
            $table->dropColumn('timing');
            $table->dropColumn('date');
            $table->date('start_time');
            $table->date('data');
            $table->date('end_time');
        });
    }
}