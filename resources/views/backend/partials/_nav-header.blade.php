<header id="header">
    <div class="headerbar">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="headerbar-left">
            <ul class="header-nav header-nav-options">
                <li class="header-nav-brand">
                    <div class="brand-holder">
                        <a href="{{route('dashboard')}}">
                            <span class="text-lg text-bold text-primary">{{ config('app.name') }}</span>
                        </a>
                    </div>
                </li>
                <li>
                    <a class="btn btn-icon-toggle menubar-toggle" data-toggle="menubar" href="javascript:void(0);">
                        <i class="fa fa-bars"></i>
                    </a>
                </li>
            </ul>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="headerbar-right">
            <ul class="header-nav header-nav-options">
                <li class="dropdown hidden-xs">
                    <a href="javascript:void(0);" class="btn btn-icon-toggle btn-default" data-toggle="dropdown">
                        <i class="fa fa-bell"></i>
                        {{-- @if($reviews->count() > 0)<sup class="badge style-danger">{{$reviews->count()}}</sup> @endif --}}
                    </a>
                    <ul class="dropdown-menu animation-expand">
{{--                         @foreach($reviews as $review)
                        <li>
                            <a class="alert alert-callout alert-info" href="javascript:void(0);">
                                <img class="pull-right img-circle dropdown-avatar"
                                     src="{{$review->thumbnail}}" alt=""/>
                                <strong>{{$review->title}}</strong><br/>
                                <small>{!!  str_limit(strip_tags($review->content), 30, '...') !!}</small>
                            </a>
                        </li>
                        @endforeach --}}
                        <li class="dropdown-header">Options</li>
                        <li><a href="#">View all reviews <span class="pull-right"><i
                            class="fa fa-arrow-right"></i></span></a></li>
                        </ul><!--end .dropdown-menu -->
                    </li><!--end .dropdown -->
                </ul><!--end .header-nav-options -->
                <ul class="header-nav header-nav-profile">
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle ink-reaction" data-toggle="dropdown">
                            <img src="{{ asset('assets/backend/img/avatar1.jpg') }}" alt=""/>
                            <span class="profile-info">
                               {{auth()->user()->name}}
                           </span>
                       </a>
                       <ul class="dropdown-menu animation-dock">
                        <li><a href="{{route('logout')}}"><i class="fa fa-fw fa-power-off text-danger"></i>
                        Logout</a></li>
                    </ul><!--end .dropdown-menu -->
                </li><!--end .dropdown -->
            </ul><!--end .header-nav-profile -->
        </div><!--end #header-navbar-collapse -->
    </div>
</header>