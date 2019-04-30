@section('title') | Frequently Asked Question @endsection
@extends('layouts.frontend') 
@section('content')
@include('frontend.partials._page-header')
@if ( isset($page->content{0}->sectionContent))
<section class="uk-section-default uk-padding-small-top uk-padding-small-bottom">
    <div class="uk-container uk-padding uk-padding-remove-horizontal">
        <div uk-grid>
            <div class="uk-width-1-1">
                <div class="section-title">
                    <h3 class="heading-tertiary">{!!$page->content{0}->sectionTitle!!}</h3>
                    <span class="divide-line"></span>
                </div>
            </div>
            <div class="uk-width-1-5 uk-margin-remove-top"></div>
            <div class="uk-width-3-5 uk-margin-remove-top">
                <p class="uk-text-center">
                    {!!$page->content{0}->sectionContent!!}
                </p>
            </div>
            <div class="uk-width-1-5 uk-margin-remove-top"></div>
        </div>
    </div>
</section>
@endif
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