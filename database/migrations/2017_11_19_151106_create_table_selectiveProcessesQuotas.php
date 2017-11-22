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
        Schema::create('selective_processes_quotas', function (Blueprint $table) {
            $table->integer('processo_seletivo_id');
            $table->integer('cotas_id');
            $table->integer('vagas');
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
