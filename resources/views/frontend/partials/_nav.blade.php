<nav class="navigation uk-visible@m">
    <div class="uk-container">
        <div class="uk-navbar" uk-navbar="align: left; boundary-align: true">
            <div class="uk-navbar-left">
                <a class=" logo-wrapper" href="/">
                    <img src="{{asset('img/logo-dark.png')}}" alt="">
                </a>
                <ul class="nav-list">
                    <li class="nav-list__item"><a href="/" class="nav-list__item--link">Home</a></li>
                    <li class="nav-list__item">
                        <a href="{{ route('frontend.inspire') }}" class="nav-list__item--link" aria-expanded="false" class="">Get Inspired</a>
                        <div class="uk-navbar-dropdown uk-navbar-dropdown-boundary uk-navbar-dropdown-bottom-center"
                            uk-drop="cls-drop: uk-navbar-dropdown; boundary: !nav; boundary-align: true; pos: bottom-justify; flip: x">
                            <div class="uk-container">
                                    <div class="uk-position-relative uk-visible-toggle uk-dark" tabindex="-1" uk-slider>
                                            <ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-5@m uk-grid-small">
                                                @foreach ($categories as $category)
                                                <li>
                                                    <div class="uk-panel">
                                                        <a href="{{ route('frontend.category', $category->slug) }}">{{$category->name}}</a>
                                                        <img src="{{ asset($category->nav) }}"  alt="{{$category->name}}">
                                                    </div>
                                                </li>
                                                @endforeach
                                            </ul>
                                            <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                                            <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>                                
                                        </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-list__item"><a href="{{ route('frontend.design') }}" class="nav-list__item--link">Design Your Rug</a></li>
                    <li class="nav-list__item"><a href="{{ route('frontend.process') }}" class="nav-list__item--link">Rug Making Process</a></li>
                    <li class="nav-list__item"><a href="{{ route('frontend.about') }}" class="nav-list__item--link">About</a></li>
                    <li class="nav-list__item"><a href="{{ route('frontend.faq') }}" class="nav-list__item--link">FAQ</a></li>
                    <li class="nav-list__item"><a href="{{ route('frontend.contact') }}" class="nav-list__item--link">Contact</a></li>

                </ul>

            </div>
        </div>
    </div>
</nav>


<nav class="mobile-menu uk-hidden@m">
    <div class="uk-navbar-left">
        <div>
            <a class="mobile-logo-wrapper" href="/" aria-expanded="false">
                <img src="{{ asset('img/logo-dark.png') }}" alt="{{config('app.name')}}" />
            </a>
        </div>
    </div>
    <div class="uk-navbar-right">
        <div>
            <a class="uk-navbar-toggle uk-navbar-toggle-icon uk-icon" uk-toggle="target: #offcanvas-nav" href="#"
                uk-navbar-toggle-icon="" aria-expanded="false">
                <svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"
                    data-svg="navbar-toggle-icon">
                    <rect y="9" width="20" height="2"></rect>
                    <rect y="3" width="20" height="2"></rect>
                    <rect y="15" width="20" height="2"></rect>
                </svg>
            </a>
        </div>
    </div>
</nav>

<div id="offcanvas-nav" uk-offcanvas="overlay: true;flip: true;">
    <div class="uk-offcanvas-bar">
        <ul class="uk-nav uk-nav-default">
            <li class="uk-active"><a href="/">Home</a></li>
            <li class="uk-parent">
                <a href="{{ route('frontend.inspire') }}">Get Inspired</a>
                <ul class="uk-nav-sub">
                    @foreach ($categories as $category)
                    <li><a href="{{ route('frontend.category', $category->slug) }}">{{$category->name}}</a></li>
                    @endforeach
                </ul>
            </li>
            <li class="uk-active"><a href="{{ route('frontend.design') }}">Design Your Rug</a></li>
            <li class="uk-active"><a href="{{ route('frontend.process') }}">Rug Making Process</a></li>
            <li class="uk-active"><a href="{{ route('frontend.about') }}">About</a></li>
            <li class="uk-active"><a href="{{ route('frontend.faq') }}">FAQ</a></li>
            <li class="uk-active"><a href="{{ route('frontend.contact') }}">Contact</a></li>
        </ul>

    </div>
</div>