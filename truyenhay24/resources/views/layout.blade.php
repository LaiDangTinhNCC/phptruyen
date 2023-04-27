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

.welcome {
  background-color: #fff;
  overflow: hidden;
}

.welcome .marquee {
  display: inline-block;
  margin-bottom: 0;
  animation: marquee 20s linear infinite;
}

@keyframes marquee {
  0% {
    transform: translateX(100%);
  }
  
  100% {
    transform: translateX(-100%);
  }
}
.bg-title:hover {
  transform: scale(1.1);
  transition: transform 0.3s ease-in-out;
}
.bg-title {
  position: relative;
  cursor: pointer;
  border: 3px solid #000;
  border-image: url("data:image/svg+xml;charset=utf-8,%3Csvg width='100' height='100' viewBox='0 0 100 100' fill='none' xmlns='http://www.w3.org/2000/svg'%3E %3Cstyle%3Epath%7Banimation:stroke 5s infinite linear%3B%7D%40keyframes stroke%7Bto%7Bstroke-dashoffset:776%3B%7D%7D%3C/style%3E%3ClinearGradient id='g' x1='0%25' y1='0%25' x2='0%25' y2='100%25'%3E%3Cstop offset='0%25' stop-color='%232d3561' /%3E%3Cstop offset='25%25' stop-color='%23c05c7e' /%3E%3Cstop offset='50%25' stop-color='%23f3826f' /%3E%3Cstop offset='100%25' stop-color='%23ffb961' /%3E%3C/linearGradient%3E %3Cpath d='M1.5 1.5 l97 0l0 97l-97 0 l0 -97' stroke-linecap='square' stroke='url(%23g)' stroke-width='3' stroke-dasharray='388'/%3E %3C/svg%3E") 1;
}
.bg-title img{
  height: 185px;
  z-index: 1;
}
.bg-title .content{
  position: absolute;
  bottom: 0;
  left: 0;
  background-color: rgba(0, 35, 82, 0.7);
  z-index: 999;
  width: 100%;
  color: #fff;
}
.col-content {
  cursor: pointer;
}
.image-hover {
  border: 3px solid #000;
  height: 195px;
}
.image-hover:hover {
  transform: scale(1.1);
  transition: transform 0.3s ease-in-out;
}
</style>
    </head>
    <body style="background-color: #ddd; overflow-x: hidden;">
    <div>
          <!-- menu -->
          <div>
          <nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
            <div class="container-fluid">
              <a class="navbar-brand " href="{{url('/')}}">
                <i class="fa fa-leanpub" style="margin-right: 10px" aria-hidden="true"></i>TRUYỆN HAY </a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      <i class="fa fa-bars" aria-hidden="true" style="margin-right: 5px"></i>Thể loại </a>
                    <ul class="dropdown-menu dropdown-menu-dark bg-secondary" aria-labelledby="navbarDropdown"> @foreach($theloai as $key => $the) <li>
                        <a class="dropdown-item" href="{{url('the-loai/'.$the->slug_theloai)}}">{{$the->tentheloai}}</a>
                      </li> @endforeach </ul>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      <i class="fa fa-bars" aria-hidden="true" style="margin-right: 5px"></i>Phân loại theo tác giả </a>
                    <ul class="dropdown-menu dropdown-menu-dark bg-secondary" aria-labelledby="navbarDropdown">
                      <li>
                        <a class="dropdown-item" href="#">tg</a>
                       
                      </li>
                    </ul>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      <i class="fa fa-cog" aria-hidden="true" style="margin-right: 5px"></i>Tùy chỉnh </a>
                    <ul class="dropdown-menu dropdown-menu-dark bg-secondary" aria-labelledby="navbarDropdown">
                      <li>
                        <a class="dropdown-item" href="#">
                          <i class="fa fa-font" aria-hidden="true" style="margin-right: 8px; font-size: 12px"></i>Font chữ </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="#">
                          <i class="fa fa-sun-o" style="margin-right: 8px; font-size: 12px" aria-hidden="true"></i>Màu nền </a>
                      </li>
                    </ul>
                  </li>
                </ul>
                <div class="d-flex justify-content-between" style="margin-right: 30px">
                  <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Tìm kiếm" aria-label="Search">
                    <button class="btn btn-warning text-light" type="submit">
                      <i class="fa fa-search" aria-hidden="true"></i>
                    </button>
                  </form>
                  <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa fa-user" aria-hidden="true" style="margin-right: 5px"></i>Thành viên </a>
                      <ul class="dropdown-menu dropdown-menu-dark bg-secondary" aria-labelledby="navbarDropdown">
                        <li>
                          <a class="dropdown-item" href="#">Đăng nhập</a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="#">Đăng ký</a>
                        </li>
                      </ul>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </nav>
          </div>

          <!-- slide-welcome -->
          <div class="welcome" style="background-color: #fff">
            <p class="marquee">
              <i class="fa fa-truck" aria-hidden="true" style="margin-right: 10px"></i>Đọc truyện online, đọc truyện chữ, truyện full, truyện hay. Tổng hợp đầy đủ và cập nhật liên tục. <i class="fa fa-heartbeat" aria-hidden="true" style="margin-left: 10px"></i>
            </p>
          </div>


          <div style="margin-top: 15px">
            <!-- Slider --> @yield('slide')
            <!-- Truyện mới --> @yield('content')
            <!-- footer -->
            <hr />
            <div class="d-flex justify-content-between align-content-center m-4">
              <div class="col col-sm-10">Truyện Full - Đọc truyện online, đọc truyện chữ, truyện hay. Website luôn cập nhật những bộ truyện mới thuộc các thể loại đặc sắc như truyện tiên hiệp, truyện kiếm hiệp, hay truyện ngôn tình một cách nhanh nhất. Hỗ trợ mọi thiết bị như di động và máy tính bảng.</div>
              <a href="#" class="btn btn-primary">
                <i class="fa fa-arrow-up" aria-hidden="true"></i>
              </a>
            </div>
             <!-- footer -->

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
    autoplay:true,
    autoplayTimeout:2000,
    autoplayHoverPause:true,
    responsive:{
        0:{
            items:1,
        },
        200:{
          items: 2,
        },
        300:{
          items: 3,
        },
        600:{
            items:4,
        },
        800: {
          items:5,
        },
        1000:{
            items:8,
            loop:false
        }
    }
})
       </script>
<!--route chuong -->
       <script type="text/javascript">
        $('.select-chuong').on('change', function(){
          var url = $(this).val();
          if(url){
            window.location = url
          }
        });
        current_chuong();
        function current_chuong(){
          var url = window.location.href;
          $('select[name="select-chuong"]').find('opition[value="'+url+'"]').attr("selected", true);
        }
       </script>
    </body>
</html>
