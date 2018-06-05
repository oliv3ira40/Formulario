@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Com Quem Reside Option
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($comQuemResideOption, ['route' => ['comQuemResideOptions.update', $comQuemResideOption->id], 'method' => 'patch']) !!}

                        @include('com_quem_reside_options.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection