<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link href="{{ asset('css/app.css')}}" rel="stylesheet">
        <link href="{{ asset('css/owl.carousel.min.css')}}" rel="stylesheet">
        <link href="{{ asset('css/owl.theme.default.min.css')}}" rel="stylesheet">
        <title>Truyện hay 24h</title>
    </head>
    <body>
        <div class="container">
            <!-- menu -->
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<!-- slide -->
<div class="owl-carousel owl-theme">
    <div class="item"><img src="{{asset('public/uploads/truyen/daula579.jpg')}}">
<h3>Đấu la đại lục</h3></div>
<div class="item"><img src="{{asset('public/uploads/truyen/daula579.jpg')}}">
<h3>Đấu la đại lục</h3></div>
<div class="item"><img src="{{asset('public/uploads/truyen/daula579.jpg')}}">
<h3>Đấu la đại lục</h3></div>
<div class="item"><img src="{{asset('public/uploads/truyen/daula579.jpg')}}">
<h3>Đấu la đại lục</h3></div>
<div class="item"><img src="{{asset('public/uploads/truyen/daula579.jpg')}}">
<h3>Đấu la đại lục</h3></div>
<div class="item"><img src="{{asset('public/uploads/truyen/daula579.jpg')}}">
<h3>Đấu la đại lục</h3></div>
</div>
        </div>
       <script src="{{ asset('js/app.js') }}" defer></script>
       <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js"></script>
       <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
       <script type="text/javascript">
        $('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
            nav:true
        },
        600:{
            items:3,
            nav:false
        },
        1000:{
            items:5,
            nav:true,
            loop:false
        }
    }
})
       </script>
    </body>
</html>
