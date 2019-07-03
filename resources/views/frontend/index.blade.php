@extends('layouts.frontend')
@section('content')
<header class="header" data-src="{{asset($home->banner)}}" uk-img>
    <div class="header--text uk-position-center-right ">
        <h1 class="header--text__heading">
            {{$home->heading}}
        </h1>
        <h2 class="header--text__subheading">{{$home->subheading}}</h2>
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
        <div class="section-title uk-margin-medium-bottom">
            <h2 class="heading-secondary">Essense of Kreative Rugs</h2>
            <span class="divide-line"></span>
        </div>
        <div class="uk-child-width-1-3@m uk-grid-xlarge" uk-grid>
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
            <div uk-slider>

                <div class="uk-position-relative">

                    <div class="uk-slider-container uk-light">
                        <ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-3@s uk-child-width-1-3@m uk-grid-small">
                            @foreach ($categories as $category)
                            <li>
                                <div class="uk-panel uk-transition-toggle">
                                    <img src="{{ asset($category->nav) }}" alt="">
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
                    </div>

                    <div class="uk-hidden@s uk-light">
                        <a class="uk-position-center-left uk-position-small" href="#" uk-slidenav-previous
                            uk-slider-item="previous"></a>
                        <a class="uk-position-center-right uk-position-small" href="#" uk-slidenav-next
                            uk-slider-item="next"></a>
                    </div>

                    <div class="uk-visible@s uk-light">
                        <a class="uk-position-center-left-out uk-position-small" href="#" uk-slidenav-previous
                            uk-slider-item="previous"></a>
                        <a class="uk-position-center-right-out uk-position-small" href="#" uk-slidenav-next
                            uk-slider-item="next"></a>
                    </div>

                </div>

            </div>
        </div>
    </section>
</main>
@endsection