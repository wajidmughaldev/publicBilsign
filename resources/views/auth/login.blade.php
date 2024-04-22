<x-guest-layout>

    @section('title', 'Login')

    <div class="row">
        <div class="col-md-12 p-0">
            <div class="bg-white pt-2 pb-2 text-center">
            <a href="{{url('/')}}"><img src="{{asset('frontend/images/main-logo.png')}}" class="img-fluid"></a>
            </div>
        </div>
    
    <div class="col-md-12 p-0">
        <div class="lgn_form_bg">
            <div class="row justify-content-center">
                <div class="col-md-5">
                    <div class="form-container lgn-shadow">
                            <div class="form-header">
                                <div><img src="{{asset('frontend/images/form-header-icon.png')}}" class="login_icon_img"></div>
                                <div><p>Logg inn som forhandler </p></div>
                            </div>

                            <div class="form-body">
                            @if (session('message'))
                            <div class="alert alert-success">
                                {{ session('message') }}
                            </div>
                        @endif

                        @if (session('message2'))
                            <div class="alert alert-danger">
                                {{ session('message2') }}
                            </div>
                        @endif
                        <!-- Session Status -->
                        <x-auth-session-status class="mb-4" :status="session('status')" />

                        <form method="POST" action="{{ route('login') }}" class="mt-4">
                        @csrf

                        <!-- Email Address -->
                        <div class="mb-3">
                            <label for="email" class="form-label">{{ __('Email') }}</label>
                            <input id="email" class="form-control" type="email" name="email" value="{{ old('email') }}" required autofocus autocomplete="username" />
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Password -->
                        <div class="mb-3">
                            <label for="password" class="form-label">{{ __('Password') }}</label>
                            <input id="password" class="form-control" type="password" name="password" required autocomplete="current-password" />
                            @error('password')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                            <button type="submit" class="w-100 primary-btn-1">{{ __('Logg inn') }}</button>
                            <div class="d-grid gap-2">
                            @if (Route::has('password.request'))
                                <a class="btn btn-link primary-color-1 mt-3" href="{{ route('password.request') }}">
                                    {{ __('Glemt passord?') }}
                                </a>
                            @endif
                            </div>
                        </div>
                    </form>

                    <div class="form-footer">
                        <div class="form_footer_flex">
                            <img src="{{asset('frontend/images/form-footer-icon.png')}}" class="img-fluid">&nbsp;&nbsp;&nbsp;
                            <p>Ny kunde?</p>&nbsp;&nbsp;&nbsp;
                            <a href="{{url('register')}}" class="primary-color-1">Registerer deg</a>
                        </div>
                    </div>

                </div>

                <div class="form_after_footer">
                    <p>Denne siden er beskyttet av reCAPTCHA og Googles</p>
                    <p><a href="#">Personvernerklæring</a> og <a href="#">Vilkår gjelder</a></p>
                    </div>


</div>
</div>
</div>
</div>
</div>
</div>


</x-guest-layout>
