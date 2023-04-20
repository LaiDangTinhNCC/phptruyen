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
        <style>
.marquee {
  animation: marquee 30s linear infinite;
  white-space: nowrap;
}

@keyframes marquee {
  from {
    transform: translateX(100%);
  }
  
  to {
    transform: translateX(-100%);
  }
}
.bg-title {
  position: relative;
  display: inline-block;
}
.bg-title::after {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: rgba(0, 0, 0, 0.5);
  z-index: -1;
}
.bg-title h3{
  display: flex;
  padding: 10px 10px 0px 10px;
  font-size: 15px;
  align-items: end;
  justify-content: center;
  color: white;
  z-index: 1;
}
</style>
    </head>
    <body style="background-color: #ddd; overflow-x: hidden;">
        <div>
            <!-- menu -->
            <nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
  <div class="container-fluid">
    <a class="navbar-brand " href="#"><i class="fa fa-leanpub" style="margin-right: 10px" aria-hidden="true"></i>TRUYỆN HAY</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          <i class="fa fa-bars" aria-hidden="true" style="margin-right: 5px"></i>Danh sách
          </a>
          <ul class="dropdown-menu dropdown-menu-dark bg-secondary" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Truyện mới cập nhật</a></li>
            <li><a class="dropdown-item" href="#">Truyện được xem nhiều</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          <i class="fa fa-bars" aria-hidden="true" style="margin-right: 5px"></i>Thể loại
          </a>
          <ul class="dropdown-menu dropdown-menu-dark bg-secondary" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          <i class="fa fa-bars" aria-hidden="true" style="margin-right: 5px"></i>Phân loại theo chương
          </a>
          <ul class="dropdown-menu dropdown-menu-dark bg-secondary" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Dưới 100 chương</a></li>
            <li><a class="dropdown-item" href="#">100-500 chương</a></li>
            <li><a class="dropdown-item" href="#">Trên 500 chương</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          <i class="fa fa-cog" aria-hidden="true" style="margin-right: 5px"></i>Tùy chỉnh
          </a>
          <ul class="dropdown-menu dropdown-menu-dark bg-secondary" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#"><i class="fa fa-font" aria-hidden="true" style="margin-right: 8px; font-size: 12px"></i>Font chữ</a></li>
            <li><a class="dropdown-item" href="#"><i class="fa fa-sun-o" style="margin-right: 8px; font-size: 12px" aria-hidden="true"></i>Màu nền</a></li>
          </ul>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Tìm kiếm" aria-label="Search">
        <button class="btn btn-warning text-light" type="submit">
        <i class="fa fa-search" aria-hidden="true"></i>
        </button>
      </form>
    </div>
  </div>
</nav>
<div style="background-color: #fff">
<p class="marquee">
<i class="fa fa-truck" aria-hidden="true" style="margin-right: 10px"></i>Đọc truyện online, đọc truyện chữ, truyện full, truyện hay. Tổng hợp đầy đủ và cập nhật liên tục. <i class="fa fa-heartbeat" aria-hidden="true" style="margin-left: 10px"></i>
</div>
</p>
<div class="container-fluid mt-3">
<!-- slide -->
<h6 style="font-weight: bold">TRUYỆN HOT<i class="fa fa-fire" aria-hidden="true" style="margin-left: 10px"></i></h6>
<div class="owl-carousel owl-theme">
    <div class="item bg-title"><img src="{{asset('public/uploads/truyen/daula579.jpg')}}">
<h3>Đấu la đại lục</h3></div>
<div class="item bg-title"><img src="{{asset('public/uploads/truyen/daula579.jpg')}}">
<h3>Đấu la đại lục</h3></div>
<div class="item bg-title"><img src="{{asset('public/uploads/truyen/daula579.jpg')}}">
<h3>Đấu la đại lục</h3></div>
<div class="item bg-title"><img src="{{asset('public/uploads/truyen/daula579.jpg')}}">
<h3>Đấu la đại lục</h3></div>
<div class="item bg-title"><img src="{{asset('public/uploads/truyen/daula579.jpg')}}">
<h3>Đấu la đại lục</h3></div>
<div class="item bg-title"><img src="{{asset('public/uploads/truyen/daula579.jpg')}}">
<h3>Đấu la đại lục</h3></div>
<div class="item bg-title"><img src="{{asset('public/uploads/truyen/daula579.jpg')}}">
<h3>Đấu la đại lục</h3></div>
<div class="item bg-title"><img src="{{asset('public/uploads/truyen/daula579.jpg')}}">
<h3>Đấu la đại lục</h3></div>
<div class="item bg-title"><img src="{{asset('public/uploads/truyen/daula579.jpg')}}">
<h3>Đấu la đại lục</h3></div>
<div class="item bg-title"><img src="{{asset('public/uploads/truyen/daula579.jpg')}}">
<h3>Đấu la đại lục</h3></div>
</div>
<!-- TRUYỆN MỚI CẬP NHẬT -->
<div>
  <div style="display: flex; justify-content: space-between">
  <h6 style="font-weight: bold">TRUYỆN MỚI CẬP NHẬT<i class="fa fa-book" aria-hidden="true" style="margin-left: 10px"></i></h6>
  <a href="" class="btn btn-light">Xem thêm<i class="fa fa-angle-double-right" aria-hidden="true" style="margin-left: 5px"></i></a>
  </div>
</div>
<!-- footer -->
<hr/>
<div>Chân trang</div>
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
        },
        100:{
          items: 2,
        },
        300:{
          items: 3,
        },
        600:{
            items:4,
        },
        1000:{
            items:6,
            loop:false
        }
    }
})
       </script>
    </body>
</html>
