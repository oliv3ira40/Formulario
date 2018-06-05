@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Relacao Aos Filhos Option
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'relacaoAosFilhosOptions.store']) !!}

                        @include('relacao_aos_filhos_options.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
