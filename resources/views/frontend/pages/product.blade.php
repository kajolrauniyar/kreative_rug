@section('title') | {!!$product->name!!}
@endsection
@section('description'){!! $product->description !!}@stop
@section('ogImage'){{ asset($product->thumb) }}@stop
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
        <div class="uk-grid-small uk-padding-small uk-grid-medium" uk-grid>
            <div class="uk-width-2-3@m uk-width-1-1@s  zoom-image">
                @if(!empty($product->path))
                <img src="{{ asset($product->path) }}" alt="{{$product->name}}" style="    max-height: 933px; max-width: 700px;">    
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

                    <div class="uk-width-1-1 uk-margin-medium-bottom">
                    <a class="uk-button uk-button-secondary" href="{{ route('frontend.contact') }}">Make Enquiry</a>
                    </div>

                    <div class="uk-width-1-1">
                        <h4 class="uk-margin-remove-bottom">Share</h4>
                        <div class="product__share">
                            <a href="#" class="product__share--link"><span uk-icon="facebook"></span></a>
                            <a href="#" class="product__share--link"><span uk-icon="twitter"></span></a>
                        </div>
                    
                </div>
            </div>
        </div>
    </div>
</section>

@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-zoom/1.7.18/jquery.zoom.min.js"></script>
<script>
$(function() {
  $('.zoom-image').each(function(){
    var originalImagePath = $(this).find('img').data('original-image');
    $(this).zoom({
      url: originalImagePath,
      magnify: 1
    });
  });
}); 
</script>
@stop

































@stop