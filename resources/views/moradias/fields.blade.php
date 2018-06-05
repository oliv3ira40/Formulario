<!-- Pessoa Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pessoa_id', 'Pessoa Id:') !!}
    {!! Form::text('pessoa_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Situacaomoradiaatual Field -->
<div class="form-group col-sm-6">
    {!! Form::label('situacaoMoradiaAtual', 'Situacaomoradiaatual:') !!}
    {!! Form::text('situacaoMoradiaAtual', null, ['class' => 'form-control']) !!}
</div>

<!-- Tipologiacasa Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tipologiaCasa', 'Tipologiacasa:') !!}
    {!! Form::text('tipologiaCasa', null, ['class' => 'form-control']) !!}
</div>

<!-- Pessoaderuacomajuda Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pessoaDeRuaComAjuda', 'Pessoaderuacomajuda:') !!}
    {!! Form::text('pessoaDeRuaComAjuda', null, ['class' => 'form-control']) !!}
</div>

<!-- Recebeajudacusteiomoradia Field -->
<div class="form-group col-sm-6">
    {!! Form::label('recebeAjudaCusteioMoradia', 'Recebeajudacusteiomoradia:') !!}
    {!! Form::text('recebeAjudaCusteioMoradia', null, ['class' => 'form-control']) !!}
</div>

<!-- Residenciacondenadarisco Field -->
<div class="form-group col-sm-6">
    {!! Form::label('residenciaCondenadaRisco', 'Residenciacondenadarisco:') !!}
    {!! Form::text('residenciaCondenadaRisco', null, ['class' => 'form-control']) !!}
</div>

<!-- Tiporiscoresidencia Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tipoRiscoResidencia', 'Tiporiscoresidencia:') !!}
    {!! Form::text('tipoRiscoResidencia', null, ['class' => 'form-control']) !!}
</div>

<!-- Participantedodireitomoradia Field -->
<div class="form-group col-sm-6">
    {!! Form::label('participanteDoDireitoMoradia', 'Participantedodireitomoradia:') !!}
    {!! Form::text('participanteDoDireitoMoradia', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('moradias.index') !!}" class="btn btn-default">Cancel</a>
</div>
