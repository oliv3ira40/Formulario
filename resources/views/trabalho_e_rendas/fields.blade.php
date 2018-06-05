<div class="box box-primary">
    <section class="content-header">
        <h1>
        4. Trabalho e Renda
        </h1>
    </section>
    <div class="box-body">
        <!-- Pessoa Id Field -->
        {{-- <div class="form-group col-sm-6">
            {!! Form::label('pessoa_id', 'Pessoa Id:') !!}
            {!! Form::text('pessoa_id', null, ['class' => 'form-control']) !!}
        </div> --}}
        <!-- Rendabrutafamiliar Field -->
        <div class="form-group col-sm-6">
            {!! Form::label('rendaBrutaFamiliar', '4.1 Renda Bruta Familiar Mensal') !!}
            {!! Form::select('rendaBrutaFamiliar', ["Opções"], null, ['class' => 'form-control']) !!}
        </div>
        <!-- Tiporenda Field -->
        <div class="form-group col-sm-6">
            {!! Form::label('tipoRenda', '4.2 Tipo Renda') !!}
            {!! Form::select('tipoRenda', ["Opções"], null, ['class' => 'form-control']) !!}
        </div>
        <!-- Situacaoocupacional Field -->
        <div class="form-group col-sm-6">
            {!! Form::label('situacaoOcupacional', '4.3 Situacão Ocupacional:') !!}
            {!! Form::select('situacaoOcupacional', ["Opções"], null, ['class' => 'form-control']) !!}
        </div>
        <!-- Beneficiocasa Field -->
        <div class="form-group col-sm-6">
            {!! Form::label('beneficioCasa', '4.4 Beneficio Social') !!}
            {!! Form::select('beneficioCasa', ["Opções"], null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>