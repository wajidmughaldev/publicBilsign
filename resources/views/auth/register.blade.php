<x-guest-layout>

    @section('title', 'Register')

    <div class="row">
        <div class="col-md-12 p-0">
            <div class="bg-white pt-2 pb-2 text-center">
            <a href="{{url('/')}}"><img src="{{asset('frontend/images/main-logo.png')}}" class="img-fluid"></a>
            </div>
        </div>

        <div class="col-md-12 p-0">
        <div class="lgn_form_bg">
        <div class="row justify-content-center">
        <div class="col-md-6">
        <div class="form-container lgn-shadow">
                            <div class="form-header">
                                <div><img src="{{asset('frontend/images/form-header-icon.png')}}" class="login_icon_img"></div>
                                <div><p>Lag en konto</p></div>
                            </div>
    <div class="form-body">
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
</div> <!-- form body end -->

</div> <!-- form container end -->
</div> <!-- column md-5 end -->
</div> <!-- row end -->
</div> <!-- bg container end -->
</div> <!-- 12 column end -->
 </div> <!-- Row End -->


</x-guest-layout>
