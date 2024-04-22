@extends('admin.layout.app')

@section('content')

    <div class="container-fluid p-0">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-white">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="{{url('/admin/dashboard')}}"><img src="{{asset('admin/img/dashboard-logo.png')}}" class="img-fluid plr"></a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <!-- <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div> -->
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        
                        
                        <li>
                        <form id="logout-form" action="" method="POST" style="display: none;">
    @csrf
</form>

                        <!-- Logout -->
                        <form method="POST" action="{{ route('logout') }}">
                                                    @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                        <!-- Logout -->
                    </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
           
        <!-- Include the sidebar partial -->
        @include('admin.layout.sidebar')
        
            <div id="layoutSidenav_content">
                <main class="mb-3">
                    <div class="container-fluid px-4">
                        <div class="row">
                            <div class="col-md-6"><h5 class="mt-4">Bank ID oversikt</h5></div>
                            <div class="col-md-6">
                           
                            </div>
                        </div>

                       

                        
                        <ol class="breadcrumb mb-0">
                           
                        </ol>

                        
                        <div class="row mt-2">
                            
                            <div class="col-xl-12 col-md-12 mt-3">
                                <div class="dashboard-card-3">
                                
                                <!-- Customers Search -->
                                <form action="{{ route('admin.all-customers') }}" method="GET" class="form-inline">
                                    <div class="row">
                                            
                                        <div class="col-md-5">
                                            <div class="form-group mr-2">
                                            <select name="status" class="form-control">
                                                <option>Denied Status or Active</option>
                                                <option value="activate" {{ request('status') == 'activate' ? 'selected' : '' }}>Activate</option>
                                                <option value="deactivate" {{ request('status') == 'deactivate' ? 'selected' : '' }}>Deactivate</option>
                                            </select>
                                            </div>
                                        </div>

                                        <div class="col-md-5">
                                            <input type="text" class="form-control" name="search" placeholder="Organisasjonsnr / Forhandler / Kontaktperson/ Telefon nr" value="{{ request('search') }}">
                                        </div>

                                        <div class="col-md-2">
                                        <button type="submit" class="btn btn-primary w-100">Search</button>
                                        </div>
                                    
                                    </div>
                                    </form>
                                    <!-- Customers Search -->

                                    <hr>

                                <!-- Tabs Container -->
                                <div class="container p-0">
                                    <ul class="nav nav-tabs" id="myTab2" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Forhandler</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <div class="tabs_divider"></div>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="about-tab" data-bs-toggle="tab" data-bs-target="#about" type="button" role="tab" aria-controls="about" aria-selected="false">Antall signeringer</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <div class="tabs_divider"></div>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Periode</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <div class="tabs_divider"></div>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="gallery-tab" data-bs-toggle="tab" data-bs-target="#gallery" type="button" role="tab" aria-controls="gallery" aria-selected="false">Terms for website register</button>
                                        </li>
                                    </ul>
                                    <div class="tab-content" id="myTabContent">
                                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                            Home content goes here.
                                        </div>
                                        <div class="tab-pane fade" id="about" role="tabpanel" aria-labelledby="about-tab">
                                            About content goes here.
                                        </div>
                                        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                            Contact content goes here.
                                        </div>
                                        <div class="tab-pane fade" id="gallery" role="tabpanel" aria-labelledby="gallery-tab">
                                            Gallery content goes here.
                                        </div>
                                    </div>
                                </div>
                                <!-- Tabs Container -->
                                    
                                        
                                </div>
                            </div>
                        </div>
                        
                        
                    </div>
                </main>
                <!-- <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Bilsign 2024</div>
                            
                        </div>
                    </div>
                </footer> -->
            </div>
        </div>
    </div>

@endsection