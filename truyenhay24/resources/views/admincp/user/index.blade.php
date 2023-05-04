@extends('layouts.app')
@section('content')
@include('layouts.nav')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Liệt kê user</div>

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
                            <th scope="col">Tên user</th>
                          </tr>
                        </thead>
                        <tbody>
                          
                          <tr>
                            <th scope="row"></th>
                            <td></td>
                          
                          </tr>
                         
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
