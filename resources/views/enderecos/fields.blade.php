<div class="box box-primary">
    <section class="content-header">
        <h1>
        2. Endereço
        </h1>
    </section>
    <div class="box-body">
        <!-- Pessoa Id Field -->
        {{-- <div class="form-group col-sm-6">
            {!! Form::label('pessoa_id', 'Pessoa Id:') !!}
            {!! Form::text('pessoa_id', null, ['class' => 'form-control']) !!}
        </div> --}}
        <!-- Logradouro Field -->
        <div class="form-group col-sm-12">
            {!! Form::label('logradouro', '2.1 Logradouro') !!}
            {!! Form::text('logradouro', null, ['class' => 'form-control']) !!}
        </div>
        <!-- Complemento Field -->
        <div class="form-group col-sm-6">
            {!! Form::label('complemento', '2.2 Complemento') !!}
            {!! Form::text('complemento', null, ['class' => 'form-control']) !!}
        </div>
        <!-- Bairro Field -->
        <div class="form-group col-sm-4">
            {!! Form::label('bairro', '2.3 Bairro') !!}
            {!! Form::text('bairro', null, ['class' => 'form-control']) !!}
        </div>
        <!-- Cep Field -->
        <div class="form-group col-sm-2">
            {!! Form::label('cep', '2.4 CEP') !!}
            {!! Form::text('cep', null, ['class' => 'form-control']) !!}
        </div>
        <!-- Estado Field -->
        <div class="form-group col-sm-6">
            {!! Form::label('estado', '2.5 Estado') !!}
            {!! Form::select('estado', ["Opções"], null, ['class' => 'form-control']) !!}
        </div>
        <!-- Cidade Field -->
        <div class="form-group col-sm-6">
            {!! Form::label('cidade', '2.6 Cidade') !!}
            {!! Form::select('cidade', ["Opções"], null, ['class' => 'form-control']) !!}
        </div>
        @include('contatos.fields')
    </div>
</div>