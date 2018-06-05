<table class="table table-responsive" id="enderecos-table">
    <thead>
        <tr>
            <th>Pessoa Id</th>
        <th>Logradouro</th>
        <th>Complemento</th>
        <th>Bairro</th>
        <th>Cep</th>
        <th>Estado</th>
        <th>Cidade</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($enderecos as $endereco)
        <tr>
            <td>{!! $endereco->pessoa_id !!}</td>
            <td>{!! $endereco->logradouro !!}</td>
            <td>{!! $endereco->complemento !!}</td>
            <td>{!! $endereco->bairro !!}</td>
            <td>{!! $endereco->cep !!}</td>
            <td>{!! $endereco->estado !!}</td>
            <td>{!! $endereco->cidade !!}</td>
            <td>
                {!! Form::open(['route' => ['enderecos.destroy', $endereco->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('enderecos.show', [$endereco->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('enderecos.edit', [$endereco->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>