<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableProfiles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome', 150);
            $table->date('data_nascimento');
            $table->string('rg', 15);
            $table->char('cpf', 15);
            $table->string('sexo', 45);
            $table->string('nomePai', 200);
            $table->string('nomeMae', 200);
            $table->string('passaporte', 50);
            $table->string('telefone' , 45);
            $table->string('celular', 45);
            $table->string('naturalidade', 50);
            $table->string('escolaridade', 100);
            $table->string('emissor_rg', 50);
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
