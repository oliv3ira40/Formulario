<!-- Cpf Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cpf', 'Cpf:') !!}
    {!! Form::text('cpf', null, ['class' => 'form-control']) !!}
</div>

<!-- Nomecompleto Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nomeCompleto', 'Nomecompleto:') !!}
    {!! Form::text('nomeCompleto', null, ['class' => 'form-control']) !!}
</div>

<!-- Rg Field -->
<div class="form-group col-sm-6">
    {!! Form::label('rg', 'Rg:') !!}
    {!! Form::text('rg', null, ['class' => 'form-control']) !!}
</div>

<!-- Dataemissaorg Field -->
<div class="form-group col-sm-6">
    {!! Form::label('dataEmissaoRg', 'Dataemissaorg:') !!}
    {!! Form::date('dataEmissaoRg', null, ['class' => 'form-control']) !!}
</div>

<!-- Ufemissaorg Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ufEmissaoRg', 'Ufemissaorg:') !!}
    {!! Form::select('ufEmissaoRg', ["Opções"], null, ['class' => 'form-control']) !!}
</div>

<!-- Orgaoemissorrg Field -->
<div class="form-group col-sm-6">
    {!! Form::label('orgaoEmissorRg', 'Orgaoemissorrg:') !!}
    {!! Form::text('orgaoEmissorRg', null, ['class' => 'form-control']) !!}
</div>

<!-- Datanascimento Field -->
<div class="form-group col-sm-6">
    {!! Form::label('dataNascimento', 'Datanascimento:') !!}
    {!! Form::date('dataNascimento', null, ['class' => 'form-control']) !!}
</div>

<!-- Ufnascimento Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ufNascimento', 'Ufnascimento:') !!}
    {!! Form::select('ufNascimento', ["Opções"], null, ['class' => 'form-control']) !!}
</div>

<!-- Naturalidade Field -->
<div class="form-group col-sm-6">
    {!! Form::label('naturalidade', 'Naturalidade:') !!}
    {!! Form::select('naturalidade', ["Opções"], null, ['class' => 'form-control']) !!}
</div>

<!-- Nacionalidade Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nacionalidade', 'Nacionalidade:') !!}
    {!! Form::select('nacionalidade', ["Opções"], null, ['class' => 'form-control']) !!}
</div>

<!-- Sexo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('sexo', 'Sexo:') !!}
    {!! Form::select('sexo', ["Opções"], null, ['class' => 'form-control']) !!}
</div>

<!-- Estadocivil Field -->
<div class="form-group col-sm-6">
    {!! Form::label('estadoCivil', 'Estadocivil:') !!}
    {!! Form::select('estadoCivil', ["Opções"], null, ['class' => 'form-control']) !!}
</div>

<!-- Escolaridade Field -->
<div class="form-group col-sm-6">
    {!! Form::label('escolaridade', 'Escolaridade:') !!}
    {!! Form::select('escolaridade', ["Opções"], null, ['class' => 'form-control']) !!}
</div>

<!-- Carteiraprofissional Field -->
<div class="form-group col-sm-6">
    {!! Form::label('carteiraProfissional', 'Carteiraprofissional:') !!}
    {!! Form::text('carteiraProfissional', null, ['class' => 'form-control']) !!}
</div>

<!-- Seriecarteiraprofissional Field -->
<div class="form-group col-sm-6">
    {!! Form::label('serieCarteiraProfissional', 'Seriecarteiraprofissional:') !!}
    {!! Form::text('serieCarteiraProfissional', null, ['class' => 'form-control']) !!}
</div>

<!-- Nis Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nis', 'Nis:') !!}
    {!! Form::text('nis', null, ['class' => 'form-control']) !!}
</div>

<!-- Nomecompletopai Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nomeCompletoPai', 'Nomecompletopai:') !!}
    {!! Form::text('nomeCompletoPai', null, ['class' => 'form-control']) !!}
</div>

<!-- Nomecompletomae Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nomeCompletoMae', 'Nomecompletomae:') !!}
    {!! Form::text('nomeCompletoMae', null, ['class' => 'form-control']) !!}
</div>

<!-- Nomecompletocompanheiro Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nomeCompletoCompanheiro', 'Nomecompletocompanheiro:') !!}
    {!! Form::text('nomeCompletoCompanheiro', null, ['class' => 'form-control']) !!}
</div>

<!-- Rgcompanheiro Field -->
<div class="form-group col-sm-6">
    {!! Form::label('rgCompanheiro', 'Rgcompanheiro:') !!}
    {!! Form::text('rgCompanheiro', null, ['class' => 'form-control']) !!}
</div>

<!-- Cpfcompanheiro Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cpfCompanheiro', 'Cpfcompanheiro:') !!}
    {!! Form::text('cpfCompanheiro', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('pessoas.index') !!}" class="btn btn-default">Cancel</a>
</div>
