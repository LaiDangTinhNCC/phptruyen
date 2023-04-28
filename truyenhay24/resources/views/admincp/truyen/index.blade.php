@extends('layouts.app')

@section('content')
@include('layouts.nav')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Liệt kê truyện</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form class="d-flex" style="margin-bottom: 10px">
        <input class="form-control me-2" type="search" placeholder="Tìm kiếm" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">
        <i class="fa fa-search" aria-hidden="true"></i>
        </button>
      </form>
                    <table class="table table-striped">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Tên truyện</th>
                            <th scope="col">Hình ảnh</th>
                            <th scope="col">Tác giả</th>
                            <!-- <th scope="col">Tóm tắt</th> -->
                            <th scope="col">Thể loại</th>
                            <th scope="col">Kích hoạt</th>
                            <th scope="col">Quản lý</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach($list_truyen as $key => $truyen)
                          <tr>
                            <th scope="row">{{$key}}</th>
                            <td>{{$truyen->tentruyen}}</td>
                            <td>
                                <img src="{{asset('public/uploads/truyen/'.$truyen->hinhanh)}}" height="150" width="130">
                            </td>
                            <td>{{$truyen->tacgia}}</td>
                            <!-- <td>{{$truyen->tomtat}}</td> -->
                            <td>{{$truyen->theloaitruyen->tentheloai}}</td>
                            <td>
                                @if($truyen->kichhoat==0)
                                <span class="text text-success">Kích hoạt</span>
                                @else
                                <span class="text text-danger">Không kích hoạt</span>
                                @endif
                            </td>
                            <td>
                                <a href="{{route('truyen.edit',[$truyen->id])}}" class="btn btn-primary" style="margin-bottom: 10px">
                                    <i class="fa fa-pencil" aria-hidden="true"></i>
                                </a>
                                <form action="{{route('truyen.destroy',[$truyen->id])}}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <button onclick="return confirm('Bạn có muốn xóa truyện này không ?');" class="btn btn-danger">
                                        <i class="fa fa-trash" aria-hidden="true"></i>
                                    </button>
                                </form>
                            </td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
