@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Tipo Da Deficiencia Option
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('tipo_da_deficiencia_options.show_fields')
                    <a href="{!! route('tipoDaDeficienciaOptions.index') !!}" class="btn btn-default">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
