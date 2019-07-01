@extends('layouts.backend') 
@section('styles')
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/css/bootstrap-multiselect.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/image-picker/0.3.0/image-picker.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/css/select2.min.css"> 
@stop 
@section('content')
<div class="row">
    <div class="col-lg-offset-1 col-md-10">
        <form action="{{ route('product.store') }}" enctype="multipart/form-data" class="form form-validate" method="POST">
            @csrf
            <div class="card">
                <div class="card-head style-primary">
                    <header>Create new product</header>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group floating-label {{$errors->has('name') ? 'has-error' : ''}}">
                                <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}" required>
                                <label for="name">Product Name</label> @if($errors->has('name'))
                                <span class="help-block">{{ $errors->first('name') }}</span> @endif
                            </div>
                        </div>
                    </div>
                    {{--Title --}}
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group floating-label {{$errors->has('size') ? 'has-error' : ''}}">
                                <input type="text" class="form-control" name="size" id="size" value="{{old('size')}}"> @if($errors->has('days'))
                                <span class="help-block">{{ $errors->first('size') }}</span> @endif
                                <label for="size"> Size (Optional)</label>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group floating-label">
                                <select name="category" id="category" class="form-control" required>
                                        <option value=""></option>
                                        @foreach($categories as $category)
                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                        @endforeach
                                    </select>
                                <label for="category">Category</label>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <button type="button" class="btn btn-block ink-reaction btn-info" data-toggle="modal" data-target="#myModal">
                                 <i class="far fa-image"></i>  Featured Image
                                </button>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group {{$errors->has('status') ? 'has-error' : ''}}">
                                <label class="col-sm-3 control-label">Status</label>
                                <div class="col-sm-9">
                                    <label class="radio-inline radio-styled radio-success">
                                      <input type="radio" value="1" name="status" checked><span>Publish</span>
                                    </label>
                                    <label class="radio-inline radio-styled radio-warning">
                                        <input type="radio" value="0" name="status"><span>Draft</span>
                                    </label>
                                </div>
                                @if($errors->has('status'))
                                <span class="help-block">{{ $errors->first('status') }}</span> @endif
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group">
                            <div class="col-sm-12">

                                <label for="material">Materials</label>
                                <select class="form-control select2-multi  floating-label {{$errors->has('title') ? 'has-error' : ''}}" name="materials[]"
                                    multiple="multiple">
                                        @foreach($materials as $material)
                                            <option value='{{ $material->id }}'>{{ $material->name }}</option>
                                        @endforeach
                    
                            </select>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group">
                            <h4>Overview</h4>
                            <textarea name="overview" value="{{old('overview')}}"></textarea>
                        </div>
                    </div>
                    {{--Overview --}}

                    <div class="row">
                        <div class="col-sm-12">
                            <h4>SEO Component</h4>
                            <div class="form-group {{$errors->has('mtitle') ? 'has-error' : ''}} floating-label">
                                <input type="text" name="mtitle" id="mtitle" class="form-control" value="{{old('mtitle')}}" required>                                @if($errors->has('mtitle'))
                                <span class="help-block">{{ $errors->first('mtitle') }}</span> @endif
                                <label for="mtitle">Meta Title</label>
                            </div>
                        </div>
                    </div>
                    {{--Meta Title --}}
                    <div class="row">
                        <div class="col-sm-12" id="desc">
                            <div class="form-group  {{$errors->has('description') ? 'has-error' : ''}} floating-label">
                                <textarea class="form-control meta" maxlength="160" name="description" id="description {{$errors->has('description')? 'inputError' : ''}}"
                                    required></textarea> @if ($errors->has('description'))
                                <span class="help-block">{{$errors->first('description')}}</span> @endif
                                <label for="description">Description</label>
                            </div>
                        </div>
                    </div>
                    {{--meta Description --}}
                </div>
                <!--end .card body-->
                {{-- featured image modal start --}}
                <div id="myModal" class="modal fade" role="dialog">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Media Images</h4>
                            </div>
                            <div class="modal-body text-center">
                                @if(!empty($medias))
                                <select class="image-picker show-html" name="image">
                                    <option value=""></option>
                                    @foreach($medias  as $image)
                                        <option data-img-src="{{asset($image->thumb)}}" value="{{$image->id}}"> </option>
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
                {{-- featured image modal end --}} 
                {{-- slides modal end --}}
                <div class="card-actionbar">
                    <div class="card-actionbar-row">
                        <button type="submit" class="btn btn-lg btn-flat btn-primary ink-reaction">Create</button>
                    </div>
                </div>
        </form>
        </div>
        <!--end .col -->
    </div>
</div>
@endsection
 
@section('scripts')
<script src="{{ asset('assets/js/core/demo/DemoFormComponents.js') }}"></script>
<script src="{{ asset('assets/js/libs/ckeditor/ckeditor.js') }}"></script>
<script src="{{ asset('assets/js/libs/ckeditor/adapters/jquery.js') }}"></script>
<script src="{{ asset('assets/js/core/demo/DemoFormEditors.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/js/bootstrap-multiselect.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/image-picker/0.3.0/image-picker.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/js/select2.min.js"></script>
<script>
    $(".image-picker").imagepicker();

    CKEDITOR.replace('overview', {
        height: 500
    });
    $('.select2-multi').select2();

</script>
@stop