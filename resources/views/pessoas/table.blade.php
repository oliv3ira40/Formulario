<table class="table table-responsive" id="pessoas-table">
    <thead>
        <tr>
            <th>Cpf</th>
        <th>Nomecompleto</th>
        <th>Rg</th>
        <th>Dataemissaorg</th>
        <th>Ufemissaorg</th>
        <th>Orgaoemissorrg</th>
        <th>Datanascimento</th>
        <th>Ufnascimento</th>
        <th>Naturalidade</th>
        <th>Nacionalidade</th>
        <th>Sexo</th>
        <th>Estadocivil</th>
        <th>Escolaridade</th>
        <th>Carteiraprofissional</th>
        <th>Seriecarteiraprofissional</th>
        <th>Nis</th>
        <th>Nomecompletopai</th>
        <th>Nomecompletomae</th>
        <th>Nomecompletocompanheiro</th>
        <th>Rgcompanheiro</th>
        <th>Cpfcompanheiro</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($pessoas as $pessoa)
        <tr>
            <td>{!! $pessoa->cpf !!}</td>
            <td>{!! $pessoa->nomeCompleto !!}</td>
            <td>{!! $pessoa->rg !!}</td>
            <td>{!! $pessoa->dataEmissaoRg !!}</td>
            <td>{!! $pessoa->ufEmissaoRg !!}</td>
            <td>{!! $pessoa->orgaoEmissorRg !!}</td>
            <td>{!! $pessoa->dataNascimento !!}</td>
            <td>{!! $pessoa->ufNascimento !!}</td>
            <td>{!! $pessoa->naturalidade !!}</td>
            <td>{!! $pessoa->nacionalidade !!}</td>
            <td>{!! $pessoa->sexo !!}</td>
            <td>{!! $pessoa->estadoCivil !!}</td>
            <td>{!! $pessoa->escolaridade !!}</td>
            <td>{!! $pessoa->carteiraProfissional !!}</td>
            <td>{!! $pessoa->serieCarteiraProfissional !!}</td>
            <td>{!! $pessoa->nis !!}</td>
            <td>{!! $pessoa->nomeCompletoPai !!}</td>
            <td>{!! $pessoa->nomeCompletoMae !!}</td>
            <td>{!! $pessoa->nomeCompletoCompanheiro !!}</td>
            <td>{!! $pessoa->rgCompanheiro !!}</td>
            <td>{!! $pessoa->cpfCompanheiro !!}</td>
            <td>
                {!! Form::open(['route' => ['pessoas.destroy', $pessoa->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('pessoas.show', [$pessoa->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('pessoas.edit', [$pessoa->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>