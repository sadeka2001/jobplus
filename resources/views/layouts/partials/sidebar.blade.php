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
                <a href="{{ url('admin/dashboard') }}"><i class="sidebar-item-icon fa fa-th-large"></i>
                    <span class="nav-label">Dashboard</span>
                </a>
            </li>
            <li class="{{ Request::is('admin/top/company*') ? 'active' : '' }}">
                <a href="{{ route('company.index') }}"><i class="sidebar-item-icon fas fa-images"></i>
                    <span class="nav-label">Companies</span>
                </a>
            </li>

            @foreach (getPlugins() as $plugin)
                <li class="{{ Request::is("admin/" . $plugin->url . "*") ? 'active' : '' }}">
                    <a href="{{ route($plugin->url.'.index') }}"><i class="sidebar-item-icon fa fa-sticky-note"></i>
                        <span class="nav-label">{{ $plugin->name }}</span>
                    </a>
                </li>
            @endforeach

            <li class="{{ Request::is('admin/about*') ? 'active' : '' }}">
                <a href="{{ route('about.index') }}"><i class="sidebar-item-icon fa fa-sticky-note"></i>
                    <span class="nav-label">About</span>
                </a>
            </li>
            <li class="{{ Request::is('admin/plugins*') ? 'active' : '' }}">
                <a href="{{ route('plugins.index') }}"><i class="sidebar-item-icon fa fa-sticky-note"></i>
                    <span class="nav-label">Plugins </span>
                </a>
            </li>

            <li class="{{ Request::is('admin/contact*') ? 'active' : '' }}">
                <a href="{{ route('contact') }}"><i class="sidebar-item-icon far fa-comment"></i>
                    <span class="nav-label">Contact</span>
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
