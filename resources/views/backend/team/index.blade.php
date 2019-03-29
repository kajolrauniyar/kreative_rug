@extends('layouts.backend')
@section('styles')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap.min.css">
@stop
@section('content')
<div class="row">
    <div class="col-md-10"></div>
    <div class="col-md-2">
        <a href="{{ route('team.create') }}" class="btn ink-reaction btn-raised btn-lg btn-primary btn-block">Create</a>
    </div>
    <hr>
</div>
<section class="style-default-bright">
    <div class="row">
        <div class="col-lg-12">
            <div class="table-responsive">
                <table id="datatable1" class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th class="sort-alpha">Name</th>
                            <th data-orderable="false">Position</th>
                            <th data-orderable="false">Description</th>
                            <th class="sort-alpha">Avatar</th>
                            <th data-orderable="false">Action</th>
                        </tr>
                    </thead>
                    <tbody class="sortable">
                        @foreach($teams as $team)
                        <tr id="{{$team->id}}">
                            <th><a href="{{ route('team.show',$team->id) }}">{{$team->name}}</a></th>

                            <th>{{ $team->position }}</th>


                            <th>
                                @if($team->description !=='')
                                <i class="fas fa-check text-success"></i>
                                @else
                                <i class="fas fa-times text-success"></i>
                                @endif
                            </th>

                            <th>
                                @if($team->avatar !=='')
                                <i class="fas fa-check text-success"></i>
                                @else
                                <i class="fas fa-times text-success"></i>
                                @endif
                            </th>
                            
                            <th>
                                <a href="{{ route('team.edit',$team->id)}}" class="btn btn-block btn-sm ink-reaction btn-info">
                                    <i class="fa fa-pencil" aria-hidden="true"></i> Edit
                                </a>
                                <form action="{{ route('team.destroy',$team->id) }}" method="POST">
                                    @method('DELETE')
                                <button type="submit" class="btn btn-block btn-sm ink-reaction btn-danger form-delete">
                                    <i class="fa fa-trash-o" aria-hidden="true"></i> Delete
                                </button>
                                </form>
                            </th>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div><!--end .table-responsive -->
        </div><!--end .col -->
    </div><!--end .row -->
</section>
@endsection
@section('scripts')
<script src="{{ asset('assets/js/core/demo/DemoTableDynamic.js') }}"></script>
<script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script>
    $( ".sortable" ).sortable({
        stop:function(){
            $.map($(this).find('tr'), function(el){
                var itemID = el.id;
                var itemIndex = $(el).index();

                $.ajax({
                    headers: {
                        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
                    },
                    url:"/manage/updateOrder",
                    type:'POST',
                    dataType:'json',
                    data: { 
                        itemID: itemID,
                        itemIndex: itemIndex
                     },
                    success:function(){
                        location.reload();
                    }
                })
            });
        }
    });

</script>
@stop