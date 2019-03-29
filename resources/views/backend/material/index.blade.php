@extends('layouts.backend') 
@section('content')
<div class="row">
    <div class="col-lg-8">
        <div class="table-responsive">
            <table id="datatable1" class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($materials as $material)
                    <tr class="item{{$material->id}}">
                        <td>
                            <h4>{{$loop->iteration}}</h4>
                        </td>
                        <td>
                            <h4>{{$material->name}}</h4>
                        </td>
                        <td>
                            <a href="{{ route('material.edit',$material->id) }}" class="btn ink-reaction btn-floating-action btn-sm btn-info ">
                                <i class="fas fa-pencil-alt" aria-hidden="true" style="line-height: 36px;"></i>
                            </a>

                            <button type="button" class="btn ink-reaction btn-floating-action btn-sm  btn-danger" data-id="{{$material->id}}" data-toggle="modal"
                                data-target="#deleteModal" id="delete-modal">
                                <i class="fas fa-trash-alt" aria-hidden="true"></i>
                            </button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!--end .table-responsive -->
    </div>
    <!--end .col -->
    <div class="col-lg-4">
        <form action="{{ route('material.store') }}" method="POST">
            {{ csrf_field() }}
            <div class="card">
                <div class="card-head style-primary">
                    <header>Create new material</header>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <input type="text" class="form-control" id="name" name="name">
                                <label for="name">Name</label> @if ($errors->has('name'))
                                <span class="help-block">{{$errors->first('name')}}</span> @endif
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
    </div>
    </form>
</div>
</div>
<!--end .row -->
<!-- BEGIN Delete MODAL MARKUP -->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="formModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="formModalLabel">Delete</h4>
            </div>
            <form class="form-horizontal" role="form">
                <div class="modal-body text-center">
                    <input type="hidden" id="id-delete">
                    <h4>Are you sure you want to delete ?</h4>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary delete">Delete</button>
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
<!-- END Delete MODAL MARKUP -->



@stop 
@section('scripts')
<script>
    $(document).ready(function () {
            //delete
            $(document).on('click', '#delete-modal', function () {
                $('#id-delete').val($(this).data('id'));
                var id = $('#id-delete').val();
                console.log(id);
            });

            $('.modal-footer').on('click', '.delete', function () {
                var id = $('#id-delete').val();
                $.ajax({
                    type: 'DELETE',
                    url: '/manage/material/' + id,
                    data: {
                        '_token': $('meta[name="csrf-token"]').attr('content'),
                        'id': $("#id-delete").val()
                    },
                    success: function (data) {
                        $('#deleteModal').modal('hide');
                        toastr.success('Page deleted sucessfully!', 'Success Alert');
                        $('.item' + data['id']).remove();
                    }

                });
            });

        });

</script>



@stop