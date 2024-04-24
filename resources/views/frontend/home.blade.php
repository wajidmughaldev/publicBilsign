@extends('layout.app')

@section('title', 'Home')

@section('content')

<!-- Banner Section -->
<div class="container">
    <h1>Hello</h1>
    <div class="row mt-4">
        <div class="col-md-12">
            <!-- Content -->

            <div class="content d-flex flex-column justify-content-center h-100">
                <h1 class="display-5 fw-normal text-center">Digital opprettelse av <b class="primary-color-1">kontrakt</b> & <b class="secondary-color-1">signering</b> forbilbransjen på en enkel måte i én løsning</h1>
            </div>
            <center><a href="#" class="primary-btn-1">Prøv BilSign i dag!</a></center>
        </div>

        <div class="col-md-12 position-relative bg-gradient-1 rounded-4 pt-5 pb-5 mt-7">
            <!-- Image Content -->
            <img src="{{asset('frontend/images/tag.png')}}" class="position-absolute top-0 end-0" alt="">
            <center><img src="{{asset('frontend/images/dashboard-1.png')}}" alt="Banner Image" class="img-fluid" /></center>
        </div>

    </div>
</div>

<!-- devider start -->
<img src="{{asset('frontend/images/homedivider.png')}}" class="img-fluid w-100 banner-bottom-divider home-divider" alt="">
<!-- devider end -->


<!-- Testimonial Section -->
<div class="container">
    <div class="row mt-4">
        <div class="col-md-12">
            <p class="text-center font-size-22 mt-2 mb-5">Over 200 selskaper stoler på BilSign</p>
            <div class="d-flex flex-wrap justify-content-between">
                <div class="testimonial-width"><img src="{{asset('frontend/images/testimonial-1.png')}}" class="img-fluid" alt="testimonials"></div>
                <div class="testimonial-width"><img src="{{asset('frontend/images/testimonial-2.png')}}" class="img-fluid" alt="testimonials"></div>
                <div class="testimonial-width"><img src="{{asset('frontend/images/testimonial-3.png')}}" class="img-fluid" alt="testimonials"></div>
                <div class="testimonial-width"><img src="{{asset('frontend/images/testimonial-4.png')}}" class="img-fluid" alt="testimonials"></div>
                <div class="testimonial-width"><img src="{{asset('frontend/images/testimonial-5.png')}}" class="img-fluid" alt="testimonials"></div>
                <div class="testimonial-width"><img src="{{asset('frontend/images/testimonial-6.png')}}" class="img-fluid" alt="testimonials"></div>
            </div>
            <div class="hr-divider w-100 mt-5 mb-5"></div>
        </div>
    </div>
</div>

<!-- Info Section -->
<section class="container">
    <div class="row mt-4">
        <div class="col-md-12">
            <p class="text-center primary-color-1 font-size-35 mt-2 mb-5">Sende dokumenter for signering<br> på få minutter </p>
            <div class="d-flex flex-wrap justify-content-between align-items-center">
                <div class="info-width"><img src="{{asset('frontend/images/card-1.png')}}" class="img-fluid" alt="testimonials"></div>
                <div class="info-width"><img src="{{asset('frontend/images/shape-1.png')}}" class="img-fluid" alt="testimonials"></div>
                <div class="info-width"><img src="{{asset('frontend/images/card-2.png')}}" class="img-fluid" alt="testimonials"></div>
                <div class="info-width"><img src="{{asset('frontend/images/shape-2.png')}}" class="img-fluid" alt="testimonials"></div>
                <div class="info-width"><img src="{{asset('frontend/images/card-3.png')}}" class="img-fluid" alt="testimonials"></div>
                <div class="info-width"><img src="{{asset('frontend/images/shape-3.png')}}" class="img-fluid" alt="testimonials"></div>
                <div class="info-width"><img src="{{asset('frontend/images/card-4.png')}}" class="img-fluid" alt="testimonials"></div>
            </div>

            <div class="d-flex flex-wrap justify-content-between align-items-center">
                <div class="info-width-1">
                    <p>Opprett digital kontrakt!</p>
                </div>
                <div class="info-width-1">
                    <p>Legg inn kontaktinformasjonen til
                        personene som skal motta og signere avtalen.</p>
                </div>
                <div class="info-width-1">
                    <p>Send dokumentene og
                        overvåk signeringsfremdriften</p>
                </div>
                <div class="info-width-1 info-width-2">
                    <p>Lagre og organsier dokumentene
                        dine sikkert i mapper</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Section 3 -->
<div class="container-fluid bg-gradient-2  py-5 text-center">
    <p class="text-center primary-color-1 font-size-35 mt-2 mb-3">Førsteklasses kundereise<br> for bilbransjen</p>
    <p class="text-center font-size-22 mt-2 mb-5">Øk effektiviteten og sikkerheten samtidig som du leverer en overlegen kundeopplevelse.</p>
    <div class="container ">
        <div class="row">
            <div class="col-md-6">
                <img src="{{asset('frontend/images/bg_img_1.png')}}" class="img-fluid">
                <p class="bg_font">Modernisering av bilkjøp</p>

            </div>

            <div class="col-md-6">
                <img src="{{asset('frontend/images/bg_img_2.png')}}" class="img-fluid">
                <p class="bg_font color_change">Dataene dine er sikre og trygge</p>

            </div>

            <div class="col-md-4 mt-5">
                <img src="{{asset('frontend/images/bg_img_4.png')}}" class="img-fluid">
                <p class="bg_font">Kundeopplevelse</p>
                <p class="bg_font-2">En vinn-vinn-situasjon for kunden og forhandleren</p>

            </div>

            <div class="col-md-8 mt-5">
                <img src="{{asset('frontend/images/bg_img_3.png')}}" class="img-fluid">
                <p class="bg_font bg_font-3">Bindende signering uten<br> penn, papir og printer</p>
                 
            </div>
        </div>
    </div>

</div>


<!-- Contact Section -->
<section class="container">
    <div class="row mt-5">
        <div class="col-md-12">
            <p class="text-center primary-color-1 font-size-35 mt-5 mb-5">Alle funksjonene som sparer deg for tid</p>
            <div class="row">
                <div class="col-md-7 ">
                    <img src="{{asset('frontend/images/contactinfo.png')}}" class="img-fluid">
                </div>
                <div class="col-md-5">
                    <div class="d-flex flex-wrap justify-content-center align-items-baseline">
                        <div class="p-2 mw-20">
                            <img src="{{asset('frontend/images/contact_icon1.png')}}" class="img-fluid">
                        </div>
                        <div class="p-2 mw-80">
                            <h1 class="contact_h1">Moderne salgsverktøy</h1>
                            <p class="mt-3">
                                BilSign benyttes på alle enheter, som telefon, nettbrett, PC eller MAC.
                            </p>
                        </div>

                        <div class="p-2 mw-20">
                            <img src="{{asset('frontend/images/contact_icon2.png')}}" class="img-fluid">
                        </div>
                        <div class="p-2 mw-80">
                            <h1 class="contact_h1">Bank-ID signering</h1>
                            <p class="mt-3">
                                Gi kundene dine en best mulig signeringspplevelsen!
                                Det er ikke lenger behov for kunden å være hos deg for signering.
                                Med BilSign signerer kundene dine hvor som helst!
                            </p>
                        </div>

                        <div class="p-2 mw-20">
                            <img src="{{asset('frontend/images/contact_icon3.png')}}" class="img-fluid">
                        </div>
                        <div class="p-2 mw-80">
                            <h1 class="contact_h1">Påminnelser</h1>
                            <p class="mt-3">
                                Hold deg oppdatert på signeringsprosessen og gå
                                aldri glipp av en frist med automatiske
                                påminnelses-e-poster.
                            </p>
                        </div>


                    </div>
                </div>
            </div>

        </div>
    </div>
</section>



<!-- Specs Section -->
<section class="container">
    <div class="row mt-5">
        <div class="col-md-12 mt-5">

            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-md-6 ">
                    <h2 class="display-4 primary-color-1 text-center ">
                        Prøv BilSign GRATIS i <br>30 dager
                    </h2>
                    <ul class="list-unstyled mt-5 mb-5">
                        <li class="mb-4">
                            <i class="fa-regular fa fa-check circle-arrow-icon me-3"></i>
                            <a href="tel:+40097003" class="text-dark ">Gratis tilgang i 30 dager</a>
                        </li>
                        <li class="mb-4">
                            <i class="fa-regular fa fa-check circle-arrow-icon me-3"></i>

                            <a href="#" class="text-dark ">3 Bank-ID signeringer er inkludert når du oppretter en gratis bruker</a>
                        </li>
                        <li class="mb-4">
                            <i class="fa-regular fa fa-check circle-arrow-icon me-3"></i>

                            <a href="#" class="text-dark ">Personlig dashbord</a>
                        </li>
                        <li class="mb-4">
                            <i class="fa-regular fa fa-check circle-arrow-icon me-3"></i>

                            <a href="#" class="text-dark ">Eget dokumentarkiv for å lagre og administrere filer</a>
                        </li>
                        <li class="mb-4">
                            <i class="fa-regular fa fa-check circle-arrow-icon me-3"></i>

                            <a href="#" class="text-dark ">Og mye mer!</a>
                        </li>
                    </ul>
                    <a href="#" class="primary-btn-2">Opprett forhandlerkonto</a>
                </div>

                <div class="col-md-6">
                    <img src="{{asset('frontend/images/specs.png')}}" class="img-fluid">
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Status Section -->
<div class="container mb-5">
    <div class="row">
        <div class="col-md-12">
            <p class="text-center primary-color-1 font-size-35">Med BilSign</p>
            <div class="row">

                <div class="col-md-4 ">
                    <div class="stats_card">
                        <img src="{{asset('frontend/images/arrow-down.png')}}" class="img-fluid">
                        <h1 class="stats_h primary-color-1">60%</h1>
                        <p class="stats_p primary-color-1">Redusert papirarbeid</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="stats_card">
                        <img src="{{asset('frontend/images/arrow-up.png')}}" class="img-fluid">
                        <h1 class="stats_h primary-color-1">90%</h1>
                        <p class="stats_p primary-color-1">Raskere behandling</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="stats_card">
                        <img src="{{asset('frontend/images/arrow-down.png')}}" class="img-fluid">
                        <h1 class="stats_h primary-color-1">60%</h1>
                        <p class="stats_p primary-color-1">Økning i produktivitet</p>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>

@endsection