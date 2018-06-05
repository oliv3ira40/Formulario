<table class="table table-responsive" id="tipoDaDeficienciaOptions-table">
    <thead>
        <tr>
            <th>Value</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($tipoDaDeficienciaOptions as $tipoDaDeficienciaOption)
        <tr>
            <td>{!! $tipoDaDeficienciaOption->value !!}</td>
            <td>
                {!! Form::open(['route' => ['tipoDaDeficienciaOptions.destroy', $tipoDaDeficienciaOption->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('tipoDaDeficienciaOptions.show', [$tipoDaDeficienciaOption->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('tipoDaDeficienciaOptions.edit', [$tipoDaDeficienciaOption->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>