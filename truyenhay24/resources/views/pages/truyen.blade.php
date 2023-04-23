@extends('../layout')
@section('content')
<nav aria-label="breadcrumb">
  <ol class="breadcrumb bread-list">
    <li class="breadcrumb-item"><a href="#"><i class="fa fa-home" aria-hidden="true"></i>Trang chủ</a></li>
    <li class="breadcrumb-item"><a href="#">Library</a></li>
    <li class="breadcrumb-item active" aria-current="page">Data</li>
  </ol>
</nav>
<div class="container row noidung">
  <div class="col-md-9">
  <div class="col-md-9 d-flex">
  <div class="col-md-3">
    <img class="image-hover" src="{{asset('public/uploads/truyen/daula547.jpg')}}">
    </div>
    <div class="col-md-9 noidung2">
      <ul>
        <li>Tác giả: </li>
        <li>Thể loại: </li>
        <li>Số chương: </li>
        <li>Số lượt xem: </li>
        <li><a href="">Xem mục lục</a></li>
        <li><a href="" class="btn btn-sm btn-primary">Đọc online</a></li>
      </ul>
    </div>
  </div>
    <div class="col-md-12 mota">Noidungttt...</div>
    <h5 style="margin-top: 10px">Mục lục</h5>
    <ul class="mucluctruyen">
      <li><a href="">Chương 1</a></li>
      <li><a href="">Chương 2</a></li>
    </ul>
    <h5>Truyện cùng thể loại</h5>
    <div class="row">
      <a class="col-md-3 d-flex flex-column justify-content-between" style="width: 160px">
        <img class="image-hover"  src="{{asset('public/uploads/truyen/dau-la-dai-luc-23042045.jpg')}}">
        <div class="d-flex flex-column" style="margin-top: 13px">
        <h6 class="text-center fw-bold">Đấu la đại lục</h6>
        <button type="button" class="btn btn-sm btn-warning">Full - 250 chương</button>
      </div>
      </a>

      <a class="col-md-3 d-flex flex-column justify-content-between" style="width: 160px">
        <img class="image-hover"  src="{{asset('public/uploads/truyen/dau-la-dai-luc-23042045.jpg')}}">
        <div class="d-flex flex-column" style="margin-top: 13px">
        <h6 class="text-center fw-bold">Đấu la đại lục</h6>
        <button type="button" class="btn btn-sm btn-warning">Full - 250 chương</button>
      </div>
      </a>

      <a class="col-md-3 d-flex flex-column justify-content-between" style="width: 160px">
        <img class="image-hover"  src="{{asset('public/uploads/truyen/dau-la-dai-luc-23042045.jpg')}}">
        <div class="d-flex flex-column" style="margin-top: 13px">
        <h6 class="text-center fw-bold">Đấu la đại lục</h6>
        <button type="button" class="btn btn-sm btn-warning">Full - 250 chương</button>
      </div>
      </a>

      <a class="col-md-3 d-flex flex-column justify-content-between" style="width: 160px">
        <img class="image-hover"  src="{{asset('public/uploads/truyen/dau-la-dai-luc-23042045.jpg')}}">
        <div class="d-flex flex-column" style="margin-top: 13px">
        <h6 class="text-center fw-bold">Đấu la đại lục</h6>
        <button type="button" class="btn btn-sm btn-warning">Full - 250 chương</button>
      </div>
      </a>
    </div>
</div>
  <div class="col-md-3">
      <h5>Truyện hay xem nhiều</h5>
  </div>
</div>
<style>
  a{ text-decoration: none;}
  .bread-list{
    padding-left: 20px;
  }
  nav .breadcrumb .breadcrumb-item a{
    text-decoration: none;
  }
  nav .breadcrumb .breadcrumb-item a i{
    margin-right: 10px;
  }
  .noidung{
    padding-left: 20px;
  }
  .noidung2 ul{
    list-style: none;
  }
  .noidung2 ul li a{
    text-decoration: none;
  }
  .mota{
    margin-top: 10px;
  }
  .mucluctruyen li a{
     text-decoration: none;
  }
</style>
@endsection