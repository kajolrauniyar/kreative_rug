@section('title') | {!!$product->name!!}
@endsection
 
@extends('layouts.frontend') 
@section('content')
<section class="uk-section uk-section-muted">

    <div class="uk-container uk-background-default uk-padding">
        <div class="breadcrumb-wrapper">
            <ul class="breadcrumb-wrapper__breadcrumb">
                <li class="breadcrumb-wrapper__breadcrumb--item"><a href="{{ route('frontend.category',$product->category->slug) }}">
                {{$product->category->name}}</a>
                </li>
                <li class="breadcrumb-wrapper__breadcrumb--active"><a>{{$product->name}}</a></li>
            </ul>
        </div>
        <div class="uk-grid-small uk-padding-small" uk-grid>
            <div class="uk-width-2-3@m uk-width-1-1@s">
                @if(!empty($product->path))
                <img src="{{ asset($product->path) }}" alt="{{$product->name}}">    
                @else
                <img src="https://source.unsplash.com/480x640/?object" alt="alt="{{$product->name}}"">
                @endif
            </div>
            <div class="uk-width-1-3@m uk-width-1-1@s">
                <div class="uk-text-left">
                    <h3>{{$product->name}}</h3>
                </div>
                {!!$product->description!!} 
                @if (!empty($product->size))
                <p>Shown in: {{$product->size}}</p>
                @endif
                <p>Material: @foreach ($product->material as $material) {{ $loop->first ? '' : ', ' }} {{ $material->name
                    }} @endforeach
                </p>
                <div uk-grid>
                    <div class="uk-width-1-1">
                        <h4 class="uk-margin-remove-bottom">Share</h4>
                        <div class="product__share">
                            <a href="#" class="product__share--link"><span uk-icon="facebook"></span></a>
                            <a href="#" class="product__share--link"><span uk-icon="twitter"></span></a>
                        </div>
                    </div>
                    <div class="uk-width-1-1">
                    <a class="uk-button uk-button-secondary" href="{{ route('frontend.contact') }}">Make Enquiry</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



































@stop