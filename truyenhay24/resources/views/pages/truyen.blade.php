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
      @php
      $mucluc = count($chuong);
      @endphp
  <div class="col-md-3">
    <img class="image-hover" src="{{asset('public/uploads/truyen/'.$truyen->hinhanh)}}">
    </div>
    <div class="col-md-9 noidung2">
      <ul>
        <li>Tên truyện: {{$truyen->tentruyen}}</li>
        <li>Tác giả: {{$truyen->tacgia}}</li>
        <li>Thể loại: <a href="{{url('the-loai/'.$truyen->theloaitruyen->slug_theloai)}}">{{$truyen->theloaitruyen->tentheloai}}</a></li>
        <li>Số chương: {{$mucluc}}</li>
        <li>Số lượt xem: {{$truyen->luotxem}}</li>
        @if($chuong_dau)
        <li><a href="{{url('xem-chuong/'.$chuong_dau->slug_chuong)}}" class="btn btn-sm btn-primary">Đọc online</a></li>
        @else
        <li><button class="btn btn-sm btn-warning" disabled>Chương đang cập nhật</button></li>
        @endif
      </ul>
    </div>
  </div>
    <div class="col-md-12">
      <p>{{!! $truyen->tomtat !!}}</p>
    </div>
    <h5 style="margin-top: 10px">Mục lục</h5>
    <ul class="mucluctruyen">
      @if($mucluc>0)
      @foreach($chuong as $key => $chap)
      <li><a href="{{url('xem-chuong/'.$chap->slug_chuong)}}">{{$chap->tieude}}</a></li>
      @endforeach
      @else
      <li>Mục lục đang cập nhật vui lòng quay lại sau....</li>
      @endif
    </ul>
    <h5>Truyện cùng thể loại</h5>
    <div class="row">
    @foreach($cungtheloai as $key => $value)
      <a href="{{url('xem-truyen/'.$value->slug_truyen)}}" class="col-md-3 d-flex flex-column justify-content-between mb-5" style="width: 160px">
        <img class="image-hover"  src="{{asset('public/uploads/truyen/'.$value->hinhanh)}}">
        <div class="d-flex flex-column" style="margin-top: 13px">
        <h6 class="text-center fw-bold" style="max-height: 80px; overflow: hidden; text-overflow: ellipsis; white-space: nowrap; display: block; width: 100%;">{{$value->tentruyen}}</h6>
        <button type="button" class="btn btn-sm btn-warning" style="max-height: 80px; overflow: hidden; text-overflow: ellipsis; white-space: nowrap; display: block; width: 100%;">{{$value->tacgia}}</button>
      </div>
      </a>
    @endforeach
    </div>
</div>
  <div class="col-md-3">
      <h5>Truyện hay xem nhiều</h5>
      @foreach($truyen_hay as $key => $value)
      <a href="{{url('xem-truyen/'.$value->slug_truyen)}}" class="col-md-3 d-flex flex-column justify-content-between" style="width: 135px">
        <img class="image-hover"  src="{{asset('public/uploads/truyen/'.$value->hinhanh)}}">
        <div class="d-flex flex-column" style="margin-top: 13px">
          <h6 class="text-center fw-bold">{{$value->tentruyen}}</h6>
          <!-- <p class="text-center"><i class="fa fa-eye" aria-hidden="true" style="margin-right: 10px"></i>{{$value->luotxem}}</p> -->
        </div>
      </a>
      @endforeach   

      
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
  .noidung2 ul li{
    margin-bottom: 5px;
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