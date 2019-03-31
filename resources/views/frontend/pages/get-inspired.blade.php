@extends('layouts.frontend') 
@section('content')
<section class="image-page-header">
    <div class="image-wrapper" data-src="{{$page->banner}}" uk-img>
        <h1 class="image-header-text">{{$page->content{0}->sectionTitle}}</h1>
    </div>
</section>
<section class="uk-section uk-section-muted">
    <div class="uk-container">
        <div uk-grid>
            <div class="uk-width-1-1">
                <div class="section-title">
                    {!!$page->content{0}->sectionContent!!}
                    <span class="divide-line"></span>
                </div>
            </div>
        </div>

        @foreach($categories->chunk(4) as $row)
        <div class="uk-grid-large uk-child-width-1-4@l uk-child-width-1-2@s uk-text-center product-category" uk-grid>
            @foreach($row as $category)
            <div class="product-category__item">
                <a href="{{ route('frontend.category',$category->slug ) }}">
                    <img src="{{$category->thumb}}" alt="{{$category->slug}}" class="product-category__item--img">
                    <h4 class="product-category__item--name"><a href="{{ route('frontend.category',$category->slug ) }}">{{$category->name}}</a></h4>
                </a>
            </div>
            @endforeach
        </div>
        @endforeach 
    </div>
</section>
@stop