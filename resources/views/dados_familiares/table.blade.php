<table class="table table-responsive" id="dadosFamiliares-table">
    <thead>
        <tr>
            <th>Pessoa Id</th>
        <th>Comquemredise</th>
        <th>Mulherresponsavelfamilia</th>
        <th>Protegidamariadapenha</th>
        <th>Filhosmenor18</th>
        <th>Filhosmaior18</th>
        <th>Emrelacaoaosfilhos</th>
        <th>Tutorcriancaouadolescente</th>
        <th>Pessoasqueiraoresidir</th>
        <th>Moracomidoso</th>
        <th>Voceoufamiliarcomdeficiencia</th>
        <th>Tipodadeficiencia</th>
        <th>Voceoufamiliardoencacronica</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($dadosFamiliares as $dadosFamiliare)
        <tr>
            <td>{!! $dadosFamiliare->pessoa_id !!}</td>
            <td>{!! $dadosFamiliare->comQuemRedise !!}</td>
            <td>{!! $dadosFamiliare->mulherResponsavelFamilia !!}</td>
            <td>{!! $dadosFamiliare->ProtegidaMariaDaPenha !!}</td>
            <td>{!! $dadosFamiliare->filhosMenor18 !!}</td>
            <td>{!! $dadosFamiliare->filhosMaior18 !!}</td>
            <td>{!! $dadosFamiliare->emRelacaoAosFilhos !!}</td>
            <td>{!! $dadosFamiliare->TutorCriancaOuAdolescente !!}</td>
            <td>{!! $dadosFamiliare->pessoasQueIraoResidir !!}</td>
            <td>{!! $dadosFamiliare->moraComIdoso !!}</td>
            <td>{!! $dadosFamiliare->VoceOuFamiliarComDeficiencia !!}</td>
            <td>{!! $dadosFamiliare->tipoDaDeficiencia !!}</td>
            <td>{!! $dadosFamiliare->voceOuFamiliarDoencaCronica !!}</td>
            <td>
                {!! Form::open(['route' => ['dadosFamiliares.destroy', $dadosFamiliare->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('dadosFamiliares.show', [$dadosFamiliare->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('dadosFamiliares.edit', [$dadosFamiliare->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>