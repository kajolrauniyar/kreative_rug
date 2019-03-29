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
                <a href="/get-inspired" class="navigation__nav__list__item__link ">Get Inspired</a>
                <div class="mega-menu" uk-drop="boundary: !nav; boundary-align: true; pos: bottom-justify;offset: 5;animation: uk-animation-slide-top-small ; duration: 100">
                    <div uk-grid>
                        <div class="uk-width-small">
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

                        </div>
                    </div>
                </div>
            </li>
            <li class="navigation__nav__list__item "><a href="/design" class="navigation__nav__list__item__link ">Designn Your Rug</a></li>
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

        <ul class="uk-nav uk-nav-default">
            <li class="uk-active"><a href="#">Active</a></li>
            <li class="uk-nav-divider"></li>
            <li><a href="#">Item</a></li>
        </ul>

    </div>
</div>