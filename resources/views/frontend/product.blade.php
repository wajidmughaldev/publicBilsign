@extends('layout.app')

@section('title', 'Produkt')

@section('content')

<!-- Banner Section -->
<section class="container">
        <div class="row mt-5">
          <div class="col-md-6 position-relative bg-gradient-1 rounded-4">
            <!-- Image Content -->
            <img src="{{asset('frontend/images/tag.png')}}" class="position-absolute " alt="">
            <img src="{{asset('frontend/images/model.png')}}" alt="Banner Image" class="img-fluid" />
          </div>
          <div class="col-md-6">
            <!-- Content -->
            <div class="content d-flex flex-column justify-content-center h-100 p-5">
              <h1 class="display-5 fw-normal">Ubegrenset antall <br>
                  brukere</h1>
              <p>
                  Enkel rettighetsadministrasjon og ubegrenset antall brukere.<br>Enkelt å opprette flere brukere på én bedriftskonto,<br> uten ekstra kostnad.
              </p>
          </div>
          
          </div>
        </div>
      </section>
      
            <!-- devider start -->
      <img src="{{asset('frontend/images/aboutdivicer.png')}}" class="img-fluid w-100 banner-bottom-divider" alt="">
            <!-- devider end -->


      <!-- Section 2 -->
      <section class="container">
        <div class="row">
          <div class="col-md-6 position-relative rounded-4 order-md-2 bg-gradient-1 px-5 pt-5">
            <!-- Image Content -->
            <img
              src="{{asset('frontend/images/form.png')}}"
              alt="Section 2 Image"
              class="img-fluid"
            />
            <img src="{{asset('frontend/images/car.png')}}" class="position-absolute top-50 start-0">
          </div>
          <div class="col-md-6 order-md-1">
            <!-- Content -->
            <div class="content d-flex flex-column justify-content-center h-100 p-5">
              <h2 class="display-5 text-primary">Formidlingsoppdrag</h2>
              <p>
                Formidlingskontrakt for oppdrag er et skriftlig avtaleverk som formaliserer forholdene mellom selger(kunde) og deres selskap som formidler vedrørende salg av bilen. Kontrakten utformer betingelser for samarbeidet, inkludert økonomiske vilkår som provisjoner og betalingsforpliktelser, fullmakt, ansvarsfordeling, samt andre relevante aspekter som garantier, og overføring av eierskap. En nøye utarbeidet formidlingskontrakt sikrer at begge parter har en klar forståelse av deres forpliktelser og rettigheter, og bidrar til å unngå misforståelser eller tvister i fremtiden.
              </p>
            </div>
          </div>
        </div>
      </section>

      <!-- Section 3 -->
      <section class="container">
        <div class="row">
          <div class="col-md-6  position-relative rounded-4 bg-gradient-1 px-5 pt-5">
            <!-- Image Content -->
            <img
              src="{{asset('frontend/images/inka.png')}}"
              alt="Section 3 Image"
              class="img-fluid"
            />
            <img src="{{asset('frontend/images/inka1.png')}}" class="position-absolute top-50 start-0" alt="">
            <img src="{{asset('frontend/images/sign.png')}}" class="position-absolute top-50 end-0" alt="">
          </div>
          <div class="col-md-6">
            <!-- Content -->
            <div class="content d-flex flex-column justify-content-center h-100 p-5">
              <h2 class="display-5 text-primary">Innkjøpskontrakt</h2>
              <p>
                Innkjøpskontrakt er juridisk dokument som etablerer betingelsene for kjøpet av bil mellom deres bedrift og selger. Kontrakten inneholder detaljer om bilens spesifikasjoner, pris, betalingsbetingelser, leveringsdato, garantier og ansvarsbegrensninger. Formålet med en innkjøpskontrakt er å sikre en klar og bindende avtale mellom partene, samtidig som den beskytter deres juridiske rettigheter og forpliktelser gjennom kjøpsprosessen.
              </p>
            </div>
          </div>
        </div>
      </section>

      <!-- Section 4 -->
      <section class="container">
        <div class="row">
          <div class="col-md-6 order-md-2 bg-gradient-1 rounded-4 px-5 pt-5">
            <!-- Image Content -->
            <img
              src="{{asset('frontend/images/kjopikontrakt.png')}}"
              alt="Section 4 Image"
              class="img-fluid"
            />
          </div>
          <div class="col-md-6 order-md-1">
            <!-- Content -->
            <div class="content  d-flex flex-column justify-content-center h-100 p-5">
              <h2 class="display-5 text-primary">Kjøpekontrakt Formidling</h2>
              <p>
                Kjøpskontrakt for formidling av bil mellom oppdragsgiver og kjøper er et juridisk bindende dokument som formaliserer avtalen. Kontrakten angir detaljene rundt kjøpet av en bil, inkludert bilens spesifikasjoner, pris, betalingsvilkår, leveringsdato og eventuelle garantier. 
              </p>
            </div>
          </div>
        </div>
      </section>

      <!-- Section 5 -->
      <section class="container">
        <div class="row">
          <div class="col-md-6 rounded-4 bg-gradient-1 px-5 pt-5">
            <!-- Image Content -->
            <img
              src="{{asset('frontend/images/kontrak.png')}}"
              alt="Section 5 Image"
              class="img-fluid"
            />
          </div>
          <div class="col-md-6">
            <!-- Content -->
            <div class="content content  d-flex flex-column justify-content-center h-100 p-5">
              <h2 class="display-5 text-primary">Kjøpekontrakt</h2>
              <p>
                Kjøpekontrakt er et juridisk dokument som formaliserer avtalen mellom  kjøper og deres selskap vedrørende kjøp av bil. Kontrakten inneholder detaljer som bilens spesifikasjoner, kjøpesum, betalingsvilkår, leveringsdato, forsikring og eventuelle garantier. Den innholder også salgs- og leveringsvilkår innen forbrukerkjøpsloven. Formålet med kjøpskontrakten er å etablere klare vilkår og betingelser for kjøpet, samt å beskytte begge parters rettigheter og forpliktelser.
              </p>
            </div>
          </div>
        </div>
      </section>

      <!-- Section 6 -->
      <section class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="heading">
              <h2 class="display-5 text-primary text-center">Nordiske og europeiske standarder <br> for digital signering</h2>
              <p class="text-center">BankID-brukere er legitimert med pass og du kan være sikker på at en BankID-signering er gjort av en
                <br> ekte person. Du kan også være sikker på at innholdet i avtalen ikke er endret i ettertid.<br>  
                BankID er godkjent etter EU-standarden eIDAS, og identifiseringer og signaturer er gyldige i hele Europa.</p>
            </div>
          </div>
        </div>
        <div class="row ">
          <div class="col-md-12 bg-desktop-mockup text-center">
              <!-- Image Content -->
              <img src="{{asset('frontend/images/aboutbottom.png')}}" alt="Section 6 Image" class="w-75 img-fluid ">
          </div>
      </div>
      
      </section>

@endsection