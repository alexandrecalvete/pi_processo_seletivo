<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableInscriptions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inscriptions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('ProcessoSeletivo_id');
            $table->date('DataPagamento');
            $table->boolean('Pago');
            $table->integer('PrimeiraOpcao');
            $table->dateTime('DataInscricao');
            $table->integer('usuario_id');
            $table->integer('Cotas_id');
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
