<ul class="nav nav-sidebar">
    <li class="{{ Request::is('admin') ? "active" : "" }}"><a href="{{ url('/admin') }}">Overview</a></li>
</ul>
<ul class="nav nav-sidebar">
    <li class="{{ Request::is('admin/menu') ? "active" : "" }}"><a href="{{ url('/admin/menu') }}">Меню</a></li>
</ul>