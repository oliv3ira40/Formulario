<table class="table table-responsive" id="estadoCivilOptions-table">
    <thead>
        <tr>
            <th>Value</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($estadoCivilOptions as $estadoCivilOption)
        <tr>
            <td>{!! $estadoCivilOption->value !!}</td>
            <td>
                {!! Form::open(['route' => ['estadoCivilOptions.destroy', $estadoCivilOption->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('estadoCivilOptions.show', [$estadoCivilOption->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('estadoCivilOptions.edit', [$estadoCivilOption->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>