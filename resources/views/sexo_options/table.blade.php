<table class="table table-responsive" id="sexoOptions-table">
    <thead>
        <tr>
            <th>Value</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($sexoOptions as $sexoOption)
        <tr>
            <td>{!! $sexoOption->value !!}</td>
            <td>
                {!! Form::open(['route' => ['sexoOptions.destroy', $sexoOption->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('sexoOptions.show', [$sexoOption->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('sexoOptions.edit', [$sexoOption->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>