<section class="menu cid-roViZ6rAGZ" once="menu" id="menu2-1">



    <nav class="navbar navbar-expand beta-menu navbar-dropdown align-items-center navbar-fixed-top navbar-toggleable-sm">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </button>
        <div class="menu-logo">
            <div class="navbar-brand">
                <span class="navbar-logo">
                    <a href="#">
                        <img src="{{ asset('img/logo-dark.png') }}" alt="Mobirise" title="" style="height: 3.8rem;">
                    </a>
                </span>

            </div>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav nav-dropdown nav-right" data-app-modern-menu="true">
                <li class="nav-item">
                    <a class="nav-link link text-black display-4" href="/">
                        Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link link text-black dropdown-toggle display-4" href="{{ route('frontend.inspire') }}" data-toggle="dropdown-submenu"
                        aria-expanded="false">
                                Get Inspired</a>
                    <div class="dropdown-menu">
                        @foreach ($categories as $category)
                        <a class="text-black dropdown-item display-4" href="{{ route('frontend.category', $category->slug) }}">{{$category->name}}</a>                        @endforeach
                    </div>
                </li>
                <li class="nav-item"><a class="nav-link link text-black display-4" href="{{route('frontend.design')}}" aria-expanded="false">
                        Design Your Rug</a></li>
                <li class="nav-item"><a class="nav-link link text-black display-4" href="{{route('frontend.process')}}" aria-expanded="false">
                        Rug Making Process</a></li>
                <li class="nav-item"><a class="nav-link link text-black display-4" href="{{route('frontend.about')}}" aria-expanded="false">About</a></li>
                <li class="nav-item"><a class="nav-link link text-black display-4" href="{{route('frontend.faq')}}" aria-expanded="false">FAQ</a></li>
                <li class="nav-item"><a class="nav-link link text-black display-4" href="{{ route('frontend.contact') }}" aria-expanded="false">
                        Contact</a></li>
            </ul>

        </div>
    </nav>
</section>