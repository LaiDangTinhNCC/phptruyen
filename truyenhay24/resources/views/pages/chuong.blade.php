@extends('../layout')
@section('content') 
<nav aria-label="breadcrumb" style="margin-left: 10px">
  <ol class="breadcrumb bread-list">
    <li class="breadcrumb-item">
      <a href="#">
        <i class="fa fa-home" aria-hidden="true"></i>Trang chủ </a>
    </li>
    <li class="breadcrumb-item">
      <a href="#">Library</a>
    </li>
    <li class="breadcrumb-item active" aria-current="page">Data</li>
  </ol>
</nav>
<div class="row noidung">
  <div class="col-md-12">
    <h4>{{$chuong->truyen->tentruyen}}</h4>
    <p>{{$chuong->tieude}}</p>
    <div class="col-md-5">
        <select class="form-select select-chuong" aria-label="Default select example">
          <option selected>Chọn chương</option>
          @foreach($all_chuong as $key => $chap)
          <option value="{{url('xem-chuong/'.$chap->slug_chuong)}}">{{$chap->tieude}}</option>
          @endforeach
        </select>
    </div>
    <div class="noidung mt-3">
      <p>
        {{!! $chuong->noidung !!}}
      </p>
    </div>
    <div class="col-md-5">
        <select class="form-select select-chuong" aria-label="Default select example">
          <option selected>Chọn chương</option>
          @foreach($all_chuong as $key => $chap)
          <option value="{{url('xem-chuong/'.$chap->slug_chuong)}}">{{$chap->tieude}}</option>
          @endforeach
        </select>
    </div>
  </div>
</div>
<style>
  .noidung {
    padding-left: 20px;
    margin-right: 10px;
  }
</style> @endsection