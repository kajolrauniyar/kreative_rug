@extends('layouts.backend') 
@section('content')
<div class="row">
  <div class="col-lg-8 col-lg-offset-2">
    <div class="card card-tiles">
      <div class="card-body">
        <form class="form" method="POST" action="{{ route('user.update',$user->id) }}">
          @csrf @method('PUT')
          <div class="form-group">
            <input type="text" class="form-control" id="name" name="name" value="{{$user->name}}">
            <label for="name">Name</label>
          </div>
          <div class="row">
            <div class="col-sm-6">
              <div class="form-group">
                <input type="email" class="form-control" id="email" name="email" value="{{$user->email}}">
                <label for="email">Email</label>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <button type="button" class="btn btn-block ink-reaction btn-info" data-toggle="modal" data-target="#myModal"><i class="far fa-image"></i>  Image
              </div>
              </div>
          </div>
          <div class="form-group">
            <input type="password" class="form-control" id="password" name="password">
            <label for="password">New Password</label>
          </div>

          <div class="form-group">
            <input type="password" class="form-control" id="password_confirmation " name="password_confirmation">
            <label for="password_confirmation ">Password Confirmation </label>
          </div>
          <div class="form-group">
            <button type="submit" class=" btn ink-reaction btn-success">Update</button>
              </div>

              <div id="myModal" class="modal fade" role="dialog">
                  <div class="modal-dialog modal-lg">
                      <!-- Modal content-->
                      <div class="modal-content">
                          <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                              <h4 class="modal-title">Media Images</h4>
                          </div>
                          <div class="modal-body text-center">
                              @if(!empty($images))
                              <select class="image-picker show-html" name="image">
                      <option value=""></option>
                      @foreach($images  as $image)

                      <option data-img-src="{{asset($image->thumb)}}"
                          value="{{$image->id}}">
                      </option>
                      @endforeach
                  </select> @else
                              <h2>No images uploaded in media.</h2>
                              @endif
                          </div>
                          <div class="modal-footer">
                              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                          </div>
                      </div>
                  </div>
              </div>


        </form>
        </div>
        </div>
      </div>
    </div>
@endsection
 
@section('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/image-picker/0.3.0/image-picker.min.css">    
@stop 
@section('scripts')
  <script src="https://cdnjs.cloudflare.com/ajax/libs/image-picker/0.3.0/image-picker.min.js"></script>
  <script>
      $(document).ready(function () {
      $(".image-picker").imagepicker();
      });
    </script>    
@stop