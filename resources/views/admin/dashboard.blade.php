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
                        <h5 class="mt-4">Total oversikt</h5>
                        <ol class="breadcrumb mb-0">
                           
                        </ol>
                        <div class="row">
                            <div class="col-xl-3 col-md-6 mt-3">
                                <div class="dashboard-card">
                                    <img src="{{asset('admin/img/pencil.png')}}" class="img-fluid">
                                    <h4 class="dashboard-card-heading">259</h4>
                                    <p class="dashboard-card-para">Utkast</p>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6 mt-3">
                                <div class="dashboard-card">
                                    <img src="{{asset('admin/img/clock.png')}}" class="img-fluid">
                                    <h4 class="dashboard-card-heading">144</h4>
                                    <p class="dashboard-card-para">Avventer</p>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6 mt-3">
                                <div class="dashboard-card">
                                    <img src="{{asset('admin/img/tick.png')}}" class="img-fluid">
                                    <h4 class="dashboard-card-heading">1590</h4>
                                    <p class="dashboard-card-para">Fullført</p>
                                </div>
                            </div>

                            <div class="col-xl-3 col-md-6 mt-3">
                                <div class="dashboard-card">
                                    <img src="{{asset('admin/img/cross.png')}}" class="img-fluid">
                                    <h4 class="dashboard-card-heading">29</h4>
                                    <p class="dashboard-card-para">Avbrutt</p>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-2">
                            <div class="col-xl-8 col-md-8 mt-3">
                                <div class="dashboard-card-2">
                                <h6>BilSign</h6>
                                <hr>
                                <div class="row">
                                    <div class="col-md-4 mt-3">
                                       <div class="card">
                                            <div class="card-body text-center card-cstm-pad">
                                            <img src="{{asset('admin/img/find.png')}}" class="img-fluid">
                                            <p class="dashboard-card-para-2">Finn dokumenter</p>
                                            </div>
                                       </div> 
                                    </div>
                                    <div class="col-md-4 mt-3">
                                        <div class="card">
                                            <div class="card-body text-center card-cstm-pad">
                                            <img src="{{asset('admin/img/user-account.png')}}" class="img-fluid">
                                            <p class="dashboard-card-para-2">Opprett kunde</p>
                                            </div>
                                       </div> 
                                    </div>
                                    <div class="col-md-4 mt-3">
                                        <div class="card">
                                                <a href="{{route('admin.new-users')}}" class="decoration_none">
                                                <div class="card-body text-center card-cstm-pad">
                                                <img src="{{asset('admin/img/notification.png')}}" class="img-fluid">
                                                <p class="dashboard-card-para-2">Nye kunde forespørsler</p>
                                                </div>
                                                </a>
                                        </div> 
                                    </div>
                                    <div class="col-md-4 mt-3">
                                        <div class="card">
                                                    <div class="card-body text-center card-cstm-pad">
                                                    <img src="{{asset('admin/img/setting.png')}}" class="img-fluid">
                                                    <p class="dashboard-card-para-2">Innstillinger</p>
                                                    </div>
                                            </div> 
                                    </div>
                                    <div class="col-md-4 mt-3">
                                        <div class="card">
                                                    <div class="card-body text-center card-cstm-pad">
                                                    <!-- <img src="{{asset('admin/img/notification.png')}}" class="img-fluid">
                                                    <p class="dashboard-card-para-2">Nye kunde forespørsler</p> -->
                                                    <br>
                                                    <br>
                                                    <br>
                                                    <br>
                                                    <br>
                                                    <br>
                                                    
                                                    </div>
                                            </div> 
                                    </div>
                                    <div class="col-md-4 mt-3">
                                        <div class="card">
                                                    <div class="card-body text-center card-cstm-pad">
                                                    <img src="{{asset('admin/img/dots.png')}}" class="img-fluid">
                                                    <p class="dashboard-card-para-2">Bank ID oversikt</p>
                                                    </div>
                                            </div> 
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-4 mt-3">
                                <div class="dashboard-card-2">
                                    <h6>Nyeste forespørsler</h6>
                                    <hr>
                                        <!-- Fetch Users -->
                                        @foreach ($users as $user)
                                        <div class="card mt-3">
                                        <form method="POST" action="{{ route('user.updateStatus', ['id' => $user->id]) }}">
                                        @csrf
                                        @method('POST')
                                            <div class="card-body jsb-before">
                                                <div class="d-flex flex-wrap justify-content-between">
                                                    <div><p><span class="card-span-3">Forhandler:</span> <span class="card-span-4">Aktiv Bilformidling AS</span></p></div>
                                                    <div class="d-flex justify-content-between w-100"><span class="card-span">Kontakt person:  {{ $user->name }}</span> <span class="card-span-2">{{ $user->created_at->diffForHumans() }}</span></div>
                                                    <div class="d-flex justify-content-between w-100"><button type="submit" name="status" value="activate" class="btn btn-green">Godta</button> <button type="submit" name="status" value="deactivate" class="btn btn-pink">Avslå</button> <button class="btn btn-orange">Mer informasjon</button></div>
                                                </div>
                                            </div>
                                        </form>
                                        </div>
                                        @endforeach
                                        <!-- Fetch Users End -->

                                        <p class="text-center mt-3 crd_btm_txt"><a href="{{route('admin.new-users')}}" class="decoration_none">Se alle forespørsler</a></p>    
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