<table class="table table-responsive" id="ufOptions-table">
    <thead>
        <tr>
            <th>Value</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($ufOptions as $ufOption)
        <tr>
            <td>{!! $ufOption->value !!}</td>
            <td>
                {!! Form::open(['route' => ['ufOptions.destroy', $ufOption->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('ufOptions.show', [$ufOption->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('ufOptions.edit', [$ufOption->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>