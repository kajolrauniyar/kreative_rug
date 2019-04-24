@extends('layouts.frontend') 
@section('content')
<header class="header" uk-img data-src="{{ asset($home->banner) }}">
    <div class="header__text-box">
        <h1 class="heading-primary">
            <span class="heading-primary--main">{{$home->heading}}</span>
            <span class="heading-primary--sub">{{{$home->subheading}}}</span>
        </h1>
    </div>
</header>

<main>

    <section class="section-intro">
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

            <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
            <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>

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
            <h3 class="heading-secondary">{{$home->section4_title}}</h3>
            <span class="divide-line"></span>
        </div>
        <div class="section-content uk-text-center">
            <div class="section-content__centered">
                {{$home->section4_content}}
            </div>
            <button class="uk-button uk-button-secondary">Secondary</button>
        </div>
        <div class="uk-inline uk-margin">
            <img src="{{asset('img/beinspired-2nd.jpg')}}" alt="">
            <div class="uk-position-large uk-position-center-left uk-overlay overlay__left">
                <h3 class="heading-secondary">{{$home->section3_title}}</h3>
                <p>{{$home->section3_content}}</p>
            </div>
        </div>
    </section>
</main>
@endsection
 {{-- 
@section('scripts')
<script src="https://www.google.com/recaptcha/api.js?render=6LdduJkUAAAAAPlnAnEXImFmW16i5P3Tbzjix5Z5"></script>
<script>
    grecaptcha.ready(function() {
    grecaptcha.execute('reCAPTCHA_site_key', {action: 'homepage'}).then(function(token) {
       ...
    });
});

</script>










@stop --}}