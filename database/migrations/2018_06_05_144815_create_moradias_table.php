<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMoradiasTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('moradias', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('pessoa_id')->unsigned();
            $table->string('situacaoMoradiaAtual');
            $table->string('tipologiaCasa');
            $table->string('pessoaDeRuaComAjuda');
            $table->string('recebeAjudaCusteioMoradia');
            $table->string('residenciaCondenadaRisco');
            $table->string('tipoRiscoResidencia');
            $table->string('participanteDoDireitoMoradia');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('pessoa_id')->references('id')->on('pessoas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('moradias');
    }
}
