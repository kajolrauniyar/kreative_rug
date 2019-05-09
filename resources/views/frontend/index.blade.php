@extends('layouts.frontend')
@section('content')
<header class="header" data-src="{{asset($home->banner)}}" uk-img>
    <div class="uk-position-center-center header--text">
        <h1 class="uk-margin-remove">{{$home->heading}}</h1>
        <h2>{{$home->subheading}}</h2>
    </div>
</header>
<main>
    <section class="section-intro">
        <div class="section-title">
            <h2 class="heading-secondary">{{$home->section1_title}}</h2>
            <span class="divide-line"></span>
        </div>
        <div uk-grid>
            <div class="uk-width-1-5">
            </div>
            <div class="uk-width-3-5">
                <p class="paragraph">
                    {{$home->section1_content}}
                </p>
            </div>
            <div class="uk-width-1-5">
            </div>
        </div>
        <div class="uk-grid-medium  uk-text-center uk-grid-match" uk-grid>
            <div class="uk-width-1-1">
                <!--840x360-->
                <img src="{{$home->section1_image}}" alt="{{config('app.name')}}">
            </div>
        </div>
    </section>
    <section class="value-grid">
        <div class="section-title">
            <h2 class="heading-secondary">Essense of Kreative Rugs</h2>
            <span class="divide-line"></span>
        </div>
        <div class="uk-child-width-1-3@m uk-grid-match uk-grid-small" uk-grid>
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
    <section class="section-featured">
        <div class="section-title">
            <h2 class="heading-secondary">{{$home->section5_title}}</h2>
            <span class="divide-line"></span>
        </div>
        <div class="section-content">
            <div class="section-content__centered">
                {{$home->section5_content}}
            </div>
        </div>
        <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slider="sets: true">

            <ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-4@m uk-grid-small">
                @foreach ($categories as $category)
                <li>
                    <img src="{{$category->thumb}}" alt="{{$category->slug}}">
                    <div class="uk-position-center uk-panel">
                        <h3><a href="{{ route('frontend.category',$category->slug) }}">{{$category->name}}</a></h3>
                    </div>
                </li>
                @endforeach
            </ul>

            <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous
                uk-slider-item="previous"></a>
            <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next
                uk-slider-item="next"></a>

        </div>
    </section>

    {{-- <section class="section-intro">
        <div class="section-title">
            <h2 class="heading-secondary">{{$home->section1_title}}</h2>
    <span class="divide-line"></span>
    </div>
    <div class="uk-grid-medium  uk-text-center uk-grid-match" uk-grid>
        <div class="uk-width-1-2@m uk-width-1-2@l uk-width-1-1@s">
            <p class="paragraph">
                {{$home->section1_content}}
            </p>
        </div>
        <div class="uk-width-1-2@m uk-width-1-2@l uk-width-1-1@s">
            <!--840x360-->
            <img src="{{$home->section1_image}}" alt="{{config('app.name')}}">
        </div>
    </div>
    </section>

    <section class="section-featured">
        <div class="section-title">
            <h2 class="heading-secondary">{{$home->section2_title}}</h2>
            <span class="divide-line"></span>
        </div>
        <div class="section-content">
            <div class="section-content__centered">
                {{$home->section2_content}}
            </div>
        </div>
        <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slider="sets: true">

            <ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-4@m uk-grid-small">
                @foreach ($categories as $category)
                <li>
                    <img src="{{$category->thumb}}" alt="{{$category->slug}}">
                    <div class="uk-position-center uk-panel">
                        <h3><a href="{{ route('frontend.category',$category->slug) }}">{{$category->name}}</a></h3>
                    </div>
                </li>
                @endforeach
            </ul>

            <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous
                uk-slider-item="previous"></a>
            <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next
                uk-slider-item="next"></a>

        </div>
    </section>

    <section class="section-bg">
        <div class="uk-inline uk-margin">
            <img src="{{asset('img/h-highquality.jpg')}}" alt="">
            <div class="uk-position-large uk-position-center-right uk-overlay overlay__right">
                <h3 class="heading-secondary">{{$home->section3_title}}</h3>
                <p>{{$home->section3_content}}</p>
            </div>
        </div>
    </section>

    <section class="section-form">
        <div class="section-title">
            <h3 class="heading-secondary">View Our Rugs</h3>
            <span class="divide-line"></span>
        </div>
        <div class="section-content__centered">
            Get inspired by exploring the latest collections of our designers.
            <br>
            <a href="#" class="uk-button uk-button-secondary uk-button-small">Browse</a>
        </div>
        <div class="uk-inline uk-margin">
            <img src="{{asset('img/beinspired-2nd.jpg')}}" alt="">
            <div class="uk-position-large uk-position-center-left uk-overlay overlay__left">
                <h3 class="heading-secondary">{{$home->section4_title}}</h3>
                <p>{{$home->section4_content}}</p>
            </div>
        </div>
    </section> --}}
</main>
@endsection