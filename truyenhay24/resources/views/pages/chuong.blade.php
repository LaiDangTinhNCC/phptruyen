@extends('../layout') @section('content') <nav aria-label="breadcrumb">
  <ol class="container breadcrumb bread-list bg-light bread_style">
    <li class="breadcrumb-item">
      <a href="{{url('/')}}">
        <i class="fa fa-home" style="margin-right:10px" aria-hidden="true"></i>Trang chủ </a>
    </li>
    <li class="breadcrumb-item">
      <a href="{{url('the-loai/'.$truyen_bread->theloaitruyen->slug_theloai)}}">{{$truyen_bread->theloaitruyen->tentheloai}}</a>
    </li>
    <li class="breadcrumb-item">
      <a href="{{url('xem-truyen/'.$truyen_bread->slug_truyen)}}">{{$truyen_bread->tentruyen}}</a>
    </li>
    <li class="breadcrumb-item active" aria-current="page">{{$chuong->tieude}}</li>
  </ol>
</nav>
<div class="row noidung">
  <div class="col-md-12">
    <h4 style="text-align:center;">{{$chuong->truyen->tentruyen}}</h4>
    <p style="text-align:center;">{{$chuong->tieude}}</p>
    <div class="d-flex justify-content-evenly">
      <div>
        <a href="{{url('xem-chuong/'.$prev_chuong)}}" class="btn btn-success {{$chuong->id==$min_id->id ? 'disabled' : ''}}">
          <i class="fa fa-arrow-left" style="margin-right: 10px" aria-hidden="true"></i>Chương trước </a>
      </div>
      <div>
        <select class="form-select select-chuong" aria-label="Default select example">
          <option selected>Chọn chương</option> @foreach($all_chuong as $key => $chap) <option value="{{url('xem-chuong/'.$chap->slug_chuong)}}">{{$chap->tieude}}</option> @endforeach
        </select>
      </div>
      <div>
        <a href="{{url('xem-chuong/'.$next_chuong)}}" class="btn btn-success {{$chuong->id==$max_id->id ? 'disabled' : ''}}">Chương tiếp <i class="fa fa-arrow-right" style="margin-left: 10px" aria-hidden="true"></i>
        </a>
      </div>
    </div>
    <div class="noidung mt-3">
      <p>
        {{!! $chuong->noidung !!}}
      </p>
    </div>
    <div class="d-flex justify-content-evenly">
      <div>
        <a href="{{url('xem-chuong/'.$prev_chuong)}}"  class="btn btn-success {{$chuong->id==$min_id->id ? 'disabled' : ''}}">
          <i class="fa fa-arrow-left" style="margin-right: 10px" aria-hidden="true"></i>Chương trước </a>
      </div>
      <div>
        <select class="form-select select-chuong" aria-label="Default select example">
          <option selected>Chọn chương</option> @foreach($all_chuong as $key => $chap) <option value="{{url('xem-chuong/'.$chap->slug_chuong)}}">{{$chap->tieude}}</option> @endforeach
        </select>
      </div>
      <div>
        <a href="{{url('xem-chuong/'.$next_chuong)}}" class="btn btn-success {{$chuong->id==$max_id->id ? 'disabled' : ''}}">Chương tiếp <i class="fa fa-arrow-right" style="margin-left: 10px" aria-hidden="true"></i>
        </a>
      </div>
    </div>
  </div>
</div>
<style>
  .noidung {
    padding-left: 20px;
    margin-right: 10px;
  }
</style> @endsection