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
                            <div class="col-md-6"><h5 class="mt-4">Innstillinger</h5></div>
                            <div class="col-md-6">
                           
                            </div>
                        </div>

                       

                        
                        <ol class="breadcrumb mb-0">
                           
                        </ol>

                        
                        <div class="row mt-2">
                            
                            <div class="col-xl-12 col-md-12 mt-3">
                                <div class="dashboard-card-3">
                                
                                <!-- Tabs Container -->
                                <div class="container">
                                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Terms for all categorey</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <div class="tabs_divider"></div>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="about-tab" data-bs-toggle="tab" data-bs-target="#about" type="button" role="tab" aria-controls="about" aria-selected="false">Profile</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <div class="tabs_divider"></div>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Passord</button>
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
                                            <h6 class="mt-4 fs-15">YOUR HAVE TO CHECK ALL OTHER TERMS WE HAVE THIS IS NOT ALL</h6>
                                            <form method="POST" action="{{ route('terms.store') }}">
                                            @csrf
                                            <div class="mt-4">
                                                <label>BIL: Kjøpekontrakt vilkår</label>
                                                <textarea class="form-control" name="purchase_terms" required="required">{{ old('purchase_terms', $term->purchase_terms ?? '') }}</textarea>
                                                <br><br>
                                                <label>BIL: Kjøpekontrakt Formidling vilkår</label>
                                                <textarea class="form-control" name="mediation_terms" required="required">{{ old('mediation_terms', $term->mediation_terms ?? '') }}</textarea>
                                                <br><br>
                                                <label>BIL: Innkjøpskontrakt vilkår</label>
                                                <textarea class="form-control summernote" name="purchase_contract_terms" required="required">{{ old('purchase_contract_terms', $term->purchase_contract_terms ?? '') }}</textarea>
                                                <br>
                                                <center><button type="submit" class="btn btn-term">Lagre</button></center>
                                            </div>
                                            </form>
                                        </div>
                                        <div class="tab-pane fade" id="about" role="tabpanel" aria-labelledby="about-tab">
                                        <form method="POST" action="{{ route('register') }}">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    
    <div class="row">

    <!-- Name -->
    <div class="col-md-6">
    <div class="mb-3">
        <input id="name" placeholder="Fornavn" class="form-control rounded-5" type="text" name="name" value="{{ old('name') }}" required autofocus autocomplete="name">
        @error('name')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    </div>

    <!-- Username -->
    <div class="col-md-6">
    <div class="mb-3">
        <input id="username" placeholder="Etternavn" class="form-control rounded-5" type="text" name="username" value="{{ old('username') }}" required autofocus autocomplete="username">
        @error('username')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    </div>

    <!-- Organization Number -->
    <div class="col-md-6">
    <div class="mb-3">
        <input id="organization_num" placeholder="Organisasjonsnummer" class="form-control rounded-5" type="text" name="organization_num" value="{{ old('organization_num') }}" required autofocus autocomplete="organization_num">
        @error('organization_num')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    </div>

    <!-- Dealer Name -->
    <div class="col-md-6">
    <div class="mb-3">
        <input id="dealer_name" placeholder="Navn på forhandler" class="form-control rounded-5" type="text" name="dealer_name" value="{{ old('dealer_name') }}" required autofocus autocomplete="dealer_name">
        @error('dealer_name')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    </div>

    <!-- Phone Number -->
    <div class="col-md-3">
        <select class="form-control rounded-5">
            <option value="+47">+47</option>
        </select>
    </div>

    <div class="col-md-9">
    <div class="mb-3">
        <input id="phone_num" placeholder="Mobilnummer" class="form-control rounded-5" type="text" name="phone_num" value="{{ old('phone_num') }}" required autofocus autocomplete="phone_num">
        @error('phone_num')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    </div>

      <!-- Address -->
      <div class="col-md-12">
    <div class="mb-3">
        <input id="address" placeholder="Gateadresse" class="form-control rounded-5" type="text" name="address" value="{{ old('address') }}" required autofocus autocomplete="address">
        @error('address')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    </div>

       <!-- Post Number -->
       <div class="col-md-6">
    <div class="mb-3">
        <input id="post_num" placeholder="Postnummer" class="form-control rounded-5" type="text" name="post_num" value="{{ old('post_num') }}" required autofocus autocomplete="post_num">
        @error('post_num')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    </div>

      <!-- City -->
      <div class="col-md-6">
    <div class="mb-3">
        <input id="city" placeholder="By" class="form-control rounded-5" type="text" name="city" value="{{ old('city') }}" required autofocus autocomplete="city">
        @error('city')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    </div>

    <!-- Email Address -->
    <div class="mb-3">
        <input id="email" placeholder="Din e-post*" class="form-control rounded-5" type="email" name="email" value="{{ old('email') }}" required autocomplete="username">
        @error('email')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

    <!-- Password -->
    <div class="mb-3">
        <input id="password" placeholder="Passord*" class="form-control rounded-5" type="password" name="password" required autocomplete="new-password">
        @error('password')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

    <!-- Confirm Password -->
    <div class="mb-3">
    <span id="popover-cpassword" class="hide pull-right block-help"><i class="fa fa-info-circle text-danger" aria-hidden="true"></i> Password don't match</span>
        <input id="confirm-password" placeholder="Gjenta passord*" class="form-control rounded-5" type="password" name="password_confirmation" required autocomplete="new-password">
        @error('password_confirmation')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

    <div id="popover-password">
                                    <p>Passord styrke: <span id="result"> </span></p>
                                    <div class="progress">
                                        <div id="password-strength" class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:0%">
                                        </div>
                                    </div>
                                    <ul class="list-unstyled">
                                        <li class=""><span class="low-upper-case"><i class="bg-gray fa fa-check" aria-hidden="true"></i></span>&nbsp; 1 lowercase &amp; 1 uppercase</li>
                                        <li class=""><span class="one-number"><i class="bg-gray fa fa-check" aria-hidden="true"></i></span> &nbsp;1 number (0-9)</li>
                                        <li class=""><span class="one-special-char"><i class="bg-gray fa fa-check" aria-hidden="true"></i></span> &nbsp;1 Special Character (!@#$%^&*).</li>
                                        <li class=""><span class="eight-character"><i class="bg-gray fa fa-check" aria-hidden="true"></i></span>&nbsp; Atleast 8 Character</li>
                                    </ul>
                                </div>

    <!-- <div class="password_strengh">
        <div class="row">
            <div class="col-md-12">
                <p>Passord styrke</p>
            </div>
            <div class="col-md-4">
                <div class="progress_bar"></div>
            </div>
            <div class="col-md-4">
                <div class="progress_bar"></div>
            </div>
            <div class="col-md-4">
                <div class="progress_bar"></div>
            </div>
        </div>
    </div> -->

    <div class="d-flex terms-box">
    <input type="checkbox" name="terms" required>&nbsp;&nbsp;
    <p>Jeg godtar vilkårene for bruk av tjenesten <a href="#">Personvernerklæring</a> og <a href="#">Vilkår gjelder</a></p>
    </div>

    <div class="text-center licenses-yes-no mt-4 mb-4">
    <p>Har du brukthandel bevilling:</p>
        <label for="Yes">Ja</label>
        <input type="radio" id="Yes" value="Yes" name="licenses">
        <label for="No">Nei</label>
        <input type="radio" id="No" value="No" name="licenses">
    </div>

    <div class="d-flex justify-content-center">
        <button type="submit" id="sign-up" class="primary-btn-1" disabled="disabled">Registrer deg nå</button>
        <div id="sign-up-popover" class="hide">
                                    <p><i class="fa fa-file-text" aria-hidden="true"></i> Enter all fields to Continue</p>
                                </div>
    </div>

    </div>
</form>
                                        </div>
                                        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                        <!-- Password Update -->
                                        <div class="container p-0 mt-4">
        <div class="row">
            <div class="col-md-8">

                    
                    <div id="update-password-success" class="alert alert-success" style="display: none;"></div>

                        <form id="update-password-form" method="POST" action="{{ route('admin.password.update') }}">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label for="current_password">{{ __('Gammelt passord*') }}</label>
                                <input id="current_password" type="password" class="form-control @error('current_password') is-invalid @enderror" name="current_password" required autofocus>
                                <span id="current_password-error" class="invalid-feedback" role="alert"></span>
                        
                            </div>

                            <div class="form-group">
                                <label for="password">{{ __('Passord*') }}</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required>
                                <span id="password-error" class="invalid-feedback" role="alert"></span>
                                
                            </div>

                            <div class="form-group">
                                <label for="password_confirmation">{{ __('Gjenta passord*') }}</label>
                                <input id="password_confirmation" type="password" class="form-control" name="password_confirmation" required>
                                <span id="password_confirmation-error" class="invalid-feedback" role="alert"></span>

                            </div>
                            <br>
                            <button type="submit" class="btn btn-term" id="update-password-btn">{{ __('Lagre endringer') }}</button>
                        </form>
                    </div>
            
        </div>
    </div>
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