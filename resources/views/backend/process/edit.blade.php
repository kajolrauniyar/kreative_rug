@extends('layouts.backend') 
@section('content')
<div class="col-lg-10 col-lg-offset-1">
    <div class="card">
        <div class="card-head style-primary">
            <header>Edit process</header>
        </div>
        <div class="card-body">
            <form action="{{route('process.update', $process->id)}}" method="POST">
                {{method_field('PUT')}} {{csrf_field()}}
                <input type="hidden" name="id" value="{{$process->id}}">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <input type="text" class="form-control" name="title" id="title" value="{{$process->title}}"> @if($errors->has('title'))
                            <span class="help-block">{{ $errors->first('title') }}</span> @endif
                            <label for="title">Title</label>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <button type="button" class="btn btn-block ink-reaction btn-info" data-toggle="modal" data-target="#myModal">
                        <i class="far fa-image"></i>  Image
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="description">Description</label>
                    <textarea name="description" id="description" cols="30" rows="10" class="form-control" style="resize: none">{{$process->description}}</textarea>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-10 col-sm-offset-1">
                    <button type="submit" class="btn btn-block btn-success ink-reaction">Add</button>
                        </div>
                    </div>
                </div>
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
                        <select class="image-picker show-html" name="featured">
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








    
@stop 
@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/image-picker/0.3.0/image-picker.min.js"></script>
    <script>
        $(document).ready(function () {
        $(".image-picker").imagepicker();
    });
    </script>








    
@stop 
@section('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/image-picker/0.3.0/image-picker.min.css"> 
@stop