@extends('layouts.app')
@section('content')
<div class="content">
    @include('adminlte-templates::common.errors')
    <div class="box">
        <div>
            {!! Form::open(['route' => 'pessoas.store']) !!}
            @include('pessoas.fields')
            @include('enderecos.fields')
            @include('dados_familiares.fields')
            @include('trabalho_e_rendas.fields')
            @include('moradias.fields')
            <!-- Submit Field -->
            <div class="box-body">
            <div class="form-group col-sm-12">
                {!! Form::submit('Salvar', ['class' => 'btn btn-primary']) !!}
                <a href="{!! route('pessoas.index') !!}" class="btn btn-default">Cancelar</a>
            </div>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection