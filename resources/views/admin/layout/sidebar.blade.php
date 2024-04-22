<!-- resources/views/includes/sidebar.blade.php -->

<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
            <a class="nav-link {{ Request::is('admin/all-customers') ? 'active' : '' }}" href="{{ route('admin.all-customers') }}">
                    <div class="sb-nav-link-icon"><img src="{{asset('admin/img/all-users-icon.png')}}" class="dashboard-icon-size"></div>
                    Kunder
                </a>
                <a class="nav-link {{ Request::is('admin/dashboard', 'admin/new-users') ? 'active' : '' }}" href="{{ url('/admin/dashboard') }}">
                    <div class="sb-nav-link-icon"><img src="{{asset('admin/img/dashboard-icon.png')}}" class="dashboard-icon-size"></div>
                    Dashboard
                </a>
                <a class="nav-link {{ Request::is('admin/all-documents') ? 'active' : '' }}" href="{{ route('admin.all-documents') }}">
                    <div class="sb-nav-link-icon"><img src="{{asset('admin/img/files-icon.png')}}" class="dashboard-icon-size"></div>
                    Alle dokumenter
                </a>
                <a class="nav-link {{ Request::is('admin/bank') ? 'active' : '' }}" href="{{ route('admin.bank') }}">
                    <div class="sb-nav-link-icon"><img src="{{asset('admin/img/bank-icon.png')}}" class="dashboard-icon-size"></div>
                    Bank ID oversikt
                </a>

            </div>
        </div>
        <div class="sb-sidenav-footer p-0">
        <div class="sb-sidenav-menu">
            <div class="nav">
            <a class="nav-link {{ Request::is('admin/settings') ? 'active' : '' }}" href="{{ route('admin.settings') }}">
                    <div class="sb-nav-link-icon"><img src="{{asset('admin/img/settings.png')}}" class="dashboard-icon-size"></div>
                    Innstillinger
                </a>
            </div>
        </div>
        </div>
    </nav>
</div>
