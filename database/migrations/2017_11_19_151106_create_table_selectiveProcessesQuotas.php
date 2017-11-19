<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableSelectiveProcessesQuotas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         public function up()
    {
        Schema::create('selectiveProcessesQuotas', function (Blueprint $table) {
            $table->integer('ProcessoSeletivo_id');
            $table->integer('Cotas_id');
            $table->integer('Vagas');
            $table->timestamps();
        });
    }
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
