<div class="box box-primary">
    <section class="content-header">
        <h1>
        3. Dados Familiares
        </h1>
    </section>
    <div class="box-body">
        <!-- Pessoa Id Field -->
        {{-- <div class="form-group col-sm-6">
            {!! Form::label('pessoa_id', 'Pessoa Id:') !!}
            {!! Form::text('pessoa_id', null, ['class' => 'form-control']) !!}
        </div> --}}
        <!-- Comquemredise Field -->
        <div class="form-group col-sm-12">
            {!! Form::label('comQuemRedise', '3.1 Com quem você reside') !!}
            {!! Form::text('comQuemRedise', null, ['class' => 'form-control']) !!}
        </div>
        <!-- Mulherresponsavelfamilia Field -->
        <div class="form-group col-sm-12">
            {!! Form::label('3.2 Você é a Mulher Responsável pela sua unidade familiar? (Aquela que se reconhece ou é reconhecida pela família como pessoa de referência)') !!}
            <br>

            {!! Form::label('mulherResponsavelFamilia' , "Sim") !!}
            {!! Form::radio('mulherResponsavelFamilia', "Sim", ['class' => 'form-control']) !!}

            {!! Form::label('mulherResponsavelFamilia' , "Não") !!}
            {!! Form::radio('mulherResponsavelFamilia', "Não", ['class' => 'form-control']) !!}
        </div>
        <!-- Protegidamariadapenha Field -->
        <div class="form-group col-sm-12">
            {!! Form::label('3.3 De Acordo com a Lei Maria da Penha, vivo sob medida protetiva (Comprovado através de determinção Judicial)') !!}
            <br>

            {!! Form::label('ProtegidaMariaDaPenha' , "Sim") !!}
            {!! Form::radio('ProtegidaMariaDaPenha', "Sim", ['class' => 'form-control']) !!}

            {!! Form::label('ProtegidaMariaDaPenha' , "Não") !!}
            {!! Form::radio('ProtegidaMariaDaPenha', "Não", ['class' => 'form-control']) !!}
        </div>
        <!-- Filhosmenor18 Field -->
        <div class="form-group col-sm-6">
            {!! Form::label('3.4 Números de filhos') !!}
            <br>

            {!! Form::label('filhosMenor18', 'Menor de 18') !!}
            {!! Form::text('filhosMenor18', null, ['class' => 'form-control inline', 'style' => 'width:50px']) !!}

            {!! Form::label('filhosMaior18', 'Maior de 18', ['style' => 'margin-left: 10px']) !!}
            {!! Form::text('filhosMaior18', null, ['class' => 'form-control inline', 'style' => 'width:50px']) !!}
        </div>
        <!-- Emrelacaoaosfilhos Field -->
        <div class="form-group col-sm-6">
            {!! Form::label('emRelacaoAosFilhos', '3.5 Em Relação ao(s) Filho(s)') !!}
            {!! Form::select('emRelacaoAosFilhos', ["Opções"], null, ['class' => 'form-control']) !!}
        </div>
        <!-- Tutorcriancaouadolescente Field -->
        <div class="form-group col-sm-12">
            {!! Form::label('3.6 Sou Tutor de criança e/ou adolescente que mora comigo; (Representante legal que zela pelo menor de idade na falta dos pais, comprovado por documento oficial da guarda)') !!}
            <br>

            {!! Form::label('TutorCriancaOuAdolescente' , "Sim") !!}
            {!! Form::radio('TutorCriancaOuAdolescente', "Sim", ['class' => 'form-control']) !!}

            {!! Form::label('TutorCriancaOuAdolescente' , "Não") !!}
            {!! Form::radio('TutorCriancaOuAdolescente', "Não", ['class' => 'form-control']) !!}
        </div>
        <!-- Pessoasqueiraoresidir Field -->
        <div class="form-group col-sm-6">
            {!! Form::label('pessoasQueIraoResidir', '3.7 Quantas pessoas irão residir com você?') !!}
            {!! Form::text('pessoasQueIraoResidir', null, ['class' => 'form-control']) !!}
        </div>
        <!-- Moracomidoso Field -->
        <div class="form-group col-sm-6">
            {!! Form::label('3.8 Tem algum Idoso que mora com você? (a partir de 60 anos)') !!}
            <br>

            {!! Form::label('moraComIdoso' , "Sim") !!}
            {!! Form::radio('moraComIdoso', "Sim", ['class' => 'form-control']) !!}

            {!! Form::label('moraComIdoso' , "Não") !!}
            {!! Form::radio('moraComIdoso', "Não", ['class' => 'form-control']) !!}
        </div>
        <!-- Voceoufamiliarcomdeficiencia Field -->
        <div class="form-group col-sm-12">
            {!! Form::label('3.9 Você ou algum familiar que mora com você possui algum tipo de deficiência? (Comprovada por relatório médico)') !!}
            <br>

            {!! Form::label('VoceOuFamiliarComDeficiencia' , "Sim") !!}
            {!! Form::radio('VoceOuFamiliarComDeficiencia', "Sim", ['class' => 'form-control']) !!}

            {!! Form::label('VoceOuFamiliarComDeficiencia' , "Não") !!}
            {!! Form::radio('VoceOuFamiliarComDeficiencia', "Não", ['class' => 'form-control']) !!}

            {!! Form::label('VoceOuFamiliarComDeficiencia', 'Considera-se pessoa com deficiência aquela que tem impedimento de longo prazo de natureza física, mental, intelectual ou sensorial, o qual, em interação com uma ou mais barreiras, pode obstruir sua participação plena e efetiva na sociedade em igualdade de condições com as demais pessoas - Lei 13.146', ['style' => 'color: red']) !!}
        </div>
        <!-- Tipodadeficiencia Field -->
        <div class="form-group col-sm-12">
            {!! Form::label('tipoDaDeficiencia', '3.10 Qual tipo de deficiência que você possui ou do familiar que mora com você?') !!}
            {!! Form::select('tipoDaDeficiencia', ["Opções"], null, ['class' => 'form-control']) !!}
        </div>
        <!-- Voceoufamiliardoencacronica Field -->
        <div class="form-group col-sm-12">
            {!! Form::label('voceOuFamiliarDoencaCronica', '3.11 Assinale se você ou algum familiar que vá morar com você possui alguma dessas doenças crônicas incapacitantes') !!}
            {!! Form::select('voceOuFamiliarDoencaCronica', ["Opções"], null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>