@include('backend.partials._nav-header')
<!-- BEGIN BASE-->
<div id="base">

	<!-- BEGIN OFFCANVAS LEFT -->
	<div class="offcanvas">
	</div>
	<!--end .offcanvas-->
	<!-- END OFFCANVAS LEFT -->
	<!-- BEGIN CONTENT-->
	<div id="content">
		<section>
			<div class="section-body">
				@yield('content')
			</div>
		</section>
	</div>

	<!-- BEGIN MENUBAR-->
	<div id="menubar" class="animate ">
		<div class="menubar-fixed-panel">
			<div>
				<a class="btn btn-icon-toggle btn-default menubar-toggle" data-toggle="menubar" href="javascript:void(0);">
						<i class="fa fa-bars"></i>
					</a>
			</div>
			<div class="expanded">
				<a href="{{ route('dashboard') }}">
						<span class="text-lg text-bold text-primary "{{ config('app.name') }}</span>
					</a>
			</div>
		</div>
		<div class="menubar-scroll-panel">

			<!-- BEGIN MAIN MENU -->
			<ul id="main-menu" class="gui-controls">

				<!-- BEGIN DASHBOARD -->
				<li>
					<a href="{{ route('dashboard') }}">
						<div class="gui-icon"><i class=" fas fa-tachometer-alt md"></i></div>
						<span class="title">Dashboard</span>
					</a>
				</li>
				<li>
					<a href="{{ route('home.create') }}">
						<div class="gui-icon"><i class="md md-home"></i></div>
						<span class="title">Home Page</span>
					</a>
				</li>
				{{--
				<li>
					<a href="{{ route('carousel.index') }}">
						<div class="gui-icon"><i class="md md-web"></i></div>
						<span class="title">Carousel</span>
					</a>
				</li>
				<li>
					<a href="{{ route('tour.featured') }}">
						<div class="gui-icon"><i class="fas fa-star md"></i></div>
						<span class="title">Featured Tours</span>
					</a>
				</li> --}}
				<!-- END DASHBOARD -->

				{{-- BEGIN TOUR --}}
				<li class="gui-folder">
					<a>
						<div class="gui-icon"><i class="fa fa-suitcase"></i></div>
						<span class="title">Product</span>
					</a>
					<!--start submenu -->
					<ul>
						<li><a href="{{ route('product.index') }}"><span class="title">All Products</span></a></li>
						{{--
						<li><a href="{{ route('featureds') }}"><span class="title">Featured</span></a></li> --}}
						<li><a href="{{ route('product-category.index') }}"><span class="title">Category</span></a></li>
					</ul>
				</li>
				<li>
						<a href="{{ route('material.index') }}">
							<div class="gui-icon"><i class="far  fa-puzzle-piece fa md"></i></div>
							<span class="title">Material</span>
						</a>
					</li>
				<li>
					<a href="{{ route('page.index') }}">
						<div class="gui-icon"><i class="far fa-file-alt fa md"></i></div>
						<span class="title">Pages</span>
					</a>
				</li>
				<li>
					<a href="{{ route('media.index') }}">
						<div class="gui-icon"><i class="far fa-images fa md"></i></div>
						<span class="title">Media</span>
					</a>
				</li>
				<li>
					<a href="{{ route('process.index') }}">
						<div class="gui-icon"><i class="fas fa-shoe-prints md"></i></div>
						<span class="title">Process</span>
					</a>
				</li>
				<li>
					<a href="{{ route('team.index') }}">
						<div class="gui-icon"><i class="far fa-users fa md"></i></div>
						<span class="title">Team</span>
					</a>
				</li>
				<li>
					<a href="{{ route('faq.index') }}">
						<div class="gui-icon"><i class="fas fa-question md"></i></div>
						<span class="title ">FAQ's</span>
					</a>
				</li>				
				<li>
					<a href="{{ route('setting.index') }}">
						<div class="gui-icon"><i class="fas fa-cog md"></i></div>
						<span class="title ">Setting</span>
					</a>
				</li>
				{{--
				<li>
					<a href="{{ route('departure.index') }}">
						<div class="gui-icon"><i class="fas fa-plane-departure md"></i></i>
						</div>
						<span class="title">Departure</span>
					</a>
				</li>
				<li>
					<a href="{{ route('pages.index') }}">
						<div class="gui-icon"><i class="fas fa-file-alt md"></i></div>
						<span class="title">Page</span>
					</a>
				</li>

				<li>
					<a href="{{ route('announcement.index') }}">
						<div class="gui-icon"><i class="fas fa-ticket-alt md"></i></div>
						<span class="title ">Announcement</span>
					</a>
				</li>
				<li>
					<a href="{{ route('partner.index') }}">
						<div class="gui-icon"><i class="far fa-handshake md"></i></div>
						<span class="title ">Partners</span>
					</a>
				</li>

				<li>
					<a href="{{ route('events.index') }}">
						<div class="gui-icon"><i class="fas fa-calendar-day md"></i></i>
						</div>
						<span class="title ">Events</span>
					</a>
				</li>

				<li>
					<a href="{{ route('instagram.index') }}">
						<div class="gui-icon"><i class="fab fa-instagram md"></i></div>
						<span class="title ">Instagram</span>
					</a>
				</li>
				<li>
					<a href="{{ route('setting.index') }}">
						<div class="gui-icon"><i class="fas fa-cog md"></i></div>
						<span class="title ">Setting</span>
					</a>
				</li> --}} {{-- END TOUR --}}

			</ul>
			<!--end .main-menu -->
			<!-- END MAIN MENU -->

			<div class="menubar-foot-panel">
				<small class="no-linebreak hidden-folded">
						<span class="opacity-75">Copyright &copy; {{ date('Y') }}</span> <strong>{{ config('app.name') }}</strong>
					</small>
			</div>
		</div>
		<!--end .menubar-scroll-panel-->
	</div>
	<!--end #menubar-->
	<!-- END MENUBAR -->

	<!-- BEGIN OFFCANVAS RIGHT -->
	<div class="offcanvas">


		<!-- END OFFCANVAS CHAT -->

	</div>
	<!--end .offcanvas-->
	<!-- END OFFCANVAS RIGHT -->

</div>
<!--end #base-->
<!-- END BASE -->