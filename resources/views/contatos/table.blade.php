<table class="table table-responsive" id="contatos-table">
    <thead>
        <tr>
            <th>Pessoa Id</th>
        <th>Telefonefixo</th>
        <th>Telefonecelular</th>
        <th>Telefonerecado</th>
        <th>Email</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($contatos as $contato)
        <tr>
            <td>{!! $contato->pessoa_id !!}</td>
            <td>{!! $contato->telefoneFixo !!}</td>
            <td>{!! $contato->telefoneCelular !!}</td>
            <td>{!! $contato->telefoneRecado !!}</td>
            <td>{!! $contato->email !!}</td>
            <td>
                {!! Form::open(['route' => ['contatos.destroy', $contato->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('contatos.show', [$contato->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('contatos.edit', [$contato->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>