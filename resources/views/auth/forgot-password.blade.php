<x-guest-layout>

@section('title', 'Forget Password')

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
                    <div class="form-container">
                            <div class="form-header">
                                <div><img src="{{asset('frontend/images/form-header-icon.png')}}" class="login_icon_img"></div>
                                <div><p>Tilbakestill passord</p></div>
                            </div>

                            <div class="form-body">
                        <!-- Session Status -->
                        <x-auth-session-status class="mb-4" :status="session('status')" />

                        <form method="POST" action="{{ route('password.email') }}">
                        @csrf
                        <p class="text-center">Skriv inn e-posten din så sender vi en kode du kan bruke for å lage et nytt passord.</p>
                        <!-- Email Address -->
                        <div class="mb-3">
                            <label for="email" class="form-label">{{ __('Din e-post*') }}</label>
                            <input id="email" class="form-control" type="email" name="email" value="{{ old('email') }}" required autofocus autocomplete="username" />
                            @if ($errors->has('email'))
                        <div class="mt-2 text-danger">
                            {{ $errors->first('email') }}
                        </div>
                        @endif

                        </div>
                            <button type="submit" class="w-100 primary-btn-1 mt-4 mb-5">{{ __('Tilbakestill passord') }}</button>
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
