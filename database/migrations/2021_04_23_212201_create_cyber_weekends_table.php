<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCyberWeekendsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cyber_weekends', function (Blueprint $table) {
            $table->id();
            $table->smallInteger('team_type'); // 1.solo|2.team
            $table->unsignedBigInteger('team_id')->nullable();
            $table->unsignedBigInteger('player_id')->nullable(); // if solo
            $table->timestamps();
            $table->foreign('team_id')->references('id')->on('teams');
            $table->foreign('player_id')->references('id')->on('players');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cyber_weekends');
    }
}
