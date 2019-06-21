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
                <div class="section-title">
                    <p>{!!$category->description!!}</p>
                    <span class="divide-line"></span>
                </div>
            </div>
        </div>

        {{-- @foreach($products->chunk(4) as $row) --}}
        <div class="uk-grid-large uk-child-width-1-2@l uk-child-width-1-2@s uk-text-center product-category" uk-grid>
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
        {{-- @endforeach  --}}
        {{--
        <div class="uk-grid-large uk-child-width-1-4@l uk-child-width-1-2@s uk-text-center product-category" uk-grid>
            <div class="product-category__item">
                <img src="https://source.unsplash.com/300x450/?daisy" alt="" class="product-category__item--img">
                <h4 class="product-category__item--name">Category Name</h4>
            </div>
            <div class="product-category__item">
                <img src="https://source.unsplash.com/300x450/?sunflower" alt="" class="product-category__item--img">
                <h4 class="product-category__item--name">Category Name</h4>
            </div>
            <div class="product-category__item">
                <img src="https://source.unsplash.com/300x450/?dafodils" alt="" class="product-category__item--img">
                <h4 class="product-category__item--name">Category Name</h4>
            </div>

            <div class="product-category__item">
                <img src="https://source.unsplash.com/300x450/?orchid" alt="" class="product-category__item--img">
                <h4 class="product-category__item--name">Category Name</h4>
            </div>
        </div>

        <div class="uk-grid-large uk-child-width-1-4@l uk-child-width-1-2@s uk-text-center" uk-grid>
            <div class="product-category__item">
                <img src="https://source.unsplash.com/300x450/?daisy" alt="" class="product-category__item--img">
                <h4 class="product-category__item--name">Category Name</h4>
            </div>
            <div class="product-category__item">
                <img src="https://source.unsplash.com/300x450/?sunflower" alt="" class="product-category__item--img">
                <h4 class="product-category__item--name">Category Name</h4>
            </div>
            <div class="product-category__item">
                <img src="https://source.unsplash.com/300x450/?dafodils" alt="" class="product-category__item--img">
                <h4 class="product-category__item--name">Category Name</h4>
            </div>

            <div class="product-category__item">
                <img src="https://source.unsplash.com/300x450/?orchid" alt="" class="product-category__item--img">
                <h4 class="product-category__item--name">Category Name</h4>
            </div>
        </div> --}}
    </div>
</section>






@stop