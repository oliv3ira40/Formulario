<!-- Pessoa Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pessoa_id', 'Pessoa Id:') !!}
    {!! Form::text('pessoa_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Telefonefixo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('telefoneFixo', 'Telefonefixo:') !!}
    {!! Form::text('telefoneFixo', null, ['class' => 'form-control']) !!}
</div>

<!-- Telefonecelular Field -->
<div class="form-group col-sm-6">
    {!! Form::label('telefoneCelular', 'Telefonecelular:') !!}
    {!! Form::text('telefoneCelular', null, ['class' => 'form-control']) !!}
</div>

<!-- Telefonerecado Field -->
<div class="form-group col-sm-6">
    {!! Form::label('telefoneRecado', 'Telefonerecado:') !!}
    {!! Form::text('telefoneRecado', null, ['class' => 'form-control']) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::text('email', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('contatos.index') !!}" class="btn btn-default">Cancel</a>
</div>
