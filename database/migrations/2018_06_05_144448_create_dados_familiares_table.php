<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDadosFamiliaresTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dados_familiares', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('pessoa_id')->unsigned();
            $table->string('comQuemRedise');
            $table->string('mulherResponsavelFamilia');
            $table->string('ProtegidaMariaDaPenha');
            $table->integer('filhosMenor18');
            $table->integer('filhosMaior18');
            $table->string('emRelacaoAosFilhos');
            $table->string('TutorCriancaOuAdolescente');
            $table->integer('pessoasQueIraoResidir');
            $table->string('moraComIdoso');
            $table->string('VoceOuFamiliarComDeficiencia');
            $table->string('tipoDaDeficiencia');
            $table->string('voceOuFamiliarDoencaCronica');
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
        Schema::drop('dados_familiares');
    }
}
