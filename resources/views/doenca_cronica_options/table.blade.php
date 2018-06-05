<table class="table table-responsive" id="doencaCronicaOptions-table">
    <thead>
        <tr>
            <th>Value</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($doencaCronicaOptions as $doencaCronicaOption)
        <tr>
            <td>{!! $doencaCronicaOption->value !!}</td>
            <td>
                {!! Form::open(['route' => ['doencaCronicaOptions.destroy', $doencaCronicaOption->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('doencaCronicaOptions.show', [$doencaCronicaOption->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('doencaCronicaOptions.edit', [$doencaCronicaOption->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>