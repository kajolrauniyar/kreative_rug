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
        <div class="uk-grid-medium uk-child-width-1-2 uk-text-center uk-grid-match" uk-grid>
            <div>
                <p class="paragraph">
                    {{$home->section1_content}}
                </p>
            </div>
            <div>
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
        <div class="uk-grid-medium uk-child-width-1-4 uk-text-center uk-grid-match" uk-grid>
            @foreach ($categories as $category)
                <div>
                    <img src="{{$category->thumb}}" alt="{{$category->slug}}">
                </div>
            @endforeach
            {{-- <div>
                <img src="https://source.unsplash.com/300x450/?daisy" alt="">
            </div>
            <div>
                <img src="https://source.unsplash.com/300x450/?sunflower" alt="">
            </div>
            <div>
                <img src="https://source.unsplash.com/300x450/?dafodils" alt="">
            </div>

            <div>
                <img src="https://source.unsplash.com/300x450/?orchid" alt="">
            </div> --}}
        </div>
    </section>

    <section class="section-carousel">
        <div class="section-title">
            <h2 class="heading-secondary">{{$home->section3_title}}</h2>
            <span class="divide-line"></span>
        </div>
        <div class="section-content">
            <div class="section-content__centered">
                {{$home->section3_content}}
            </div>
        </div>
        <div uk-slider>

            <ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-3@s uk-child-width-1-4@m uk-light uk-grid-small" uk-grid>
                @foreach ($products as $product)
                    <li class="uk-transition-toggle" tabindex="0">
                        <img src="{{$product->thumb}}" alt="">
                        <div class="uk-position-center uk-panel">
                            <h2 class="uk-transition-slide-bottom-small">{{$product->name}}</h2>
                        </div>
                    </li>                    
                @endforeach
                {{-- <li class="uk-transition-toggle" tabindex="0">
                    <img src="https://source.unsplash.com/300x450/?CALIFORNIA POPPY" alt="">
                    <div class="uk-position-center uk-panel">
                        <h1 class="uk-transition-slide-bottom-small">1</h1>
                    </div>
                </li>
                <li class="uk-transition-toggle" tabindex="0">
                    <img src="https://source.unsplash.com/300x450/?cosmos" alt="">
                    <div class="uk-position-center uk-panel">
                        <h1 class="uk-transition-slide-bottom-small">2</h1>
                    </div>
                </li>
                <li class="uk-transition-toggle" tabindex="0">
                    <img src="https://source.unsplash.com/300x450/?marigold" alt="">
                    <div class="uk-position-center uk-panel">
                        <h1 class="uk-transition-slide-bottom-small">3</h1>
                    </div>
                </li>
                <li class="uk-transition-toggle" tabindex="0">
                    <img src="https://source.unsplash.com/300x450/?poppy" alt="">
                    <div class="uk-position-center uk-panel">
                        <h1 class="uk-transition-slide-bottom-small">4</h1>
                    </div>
                </li>
                <li class="uk-transition-toggle" tabindex="0">
                    <img src="https://source.unsplash.com/300x450/?lavender" alt="">
                    <div class="uk-position-center uk-panel">
                        <h1 class="uk-transition-slide-bottom-small">5</h1>
                    </div>
                </li>
                <li class="uk-transition-toggle" tabindex="0">
                    <img src="https://source.unsplash.com/300x450/?lily" alt="">
                    <div class="uk-position-center uk-panel">
                        <h1 class="uk-transition-slide-bottom-small">6</h1>
                    </div>
                </li>
                <li class="uk-transition-toggle" tabindex="0">
                    <img src="https://source.unsplash.com/300x450/?PETUNIA" alt="">
                    <div class="uk-position-center uk-panel">
                        <h1 class="uk-transition-slide-bottom-small">7</h1>
                    </div>
                </li>
                <li class="uk-transition-toggle" tabindex="0">
                    <img src="https://source.unsplash.com/300x450/?MORNING-GLORY" alt="">
                    <div class="uk-position-center uk-panel">
                        <h1 class="uk-transition-slide-bottom-small">8</h1>
                    </div>
                </li>
                <li class="uk-transition-toggle" tabindex="0">
                    <img src="https://source.unsplash.com/300x450/?NASTURTIUM" alt="">
                    <div class="uk-position-center uk-panel">
                        <h1 class="uk-transition-slide-bottom-small">9</h1>
                    </div>
                </li>
                <li class="uk-transition-toggle" tabindex="0">
                    <img src="https://source.unsplash.com/300x450/?PANSY" alt="">
                    <div class="uk-position-center uk-panel">
                        <h1 class="uk-transition-slide-bottom-small">10</h1>
                    </div>
                </li> --}}

            </ul>
            <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin"></ul>

        </div>
    </section>

    <section class="section-form">
        <div class="section-title">
            <h2 class="heading-secondary">{{$home->section4_title}}</h2>
            <span class="divide-line"></span>
        </div>
        <div class="section-content">
            <div class="section-content__centered">
                {{$home->section4_content}}
            </div>
        </div>
        <form action="{{ route('frontend.customDesign') }}" method="POST" class="uk-form-stacked" enctype="multipart/form-data"   >
            @csrf
            <div uk-grid>
                <div class="uk-width-1-1 uk-width-1-2@m">
                    <label class="uk-form-label" for="name">Name</label>
                    <div class="uk-form-controls">
                        <input class="uk-input" id="name" type="text" placeholder="Jane Doe" name="fullName">
                    </div>
                </div>
                <div class="uk-width-1-1 uk-width-1-2@m">
                    <label class="uk-form-label" for="email">Email</label>
                    <div class="uk-form-controls">
                        <input class="uk-input" id="email" type="email" name="email" placeholder="jane.doe@example.com">
                    </div>
                </div>
            </div>
            <div uk-grid>
                <div class="uk-width-1-1 uk-width-1-3@m">
                    <label class="uk-form-label" for="phone">Phone number</label>
                    <div class="uk-form-controls">
                        <input class="uk-input" id="phone" name="phone" type="tel">
                    </div>
                </div>
                <div class="uk-width-1-1 uk-width-1-3@m">
                    <label class="uk-form-label" for="rugSize">Rug Size</label>
                    <div class="uk-form-controls">
                        <input class="uk-input" id="rugSize" name="rugSize" type="text" placeholder="8.ft x 5.ft">
                    </div>
                </div>
                <div class="uk-width-1-1 uk-width-1-3@m">
                    <label class="uk-form-label" for="upload">Upload Your Design</label>
                    <div class="uk-form-controls">
                        <div uk-form-custom="target: true">
                            <input type="file" name="upload">
                            <input class="uk-input uk-form-width-medium" id="upload " type="text" placeholder="Select file" disabled>
                        </div>
                    </div>
                </div>
            </div>
            <div uk-grid>
                <div class="uk-width-1-1">
                    <label class="uk-form-label" for="otherDetails">Other Details</label>
                    <div class="uk-form-controls">
                        <textarea class="uk-textarea" rows="5" id="otherDetails" placeholder="Other Details" name="otherDetails" style="resize: none"></textarea>
                    </div>
                </div>
            </div>
            <div uk-grid>
                <div class="uk-width-1-1 uk-text-center">
                    <button class="btn btn__outline" type="submit">Send</button>
                </div>
            </div>
        </form>
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