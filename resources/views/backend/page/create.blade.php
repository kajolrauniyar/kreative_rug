@extends('layouts.backend') 
@section('content')
<div class="row">
    <div class="col-md-12">
        <form action="{{ route('page.store') }}" class="form form-validate" method="POST">
            @csrf
            <div class="card">
                <div class="card-head style-primary">
                    <header>Create new page</header>
                </div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-8">
                            <div class="form-group floating-label {{$errors->has('title') ? 'has-error' : ''}}">
                                <input type="text" name="title" id="title" class="form-control" value="{{old('title')}}">                                @if($errors->has('title'))
                                <span class="help-block">{{ $errors->first('title') }}</span> @endif
                                <label for="title">Title</label>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <button type="button" class="btn btn-block ink-reaction btn-info" data-toggle="modal" data-target="#myModal">
                                 <i class="far fa-image"></i>  Header Image
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="row fieldGroup">
                        <div class="col-sm-10  ">
                            <div class="form-group floating-label {{$errors->has('sectionTitle') ? 'has-error' : ''}}">
                                <input type="text" name="sectionTitle[]" id="sectionTitle" class="form-control" value="{{old('sectionTitle')}}">                                @if($errors->has('sectionTitle'))
                                <span class="help-block">{{ $errors->first('sectionTitle') }}</span> @endif
                                <label for="sectionTitle">Section Title</label>
                            </div>
                        </div>
                        <div class="col-sm-2  ">
                            <a href="javascript:void(0)" class="btn btn-success addMore">
                                    <span class="glyphicon glyphicon glyphicon-plus" aria-hidden="true"></span> Add Section
                                </a>
                        </div>
                        <div class="col-sm-12  ">
                            <div class="form-group">
                                <h4>Section Content</h4>
                                <textarea name="sectionContent[]" class="editor" value="{{old('sectionContent')}}"></textarea>
                            </div>
                        </div>
                    </div>

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

                </div>


                <!--end .card body-->
                <div id="myModal" class="modal fade" role="dialog">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Media Images</h4>
                            </div>
                            <div class="modal-body text-center">
                                <select name="image" id="image-picker">
                                    @foreach($medias  as $image)
                                        <option data-img-src="{{asset($image->thumb)}}" value="{{$image->id}}"> </option>
                                    @endforeach
                            </select>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="card-actionbar">
                    <div class="card-actionbar-row">
                        <div class="col-sm-8 col-sm-offset-2">
                            <button type="submit" class="btn btn-lg btn-block btn-success ink-reaction"> Create</button>
                        </div>
                    </div>
                </div>
        </form>
        </div>
    </div>
</div>

<div class="row" id="fieldGroupTemplate">
    <div class="col-md-10  ">
        <div class="form-group floating-label">
            <label for="sectionTitle">Section Title</label>
            <input type="text" name="sectionTitle[]" id="sectionTitle" class="form-control">

        </div>
    </div>
    <div class="col-md-2  ">
        <a href="javascript:void(0)" class="btn btn-danger remove"><span class="glyphicon glyphicon glyphicon-remove" aria-hidden="true"></span> Remove</a>
    </div>
    <div class="col-sm-12 ">
        <div class="form-group">
            <h4>Section Content</h4>
            <textarea name="sectionContent[]"></textarea>
        </div>
    </div>
</div>
@endsection
 
@section('styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/image-picker/0.3.0/image-picker.min.css">
<style>
    #fieldGroupTemplate {
        display: none;
    }
</style>


@stop 
@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/ckeditor/4.11.3/ckeditor.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ckeditor/4.11.3/adapters/jquery.js">

</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/image-picker/0.3.0/image-picker.min.js"></script>
<script>
    $(function() {
            //section add limit
            var maxGroup = 10;
            var count = 0;

            // initialize all current editor(s)
            $('.editor').ckeditor();

            //add more section
            $(".addMore").click(function() {


            // define the number of existing sections
            var numGroups = $('.fieldGroup').length;

            // check whether the count is less than the maximum
            if (numGroups < maxGroup) {

                // create new section from template
                var $fieldHTML = $('<div>', {
                'class': 'row fieldGroup',
                'html': $("#fieldGroupTemplate").html()
                });

                // insert new group after last one
                $('.fieldGroup:last').after($fieldHTML);

                // instantiate ckeditor on new textarea
                $fieldHTML.find('textarea').ckeditor();

            } else {
                alert('Maximum ' + maxGroup + ' sections are allowed.');
            }

            });

            //remove fields 
            $("body").on("click", ".remove", function() {
            $(this).parents(".fieldGroup").remove();
            });

            $("#image-picker").imagepicker();

});

</script>



@stop