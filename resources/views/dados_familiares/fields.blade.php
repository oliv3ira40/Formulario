<!-- Pessoa Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pessoa_id', 'Pessoa Id:') !!}
    {!! Form::text('pessoa_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Comquemredise Field -->
<div class="form-group col-sm-6">
    {!! Form::label('comQuemRedise', 'Comquemredise:') !!}
    {!! Form::text('comQuemRedise', null, ['class' => 'form-control']) !!}
</div>

<!-- Mulherresponsavelfamilia Field -->
<div class="form-group col-sm-6">
    {!! Form::label('mulherResponsavelFamilia', 'Mulherresponsavelfamilia:') !!}
    {!! Form::text('mulherResponsavelFamilia', null, ['class' => 'form-control']) !!}
</div>

<!-- Protegidamariadapenha Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ProtegidaMariaDaPenha', 'Protegidamariadapenha:') !!}
    {!! Form::text('ProtegidaMariaDaPenha', null, ['class' => 'form-control']) !!}
</div>

<!-- Filhosmenor18 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('filhosMenor18', 'Filhosmenor18:') !!}
    {!! Form::text('filhosMenor18', null, ['class' => 'form-control']) !!}
</div>

<!-- Filhosmaior18 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('filhosMaior18', 'Filhosmaior18:') !!}
    {!! Form::text('filhosMaior18', null, ['class' => 'form-control']) !!}
</div>

<!-- Emrelacaoaosfilhos Field -->
<div class="form-group col-sm-6">
    {!! Form::label('emRelacaoAosFilhos', 'Emrelacaoaosfilhos:') !!}
    {!! Form::text('emRelacaoAosFilhos', null, ['class' => 'form-control']) !!}
</div>

<!-- Tutorcriancaouadolescente Field -->
<div class="form-group col-sm-6">
    {!! Form::label('TutorCriancaOuAdolescente', 'Tutorcriancaouadolescente:') !!}
    {!! Form::text('TutorCriancaOuAdolescente', null, ['class' => 'form-control']) !!}
</div>

<!-- Pessoasqueiraoresidir Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pessoasQueIraoResidir', 'Pessoasqueiraoresidir:') !!}
    {!! Form::text('pessoasQueIraoResidir', null, ['class' => 'form-control']) !!}
</div>

<!-- Moracomidoso Field -->
<div class="form-group col-sm-6">
    {!! Form::label('moraComIdoso', 'Moracomidoso:') !!}
    {!! Form::text('moraComIdoso', null, ['class' => 'form-control']) !!}
</div>

<!-- Voceoufamiliarcomdeficiencia Field -->
<div class="form-group col-sm-6">
    {!! Form::label('VoceOuFamiliarComDeficiencia', 'Voceoufamiliarcomdeficiencia:') !!}
    {!! Form::text('VoceOuFamiliarComDeficiencia', null, ['class' => 'form-control']) !!}
</div>

<!-- Tipodadeficiencia Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tipoDaDeficiencia', 'Tipodadeficiencia:') !!}
    {!! Form::text('tipoDaDeficiencia', null, ['class' => 'form-control']) !!}
</div>

<!-- Voceoufamiliardoencacronica Field -->
<div class="form-group col-sm-6">
    {!! Form::label('voceOuFamiliarDoencaCronica', 'Voceoufamiliardoencacronica:') !!}
    {!! Form::text('voceOuFamiliarDoencaCronica', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('dadosFamiliares.index') !!}" class="btn btn-default">Cancel</a>
</div>
