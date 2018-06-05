<div class="box box-primary">
    <section class="content-header">
        <h1>
        1. Dados pessoais
        </h1>
    </section>
    <div class="box-body">
        <!-- Cpf Field -->
        <div class="form-group col-sm-4">
            {!! Form::label('cpf', '1.1 CPF') !!}
            {!! Form::text('cpf', null, ['class' => 'form-control']) !!}
        </div>
        <!-- Nomecompleto Field -->
        <div class="form-group col-sm-8">
            {!! Form::label('nomeCompleto', '1.2 Nome completo') !!}
            {!! Form::text('nomeCompleto', null, ['class' => 'form-control']) !!}
        </div>
        <!-- Rg Field -->
        <div class="form-group col-sm-3">
            {!! Form::label('rg', '1.3 RG') !!}
            {!! Form::text('rg', null, ['class' => 'form-control']) !!}
        </div>
        <!-- Dataemissaorg Field -->
        <div class="form-group col-sm-3">
            {!! Form::label('dataEmissaoRg', '1.4 Data Emissão') !!}
            {!! Form::date('dataEmissaoRg', null, ['class' => 'form-control']) !!}
        </div>
        <!-- Ufemissaorg Field -->
        <div class="form-group col-sm-3">
            {!! Form::label('ufEmissaoRg', '1.5 UF') !!}
            {!! Form::select('ufEmissaoRg', ["Opções"], null, ['class' => 'form-control']) !!}
        </div>
        <!-- Orgaoemissorrg Field -->
        <div class="form-group col-sm-3">
            {!! Form::label('orgaoEmissorRg', '1.6 Orgão Emissor') !!}
            {!! Form::text('orgaoEmissorRg', null, ['class' => 'form-control']) !!}
        </div>
        <!-- Datanascimento Field -->
        <div class="form-group col-sm-4">
            {!! Form::label('dataNascimento', '1.7 Data Nascimento') !!}
            {!! Form::date('dataNascimento', null, ['class' => 'form-control']) !!}
        </div>
        <!-- Ufnascimento Field -->
        <div class="form-group col-sm-3">
            {!! Form::label('ufNascimento', '1.8 UF') !!}
            {!! Form::select('ufNascimento', ["Opções"], null, ['class' => 'form-control']) !!}
        </div>
        <!-- Naturalidade Field -->
        <div class="form-group col-sm-5">
            {!! Form::label('naturalidade', '1.9 Naturalidade') !!}
            {!! Form::select('naturalidade', ["Opções"], null, ['class' => 'form-control']) !!}
        </div>
        <!-- Nacionalidade Field -->
        <div class="form-group col-sm-3">
            {!! Form::label('nacionalidade', '1.10 Nacionalidade') !!}
            {!! Form::select('nacionalidade', ["Opções"], null, ['class' => 'form-control']) !!}
        </div>
        <!-- Sexo Field -->
        <div class="form-group col-sm-2">
            {!! Form::label('sexo', '1.11 Sexo') !!}
            {!! Form::select('sexo', ["Opções"], null, ['class' => 'form-control']) !!}
        </div>
        <!-- Estadocivil Field -->
        <div class="form-group col-sm-3">
            {!! Form::label('estadoCivil', '1.12 Estado Civil') !!}
            {!! Form::select('estadoCivil', ["Opções"], null, ['class' => 'form-control']) !!}
        </div>
        <!-- Escolaridade Field -->
        <div class="form-group col-sm-4">
            {!! Form::label('escolaridade', '1.13 Escolaridade') !!}
            {!! Form::select('escolaridade', ["Opções"], null, ['class' => 'form-control']) !!}
        </div>
        <!-- Carteiraprofissional Field -->
        <div class="form-group col-sm-5">
            {!! Form::label('carteiraProfissional', '1.14 Carteira Profissional') !!}
            {!! Form::text('carteiraProfissional', null, ['class' => 'form-control']) !!}
        </div>
        <!-- Seriecarteiraprofissional Field -->
        <div class="form-group col-sm-3">
            {!! Form::label('SerieCarteiraProfissional', '1.15 Série') !!}
            {!! Form::text('serieCarteiraProfissional', null, ['class' => 'form-control']) !!}
        </div>
        <!-- Nis Field -->
        <div class="form-group col-sm-4">
            {!! Form::label('nis', '1.16 NIS - Número de Inscrição Social') !!}
            {!! Form::text('nis', null, ['class' => 'form-control']) !!}
        </div>
        <!-- Nomecompletopai Field -->
        <div class="form-group col-sm-6">
            {!! Form::label('nomeCompletoPai', '1.17 Nome Completo Pai') !!}
            {!! Form::text('nomeCompletoPai', null, ['class' => 'form-control']) !!}
        </div>
        <!-- Nomecompletomae Field -->
        <div class="form-group col-sm-6">
            {!! Form::label('nomeCompletoMae', '1.18 Nome Completo Mae') !!}
            {!! Form::text('nomeCompletoMae', null, ['class' => 'form-control']) !!}
        </div>
        <!-- Nomecompletocompanheiro Field -->
        <div class="form-group col-sm-12">
            {!! Form::label('nomeCompletoCompanheiro', '1.19 Nome Completo Companheiro(a)') !!}
            {!! Form::text('nomeCompletoCompanheiro', null, ['class' => 'form-control']) !!}
        </div>
        <!-- Rgcompanheiro Field -->
        <div class="form-group col-sm-6">
            {!! Form::label('rgCompanheiro', '1.20 RG companheiro(a)') !!}
            {!! Form::text('rgCompanheiro', null, ['class' => 'form-control']) !!}
        </div>
        <!-- Cpfcompanheiro Field -->
        <div class="form-group col-sm-6">
            {!! Form::label('cpfCompanheiro', '1.21 CPF Companheiro(a)') !!}
            {!! Form::text('cpfCompanheiro', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>
</div>