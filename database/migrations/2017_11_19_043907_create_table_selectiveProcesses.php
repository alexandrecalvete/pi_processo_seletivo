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
        Schema::create('selectiveProcesses', function (Blueprint $table) {
            $table->increments('id');
            $table->dateTime('DataInicio');
            $table->dateTime('DataFinal');
            $table->boolean('Ativo');
            $table->string('Nome', 140);
            $table->text('Descricao');
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
