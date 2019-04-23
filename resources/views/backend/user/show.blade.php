@extends('layouts.backend') 
@section('content')
<div class="row">
    <div class="col-lg-8">
        <div class="card card-tiles">
            <div class="card-body">
              <div class="row">
              <img class="img-circle border-white border-xl img-responsive" style=" margin: 0 auto;"src="{{$user->path ? asset($user->path) : 'https://via.placeholder.com/250?text=No+Image+Uploaded'}}" alt="">
              </div>
              <div class="row">
                <p class="text-lg"><i class="fa fa-fw fa-user"></i> {{auth()->user()->name}}</p>
              </div>
              <div class="row">
                  <p class="text-lg"><i class=" fas fa-at"></i> {{auth()->user()->email}}</p>
              </div>
              <div class="row">
                @foreach ($user->roles as $role)
                <p class="text-lg"><i class="fas fa-user-shield"></i> {{$role->name}}</p>
                @endforeach              
              </div>
              <div class="row">
                  <a href="{{ route('user.edit', $user->id) }}" class="btn ink-reaction btn-primary">Update Password</a>
              </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
    </div>
</div>
@endsection
 
@section('styles')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap.min.css">
<style>
  .action-column .btn {
    margin-top: 8px !important;
  }
</style>


@stop 
@section('scripts')
<script src="{{ asset('assets/js/core/demo/DemoTableDynamic.js') }}"></script>
<script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap.min.js"></script>


@stop