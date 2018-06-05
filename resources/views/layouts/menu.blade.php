<li class="{{ Request::is('pessoas*') ? 'active' : '' }}">
    <a href="{!! route('pessoas.index') !!}"><i class="fa fa-edit"></i><span>Pessoas</span></a>
</li>

<li class="{{ Request::is('enderecos*') ? 'active' : '' }}">
    <a href="{!! route('enderecos.index') !!}"><i class="fa fa-edit"></i><span>Enderecos</span></a>
</li>

<li class="{{ Request::is('contatos*') ? 'active' : '' }}">
    <a href="{!! route('contatos.index') !!}"><i class="fa fa-edit"></i><span>Contatos</span></a>
</li>

<li class="{{ Request::is('trabalhoERendas*') ? 'active' : '' }}">
    <a href="{!! route('trabalhoERendas.index') !!}"><i class="fa fa-edit"></i><span>Trabalho E Rendas</span></a>
</li>

<li class="{{ Request::is('dadosFamiliares*') ? 'active' : '' }}">
    <a href="{!! route('dadosFamiliares.index') !!}"><i class="fa fa-edit"></i><span>Dados Familiares</span></a>
</li>

<li class="{{ Request::is('moradias*') ? 'active' : '' }}">
    <a href="{!! route('moradias.index') !!}"><i class="fa fa-edit"></i><span>Moradias</span></a>
</li>

<li class="{{ Request::is('sexoOptions*') ? 'active' : '' }}">
    <a href="{!! route('sexoOptions.index') !!}"><i class="fa fa-edit"></i><span>Sexo Options</span></a>
</li>

<li class="{{ Request::is('ufOptions*') ? 'active' : '' }}">
    <a href="{!! route('ufOptions.index') !!}"><i class="fa fa-edit"></i><span>Uf Options</span></a>
</li>

<li class="{{ Request::is('nacionalidadeOptions*') ? 'active' : '' }}">
    <a href="{!! route('nacionalidadeOptions.index') !!}"><i class="fa fa-edit"></i><span>Nacionalidade Options</span></a>
</li>

<li class="{{ Request::is('estadoCivilOptions*') ? 'active' : '' }}">
    <a href="{!! route('estadoCivilOptions.index') !!}"><i class="fa fa-edit"></i><span>Estado Civil Options</span></a>
</li>

<li class="{{ Request::is('escolaridadeOptions*') ? 'active' : '' }}">
    <a href="{!! route('escolaridadeOptions.index') !!}"><i class="fa fa-edit"></i><span>Escolaridade Options</span></a>
</li>

<li class="{{ Request::is('relacaoAosFilhosOptions*') ? 'active' : '' }}">
    <a href="{!! route('relacaoAosFilhosOptions.index') !!}"><i class="fa fa-edit"></i><span>Relacao Aos Filhos Options</span></a>
</li>

<li class="{{ Request::is('comQuemResideOptions*') ? 'active' : '' }}">
    <a href="{!! route('comQuemResideOptions.index') !!}"><i class="fa fa-edit"></i><span>Com Quem Reside Options</span></a>
</li>

<li class="{{ Request::is('tipoDaDeficienciaOptions*') ? 'active' : '' }}">
    <a href="{!! route('tipoDaDeficienciaOptions.index') !!}"><i class="fa fa-edit"></i><span>Tipo Da Deficiencia Options</span></a>
</li>

<li class="{{ Request::is('doencaCronicaOptions*') ? 'active' : '' }}">
    <a href="{!! route('doencaCronicaOptions.index') !!}"><i class="fa fa-edit"></i><span>Doenca Cronica Options</span></a>
</li>

