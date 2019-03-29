@extends('layouts.backend')
@section('content')
<div class="row">
    <div class="col-sm-8">
        <p class="text-xxl">Media Images</p>
    </div>
    <div class="col-sm-4">
        <p><a href="{{ route('media.create') }}" class="btn btn-block ink-reaction btn-primary"><i class="fas fa-plus"></i> Add Images</a></p>
    </div>
</div>
{{-- <div class="row">
    <div class="col-sm-3 text-center">
        <h4>{{ $images }} Images</h4>
    </div>
    <div class="col-sm-3 text-center">
        <h4>{{ $images }} Thumbnails</h4>
    </div>
    <div class="col-sm-3 text-center">
        <h4>{{ $images - $medias->count() }} Unwanted Image Files</h4>
    </div>
    <div class="col-sm-3 text-center">
        <a href="{{ route('media.clearUnwanted',1) }}" class="btn btn-block ink-reaction btn-warning"> <i class="far fa-trash-alt"></i> Delete</a>
    </div>
</div> --}}
@foreach (array_chunk($medias->all(), 4) as $images)
<div class="row">
    @foreach($images as $media)
    <div class="col-sm-3 col-md-3 item{{$media->id}}">
        <div class="thumbnail">
            <img src="{{asset($media->thumb)}}" alt="" class="img-responsive">
            <div class="caption">
                @if(!empty($media->name))
                <h4>{{$media->name}}</h4>
                @else
                <h4><span class="text-danger">No alt name given</span></h4>
                @endif
                <p>
                    <button  type="button" class="btn btn-info" data-id="{{$media->id}}" data-name="{{$media->name}}" data-toggle="modal"
                       data-target="#editModal" id="edit-modal"><i class="fa fa-pencil-square-o"></i> Edit</button>
                       <button type="button" class="btn btn-danger" id="delete-modal" data-id="{{$media->id}}"   data-toggle="modal"
                        data-target="#myModal"><i
                        class="fa fa-trash-o"></i> Delete</button>
                    </p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    @endforeach

    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Edit </h4>
                </div>
                <div class="modal-body text-center">
                    <input type="hidden" id="id-edit">
                    <div class="row">
                        <div class="form-group">
                            <label for="name-edit" class="col-sm-2">Name</label>
                            <input type="text" class=" col-sm-8" id="name-edit" >
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-success save">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    {{--delete modal--}}
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"
                    aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text-center">
                Are you sure you want delete ?
                <input type="hidden" id="id-delete">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-warning delete">Delete
                </button>
                <button type="button" class="btn btn-default" data-dismiss="modal">
                    Close
                </button>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
<script>
    $(document).ready(function () {
            //edit
            $(document).on('click', '#edit-modal', function () {
                $('#id-edit').val($(this).data('id'));
                $('#name-edit').val($(this).data('name'));
                $('#header-edit').val($(this).data('header'));
                $('#subheader-edit').val($(this).data('subheader'));
            });

            $('.modal-footer').on('click', '.save', function () {
                var id = $('#id-edit').val();
                $.ajax({
                    type: 'PUT',
                    url: '/manage/media/' + id,
                    data: {
                        '_token': $('meta[name="csrf-token"]').attr('content'),
                        'id': $("#id-edit").val(),
                        'name': $('#name-edit').val()
                    },
                    success: function (data) {
                        $('#myModal').modal('hide');
                        toastr.success('Item update success!', 'Info Alert');
                        location.reload();
                    }

                });
            });
            //delete
            $(document).on('click', '#delete-modal', function () {
                $('#id-delete').val($(this).data('id'));
            });

            $('.modal-footer').on('click', '.delete', function () {
                var id = $('#id-delete').val();
                console.log(id);
                $.ajax({
                    type: 'DELETE',
                    url: '/manage/media/' + id,
                    data: {
                        '_token': $('meta[name="csrf-token"]').attr('content'),
                        'id': $("#id-delete").val()
                    },
                    success: function (data) {
                        $('#myModal').modal('hide');
                        toastr.success('Item deleted sucessfully!', 'Success Alert');
                        $('.item' + data['id']).remove();
                    }

                });
            });

        });
    </script>
    @stop
