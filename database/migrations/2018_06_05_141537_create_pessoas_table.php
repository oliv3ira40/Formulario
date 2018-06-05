<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePessoasTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pessoas', function (Blueprint $table) {
            $table->increments('id');
            $table->decimal('cpf')->unique();
            $table->string('nomeCompleto');
            $table->decimal('rg')->unique();
            $table->date('dataEmissaoRg');
            $table->string('ufEmissaoRg');
            $table->string('orgaoEmissorRg');
            $table->date('dataNascimento');
            $table->string('ufNascimento');
            $table->string('naturalidade');
            $table->string('nacionalidade');
            $table->string('sexo');
            $table->string('estadoCivil');
            $table->string('escolaridade');
            $table->string('carteiraProfissional');
            $table->decimal('serieCarteiraProfissional');
            $table->decimal('nis');
            $table->string('nomeCompletoPai');
            $table->string('nomeCompletoMae');
            $table->string('nomeCompletoCompanheiro');
            $table->decimal('rgCompanheiro');
            $table->decimal('cpfCompanheiro');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('pessoas');
    }
}
