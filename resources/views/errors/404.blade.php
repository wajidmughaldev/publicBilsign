<x-guest-layout>

@section('title', 'Page Not Found - 404')

    <div class="row">
            <div class="col-md-12 p-0">
                <div class="bg-white pt-2 pb-2 text-center">
                <a href="{{url('/')}}"><img src="{{asset('frontend/images/main-logo.png')}}" class="img-fluid"></a>
                </div>
            </div>
        
            <div class="col-md-12 p-0">
                <div class="lgn_form_bg-2">
                    <div class="row justify-content-center">
                        <div class="col-md-10">
                            <div class="form-container-3 lgn-shadow">
                                <h1 class="text-center pt-5">Beklager, vi finner ikke<br> siden du leter etter</h1>
                                <p class="text-center pt-3 pb-3">Det kan være at siden er slettet, eller at det<br> er en feil i lenken du fulgte for å komme hit.</p>
                                <p class="text-center">Gå tilbake til <a href="{{url('/')}}">hjemmesiden</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>


</x-guest-layout>