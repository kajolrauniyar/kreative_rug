@extends('layouts.frontend')
@section('content')
<header class="header" data-src="{{asset($home->banner)}}" uk-img>
    <div class="uk-position-center-right header--text">
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
                <p class="uk-text-center">
                    {{$home->section1_content}}
                </p>
            </div>
            <div class="uk-width-1-5">
            </div>
        </div>
        <div class="uk-grid-medium  uk-text-center uk-grid-match" uk-grid>
            <div class="uk-width-1-6">
            </div>
            <div class="uk-width-expand">
                <!--840x360-->
                <img src="{{$home->section1_image}}" alt="{{config('app.name')}}">
            </div>
            <div class="uk-width-1-6">
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
        {{-- <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slider="sets: true">

            <ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-4@m uk-grid-large">
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

        </div> --}}
        <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slider>

                <ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-4@m uk-grid">
                    @foreach ($categories as $category)
                    <li>
                        <img src="{{$category->thumb}}" alt="{{$category->slug}}">
                        <div class="uk-position-center uk-panel">
                            <h3><a href="{{ route('frontend.category',$category->slug) }}">{{$category->name}}</a></h3>
                        </div>
                    </li>
                    @endforeach
                </ul>
            
                <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>
            
            </div>
    </section>
</main>
@endsection