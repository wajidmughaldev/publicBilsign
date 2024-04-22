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
                            <div class="col-md-6"><h5 class="mt-4">Alle dokumenter</h5></div>
                            <div class="col-md-6">
                            @if (session('success'))
                            <div class="alert alert-danger mt-1">
                                {{ session('success') }}
                            </div>
                        @endif
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
                                        <!-- Fetch Users -->
                                        @foreach ($users as $user)
                                        <div class="card mt-3">
                                        
                                        @csrf
                                        @method('POST')
                                            <div class="card-body jsb-before-2">
                                                <div class="d-flex flex-wrap justify-content-between">
                                                    <div class="w-30">
                                                        <p><span class="card-span-3">Forhandler:</span> <span class="card-span-4">Aktiv Bilformidling AS</span></p>
                                                        <span class="card-span">Kontakt person:  {{ $user->name }}</span>
                                                        <span class="card-span-2">E-post: {{ $user->email }}</span>
                                                        <span class="card-span">Mobilnummer:  {{ $user->phone_num }}</span> 
                                                        <span class="card-span">Har du brukthandel bevilling:  {{ $user->licenses }}</span>
                                                        
                                                    </div>
                                                    <div class="w-30">
                                                        <span class="card-span">Organisasjonsnummer:  {{ $user->organization_num }}</span>
                                                        <span class="card-span">Gateadressen:  {{ $user->address }}</span>
                                                        <span class="card-span-2">By: {{ $user->city }}</span>
                                                        <span class="card-span">Postnummer:  {{ $user->post_num }}</span>  
                                                        
                                                    </div>
                                                    <div class="w-20">
                                                    <!-- Block Customer -->
                                                    <button type="submit" class="btn btn-cstmr-block mb-2">Sperre kunde</button>
                                                    <!-- See documents from the customer -->
                                                    <button type="submit" class="btn btn-cstmr-document mb-2">Se dokumenter fra kunde</button>
                                                    <!-- Change information / Change password -->
                                                    <button type="submit" class="btn btn-cstmr-password mb-2">Endre informasjon / Endre passord</button>
                                                    </div>
                                                    <div class="w-20 text-left">
                                                    <span class="card-span-5">{{ $user->created_at->format('Y-m-d') }}</span>
                                                    <!-- Delete customer -->
                                                    <form action="{{ route('users.destroy', $user->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-cstmr-delete">Slett kunde</button>
                                                    </form>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </div>
                                        @endforeach
                                        <!-- Fetch Users End -->
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