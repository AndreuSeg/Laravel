<a href="javascript:void(0)" onclick="document.getElementById('logout').submit()">Cerrar sesion</a>
<form action="{{ route('logout') }}" id="logout" method="POST">
    @csrf
</form>
