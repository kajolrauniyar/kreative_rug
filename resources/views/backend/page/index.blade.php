@extends('layouts.backend')
@section('styles')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap.min.css">
<style>
.form-delete {
    margin-top: 8px !important;
}
</style>
@stop
@section('content')
<div class="row">
    <div class="col-md-10"></div>
    <div class="col-md-2">
        <a href="{{ route('page.create') }}" class="btn ink-reaction btn-raised btn-lg btn-primary btn-block">Create</a>
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
                            <th class="sort-alpha">Title</th>
                            <th data-orderable="false">Banner</th>
                            <th data-orderable="false">Meta Title</th>
                            <th data-orderable="false">Meta Description</th>
                            <th class="sort-alpha">Status</th>
                            <th data-orderable="false">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($pages as $page)
                        <tr>
                            <th><a href="{{ route('page.show',$page->id) }}">{{$page->title}}</a></th>

                            <th>
                                @if($page->banner !=='')
                                <i class="fas fa-check text-success"></i>
                                @else
                                <i class="fas fa-times text-success"></i>
                                @endif
                            </th>

                            <th>
                                @if($page->meta_title !=='')
                                <i class="fas fa-check text-success"></i>
                                @else
                                <i class="fas fa-times text-success"></i>
                                @endif
                            </th>

                            <th>
                                @if($page->description !=='')
                                <i class="fas fa-check text-success"></i>
                                @else
                                <i class="fas fa-times text-success"></i>
                                @endif
                            </th>

                            <th>
                                @if($page->status)
                                <span class="label label-success">Published</span>
                                @else
                                <span class="label label-warning">Unpublished</span>
                                @endif
                            </th>
                            
                            <th>
                                <a href="{{ route('page.edit',$page->id)}}" class="btn btn-block btn-sm ink-reaction btn-info">
                                    <i class="fa fa-pencil" aria-hidden="true"></i> Edit
                                </a>
                                @if($page->status)
                                <a href="{{ route('page.unpublish',$page->id)}}" class="btn btn-block btn-sm ink-reaction btn-warning">
                                        <i class="fa fa-print" aria-hidden="true"></i> Unpublish
                                </a>
                                @else
                                <a href="{{ route('page.publish',$page->id)}}" class="btn btn-block btn-sm ink-reaction btn-success">
                                        <i class="fa fa-print" aria-hidden="true"></i> Publish
                                </a>
                                @endif
                                <form action="{{route('page.destroy', $page->id)}}" method="POST">
                                        @csrf {{method_field('DELETE')}}
                                        <button type="submit" class="btn btn-block btn-sm ink-reaction btn-danger form-delete">
                                    <i class="fas fa-trash-alt" aria-hidden="true"></i> Delete
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
<script src="{{ asset('assets/backend/js/core/demo/DemoTableDynamic.js') }}"></script>
<script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap.min.js"></script>
@stop