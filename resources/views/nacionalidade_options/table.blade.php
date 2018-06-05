<table class="table table-responsive" id="nacionalidadeOptions-table">
    <thead>
        <tr>
            <th>Value</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($nacionalidadeOptions as $nacionalidadeOption)
        <tr>
            <td>{!! $nacionalidadeOption->value !!}</td>
            <td>
                {!! Form::open(['route' => ['nacionalidadeOptions.destroy', $nacionalidadeOption->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('nacionalidadeOptions.show', [$nacionalidadeOption->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('nacionalidadeOptions.edit', [$nacionalidadeOption->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>