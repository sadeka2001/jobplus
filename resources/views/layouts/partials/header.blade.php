<ul class="nav navbar-toolbar">
    <li class="dropdown dropdown-user">
        <a class="nav-link dropdown-toggle link" data-toggle="dropdown">
            <img src="" />
            <span></span><i class="fa fa-angle-down m-l-5"></i></a>
        <ul class="dropdown-menu dropdown-menu-right">
            <a class="dropdown-item" href=""><i class="fa fa-user"></i>Profile</a>
            <li class="dropdown-divider"></li>
            <a class="dropdown-item" href=""
               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <i class="fa fa-power-off"></i>  {{ __('Logout') }}
            </a>
            <form id="logout-form" action="" method="POST" class="d-none">
                @csrf
            </form>
        </ul>
    </li>
</ul>
