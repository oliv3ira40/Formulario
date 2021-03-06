@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Doenca Cronica Option
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($doencaCronicaOption, ['route' => ['doencaCronicaOptions.update', $doencaCronicaOption->id], 'method' => 'patch']) !!}

                        @include('doenca_cronica_options.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection