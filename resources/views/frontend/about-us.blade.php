@extends('layout.app')

@section('title', 'Om oss')

@section('content')

 <!-- Banner Section -->
 <section class="container">
      <div class="row mt-5">
        <div class="col-md-6 position-relative  rounded-4">
          <!-- Image Content -->
          <img src="{{asset('frontend/images/aboutbanner.png')}}" alt="Banner Image" class="img-fluid" />
        </div>
        <div class="col-md-6">
          <!-- Content -->
          <div
            class="content d-flex flex-column justify-content-center h-100 p-5"
          >
            <h1 class="display-5 fw-normal primary-color-1">
              Bygg bedre <br />kundereiser med oss
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
        <div
          class="col-md-6 position-relative rounded-4 order-md-2  px-5 pt-5"
        >
          <!-- Image Content -->
          <img src="{{asset('frontend/images/aboutsection1.png')}}" class="img-fluid" />
        </div>
        <div class="col-md-6 order-md-1">
          <!-- Content -->
          <div
            class="content d-flex flex-column justify-content-center h-100 p-5"
          >
            <h2 class="display-5 text-primary">Vår historie</h2>
            <p>
              Vår historie er preget av en dedikert innsats innen bilsalg over
              en periode på over 7 år. Vårt fokus har vært å betjene små og
              mellomstore bedrifter, med en lidenskap for å levere verdifulle
              løsninger. Vi har kontinuerlig arbeidet med å minimere kostnadene
              ved oppstart for våre kunder, samtidig som vi har søkt å øke
              produktiviteten for å sikre suksess i et konkurransedyktig marked.
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- Section 3 -->
    <section class="container">
      <div class="row">
        <div class="col-md-6 position-relative rounded-4  px-5 pt-5">
          <!-- Image Content -->
          <img src="{{asset('frontend/images/aboutsecond.png')}}" class="img-fluid" alt="" />
        </div>
        <div class="col-md-6">
          <!-- Content -->
          <div
            class="content d-flex flex-column justify-content-center h-100 p-5"
          >
            <h2 class="display-5 text-primary">Kunden i fokus?</h2>
            <p>
              I BilSign, skiller vi oss ut ved å ekspandere definisjonen av
              begrepet "kunde" til å omfatte et bredt spekter av interessenter –
              både interne og eksterne. Dette inkluderer ikke bare våre kunder,
              men også våre partnere, ansatte, kolleger – i det hele tatt, alle
              vi har kontakt med. Vår visjon om kundeforholdet utgjør kjernen av
              vår bedriftskultur, som er fundamentert på prinsippene om
              integritet og inkludering. Disse prinsippene danner igjen
              grunnlaget for våre kjerneverdier:
            </p>
            <ul>
              <li>Vi bryr oss om alle våre kunder</li>
              <li class="my-2">
                Vårt løfte er å veilede deg hele veien, fra start til slutt, og
                sikre at du når dine mål.
              </li>
              <li>
                Vi tror på samarbeid for å skape bedre kundereiser, og er
                forpliktet til å jobbe sammen
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <!-- Section 4 -->
    <section class="container bg-gradient-1 rounded-5 p-5">
      <div class="row">
        <div class="col-md-12 ">
            <div class="row">
                <div class="col-md-6">
                    <h2 class="display-4 text-primary">
                        Hva er signering med BankID?
                    </h2>
                    <p>
                        BankID er en digital legitimasjon som sikrer signaturer på høyeste sikkerhetsnivå.
Digital signatur med BankID er tilnærmet umulig å forfalske, takket være avansert kryptografi som benyttes for å lage signaturen. Alle som signerer knyttes til dokumentet, og signaturene og bevis for at de som signerte hadde en gyldig BankID på signeringstidspunktet, pakkes og forsegles i selve dokumentet.
                    </p>
                </div>
                <div class="col-md-6 text-center text-sm-end"> 
                    <img src="{{asset('frontend/images/explain.png')}}" alt="" class="text-right img-fluid w-75">
                </div>
            </div>
        </div>
        </div>
      </div>
     
    </section>
@endsection