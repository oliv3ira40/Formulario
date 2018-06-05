<div class="box box-primary">
    <section class="content-header">
        <h1>
        5. Moradia
        </h1>
    </section>
    <div class="box-body">
        <!-- Pessoa Id Field -->
        {{-- <div class="form-group col-sm-6">
            {!! Form::label('pessoa_id', 'Pessoa Id:') !!}
            {!! Form::text('pessoa_id', null, ['class' => 'form-control']) !!}
        </div> --}}
        <!-- Situacaomoradiaatual Field -->
        <div class="form-group col-sm-6">
            {!! Form::label('situacaoMoradiaAtual', '5.1 Situacão da Moradia Atual') !!}
            {!! Form::select('situacaoMoradiaAtual', ["Opções"], null, ['class' => 'form-control']) !!}
        </div>
        <!-- Tipologiacasa Field -->
        <div class="form-group col-sm-6">
            {!! Form::label('tipologiaCasa', '5.2 Tipologia da Casa') !!}
            {!! Form::select('tipologiaCasa', ["Opções"], null, ['class' => 'form-control']) !!}
        </div>
        <!-- Pessoaderuacomajuda Field -->
        <div class="form-group col-sm-12">
            {!! Form::label('pessoaDeRuaComAjuda', '5.3 Sou pessoa em situação de rua e recebo acompanhamento sócioassistencial do Município, Estado ou instituição que tenha certificação CEBAS. (Tem que ser comprovado através e declaração dada por este público ou instituição que tenha certificação CEBAS)') !!}
            <br>

            {!! Form::label('pessoaDeRuaComAjuda' , "Sim") !!}
            {!! Form::radio('pessoaDeRuaComAjuda', "Sim", ['class' => 'form-control']) !!}

            {!! Form::label('pessoaDeRuaComAjuda' , "Não") !!}
            {!! Form::radio('pessoaDeRuaComAjuda', "Não", ['class' => 'form-control']) !!}
        </div>
        <!-- Recebeajudacusteiomoradia Field -->
        <div class="form-group col-sm-12">
            {!! Form::label('recebeAjudaCusteioMoradia', '5.4 Marque abaixo se você recebe algum tipo de auxílio para custear a moradia disponibilizado por algum órgão municipal, estadual ou instituição') !!}
            {!! Form::select('recebeAjudaCusteioMoradia', ["Opções"], null, ['class' => 'form-control']) !!}
        </div>
        <!-- Residenciacondenadarisco Field -->
        <div class="form-group col-sm-12">
            {!! Form::label('residenciaCondenadaRisco', '5.5 Sua residência está condenada por esta em local do Risco Geológico ou Insalubre? (Tem que ser atestado pela Defesa Civil/CODESAL)') !!}
            <br>

            {!! Form::label('residenciaCondenadaRisco' , "Sim") !!}
            {!! Form::radio('residenciaCondenadaRisco', "Sim", ['class' => 'form-control']) !!}

            {!! Form::label('residenciaCondenadaRisco' , "Não") !!}
            {!! Form::radio('residenciaCondenadaRisco', "Não", ['class' => 'form-control']) !!}

            {!! Form::label('residenciaCondenadaRisco', 'Somente a defesa civil pode atestar o risco e fornecer a declaração para comprovação. Caso sua residência se encontre nessa situação e nunca foi vistoriada deverá entrar em contato com a codesal', ['style'=>'color:red']) !!}
        </div>
        <!-- Tiporiscoresidencia Field -->
        <div class="form-group col-sm-12">
            {!! Form::label('tipoRiscoResidencia', '5.6 Que Tipo de Risco ?') !!}
            {!! Form::select('tipoRiscoResidencia', ["Opções"], null, ['class' => 'form-control']) !!}
        </div>
        <!-- Participantedodireitomoradia Field -->
        <div class="form-group col-sm-12">
            {!! Form::label('participanteDoDireitoMoradia', '5.7 Se você participa de algum movimento de luta por direito a moradia, indique abaixo qual') !!}
            {!! Form::select('participanteDoDireitoMoradia', ["Opções"], null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>