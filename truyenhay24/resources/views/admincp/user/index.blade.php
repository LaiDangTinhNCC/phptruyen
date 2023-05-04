@extends('layouts.app')

@section('content')
@include('layouts.nav')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Liệt kê Users</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form autocomplete="off" method="POST" class="d-flex" style="margin-bottom: 10px">
        <input class="form-control me-2" type="search" placeholder="Tìm kiếm" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">
        <i class="fa fa-search" aria-hidden="true"></i>
        </button>
      </form>
                    <table class="table table-striped">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Tên user</th>
                            <th scope="col">Email</th>
                            <th scope="col">Password</th>
                            <th scope="col">Created at</th>
                            <th scope="col">Updated at</th>
                            <th scope="col">Quản lý</th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach($list_user as $key => $user)
                          <tr>
                            <th scope="row">{{$key}}</th>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>
                                <div class="pass">{{$user->password}}</div>
                               </td>
                            <td>{{$user->created_at}}</td>
                            <td>{{$user->updated_at}}</td>
                            <td>
        
                                <form action="{{route('user.destroy',[$user->id])}}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <button onclick="return confirm('Bạn có muốn xóa user này không ?');" class="btn btn-danger">
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
<style>
.pass {
height: 200px;
width: 100px;
overflow-y: hidden;
}
.pass:hover {
height: 200px;
overflow-y: scroll !important;
}
</style>

@endsection
