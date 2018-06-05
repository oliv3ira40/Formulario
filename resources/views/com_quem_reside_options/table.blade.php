<table class="table table-responsive" id="comQuemResideOptions-table">
    <thead>
        <tr>
            <th>Value</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($comQuemResideOptions as $comQuemResideOption)
        <tr>
            <td>{!! $comQuemResideOption->value !!}</td>
            <td>
                {!! Form::open(['route' => ['comQuemResideOptions.destroy', $comQuemResideOption->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('comQuemResideOptions.show', [$comQuemResideOption->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('comQuemResideOptions.edit', [$comQuemResideOption->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>