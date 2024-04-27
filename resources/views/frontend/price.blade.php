@extends('layout.app')

@section('title', 'Pris')

@section('content')

<!-- Banner Section -->
<section class="container">
  <div class="row mt-5">
    <div class="col-md-6 position-relative rounded-4">
      <!-- Image Content -->
      <img src="{{asset('frontend/images/pricebanner.png')}}" alt="Banner Image" class="img-fluid" />
    </div>
    <div class="col-md-6">
      <!-- Content -->
      <div class="content d-flex flex-column justify-content-center align-items-start h-100 p-5">
        <h1 class="display-5 fw-normal primary-color-1 fw-bold">Pris</h1>
        <p>
          Vår løsning reduserer ståtiden på biler hos deg som forhandler!
        </p>
        <a href="#" class="primary-btn-1 ">Prøv nå!</a>
      </div>
    </div>
  </div>
</section>

<!-- devider start -->
<img src="{{asset('frontend/images/homedivider.png')}}" class="img-fluid w-100 banner-bottom-divider py-5 d-block" />
<!-- devider end -->

<div class="container pricecontainer px-2 px-sm-5 position-relative">
  <img src="{{asset('frontend/images/circle.png')}}" alt="" class="position-absolute pricetablecircle" />
  <table class="rounded-5 table-responsive-md mb-5">
    <thead>
      <tr>
        <td style="width: 70%" class="py-3 px-5">
          <h2 class="text-primary">Funksjoner</h2>
        </td>
        <td style="width: 30%">
          <div style="
                  border: 2px solid #6ad28b;
                  border-bottom: none;
                  border-top-left-radius: 31px;
                  border-top-right-radius: 31px;
                " class="py-4 text-center">
            <img src="./logo.png" alt="" width="150px" class="px-3 px-sm-0" />
          </div>
        </td>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td style="width: 70%" class="firstcol">
          Moderne salgsverktøy om benyttes på telefon, nettbrett, PC eller
          MAC
        </td>

        <td style="width: 30%; text-align: center">
          <div style="
                  border-left: 2px solid #6ad28b;
                  border-right: 2px solid #6ad28b;
                " class="py-3 secondcol text-center">
            <i class="fa-regular fa-check circle-arrow-icon"></i>
          </div>
        </td>
      </tr>
      <tr>
        <td style="width: 70%" class="firstcol">
          Rettighetsadministrasjon og ubegrenset antall brukere
        </td>
        <td style="width: 30%; text-align: center">
          <div style="
                  border-left: 2px solid #6ad28b;
                  border-right: 2px solid #6ad28b;
                " class="py-3 secondcol text-center">
            <i class="fa-regular fa-check circle-arrow-icon"></i>
          </div>
        </td>
      </tr>
      <tr>
        <td style="width: 70%" class="firstcol">Bank ID sginering*</td>
        <td style="width: 30%; text-align: center">
          <div style="
                  border-left: 2px solid #6ad28b;
                  border-right: 2px solid #6ad28b;
                " class="py-3 secondcol text-center">
            <i class="fa-regular fa-check circle-arrow-icon"></i>
          </div>
        </td>
      </tr>
      <tr>
        <td style="width: 70%" class="firstcol">
          Ubegrenset antall dokumenter
        </td>
        <td style="width: 30%; text-align: center">
          <div style="
                  border-left: 2px solid #6ad28b;
                  border-right: 2px solid #6ad28b;
                " class="py-3 secondcol text-center">
            <i class="fa-regular fa-check circle-arrow-icon"></i>
          </div>
        </td>
      </tr>
      <tr>
        <td style="width: 70%" class="firstcol">Support</td>
        <td style="width: 30%; text-align: center">
          <div style="
                  border-left: 2px solid #6ad28b;
                  border-right: 2px solid #6ad28b;
                " class="py-3 secondcol text-center">
            <i class="fa-regular fa-check circle-arrow-icon"></i>
          </div>
        </td>
      </tr>
      <tr>
        <td style="width: 70%" class="firstcol">
          Tilpasset merkevarebygging
        </td>
        <td style="width: 30%; text-align: center">
          <div style="
                  border-left: 2px solid #6ad28b;
                  border-right: 2px solid #6ad28b;
                " class="py-3 secondcol text-center">
            <i class="fa-regular fa-check circle-arrow-icon"></i>
          </div>
        </td>
      </tr>
      <tr>
        <td style="width: 70%" class="firstcol">Online dokumentarkiv</td>
        <td style="width: 30%; text-align: center">
          <div style="
                  border-left: 2px solid #6ad28b;
                  border-right: 2px solid #6ad28b;
                " class="py-3 secondcol text-center">
            <i class="fa-regular fa-check circle-arrow-icon"></i>
          </div>
        </td>
      </tr>
      <tr>
        <td style="width: 70%" class="firstcol">
          Henter vognkortdata fra offisielle registre
        </td>
        <td style="width: 30%; text-align: center">
          <div style="
                  border-left: 2px solid #6ad28b;
                  border-right: 2px solid #6ad28b;
                " class="py-3 secondcol text-center">
            <i class="fa-regular fa-check circle-arrow-icon"></i>
          </div>
        </td>
      </tr>
    </tbody>
    <tfoot>
      <tr>
        <td style="width: 70%; background: white" class="px-3 px-sm-5">
          <small>
            3 Bank-ID signeringer er inkludert ved ny kundeforhold,<br />
            deretter 23,- pr Bank ID signering*<br /><br />Alle priser er
            ekskl. mva., etableringsgebyr på 1990,<br />
            tilkommer Krever brukthandelbevilling
          </small>
        </td>
        <td style="width: 30%; text-align: center">
          <div style="
                  border: 2px solid #6ad28b;
                  border-top: none;
                  border-bottom-left-radius: 31px;
                  border-bottom-right-radius: 31px;
                " class="py-5">
            <h1 class="primary-color-1 m-0">399,-</h1>
            <p>per måned</p>
          </div>
        </td>
      </tr>
    </tfoot>
  </table>
</div>


@endsection