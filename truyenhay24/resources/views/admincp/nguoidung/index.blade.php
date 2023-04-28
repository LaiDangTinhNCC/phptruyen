@extends('layouts.app')

@section('content')
@include('layouts.nav')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Liệt kê người dùng</div>

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
        <th scope="col">User name</th>
        <th scope="col">Hình ảnh</th>
        <th scope="col">Mô tả</th>
        <th scope="col">Phân quyền</th>
        <th scope="col">Quản lý</th>
      </tr>
      </thead>
      <tbody>
      <tr>
        <th scope="row">#</th>
        <td>User name</td>
        <td>Hình ảnh</td>
        <td>Mô tả</td>
        <td>Phân quyền</td>
        <td>
            <a href="" class="btn btn-primary"><i class="fa fa-pencil" aria-hidden="true"></i></a>
            <a href="" class="btn btn-danger"> <i class="fa fa-trash" aria-hidden="true"></i></a>
        </td>
      </tr>
      </tbody>
      </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
