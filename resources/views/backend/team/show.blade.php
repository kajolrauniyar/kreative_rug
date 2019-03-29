@extends('layouts.backend')
@section('content')
<!-- BEGIN PROFILE HEADER -->
<section class="full-bleed">
	<div class="section-body style-default-dark force-padding text-shadow">
		<div class="img-backdrop" ></div>
		<div class="overlay overlay-shade-top stick-top-left height-3"></div>
		<div class="row">
			<div class="col-md-3 col-xs-5">
			<img class="img-circle border-white border-xl img-responsive auto-width" src="{{asset($team->avatar)}}" alt="" />
				<h3>{{ $team->name }}<br/><small>{{ $team->position }}</small></h3>
			</div><!--end .col -->
			<div class="col-md-9 col-xs-7">
				<div class="width-3 text-center pull-right">
					<a href="{{ route('team.edit',$team->id)}}" class="btn btn-block btn-sm ink-reaction btn-warning">
						<i class="fa fa-pencil" aria-hidden="true"></i> Edit
					</a>
					<a href="{{ route('team.index')}}" class="btn btn-block btn-sm ink-reaction btn-info">
						<i class="fa fa-pencil" aria-hidden="true"></i> Done
					</a>
					{{-- <strong class="text-xl">643</strong><br/> --}}
					{{-- <span class="text-light opacity-75">followers</span> --}}
				</div>
				<div class="width-3 text-center pull-right">
					{{-- <strong class="text-xl">108</strong><br/> --}}
					{{-- <span class="text-light opacity-75">following</span> --}}
				</div>
			</div><!--end .col -->
		</div><!--end .row -->
		<div class="overlay overlay-shade-bottom stick-bottom-left force-padding text-right">

		</div>
	</div><!--end .section-body -->
</section>
<!-- END PROFILE HEADER  -->
<section>
	<div class="section-body no-margin">
		<div class="row">
			<div class="col-md-12">
				<h2>Timeline</h2>
				<!-- BEGIN ENTER MESSAGE -->
				<div class="card no-margin">
					<div class="card-body">
						{!! $team->description !!}
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@stop