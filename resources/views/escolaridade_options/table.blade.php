<table class="table table-responsive" id="escolaridadeOptions-table">
    <thead>
        <tr>
            <th>Value</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($escolaridadeOptions as $escolaridadeOption)
        <tr>
            <td>{!! $escolaridadeOption->value !!}</td>
            <td>
                {!! Form::open(['route' => ['escolaridadeOptions.destroy', $escolaridadeOption->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('escolaridadeOptions.show', [$escolaridadeOption->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('escolaridadeOptions.edit', [$escolaridadeOption->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>