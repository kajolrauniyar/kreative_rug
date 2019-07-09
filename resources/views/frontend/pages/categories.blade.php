@section('title') | {!!$category->name!!} @endsection
@extends('layouts.frontend') 
@section('content')
<section class="image-page-header" data-src="{{asset($category->path)}}" uk-img>
        <div class="page-title__wrapper">
            <h1 class="uk-position-large uk-position-center-right">{{$category->name}}</h1>
        </div>
</section>

<section class="uk-section uk-section-muted">
    <div class="uk-container">
        <div uk-grid>
            <div class="uk-width-1-1">
                <div class="section-title-regular">
                    <p>{!!$category->description!!}</p>
                    <span class="divide-line"></span>
                </div>
            </div>
        </div>

        <div class="uk-grid-large uk-child-width-1-2@l uk-child-width-1-2@s uk-text-center product-category uk-grid-match" uk-grid>
            @foreach($products as $product)
            <div class="product-category__item">
                <a href="{{ route('frontend.product', [$product->category->slug,$product->slug]) }}">
                    <img src="{{$product->thumb}}" alt="{{$product->slug}}" class="product-category__item--img">
                </a>
                <h4 class="product-category__item--name">
                    <a href="{{ route('frontend.product', [$product->category->slug,$product->slug]) }}">
                    {{$product->name}}
                    </a>
                </h4>
            </div>
            @endforeach
        </div>
    </div>
</section>






@stop