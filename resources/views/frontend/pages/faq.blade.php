@section('title') | Frequently Asked Question @endsection
@extends('layouts.frontend') 
@section('content')
<section class="image-page-header">
    <div class="image-wrapper uk-light" data-src="{{asset('img/faq.jpg')}}" uk-img>
        <h1 class="image-header-text">Frequently Asked Question</h1>
    </div>
</section>
<section class="uk-section uk-section-default">
    <div uk-grid>
        <div class="uk-width-1-5"></div>
        <div class="uk-width-3-5">
            <div class="uk-container">
                <ul class="uk-list uk-list-divider" uk-accordion="multiple: true">
                    @foreach ($faqs as $faq)
                    <li class="{{$loop->first ?'uk-open':''}}">
                        <a class="uk-accordion-title" href="#">{{$faq->query}}</a>
                        <div class="uk-accordion-content uk-padding-small">
                            <p>{{$faq->answer}}</p>
                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="uk-width-1-5"></div>
    </div>
</section>
@stop