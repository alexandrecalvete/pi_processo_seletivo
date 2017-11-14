<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableAdresses extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('pessoa_id');
            $table->string('rua', 200);
            $table->integer('numero_endereco');
            $table->integer('cep');
            $table->string('bairro', 100);
            $table->string('complemento', 200);
            $table->integer('cidade_id');
            $table->string('tipo', 50);
            $table->string('cidade' , 45);
            $table->string('estado', 45);
            $table->string('pais', 50);
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
