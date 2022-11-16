<!DOCTYPE html>
<html lang="en">

<head>
  <title>@yield('title')</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&display=swap" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('template_user/fonts/icomoon/style.css') }}">

  <link rel="stylesheet" href="{{ asset('template_user/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('template_user/fonts/flaticon/font/flaticon.css') }}">
  <link rel="stylesheet" href="{{ asset('template_user/css/magnific-popup.css') }}">
  <link rel="stylesheet" href="{{ asset('template_user/css/jquery-ui.css') }}">
  <link rel="stylesheet" href="{{ asset('template_user/css/owl.carousel.min.css') }}">
  <link rel="stylesheet" href="{{ asset('template_user/css/owl.theme.default.min.css') }}">


  <link rel="stylesheet" href="{{ asset('template_user/css/aos.css') }}">

  <link rel="stylesheet" href="{{ asset('template_user/css/style.css') }}">

  <style>
    a.btn-hover:hover{
      color: black !important;
    }
  </style>

  
    <!-- @TODO: replace SET_YOUR_CLIENT_KEY_HERE with your client key -->
    <script type="text/javascript"
      src="https://app.sandbox.midtrans.com/snap/snap.js"
      data-client-key="SB-Mid-client-jn_QXOuWTdYCj_Jj"></script>
    <!-- Note: replace with src="https://app.midtrans.com/snap/snap.js" for Production environment -->


</head>

<body>

  <div class="site-wrap">


    <div class="site-navbar py-2">

      <div class="search-wrap">
        <div class="container">
          <a href="#" class="search-close js-search-close"><span class="icon-close2"></span></a>
          <form action="#" method="post">
            <input type="text" class="form-control" placeholder="Search keyword and hit enter...">
          </form>
        </div>
      </div>

      <div class="container">
        <div class="d-flex align-items-center justify-content-between">
          <div class="logo">
            <div class="site-logo">
              <a href="/home" class="js-logo-clone"><strong class="text-primary">TIK</strong> Health</a>
            </div>
          </div>
          <div class="main-nav d-none d-lg-block">
            <nav class="site-navigation text-right text-md-center" role="navigation">
              <ul class="site-menu js-clone-nav d-none d-lg-block">
                {{-- <li class="@if(Request::is('home')) active @endif"><a href="/">Home</a></li>
                <li class="@if(Request::is('welcome')) active @endif"><a href="/">Book</a></li>
                <li class="@if(Request::is('about')) active @endif"><a href="/buku">Manage</a></li> --}}
              </ul>
            </nav>
          </div>
          <div class="icons">
            @guest
              @if (Route::has('login'))
                <a class="btn btn-primary btn-hover text-light" style="border-radius: 20px;" href="{{ route('login') }}">Login</a>
              @endif

              @if (Route::has('register'))
                      <a class="btn btn-primary btn-hover text-light" style="border-radius: 20px;" href="{{ route('register') }}">Register</a>
              @endif
            @else
            {{-- <a href="#" class="icons-btn d-inline-block js-search-open"><span class="icon-search"></span></a> --}}
            {{-- <a href="/cart" class="icons-btn d-inline-block bag"><span class="icon-shopping-bag"></span><span class="number">2</span></a> --}}
            <a class="nav-item dropdown">
              {{-- <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                  {{ Auth::user()->name }}
              </a> --}}
              <a href="#" class="icons-btn d-inline-block bag" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                  <span class="icon-user"></span>
              </a>
              <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i class="fa-solid fa-right-from-bracket"></i>&nbsp;&nbsp;Logout
                  </a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                      @csrf
                  </form>
              </div>
            </a>
            <a href="#" class="site-menu-toggle js-menu-toggle ml-3 d-inline-block d-lg-none"><span class="icon-menu"></span></a>
            @endguest
          </div>
        </div>
      </div>
    </div>

    {{-- Content --}}
    {{-- <div class="container">

    </div> --}}
    <div class="row">
      @foreach ($data as $a)
        <div class="col-6">
          <div class="card mb-3">
            <img src="{{ asset('storage/'.$a->foto) }}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Judul :{{ $a->judul }}</h5>
              <p class="card-text">Isi Artikel :{{ $a->isi }}</p>
              <p class="card-text">Category :{{ $a->cname }}</p>
              <p class="card-text">Editor :{{ $a->penulis_artikel }}</p>
              <p class="card-text"><small class="text-muted">Tgl Update{{ $a->tgl_artikel }}</small></p>
            </div>
          </div>
        </div>
      @endforeach
    </div>
    {{-- End Content --}}

    <footer class="site-footer bg-light">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">

            <div class="block-7">
              <h3 class="footer-heading mb-4">About</h3>
              <h4 class="mt-0 pt-0"><strong class="text-primary">Modern Library</strong></h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius quae reiciendis distinctio voluptates
                sed dolorum excepturi iure eaque, aut unde.</p>
            </div>

          </div>
          <div class="col-md-6 col-lg-3">
            <div class="block-5 mb-5">
              <h3 class="footer-heading mb-4">Contact Info</h3>
              <ul class="list-unstyled">
                <li class="address">Karisma Academy, Malang, Jawa Timur, Indonesia</li>
                <li class="phone"><a href="">085234567895</a></li>
                <li class="email">karismaacademy@domain.com</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="row pt-3 mt-3 text-center">
          <div class="col-md-12">
            <p>
              Modern Library
            </p>
          </div>
        </div>
      </div>
    </footer>
  </div>
  


  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="{{ asset('template_user/js/jquery-3.3.1.min.js') }}"></script>
  <script src="{{ asset('template_user/js/jquery-ui.js') }}"></script>
  <script src="{{ asset('template_user/js/popper.min.js') }}"></script>
  <script src="{{ asset('template_user/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('template_user/js/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('template_user/js/jquery.magnific-popup.min.js') }}"></script>
  <script src="{{ asset('template_user/js/aos.js') }}"></script>

  <script src="{{ asset('template_user/js/main.js') }}"></script>
  <script>
    function preview() {
    frame.src=URL.createObjectURL(event.target.files[0]);
  }
</script>

</body>

</html>