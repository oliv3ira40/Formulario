<table class="table table-responsive" id="relacaoAosFilhosOptions-table">
    <thead>
        <tr>
            <th>Value</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($relacaoAosFilhosOptions as $relacaoAosFilhosOption)
        <tr>
            <td>{!! $relacaoAosFilhosOption->value !!}</td>
            <td>
                {!! Form::open(['route' => ['relacaoAosFilhosOptions.destroy', $relacaoAosFilhosOption->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('relacaoAosFilhosOptions.show', [$relacaoAosFilhosOption->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('relacaoAosFilhosOptions.edit', [$relacaoAosFilhosOption->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>