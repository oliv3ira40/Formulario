@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Estado Civil Option
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($estadoCivilOption, ['route' => ['estadoCivilOptions.update', $estadoCivilOption->id], 'method' => 'patch']) !!}

                        @include('estado_civil_options.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection