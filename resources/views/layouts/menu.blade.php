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

