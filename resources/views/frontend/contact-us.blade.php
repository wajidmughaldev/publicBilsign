@extends('layout.app')

@section('title', 'Kontakt oss')

@section('content')

 <!-- Banner Section -->
 <section class="container">
      <div class="row mt-5">
        <div class="col-md-6 position-relative rounded-4">
          <!-- Image Content -->
          <img src="{{asset('frontend/images/contactbanner.png')}}" alt="Banner Image" class="img-fluid" />
        </div>
        <div class="col-md-6">
          <!-- Content -->
          <div
            class="content d-flex flex-column justify-content-center h-100 p-5"
          >
            <h1 class="display-5 fw-normal primary-color-1 fw-bold">
                Kontakt oss
            </h1>
            <p>Våre innovative løsninger forenkler bilsalget</p>
          </div>
        </div>
      </div>
    </section>



    <!-- devider start -->
    <img
      src="{{asset('frontend/images/aboutdivicer.png')}}"
      class="img-fluid w-100 banner-bottom-divider"
      alt=""
    />
    <!-- devider end -->

    <!-- Section 2 -->
    <section class="container">
      <div class="row">
        <div class="col-md-3 mb-5 mb-sm-0 px-5 px-sm-0  border-primary rounded-4 ">
            
                <img src="{{asset('frontend/images/1.png')}}" width="50">
                <h2 class="primary-color-1 fw-normal my-3">Brukerstøte</h2>
                <p>
                    Få hjelp med BilSign-tjenestene dine fra <br> en av våre supportagenter.
                </p>
            </a>
        </div>
        <div class="col-md-3 mb-5 mb-sm-0 px-5 px-sm-0  border-primary rounded-4">
            
                <img src="{{asset('frontend/images/2.png')}}" width="50">
                <h2 class="primary-color-1 fw-normal my-3">Salg</h2>
                    Fortell oss hva du prøver å løse i dag, så <br>setter vi deg i kontakt med løsninger.
                </p>
                <ul class="list-unstyled mt-4">
                    <li class="mb-2">
                        <i class="fa-regular fa-angle-right circle-arrow-icon me-3"></i> 
                        <a href="tel:+40097003" class="text-dark ">+40097003</a>
                    </li>
                    <li>
                        <i class="fa-regular fa-angle-right circle-arrow-icon me-3"></i> 

                        <a href="#" class="text-dark ">kontakt skjema</a>
                    </li>
                </ul>
            </a>
        </div>
        <div class="col-md-3 mb-5 mb-sm-0 px-5 px-sm-0  border-primary rounded-4">
            
                <img src="{{asset('frontend/images/3.png')}}" width="50">
                <h2 class="primary-color-1 fw-normal my-3">Samarbeidspartnere</h2>
                <p>
                    Lorem ipsum dolor sit amet,<br> consectetur adipiscing elit,
                </p>
                <ul class="list-unstyled mt-4">
                    <li>
                        <i class="fa-regular fa-angle-right circle-arrow-icon me-3"></i> 
                        <a href="#" class="text-dark ">Nye partnerforespørsler</a>
                    </li>
                </ul>
        </div>
        <div class="col-md-3 mb-5 mb-sm-0 px-5 px-sm-0  border-primary rounded-4">
            
                <img src="{{asset('frontend/images/1.png')}}" width="50">
                <h2 class="primary-color-1 fw-normal my-3">Karriere</h2>
                <p>
                    Lorem ipsum dolor sit amet, <br> consectetur adipiscing elit,
                </p>
                <ul class="list-unstyled mt-4">
                    <li>
                        <i class="fa-regular fa-angle-right circle-arrow-icon me-3"></i> 
                        <a href="#" class="text-dark ">Arbeid hos bilsign</a>
                    </li>
                </ul>
        </div>
        
      
      </div>
    </section>

    <!-- Section 3 -->
    <div class="container-fluid bg-gradient-1  py-5 text-center">
        <h1 class="primary-color-1 py-5">Hvor finner du oss</h1>
        <section class="container ">
            <div class="row">
                <div class="col-md-7 bg-white shadow-sm p-3 pb-5 rounded-4">
                    <img src="{{asset('frontend/images/contactecion3.png')}}"  class="img-fluid rounded-3 contact-third-section-image-one"/>
                    <h1 class="primary-color-1 py-5 fw-normal">Norge - Drammen HQ</h1>
                    <ul class="list-unstyled mt-2 d-flex justify-content-evenly">
                        <li class="mb-2">
                            <i class="fa-regular fa-angle-right circle-arrow-icon me-3"></i> 
                            <a href="tel:+40097003" class="text-dark ">+40097003</a>
                        </li>
                        <li>
                            <i class="fa-regular fa-angle-right circle-arrow-icon me-3"></i> 
                            <a href="#" class="text-dark ">kontakt skjema</a>
                        </li>
                        
                        <li>
                            <i class="fa-regular fa-angle-right circle-arrow-icon me-3"></i> 
                            <a href="#" class="text-dark ">kontakt skjema</a>
                        </li>
                    </ul>
                </div>

                <div class="col-md-4 mt-3 mt-sm-0 ms-0 ms-sm-5  bg-white shadow-sm p-3 pb-5 rounded-4">
                    <img src="{{asset('frontend/images/contactmap.png')}}" class="img-fluid rounded-3 w-100">
                    <h1 class="primary-color-1 py-5 fw-normal">Adresse</h1>
                    <p>
                        Vintergata 19, 3048 Drammen
                    </p>
                </div>
            </div>
        </section>
        
    </div>
    <!-- Section 4 -->
    <section class="container  rounded-5 p-5 mt-5">
      <div class="row">
        <div class="col-md-12 ">
            <div class="row align-items-center">
                <div class="col-md-6 ">
                    <h2 class="display-4 primary-color-1 text-center ">
                        Prøv BilSign GRATIS i <br>30 dager
                    </h2>
                    <ul class="list-unstyled mt-5">
                        <li class="mb-4">
                            <i class="fa-regular fa-angle-right circle-arrow-icon me-3"></i> 
                            <a href="tel:+40097003" class="text-dark ">Gratis tilgang i 30 dager</a>
                        </li>
                        <li class="mb-4">
                            <i class="fa-regular fa-angle-right circle-arrow-icon me-3"></i> 
    
                            <a href="#" class="text-dark ">3 Bank-ID signeringer er inkludert når du oppretter en gratis bruker</a>
                        </li>
                        <li class="mb-4">
                            <i class="fa-regular fa-angle-right circle-arrow-icon me-3"></i> 
    
                            <a href="#" class="text-dark ">Personlig dashbord</a>
                        </li>
                        <li class="mb-4">
                            <i class="fa-regular fa-angle-right circle-arrow-icon me-3"></i> 
    
                            <a href="#" class="text-dark ">Eget dokumentarkiv for å lagre og administrere filer</a>
                        </li>
                        <li class="mb-4">
                            <i class="fa-regular fa-angle-right circle-arrow-icon me-3"></i> 
    
                            <a href="#" class="text-dark ">Og mye mer!</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-6 form-bg py-5 px-3 rounded-4"> 
                    <div class="container">
                        <form method="POST" action="{{ route('send.email') }}">
                        @csrf
                            <div class="row mb-4">
                                <div class="col-md-6">
                                    <label for="field1" class="form-label">Fornavn*</label>
                                    <input type="text" class="form-control form-control-lg" name="first_name" id="field1" placeholder="John">
                                </div>
                                <div class="col-md-6">
                                    <label for="field2" class="form-label">Etternavn*</label>
                                    <input type="text" class="form-control form-control-lg" name="surname" id="field2" placeholder="Doe">
                                </div>
                            </div>
                            <div class="row mb-4">
                                <label for="field3" class="form-label">Telefonnummer</label>
                                <div class="col-md-3 mb-3 mb-sm-0">
                                    <select name="" class="form-select form-select-lg">
                                        <option value="" >NO +47</option>
                                    </select>
                                </div>
                                <div class="col-md-9">
                                    
                                    <input type="text" class="form-control form-control-lg" name="phone" id="field4" placeholder="Telefonnummer">
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col-md-12">
                                    <label for="field5" class="form-label">E-post*</label>
                                    <input type="text" class="form-control form-control-lg" name="email" id="field5" placeholder="E-post">
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col-md-12">
                                    <label for="field6" class="form-label">Firmanavn*</label>
                                    <input type="text" class="form-control form-control-lg" name="company_name" id="field6" placeholder="Firmanavn">
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col-md-12">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="terms" id="checkbox">
                                        <label class="form-check-label" for="checkbox">
                                            Jeg godtar vilkårene for bruk og personvern.
                                        </label>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row mb-4">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-secondary w-100 btn-lg rounded-pill">Kom i gang</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    
                </div>
            </div>
        </div>
        </div>
      </div>
     
    </section>
      

@endsection