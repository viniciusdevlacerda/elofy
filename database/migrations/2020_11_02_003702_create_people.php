<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeople extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_people', function (Blueprint $table) {
            $table->bigIncrements('id_people');
            $table->string('no_people');
            $table->float('nu_altura');
            $table->boolean('bl_lactose');
            $table->bigInteger('nu_peso');
            $table->boolean('bl_atleta');
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
        Schema::dropIfExists('tb_people');
    }
}
