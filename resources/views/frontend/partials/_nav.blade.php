<div class="logo-wrapper uk-visible@l">
    <div class="logo-wrapper__logo-box">
        <a href="/">
            <img
              src="{{ asset('img/logo-dark.png') }}"
              alt=""
              class="logo-wrapper__logo-box--logo"
            />
          </a>
    </div>
</div>

<nav class="navigation uk-visible@l" uk-navbar>
    <div class="navigation__nav">
        <ul class="navigation__nav__list">
            <li class="navigation__nav__list__item "><a href="/" class="navigation__nav__list__item__link ">Home</a></li>
            <li class="navigation__nav__list__item ">
                <a href="{{ route('frontend.inspire') }}" class="navigation__nav__list__item__link ">Get Inspired</a>
                <div class="mega-menu uk-padding-small" uk-drop="boundary: !nav; boundary-align: true; pos: bottom-justify;offset: 5;animation: uk-animation-slide-top-small ; duration: 100">
                    <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slider>

                        <ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-4@m uk-grid-small">
                            @foreach ($categories as $category)
                            <li>
                                <div class="uk-panel">
                                    <a href="{{ route('frontend.category', $category->slug) }}">{{$category->name}}</a>
                                    <a href="{{ route('frontend.category', $category->slug) }}">
                                        <img src="{{ asset($category->nav) }}"  alt="{{$category->name}}">
                                    </a>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    
                        <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                        <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>
                    
                    </div>
                    
                    {{-- <div uk-grid> --}}
                        {{-- <div class="uk-width-small">
                            <ul class="mega-menu__list" uk-tab="connect: #component-nav; animation: uk-animation-fade">
                                @foreach ($categories as $category)
                                <li class="mega-menu__list__item"><a class="mega-menu__list__item__link">{{$category->name}}</a></li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="uk-width-expand mega-menu-content">

                            <ul id="component-nav" class="uk-switcher mega-menu-content__list">
                                @foreach ($categories as $category)
                                <li class="mega-menu-content__list__item">
                                    <div class="uk-grid-collapse uk-grid" uk-grid>
                                        <div class="uk-width-1-2 mega-menu-content__list__item--content">
                                            <p>{{$category->description}}</p>
                                            <a href="{{ route('frontend.category', $category->slug) }}" class="mega-menu-content__list__item--content__link">Explore &rarr;</a>
                                        </div>
                                        <div class="uk-width-1-2 mega-menu-content__list__item--img">
                                            <img src="{{ asset($category->nav) }}" alt="{{$category->name}}">
                                        </div>
                                    </div>
                                </li>
                                @endforeach
                            </ul>

                        </div> --}}
                    {{-- </div> --}}
                </div>
            </li>
            <li class="navigation__nav__list__item "><a href="{{route('frontend.design')}}" class="navigation__nav__list__item__link ">Order Process</a></li>
            <li class="navigation__nav__list__item "><a href="{{route('frontend.process')}}" class="navigation__nav__list__item__link ">Rug Making Process</a></li>
            <li class="navigation__nav__list__item "><a href="/about" class="navigation__nav__list__item__link ">About Us</a></li>
            <li class="navigation__nav__list__item "><a href="/faq" class="navigation__nav__list__item__link ">FAQ</a></li>
            <li class="navigation__nav__list__item "><a href="/contact" class="navigation__nav__list__item__link ">Contact</a></li>

        </ul>
    </div>
</nav>

<nav class="navigation-mobile uk-hidden@l">

    <div class="uk-navbar-center">
        <a href="#">
                  <img
                    src="{{ asset('img/logo-dark.png') }}"
                    alt=""
                    class="logo-wrapper__logo-box--logo"
                  />
                </a>
    </div>
    <div class="uk-navbar-right">
        <a class="uk-navbar-toggle" href="#responsive-nav" uk-toggle>
                  <span uk-navbar-toggle-icon></span> 
              </a>
    </div>
</nav>

<div id="responsive-nav" uk-offcanvas="overlay: true">
    <div class="uk-offcanvas-bar">
        <ul class="uk-nav-primary uk-nav-parent-icon" uk-nav>
            <li class="uk-active"><a href="/">Home</a></li>
            <li class="uk-parent">
                <a href="{{ route('frontend.inspire') }}">Get Inspired</a>
                <ul class="uk-nav-sub">
                    @foreach ($categories as $category) 
                        <li><a href="{{ route('frontend.category', $category->slug) }}">{{$category->name}}</a></li>
                    @endforeach                    
                </ul>
            </li>
            <li><a href="{{ route('frontend.design') }}">Order Process</a></li>
            <li><a href="{{ route('frontend.process') }}">Rug Making Process</a></li>
            <li><a href="{{ route('frontend.about') }}">About Us</a></li>
            <li><a href="{{ route('frontend.faq') }}">FAQ</a></li>
            <li><a href="/contact">Contact</a></li>
        </ul>
    </div>
</div>