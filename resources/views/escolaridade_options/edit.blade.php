@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Escolaridade Option
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($escolaridadeOption, ['route' => ['escolaridadeOptions.update', $escolaridadeOption->id], 'method' => 'patch']) !!}

                        @include('escolaridade_options.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection