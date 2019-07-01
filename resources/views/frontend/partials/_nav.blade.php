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
            <li class="uk-active">
                <a href="{{ route('frontend.inspire') }}">Get Inspired</a>
            </li>
            <li class="uk-active"><a href="{{ route('frontend.design') }}">Design Your Rug</a></li>
            <li class="uk-active"><a href="{{ route('frontend.process') }}">Rug Making Process</a></li>
            <li class="uk-active"><a href="{{ route('frontend.about') }}">About</a></li>
            <li class="uk-active"><a href="{{ route('frontend.faq') }}">FAQ</a></li>
            <li class="uk-active"><a href="{{ route('frontend.contact') }}">Contact</a></li>
        </ul>

    </div>
</div>