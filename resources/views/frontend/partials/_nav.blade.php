<div class="logo-wrapper">
    <a href="/">
        <img src="{{ asset('img/logo-dark.png') }}" alt="" />
    </a>
</div>
<div class="nav-wrapper">
    <nav class="navbar" uk-navbar="">
        <div class="uk-navbar-center">    
            <ul class="nav-list">
                    <li class="nav-list__item"><a class="nav-list__item--link" href="/">Home</a></li>
                    <li class="nav-list__item"><a class="nav-list__item--link" href="{{ route('frontend.inspire') }}">Get Inspired</a>
                        <div class="uk-navbar-dropdown uk-navbar-dropdown-boundary uk-navbar-dropdown-bottom-center" uk-drop="boundary: !nav; boundary-align: true; pos: bottom-justify;offset: 5;animation: uk-animation-slide-top-small ; duration: 100" style="background:white;">
                            <div class="uk-position-relative uk-visible-toggle uk-dark" tabindex="-1" uk-slider>
                                <ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-4@m uk-grid-small">
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
                    </li>
                    <li class="nav-list__item"><a class="nav-list__item--link" href="{{ route('frontend.design') }}">Design Your Rug</a></li>
                    <li class="nav-list__item"><a class="nav-list__item--link" href="{{ route('frontend.process') }}">Rug Making Process</a></li>
                    <li class="nav-list__item"><a class="nav-list__item--link" href="{{ route('frontend.about') }}">About</a></li>
                    <li class="nav-list__item"><a class="nav-list__item--link" href="{{ route('frontend.contact') }}">Contact</a></li>
            </ul>            
        </div>
    </nav>
</div>