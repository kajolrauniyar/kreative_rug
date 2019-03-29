@extends('layouts.backend')
@section('content')
<section class="style-default">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-head style-primary">
                    <header>Add new announcement</header>
                </div>
                <div class="card-body floating-label">
                    {!! Form::open( ['route'=> 'announcement.store', 'method' =>'POST', 'class'=>'form form-validate'] ) !!}
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group floating-label {{$errors->has('heading') ? 'has-error' : ''}}">
                                <input type="text" class="form-control"
                                id="heading {{$errors->has('heading') ? 'inputError' : ''}}" name="heading"
                                value="{{ old('heading') }}" required>
                                @if($errors->has('heading'))
                                <span class="help-block">{{ $errors->first('heading') }}</span>
                                @endif
                                {{ Form::label('heading', 'Heading ') }}
                            </div>
                        </div>                        
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group floating-label {{$errors->has('subheading') ? 'has-error' : ''}}">
                                <input type="text" class="form-control"
                                id="subheading {{$errors->has('subheading') ? 'inputError' : ''}}" name="subheading"
                                value="{{ old('subheading') }}" required>
                                @if($errors->has('subheading'))
                                <span class="help-block">{{ $errors->first('subheading') }}</span>
                                @endif
                                {{ Form::label('subheading', 'Sub Heading ') }}
                            </div>
                        </div>                        
                    </div>
                    <div class="row">
                        <div class="col-sm-10 col-sm-offset-1">
                            <button type="submit" class="btn btn-block btn-success ink-reaction">Save</button>
                        </div>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="col-lg-12">
                <div class="panel-group" id="accordion1">
                    @foreach($announcements as $announcement)
                    <div class="card panel">
                        <div class="card-head card-head-sm collapsed" data-toggle="collapse" data-parent="#accordion1"
                        data-target="#accordion1-{{ $loop->iteration }}" aria-expanded="false">
                        <header> {{ $announcement->heading }}</header>
                        <div class="tools">
                            <a class="btn btn-icon-toggle"><i class="fa fa-angle-down"></i></a>
                        </div>
                    </div>
                    <div id="accordion1-{{ $loop->iteration }}" class="collapse" aria-expanded="false"
                       style="height: 0px;">
                       <div class="card-body">
                        {{ $announcement->subheading }}
                    </div>
                    <div class="card-actionbar">
                        <div class="card-actionbar-row">
                            <button class="btn btn-flat btn-info ink-reaction edit-modal"
                            data-toggle="modal"
                            data-target="#formModal"
                            data-id="{{$announcement->id}}"
                            data-heading="{{$announcement->heading}}"
                            data-subheading="{{$announcement->subheading}}">Edit
                        </button>

                        <form method="POST" action="{{ route('announcement.destroy', $announcement->id) }}" class="pull-right itinerary-destroy">
                           @csrf
                           {{ method_field('DELETE') }}
                           <button type="submit" class="btn btn-flat btn-danger ink-reaction">
                            Delete
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div><!--end .panel -->
    @endforeach
</div>
</div>
</div><!--end .panel -->
</div>
</div>
</div>
</div>
<!-- BEGIN FORM MODAL MARKUP -->
<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="formModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="formModalLabel">Edit</h4>
            </div>
            <form class="form" role="form">
                <div class="modal-body">
                    <input type="hidden" id="id-edit" >
                    {{ Form::label('heading-edit','Title:') }}
                    {{ Form::text('heading-edit',null,['class'=>'form-control' , 'id'=>'heading-edit']) }}
                    {{ Form::label('subheading-edit','Subheading:') }}
                    {{ Form::text('subheading-edit',null,['class'=>'form-control' , 'id'=>'subheading-edit']) }}
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success update">Update</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                </div>
            </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- END FORM MODAL MARKUP -->
</section>
@endsection
@section('scripts')
<script src="{{ asset('assets/backend/js/core/demo/DemoFormComponents.js') }}"></script>
<script src="{{ asset('assets/backend/js/libs/ckeditor/ckeditor.js') }}"></script>
<script src="{{ asset('assets/backend/js/libs/ckeditor/adapters/jquery.js') }}"></script>
<script src="{{ asset('assets/backend/js/core/demo/DemoFormEditors.js') }}"></script>
<script>
    $(document).ready(function() {
        $(document).on('click', '.edit-modal', function() {
            $('.modal-title').text('Edit');
            $('#id-edit').val($(this).data('id'));
            $('#heading-edit').val($(this).data('heading'));
            $('#subheading-edit').val($(this).data('subheading'));
        });

        $('.modal-footer').on('click', '.update', function() {
            var id = $('#id-edit').val();
            $.ajax({
                type: 'PUT',
                url: '/manage/announcement/'+id,
                data: {
                    '_token': $('meta[name="csrf-token"]').attr('content'),
                    'id': $("#id-edit").val(),
                    'heading': $("#heading-edit").val(),
                    'subheading': $('#subheading-edit').val()
                },
                success: function(data){
                    $('#formModal').modal('hide');
                    toastr.success('Item update success!', 'Info Alert');
                    location.reload();
                }

            });
        });

    });
</script>
@stop