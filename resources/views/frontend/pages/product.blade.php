@section('title') | {!!$product->name!!} @endsection
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
            <div class="uk-width-1-2@l uk-width-1-1@s">
                <img src="{{ asset('img/product.jpg') }}" alt="">
            </div>
            <div class="uk-width-1-2@l uk-width-1-1@s">
                <div class="uk-text-left">
                    <h3>{{$product->name}}</h3>
                </div>
                <ul class="uk-child-width-expand" uk-switcher="animation: uk-animation-fade" uk-tab>
                    <li class="uk-active"><a href="#">Descriptioin</a></li>
                    <li><a href="#">Additional Information</a></li>
                    <li><a href="#">Similar Product</a></li>
                </ul>

                <ul class="uk-switcher uk-margin">
                    <li>
                        {!!$product->description!!}
                        <div uk-grid>
                            <div class="uk-width-1-3">
                                <h4 class="uk-margin-remove-bottom">Share</h4>
                                <div class="product__share">
                                    <a href="#" class="product__share--link"><span uk-icon="facebook"></span></a>
                                    <a href="#" class="product__share--link"><span uk-icon="twitter"></span></a>
                                    <a href="#" class="product__share--link"><span uk-icon="instagram"></span></a>
                                </div>
                            </div>
                            <div class="uk-width-1-3">
                                <button class="uk-button uk-button-secondary" type="button" uk-toggle="target: #make-enquiry">Make Enquiry</button>

                                <!-- This is the modal -->
                                <div id="make-enquiry" uk-modal>
                                    <div class="uk-modal-dialog uk-modal-body">
                                        <h2 class="uk-modal-title">Make an enquiry</h2>
                                        <form class="uk-form-stacked">
                                            <div class="uk-margin">
                                                <label class="uk-form-label" for="name">Name</label>
                                                <div class="uk-form-controls">
                                                    <input class="uk-input" id="name" type="text" id="name" placeholder="Jane Doe">
                                                </div>
                                            </div>
                                            <div class="uk-margin">
                                                <label class="uk-form-label" for="email">Email</label>
                                                <div class="uk-form-controls">
                                                    <input class="uk-input" id="email" type="email" name="email" placeholder="jane.do@example.com">
                                                </div>
                                            </div>
                                            <div class="uk-margin">
                                                <label class="uk-form-label" for="message">Email</label>
                                                <div class="uk-form-controls">
                                                    <textarea name="messageContent" id="message" cols="30" rows="5" class="uk-textarea" style="resize:none" placeholder="Your message Here"></textarea>
                                                </div>
                                            </div>

                                        </form>
                                        <p class="uk-text-center">
                                            <button class="uk-button uk-button-secondary" type="button" >Send</button>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </li>
                    <li>
                        @if (!empty($product->size))
                            <p>Shown in: {{$product->size}}</p>
                        @endif                        
                        <p>Material: 							
                            @foreach ($product->material as $material)
                                {{ $loop->first ? '' : ', ' }}
                                {{ $material->name }}
                            @endforeach		
                        </p>
                        @if (!empty($product->note))
                        <p>{{$product->note}}</p>
                        @endif
                    </li>
                    <li>
                        <div uk-grid>
                            @foreach ($similars as $similar)
                                @if ($similar->id != $product->id)
                                <div class="uk-width-1-3">
                                    <img src="{{ asset($similar->thumb) }}" alt=""> 
                                </div>
                                @endif
                            @endforeach                            
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>


































@stop