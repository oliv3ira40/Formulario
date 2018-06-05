@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Trabalho E Renda
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($trabalhoERenda, ['route' => ['trabalhoERendas.update', $trabalhoERenda->id], 'method' => 'patch']) !!}

                        @include('trabalho_e_rendas.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection