@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Sexo Option
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($sexoOption, ['route' => ['sexoOptions.update', $sexoOption->id], 'method' => 'patch']) !!}

                        @include('sexo_options.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection