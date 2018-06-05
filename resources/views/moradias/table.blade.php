<table class="table table-responsive" id="moradias-table">
    <thead>
        <tr>
            <th>Pessoa Id</th>
        <th>Situacaomoradiaatual</th>
        <th>Tipologiacasa</th>
        <th>Pessoaderuacomajuda</th>
        <th>Recebeajudacusteiomoradia</th>
        <th>Residenciacondenadarisco</th>
        <th>Tiporiscoresidencia</th>
        <th>Participantedodireitomoradia</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($moradias as $moradia)
        <tr>
            <td>{!! $moradia->pessoa_id !!}</td>
            <td>{!! $moradia->situacaoMoradiaAtual !!}</td>
            <td>{!! $moradia->tipologiaCasa !!}</td>
            <td>{!! $moradia->pessoaDeRuaComAjuda !!}</td>
            <td>{!! $moradia->recebeAjudaCusteioMoradia !!}</td>
            <td>{!! $moradia->residenciaCondenadaRisco !!}</td>
            <td>{!! $moradia->tipoRiscoResidencia !!}</td>
            <td>{!! $moradia->participanteDoDireitoMoradia !!}</td>
            <td>
                {!! Form::open(['route' => ['moradias.destroy', $moradia->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('moradias.show', [$moradia->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('moradias.edit', [$moradia->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>