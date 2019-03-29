@extends('layouts.backend') 
@section('content')
<div class="row">
  <div class="col-md-10"></div>
  <div class="col-md-2">
    <a href="{{ route('product.create') }}" class="btn ink-reaction btn-raised btn-lg btn-primary btn-block">Create</a>
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
              <th class="sort-alpha">Product name</th>
              <th class="sort-alpha">Category</th>
              <th data-orderable="false">Image</th>
              <th data-orderable="false">Meta Title</th>
              <th data-orderable="false">Meta Description</th>
              <th class="sort-alpha">Status</th>
              <th data-orderable="false">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach($products as $product)
            <tr>
              <th><a href="{{ route('product.show', $product->id) }}">{{$product->name}}</a></th>
              <th>{{$product->category->name}}</th>
              <th>
                @if($product->path && $product->thumb)
                <i class="fas fa-check text-success"></i> @else
                <i class="fas fa-times text-danger"></i> @endif
              </th>
              <th>
                @if($product->mtitle)
                <i class="fas fa-check text-success"></i> @else
                <i class="fas fa-times text-danger"></i> @endif
              </th>
              <th>
                @if($product->description)
                <i class="fas fa-check text-success"></i> @else
                <i class="fas fa-times text-danger"></i> @endif
              </th>
              <th>
                @if($product->status)
                <span class="label label-success">Published</span> @else
                <span class="label label-warning">Unpublished</span> @endif
              </th>
              <th class="action-column">
                <a href="{{ route('product.edit',$product->id)}}" class="btn btn-block btn-sm ink-reaction btn-info">
                 <i class="fas fa-pencil-alt" aria-hidden="true"></i> Edit
               </a> 
               
              @if(!$product->status)
                <a href="{{ route('product.publish',$product->id)}}" class="btn btn-block btn-sm ink-reaction btn-success">
                  <i class="fa fa-print" aria-hidden="true"></i> Publish
                </a> 
                @else
                <a href="{{ route('product.unpublish',$product->id)}}" class="btn btn-block btn-sm ink-reaction btn-warning">
                  <i class="fa fa-print" aria-hidden="true"></i> Unpublish
                </a> 
              @endif 
             
             @if(!$product->featured )
                <a href="{{ route('feature.product',$product->id)}}" class="btn btn-block btn-sm ink-reaction btn-accent">
                 <i class="fa fa-star" aria-hidden="true"></i> Set as Featured
               </a> 
             @else
                <a href="{{ route('remove.feature',$product->id)}}" class="btn btn-block btn-sm ink-reaction btn-warning">
                  <i class="fa fa-star" aria-hidden="true"></i> Remove as Featured
                </a> 
             @endif 
                <form action="{{route('product.destroy', $product->id)}}" method="POST">
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
      </div>
      <!--end .table-responsive -->
    </div>
    <!--end .col -->
  </div>
  <!--end .row -->
</section>
@endsection
 
@section('styles')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap.min.css">
<style>
  .action-column .btn {
    margin-top: 8px !important;
  }
</style>

@stop 
@section('scripts')
<script src="{{ asset('assets/js/core/demo/DemoTableDynamic.js') }}"></script>
<script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap.min.js"></script>

@stop