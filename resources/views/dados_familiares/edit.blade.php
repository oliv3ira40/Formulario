@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Dados Familiare
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($dadosFamiliare, ['route' => ['dadosFamiliares.update', $dadosFamiliare->id], 'method' => 'patch']) !!}

                        @include('dados_familiares.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection