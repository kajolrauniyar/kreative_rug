@extends('layouts.backend')
@section('content')
<div class="row">
    <div class="col-lg-offset-1 col-md-10">
        <form action="{{ route('team.update', $team->id) }}" class="form form-validate" method="POST">
            @csrf
            @method('PATCH')
        <div class="card">
            <div class="card-head style-primary">
                <header>Edit {{ $team->name }}</header>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group {{$errors->has('name') ? 'has-error' : ''}}">
                        <input type="text" name="name" id="name" class="form-control" required value="{{$team->name}}">
                            @if($errors->has('name'))
                            <span class="help-block">{{ $errors->first('name') }}</span>
                            @endif
                            <label for="name">Name</label>
                        </div>
                    </div>
                </div>
                <div class="row"></div>
                    <div class="col-md-6">
                        <div class="form-group  {{$errors->has('designation') ? 'has-error' : ''}}">
                            <input type="text" name="designation" id="designation" value="{{$team->designation}}" required class="form-control">
                            <label for="designation">Designation</label>
                            @if ($errors->has('designation'))
                            <span class="help-block">{{$errors->first('designation')}}</span>
                            @endif
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <button type="button" class="btn btn-block ink-reaction btn-info" data-toggle="modal"
                            data-target="#myModal">
                            <i class="far fa-image"></i>  Avatar Image
                        </button>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <textarea name="description">{{ $team->description }}</textarea>
                    </div>
                </div>
            </div>
        </div><!--end .card body-->
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
                        <select class="image-picker show-html"
                        name="avatar">
                        <option value=""></option>
                        @foreach($images  as $image)

                        <option data-img-src="{{asset($image->thumb)}}"
                            value="{{$image->id}}">
                        </option>
                        @endforeach
                    </select>
                    @else
                    <h2>No images uploaded in media.</h2>
                    @endif
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>
    <div class="card-actionbar">
        <div class="card-actionbar-row">
            <button type="submit" class="'btn btn-lg btn-flat btn-primary ink-reaction"> Update</button>
        </div>
    </div>
</form>
</div><!--end .col -->
</div>
</div>
@endsection
@section('styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/image-picker/0.3.0/image-picker.min.css">
@stop
@section('scripts')
<script src="{{ asset('assets/js/core/demo/DemoFormComponents.js') }}"></script>
<script src="{{ asset('assets/js/libs/ckeditor/ckeditor.js') }}"></script>
<script src="{{ asset('assets/js/libs/ckeditor/adapters/jquery.js') }}"></script>
<script src="{{ asset('assets/js/core/demo/DemoFormEditors.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/image-picker/0.3.0/image-picker.min.js"></script>
<script>
    CKEDITOR.replace('description', {
        height: 500
    });
    $(".image-picker").imagepicker();
</script>
@stop
