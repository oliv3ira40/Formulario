<li class="{{ Request::is('pessoas*') ? 'active' : '' }}">
    <a href="{!! route('pessoas.index') !!}"><i class="fa fa-edit"></i><span>Pessoas</span></a>
</li>

<li class="{{ Request::is('enderecos*') ? 'active' : '' }}">
    <a href="{!! route('enderecos.index') !!}"><i class="fa fa-edit"></i><span>Enderecos</span></a>
</li>

