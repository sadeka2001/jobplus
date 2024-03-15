<nav class="page-sidebar" id="sidebar">
    <div id="sidebar-collapse">
        <div class="admin-block d-flex">
            <div>
                {{-- <img class="rounded-circle" width="45px" src="{{ auth()->user()->image !== null? asset(auth()->user()->image) :asset('assets/backend/img/admin-avatar.png') }}" width="45px" /> --}}
            </div>
            <div class="admin-info">
                <div class="font-strong">{{ auth()->user()->name ?? 'Admin User' }}</div><small>Administrator</small>
            </div>
        </div>
        <ul class="side-menu metismenu">

            <li class="{{ Request::is('dashboard') ? 'active' : '' }}">
                <a href="{{ url('/dashboard') }}"><i class="sidebar-item-icon fa fa-th-large"></i>
                    <span class="nav-label">Dashboard</span>
                </a>
            </li>
            <li class="{{ Request::is('admin/slider*') ? 'active' : '' }}">
                <a href=""><i class="sidebar-item-icon fas fa-images"></i>
                    <span class="nav-label">Profile</span>
                </a>
            </li>

            <li class="{{ Request::is('admin/slider*') ? 'active' : '' }}">
                <a href=""><i class="sidebar-item-icon fas fa-images"></i>
                    <span class="nav-label">Job</span>
                </a>
            </li>



            <li class="{{ Request::is('admin/setting/general*') ? 'active' : '' }}">
                <a href=""><i class="sidebar-item-icon fas fa-photo"></i>
                    <span class="nav-label">Account Setting</span>
                </a>
            </li>

        </ul>

    </div>
</nav>
