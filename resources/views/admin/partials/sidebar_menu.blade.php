<ul class="nav nav-sidebar">
    <li class="{{ Request::is('admin') ? "active" : "" }}"><a href="{{ url('/admin') }}">Обзор</a></li>
</ul>
<ul class="nav nav-sidebar">
    <!--<li class="{{ Request::is('admin/menu') ? "active" : "" }}"><a href="{{ url('/admin/menu') }}">Меню</a></li>-->
    <li class="{{ Request::is('admin/services') ? "active" : "" }}"><a href="{{ url('/admin/services') }}">Виды уборок</a></li>
    <li class="{{ Request::is('admin/profiles') ? "active" : "" }}"><a href="{{ url('/admin/profiles') }}">Клиенты</a></li>
</ul>