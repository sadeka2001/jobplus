<nav class="page-sidebar" id="sidebar">
    <div id="sidebar-collapse">
        <div class="admin-block d-flex">
            <div>
                {{-- <img class="rounded-circle" width="45px" src="{{ auth()->user()->image !== null? asset(auth()->user()->image) :asset('assets/backend/img/admin-avatar.png') }}" width="45px" /> --}}
            </div>
            <div class="admin-info">
                <div class="font-strong">{{ auth()->user()->name ?? 'Company User' }}</div><small>Administrator</small>
            </div>
        </div>
        <ul class="side-menu metismenu">

            <li class="{{ Request::is('company/dashboard') ? 'active' : '' }}">
                <a href="{{ url('company/dashboard') }}"><i class="sidebar-item-icon fa fa-th-large"></i>
                    <span class="nav-label">Dashboard</span>
                </a>
            </li>
            <li class="{{ Request::is('company/c-job-posts*') ? 'active' : '' }}">
                <a href="{{ route('c-job-posts.index') }}"><i class="sidebar-item-icon fas fa-images"></i>
                    <span class="nav-label">Job Posts</span>
                </a>
            </li>
            <li class="{{ Request::is('company/employee*') ? 'active' : '' }}">
                <a href=""><i class="sidebar-item-icon fas fa-images"></i>
                    <span class="nav-label">Employee</span>
                </a>
            </li>
            <li class="{{ Request::is('company/c-blogs*') ? 'active' : '' }}">
                <a href="{{ route('c-blogs.index') }}"><i class="sidebar-item-icon fas fa-images"></i>
                    <span class="nav-label">Blogs</span>
                </a>
            </li>
            <li class="{{ Request::is('company/c-plugins*') ? 'active' : '' }}">
                <a href="{{ route('c-plugins.index') }}"><i class="sidebar-item-icon fas fa-images"></i>
                    <span class="nav-label">Plugins</span>
                </a>
            </li>
            <li class="{{ Request::is('company/setting/general*') ? 'active' : '' }}">
                <a href=""><i class="sidebar-item-icon fas fa-photo"></i>
                    <span class="nav-label">Account Setting</span>
                </a>
            </li>
        </ul>
    </div>
</nav>
