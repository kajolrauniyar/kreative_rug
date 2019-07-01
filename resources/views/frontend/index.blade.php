@extends('layouts.frontend')
@section('content')
<header class="header" data-src="{{asset($home->banner)}}" uk-img>
    <div class="header--text uk-position-center-right " >
        <h1 class="header--text__heading" >
            {{$home->heading}}
        </h1>
        <h2 class="header--text__subheading" >{{$home->subheading}}</h2>
    </div>
</header>
<main>
    <section class="section-dark">
        <div class="section-intro">
            <div class="section-title">
                <h2 class="heading-secondary--white">{{$home->section1_title}}</h2>
                <span class="divide-line--white"></span>
            </div>
            <div uk-grid>
                <div class="uk-width-1-1 uk-padding-large uk-padding-remove-vertical">
                    <p class="uk-text-center">
                        {{$home->section1_content}}
                    </p>
                </div>
            </div>
            <div class="uk-grid-medium  uk-text-center uk-grid-match" uk-grid>

                <div class="uk-width-1-1 uk-padding-large uk-padding-remove-vertical">
                    <!--840x360-->
                    <img src="{{$home->section1_image}}" alt="{{config('app.name')}}">
                </div>
            </div>
        </div>
    </section>
    <section class="value-grid">
        <div class="section-title">
            <h2 class="heading-secondary">Essense of Kreative Rugs</h2>
            <span class="divide-line"></span>
        </div>
        <div class="uk-child-width-1-3@m uk-grid-match uk-grid-large" uk-grid>
            <div>
                <div class="value-item">
                    <div class="uk-card-media-top">
                        <img src="{{ asset($home->section2_image) }}" alt="{{$home->section2_title}}">
                    </div>
                    <div class="uk-card-body uk-paddin-small">
                        <span class="value-item__title">{{$home->section2_title}}</span>
                        <p>{{$home->section2_content}}
                        </p>
                    </div>
                </div>
            </div>
            <div>
                <div class="value-item">
                    <div class="uk-card-body uk-paddin-small">
                        <span class="value-item__title">{{$home->section3_title}}</span>
                        <p>{{$home->section3_content}}
                        </p>
                    </div>
                    <div class="uk-card-media-bottom">
                        <img src="{{ asset($home->section3_image) }}" alt="{{$home->section3_title}}">
                    </div>
                </div>
            </div>
            <div>
                <div class="value-item">
                    <div class="uk-card-media-top">
                        <img src="{{ asset($home->section4_image) }}" alt="{{$home->section4_title}}">
                    </div>
                    <div class="uk-card-body uk-paddin-small">
                        <span class="value-item__title">{{$home->section4_title}}</span>
                        <p>{{$home->section4_content}}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-dark">
        <div class="section-featured">
            <div class="section-title">
                <h2 class="heading-secondary--white">{{$home->section5_title}}</h2>
                <span class="divide-line--white"></span>
            </div>
            <div class="section-content">
                <div class="section-content__centered">
                    {{$home->section5_content}}
                </div>
            </div>

            <div uk-slider="" class="uk-slider uk-slider-container">

                <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1">
                    <ul class="uk-slider-items uk-child-width-1-2@s uk-child-width-1-3@m uk-grid">
                        @foreach ($categories as $category)
                        <li class="uk-padding-remove-horizontal uk-margin-small-left uk-margin-small-right">
                            <div class="uk-panel uk-transition-toggle">
                                <img src="{{ asset($category->nav) }}" alt="{{$category->name}}">
                                <span class="uk-position-center uk-panel">
                                    <h4 class="uk-transition-slide-bottom-small">
                                        <a
                                            href="{{ route('frontend.category',$category->slug) }}">{{$category->name}}</a>
                                    </h4>
                                </span>
                            </div>
                        </li>
                        @endforeach
                    </ul>

                    <a class="uk-position-center-left uk-position-small uk-hidden-hover uk-slidenav-previous uk-icon uk-slidenav"
                        href="#" uk-slidenav-previous="" uk-slider-item="previous"><svg width="14px" height="24px"
                            viewBox="0 0 14 24" xmlns="http://www.w3.org/2000/svg" data-svg="slidenav-previous">
                            <polyline fill="none" stroke="#000" stroke-width="1.4"
                                points="12.775,1 1.225,12 12.775,23 ">
                            </polyline>
                        </svg></a>
                    <a class="uk-position-center-right uk-position-small uk-hidden-hover uk-slidenav-next uk-icon uk-slidenav"
                        href="#" uk-slidenav-next="" uk-slider-item="next"><svg width="14px" height="24px"
                            viewBox="0 0 14 24" xmlns="http://www.w3.org/2000/svg" data-svg="slidenav-next">
                            <polyline fill="none" stroke="#000" stroke-width="1.4" points="1.225,23 12.775,12 1.225,1 ">
                            </polyline>
                        </svg></a>

                </div>

            </div>
        </div>
    </section>
</main>
@endsection