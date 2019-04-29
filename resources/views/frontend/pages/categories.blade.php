@section('title') | {!!$category->name!!}
@endsection
 
@extends('layouts.frontend') 
@section('content')
<section class="mbr-section content5 cid-roVpHHpR3O mbr-parallax-background" style="background-image: url({{asset($category->path)}});"
    id="content5-p">
    <div class="container">
        <div class="media-container-row">
            <div class="title col-12 col-md-8">
                <h2 class="align-center mbr-bold mbr-white pb-3 mbr-fonts-style display-2">
                    <span style="font-weight: normal;">
                        {{$category->name}}
                    </span>
                </h2>
            </div>
        </div>
    </div>
</section>

<section class="mbr-section article content9 cid-roVq2A3Ut7" id="content9-r">
    <div class="container">
        <div class="inner-container" style="width: 100%;">
            <hr class="line" style="width: 25%;">
            <div class="section-text align-center mbr-fonts-style display-5">
                {!!$category->description!!}
            </div>
            <hr class="line" style="width: 25%;">
        </div>
    </div>
</section>

<section class="features2 cid-roVqlU1XGm" id="features2-s">
    @foreach($products->chunk(4) as $row)
    <div class="media-container-row">
        @foreach($row as $product)
        <div class="card p-3 col-12 col-md-6 col-lg-3">
            <div class="card-wrapper">
                <div class="card-img">
                    <a href="{{ route('frontend.product', [$product->category->slug,$product->slug]) }}">
                                <img src="{{$category->thumb}}" alt="{{$category->name}}">
                            </a>
                </div>
                <div class="card-box">
                    <h4 class="card-title pb-3 mbr-fonts-style display-7">
                        <a href="{{ route('frontend.product', [$product->category->slug,$product->slug]) }}" class="text-black">{{$product->name}}</a>
                    </h4>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    @endforeach
</section>


@stop