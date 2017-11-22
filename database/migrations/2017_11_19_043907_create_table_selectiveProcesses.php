<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableSelectiveProcesses extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('selective_processes', function (Blueprint $table) {
            $table->increments('id');
            $table->dateTime('data_inicio');
            $table->dateTime('data_final');
            $table->boolean('ativo');
            $table->string('nome', 140);
            $table->text('descricao');
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
        //
    }
}
