@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Tipo Da Deficiencia Option
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'tipoDaDeficienciaOptions.store']) !!}

                        @include('tipo_da_deficiencia_options.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
