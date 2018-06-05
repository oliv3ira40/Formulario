<table class="table table-responsive" id="trabalhoERendas-table">
    <thead>
        <tr>
            <th>Pessoa Id</th>
        <th>Rendabrutafamiliar</th>
        <th>Tiporenda</th>
        <th>Situacaoocupacional</th>
        <th>Beneficiocasa</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($trabalhoERendas as $trabalhoERenda)
        <tr>
            <td>{!! $trabalhoERenda->pessoa_id !!}</td>
            <td>{!! $trabalhoERenda->rendaBrutaFamiliar !!}</td>
            <td>{!! $trabalhoERenda->tipoRenda !!}</td>
            <td>{!! $trabalhoERenda->situacaoOcupacional !!}</td>
            <td>{!! $trabalhoERenda->beneficioCasa !!}</td>
            <td>
                {!! Form::open(['route' => ['trabalhoERendas.destroy', $trabalhoERenda->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('trabalhoERendas.show', [$trabalhoERenda->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('trabalhoERendas.edit', [$trabalhoERenda->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>