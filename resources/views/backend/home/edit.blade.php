@extends('layouts.backend') 
@section('content')
<div class="row">
    <div class=" col-md-12">
        <form action="{{route('home.update', $home->id)}}" class="form form-validate" method="POST">
            @csrf @method("PATCH")
            <div class="card">
                <div class="card-head style-primary">
                    <header>Home Page</header>
                </div>
                <div class="card-body">

                    <div class="row">
                        <h4>Banner Section</h4>
                        <div class="col-sm-4">
                            <div class="form-group  {{$errors->has('heading') ? 'has-error' : ''}}">
                                <input type="text" class="form-control" id="heading {{$errors->has('heading') ? 'inputError' : ''}}" name="heading" required
                                    value="{{$home->heading}}"> @if($errors->has('heading'))
                                <span class="help-block">{{ $errors->first('heading') }}</span> @endif
                                <label for="heading">Heading</label>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group  {{$errors->has('subheading') ? 'has-error' : ''}}">
                                <input type="text" class="form-control" id="subheading {{$errors->has('subheading') ? 'inputError' : ''}}" name="subheading"
                                    required value="{{$home->subheading}}"> @if($errors->has('subheading'))
                                <span class="help-block">{{ $errors->first('subheading') }}</span> @endif
                                <label for="subheading">Sub Heading</label>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <button type="button" class="btn btn-block ink-reaction btn-warning" data-toggle="modal" data-target="#myModal">
                             <i class="far fa-image"></i>  Banner Image
                            </button>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                            <h4>Text Position</h4>
                            <div class="col-sm-4">
                                <input type="radio" name="position" id="position" value="uk-position-large uk-position-center-left" 
                                @if($home->position == 'uk-position-large uk-position-center-left') checked @endif> Center Left
                            </div>
                            <div class="col-sm-4">
                                <input type="radio" name="position" id="position" value="uk-position-large uk-position-center-center"
                                @if($home->position == 'uk-position-large uk-position-center-center') checked @endif
                                > Center Center
                            </div>
                            <div class="col-sm-4">
                                <input type="radio" name="position" id="position" value="uk-position-large uk-position-center-right"
                                @if($home->position == 'uk-position-large uk-position-center-right') checked @endif
                                > Center Right
                            </div>
                            <div class="col-sm-4">
                                <input type="radio" name="position" id="position" value="uk-position-large uk-position-bottom-left"
                                @if($home->position == 'uk-position-large uk-position-bottom-left') checked @endif
                                > Bottom Left
                            </div>
                            <div class="col-sm-4">
                                <input type="radio" name="position" id="position" value="uk-position-large uk-position-bottom-center"
                                @if($home->position == 'uk-position-large uk-position-bottom-center') checked @endif
                                > Bottom Center
                            </div>
                            <div class="col-sm-4">
                                <input type="radio" name="position" id="position" value="uk-position-large uk-position-bottom-right"
                                @if($home->position == 'uk-position-large uk-position-bottom-right') checked @endif
                                > Bottom Right
                            </div>                        
                        </div>

                    <div class="row">
                        <h4>Section 1</h4>
                        <div class="col-sm-8">
                            <div class="form-group  {{$errors->has('section1_title') ? 'has-error' : ''}}">
                                <input type="text" class="form-control" id="section1_title {{$errors->has('section1_title') ? 'inputError' : ''}}" name="section1_title"
                                    value="{{$home->section1_title }}" required> @if($errors->has('section1_title'))
                                <span class="help-block">{{ $errors->first('section1_title') }}</span> @endif
                                <label for="section1_title">Title</label>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <button type="button" class="btn btn-block ink-reaction btn-warning" data-toggle="modal" data-target="#intro">
                                 <i class="far fa-image"></i>  Banner Image
                                </button>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <h4>Introduction Content</h4>
                                <textarea name="section1_content" value="{{old('section1_content')}}" rows="5" class="form-control" style="resize: none">{{$home->section1_content }}</textarea>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <h4>Section 2</h4>
                        <div class="col-sm-8">
                            <div class="form-group  {{$errors->has('section2_title') ? 'has-error' : ''}}">
                                <input type="text" class="form-control" id="section2_title {{$errors->has('section2_title') ? 'inputError' : ''}}" name="section2_title"
                                    value="{{$home->section2_title }}" required> @if($errors->has('section2_title'))
                                <span class="help-block">{{ $errors->first('section2_title') }}</span> @endif
                                <label for="section2_title">Title</label>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <button type="button" class="btn btn-block ink-reaction btn-warning" data-toggle="modal" data-target="#section2">
                                     <i class="far fa-image"></i>  Banner Image
                                    </button>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <h4>Content</h4>
                                <textarea name="section2_content" rows="5" class="form-control" style="resize: none">{{$home->section2_content }}</textarea>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <h4>Section 3</h4>
                        <div class="col-sm-8">
                            <div class="form-group  {{$errors->has('section3_title') ? 'has-error' : ''}}">
                                <input type="text" class="form-control" id="section3_title {{$errors->has('section3_title') ? 'inputError' : ''}}" name="section3_title"
                                    value="{{$home->section3_title }}" required> @if($errors->has('section3_title'))
                                <span class="help-block">{{ $errors->first('section3_title') }}</span> @endif
                                <label for="section3_title">Title</label>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <button type="button" class="btn btn-block ink-reaction btn-warning" data-toggle="modal" data-target="#section3">
                                     <i class="far fa-image"></i>  Banner Image
                                    </button>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <h4>Content</h4>
                                <textarea name="section3_content" value="{{old('section3_content')}}" rows="5" class="form-control" style="resize: none">{{$home->section3_content}}</textarea>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <h4>Section 4</h4>
                        <div class="col-sm-8">
                            <div class="form-group  {{$errors->has('section4_title') ? 'has-error' : ''}}">
                                <input type="text" class="form-control" id="section4_title {{$errors->has('section4_title') ? 'inputError' : ''}}" name="section4_title"
                                    value="{{$home->section4_title }}" required> @if($errors->has('section4_title'))
                                <span class="help-block">{{ $errors->first('section4_title') }}</span> @endif
                                <label for="section4_title">Title</label>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <button type="button" class="btn btn-block ink-reaction btn-warning" data-toggle="modal" data-target="#section4">
                                         <i class="far fa-image"></i>  Banner Image
                                        </button>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <h4>Content</h4>
                                <textarea name="section4_content" rows="5" class="form-control" style="resize: none">{{ $home->section4_content }}</textarea>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                            <h4>Section 5</h4>
                            <div class="col-sm-8">
                                <div class="form-group  {{$errors->has('section5_title') ? 'has-error' : ''}}">
                                    <input type="text" class="form-control" id="section5_title {{$errors->has('section5_title') ? 'inputError' : ''}}" name="section5_title"
                                        value="{{$home->section5_title }}" required> @if($errors->has('section5_title'))
                                    <span class="help-block">{{ $errors->first('section5_title') }}</span> @endif
                                    <label for="section5_title">Title</label>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <button type="button" class="btn btn-block ink-reaction btn-warning" data-toggle="modal" data-target="#section5">
                                             <i class="far fa-image"></i>  Banner Image
                                            </button>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <h4>Content</h4>
                                    <textarea name="section5_content" rows="5" class="form-control" style="resize: none">{{ $home->section5_content }}</textarea>
                                </div>
                            </div>
                        </div>                    
                </div>
                <!--end .card body-->
                <div class="card-actionbar">
                    <div class="card-actionbar-row">
                        <div class="col-sm-12">
                            <button type="submit" class="btn btn-lg  btn-block btn-success ink-reaction"> Save</button>
                        </div>
                    </div>
                </div>

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
                {{-- featured image modal end --}} {{-- featured image modal start --}}
                <div id="intro" class="modal fade" role="dialog">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Media Images</h4>
                            </div>
                            <div class="modal-body text-center">
                                @if(!empty($medias))
                                <select class="image-picker show-html" name="section1_image">
                                    <option value=""></option>
                                    @foreach($medias  as $image)
                                        <option data-img-src="{{asset($image->thumb)}}" value="{{$image->id}}"> </option>
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
                {{-- featured image modal end --}}
                {{-- section 3 modal start --}}
                <div id="section2" class="modal fade" role="dialog">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Media Images</h4>
                                </div>
                                <div class="modal-body text-center">
                                    @if(!empty($medias))
                                    <select class="image-picker show-html" name="section2_image">
                                        <option value=""></option>
                                        @foreach($medias  as $image)
                                            <option data-img-src="{{asset($image->thumb)}}" value="{{$image->id}}"> </option>
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
                {{-- section 3 modal end --}}                
                {{-- section 3 modal start --}}
                <div id="section3" class="modal fade" role="dialog">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Media Images</h4>
                                </div>
                                <div class="modal-body text-center">
                                    @if(!empty($medias))
                                    <select class="image-picker show-html" name="section3_image">
                                        <option value=""></option>
                                        @foreach($medias  as $image)
                                            <option data-img-src="{{asset($image->thumb)}}" value="{{$image->id}}"> </option>
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
                {{-- section 3 modal end --}}
                {{-- section 4 modal start --}}
                <div id="section4" class="modal fade" role="dialog">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Media Images</h4>
                                </div>
                                <div class="modal-body text-center">
                                    @if(!empty($medias))
                                    <select class="image-picker show-html" name="section4_image">
                                        <option value=""></option>
                                        @foreach($medias  as $image)
                                            <option data-img-src="{{asset($image->thumb)}}" value="{{$image->id}}"> </option>
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
                {{-- section 4 modal end --}}        
                {{-- section 4 modal start --}}
                <div id="section5" class="modal fade" role="dialog">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Media Images</h4>
                                </div>
                                <div class="modal-body text-center">
                                    @if(!empty($medias))
                                    <select class="image-picker show-html" name="section5_image">
                                        <option value=""></option>
                                        @foreach($medias  as $image)
                                            <option data-img-src="{{asset($image->thumb)}}" value="{{$image->id}}"> </option>
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
                {{-- section 4 modal end --}}                           

        </form>
        </div>
        <!--end .col -->
    </div>
</div>



@stop 
@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/image-picker/0.3.0/image-picker.min.js"></script>
<script>
    $(".image-picker").imagepicker();

</script>



@stop 
@section('styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/image-picker/0.3.0/image-picker.min.css"> 
@stop