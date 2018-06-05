@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Moradia
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($moradia, ['route' => ['moradias.update', $moradia->id], 'method' => 'patch']) !!}

                        @include('moradias.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection