@extends('layouts.app')
@section('content')
@include('layouts.nav')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Liệt kê danh mục</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <table class="table table-striped">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Tên danh mục</th>
                            <th scope="col">Kích hoạt</th>
                            <th scope="col">Quản lý</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach($danhmuctruyen as $key => $danhmuc)
                          <tr>
                            <th scope="row">{{$key}}</th>
                            <td>{{$danhmuc->tendanhmuc}}</td>
                            <td>
                                @if($danhmuc->kichhoat==0)
                                <span class="text text-success">Kích hoạt</span>
                                @else
                                <span class="text text-danger">Không kích hoạt</span>
                                @endif
                            </td>
                            <td style="display:flex">
                                <a href="{{route('danhmuc.edit',[$danhmuc->id])}}" class="btn btn-primary" style="margin-right: 10px">
                                    <i class="fa fa-pencil" aria-hidden="true"></i>
                                </a>
                                <form action="{{route('danhmuc.destroy',[$danhmuc->id])}}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <button onclick="return confirm('Bạn có muốn xóa danh mục này không ?');" class="btn btn-danger">
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
