@extends('layouts.backend') 
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card card-tiles style-default-light">
            <!-- BEGIN BLOG POST HEADER -->
            <div class="row">
                <div class="col-sm-9">
                    <div class="card-body style-default-dark">
                        <h2>{{ $product->name}}</h2>
                        <div class="text-default-light">
                            Status: @if($product->status == 0) Unpublished @else Published @endif
                        </div>
                    </div>
                </div>
                <!--end .col -->
                <div class="col-sm-3">
                    <div class="card-body">
                        <div class="">
                            <a href="{{ route('product.index') }}" class="btn btn-block ink-reaction btn-success">Save</a>
                            <a href="{{ route('product.edit',$product->id) }}" class="btn btn-block ink-reaction btn-info">Edit</a>
                        </div>
                    </div>
                </div>
                <!--end .col -->
            </div>
            <!--end .row -->
            <!-- END BLOG POST HEADER -->
        </div>
        <!--end .card -->
    </div>
    <!--end .col -->
</div>
<!--end .row -->
<div class="row">
    <div class="col-lg-12">
        <div class="card card-tiles">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-7">
                        <h4>Description</h4>
                        <p>{!!$product->description!!}</p>

                        <h4>Category:</h4>
                        <p>{{$product->category->name}}</p>

                        @if(!empty($product->size))
                        <h4>Size:</h4>
                        <p>{{$product->size}}</p>
                        @endif

                        <h4>Material:</h4>
                        @foreach ($product->material as $material) {{ $loop->first ? '' : ', ' }} {{ $material->name }} @endforeach @if(!empty($product->note))
                        <h4>Note:</h4>
                        <p>{!!$product->note!!}</p>
                        @endif

                        <h4>Meta Title</h4>
                        <p>{!!$product->mtitle!!}</p>

                        <h4>Meta Description</h4>
                        <p>{!!$product->meta_description!!}</p>

                    </div>
                    <div class="col-lg-5">
                        <img src="{{asset($product->path) }}" alt="" class="img-responsive">
                    </div>

                </div>

            </div>
        </div>
    </div>
</div>


@stop