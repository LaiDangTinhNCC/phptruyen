@extends('layouts.app')

@section('content')
@include('layouts.nav')
<div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">Thêm danh mục</div>
          @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
          <div class="card-body"> @if (session('status')) <div class="alert alert-success" role="alert">
              {{ session('status') }}
            </div> @endif <form method="POST" action="{{route('danhmuc.store')}}">
                @csrf
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Tên danh mục</label>
                <input id="slug" name="tendanhmuc" onkeyup="ChangeToSlug();" value="{{old('tendanhmuc')}}" type="text" class="form-control" placeholder="Tên danh mục...">
              </div>

              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Slug danh mục</label>
                <input id="convert_slug"  name="slug_danhmuc" value="{{old('slug_danhmuc')}}" type="text" class="form-control" placeholder="Slug danh mục...">
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Kích hoạt</label>
                <select name="kichhoat" class="form-select" aria-label="Default select example">
                    <option value="0" @if(old('kichhoat') == '0') selected @endif>Kích hoạt</option>

                    <option value="1" @if(old('kichhoat') == '1') selected @endif>Không kích hoạt</option>
                  </select>
              </div>
              <button type="submit" name="themdanhmuc" class="btn btn-primary">Thêm</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
