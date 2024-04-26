<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>@yield('title', 'Sugar Daddy')</title>

  <!-- Fonts -->
  <link rel="dns-prefetch" href="//fonts.bunny.net">
  <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

  <!-- Scripts -->
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"> -->
  <!-- Favicons -->
  <link href="{{asset('frontend/assets/img/favicon-2.png')}}" rel="icon">
  <link href="{{asset('frontend/assets/img/favicon-2.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('frontend/assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-LklFj+cWs3bEzv1ESxObRyGgfu0m9NGZvQ/Uy06ahzhG9KFXNw6pHX2zVI9r2sXzouVW6amHPkzXJg/9gE9tTQ==" crossorigin="anonymous" />

  <!-- Template Main CSS File -->

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />

  <link href="{{asset('frontend/assets/css/style.css')}}" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/gh/eliyantosarage/font-awesome-pro@main/fontawesome-pro-6.5.1-web/css/all.min.css" rel="stylesheet" />
</head>

<body>

  <!-- Navigation start  -->
  <div class="bg-primary-1 py-2 bg_clr">
    <div class="container">
      <ul class="list-unstyled d-flex flex-wrap justify-content-start justify-content-sm-end m-0">
        <li>
          <a href="#" class="topbar-item"><i class="fa-light fa-globe"></i>Norge</a>
        </li>
        <!-- <li>
            <a href="#" class="topbar-item"
              ><i class="fa-light fa-headphones"></i>Hjelpesenter</a
            >
          </li>
          <li>
            <a href="#" class="topbar-item"
              ><i class="fa-light fa-phone-volume"></i>Salg +40097003</a
            >
          </li> -->
        <li>
          <a href="#" class="topbar-item"><i class="fa-light fa-messages"></i>Kontakt salg</a>
        </li>

        <li>
          <a href="#" class="topbar-item"><i class="fa-light fa-user"></i><a href="{{url('login')}}" class="text-white" style="font-size:14px">Logg in</a></a>
        </li>
      </ul>
    </div>
  </div>


  <div class="container">
    <nav class="navbar navbar-expand-lg">
      <div class="container-fluid ">
        <a class="navbar-brand m-0" href="{{{url('/')}}}">
          <img src="{{asset('frontend/images/logo.svg')}}" class="w-50" alt="bilsign" />
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="{{url('/')}}">Hjem</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('product')}}">Produkt</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('price')}}">Pris</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('about-us')}}">Om oss</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('contact-us')}}">Kontakt oss</a>
            </li>
            <li class="">
              <a class="btn btn-outline-secondary rounded-pill px-4 py-2">Prøv Gratis</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </div>

  <!-- navbar end  -->


  <main id="main">
    @yield('content')
  </main>

  <footer class="footer p-5 bg-secondary-1 text-white">
    <div class="container py-5">
      <div class="row">
        <div class="col-md-5">
          <!-- 1st Column: Logo, Paragraph, Social Icons -->
          <img src="{{asset('frontend/images/Mlogo2.png')}}" class="w-25" alt="Logo">
          <p class="my-4">BilSign tilbyr kontrakt løsninger for små og
            mellomstore bedrifter innen bilbransjen med
            e-signatur på en sikker og rask måte.
          </p>

          <div class="social-icons mb-4">
            <a href="#"><i class="fab fa-facebook fa-lg"></i></a>
            <a href="#"><i class="fab fa-twitter fa-lg"></i></a>
            <a href="#"><i class="fab fa-instagram fa-lg"></i></a>
            <a href="#"><i class="fab fa-linkedin fa-lg"></i></a>
          </div>
        </div>
        <div class="col-md-2">
          <!-- 2nd Column: Virksomhet -->
          <h4 class="mb-5">Virksomhet</h4>
          <ul class="list-unstyled quick-links mb-4 ">
            <li><a href="{{url('/')}}">Hjem</a></li>
            <li><a href="#">Løsninger</a></li>
            <li><a href="#">Pris</a></li>
            <li><a href="#">Om oss</a></li>
            <li><a href="#">Kontakt oss</a></li>
          </ul>
        </div>
        <div class="col-md-5">
          <!-- 3rd Column: Kontaktinfo -->
          <h4 class="mb-5">Kontaktinfo</h4>
          <ul class="list-unstyled contact-info">
            <li><i class="fa-light fa-phone"></i>Ta kontakt med oss idag – 40097003</li>
            <li><i class="fa-light fa-envelope"></i>info@bilsign.no</li>
            <li><i class="fa-light fa-location-dot"></i>Vintergata 19 - 3048 Drammen</li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.4.3/dist/css/bootstrap.min.css" rel="stylesheet"> -->

  <!-- Bootstrap JS (Popper.js and Bootstrap JS) -->
  <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.4.3/dist/js/bootstrap.bundle.min.js"></script> -->

  <!-- Vendor JS Files -->
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
  <script src="{{asset('frontend/assets/vendor/purecounter/purecounter_vanilla.js')}}"></script>
  <script src="{{asset('frontend/assets/vendor/aos/aos.js')}}"></script>
  <script src="{{asset('frontend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('frontend/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('frontend/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('frontend/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{asset('frontend/assets/vendor/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('frontend/assets/js/main.js')}}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha384-WJx2x81h8f1I51wbV9vG+Jjz/sL4XNUa2NR8PkUjV2W/SpKEOZ5FKbt5pZsiaIvU" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.8/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <!-- Bootstrap JS -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>

</body>

</html>