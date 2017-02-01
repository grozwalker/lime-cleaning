<ul class="nav navbar-nav">
    <li class="{{ Request::is('admin') ? "active" : "" }}"><a href="{{ url('/admin') }}">Новые заказы</a></li>
</ul>
<ul class="nav navbar-nav">
    <!--<li class="{{ Request::is('admin/menu') ? "active" : "" }}"><a href="{{ url('/admin/menu') }}">Меню</a></li>-->
    <!--<li class="{{ Request::is('admin/services') ? "active" : "" }}"><a href="{{ url('/admin/services') }}">Виды уборок</a></li>-->
    <li class="{{ Request::is('admin/profiles') ? "active" : "" }}"><a href="{{ url('/admin/profiles') }}">Клиенты</a></li>
    <li class="{{ Request::is('admin/orders') ? "active" : "" }}"><a href="{{ url('/admin/orders') }}">История заказов</a></li>
</ul>