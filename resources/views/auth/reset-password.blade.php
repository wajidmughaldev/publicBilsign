<x-guest-layout>

    @section('title', 'Reset Password')

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
                                <div><p>Tilbakestille Passord</p></div>
                            </div>

                            <div class="form-body">
                        <!-- Session Status -->
                        <x-auth-session-status class="mb-4" :status="session('status')" />

                        <form method="POST" action="{{ route('password.store') }}">
                        @csrf

                         <!-- Password Reset Token -->
                        <input type="hidden" name="token" value="{{ $request->route('token') }}">

                        <!-- Email Address -->
                        <div class="mb-3">
                            <label for="email" class="form-label">{{ __('E-post') }}</label>
                            <input id="email" class="form-control" type="email" name="email" value="{{ old('email', $request->email) }}" required autofocus autocomplete="username" />
                            @error('email')
                            <span class="text-red-600 mt-2">{{ $message }}</span>
                            @enderror
                        </div>

                      <!-- Password -->
                    <div class="mt-4">
                        <label for="password" class="block font-medium text-sm text-gray-700 form-label">{{ __('Passord') }}</label>
                        <input id="password" class="block mt-1 w-full form-input form-control" type="password" name="password" required autocomplete="new-password">
                        @error('password')
                            <span class="text-red-600 mt-2">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Confirm Password -->
                    <div class="mt-4">
                        <label for="password_confirmation" class="block font-medium text-sm text-gray-700 form-label">{{ __('Bekreft Passord') }}</label>
                        <input id="password_confirmation" class="block mt-1 w-full form-input form-control" type="password" name="password_confirmation" required autocomplete="new-password">
                        @error('password_confirmation')
                            <span class="text-red-600 mt-2">{{ $message }}</span>
                        @enderror
                    </div>

                            <button type="submit" class="w-100 primary-btn-1 mt-4">{{ __('Tilbakestille Passord') }}</button>
                            
                        </div>
                    </form>

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
