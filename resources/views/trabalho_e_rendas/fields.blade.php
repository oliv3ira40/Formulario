<!-- Pessoa Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pessoa_id', 'Pessoa Id:') !!}
    {!! Form::text('pessoa_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Rendabrutafamiliar Field -->
<div class="form-group col-sm-6">
    {!! Form::label('rendaBrutaFamiliar', 'Rendabrutafamiliar:') !!}
    {!! Form::text('rendaBrutaFamiliar', null, ['class' => 'form-control']) !!}
</div>

<!-- Tiporenda Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tipoRenda', 'Tiporenda:') !!}
    {!! Form::text('tipoRenda', null, ['class' => 'form-control']) !!}
</div>

<!-- Situacaoocupacional Field -->
<div class="form-group col-sm-6">
    {!! Form::label('situacaoOcupacional', 'Situacaoocupacional:') !!}
    {!! Form::text('situacaoOcupacional', null, ['class' => 'form-control']) !!}
</div>

<!-- Beneficiocasa Field -->
<div class="form-group col-sm-6">
    {!! Form::label('beneficioCasa', 'Beneficiocasa:') !!}
    {!! Form::text('beneficioCasa', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('trabalhoERendas.index') !!}" class="btn btn-default">Cancel</a>
</div>
