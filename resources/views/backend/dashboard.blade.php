@extends('layouts.backend')
@section('content')
<!-- BEGIN CONTENT-->

			<div class="row">

				<!-- BEGIN ALERT - REVENUE -->
				<div class="col-md-3 col-sm-6">
					<div class="card">
						<div class="card-body no-padding">
							<div class="alert alert-callout alert-info no-margin">
								<strong class="pull-right text-success text-lg">0,38% <i class="md md-trending-up"></i></strong>
								<strong class="text-xl">$ 32,829</strong><br/>
								<span class="opacity-50">Revenue</span>
								<div class="stick-bottom-left-right">
									<div class="height-2 sparkline-revenue" data-line-color="#bdc1c1"></div>
								</div>
							</div>
						</div><!--end .card-body -->
					</div><!--end .card -->
				</div><!--end .col -->
				<!-- END ALERT - REVENUE -->

				<!-- BEGIN ALERT - VISITS -->
				<div class="col-md-3 col-sm-6">
					<div class="card">
						<div class="card-body no-padding">
							<div class="alert alert-callout alert-warning no-margin">
								<strong class="pull-right text-warning text-lg">0,01% <i class="md md-swap-vert"></i></strong>
								<strong class="text-xl">432,901</strong><br/>
								<span class="opacity-50">Visits</span>
								<div class="stick-bottom-right">
									<div class="height-1 sparkline-visits" data-bar-color="#e5e6e6"></div>
								</div>
							</div>
						</div><!--end .card-body -->
					</div><!--end .card -->
				</div><!--end .col -->
				<!-- END ALERT - VISITS -->

				<!-- BEGIN ALERT - BOUNCE RATES -->
				<div class="col-md-3 col-sm-6">
					<div class="card">
						<div class="card-body no-padding">
							<div class="alert alert-callout alert-danger no-margin">
								<strong class="pull-right text-danger text-lg">0,18% <i class="md md-trending-down"></i></strong>
								<strong class="text-xl">42.90%</strong><br/>
								<span class="opacity-50">Bounce rate</span>
								<div class="stick-bottom-left-right">
									<div class="progress progress-hairline no-margin">
										<div class="progress-bar progress-bar-danger" style="width:43%"></div>
									</div>
								</div>
							</div>
						</div><!--end .card-body -->
					</div><!--end .card -->
				</div><!--end .col -->
				<!-- END ALERT - BOUNCE RATES -->

				<!-- BEGIN ALERT - TIME ON SITE -->
				<div class="col-md-3 col-sm-6">
					<div class="card">
						<div class="card-body no-padding">
							<div class="alert alert-callout alert-success no-margin">
								<h1 class="pull-right text-success"><i class="md md-timer"></i></h1>
								<strong class="text-xl">54 sec.</strong><br/>
								<span class="opacity-50">Avg. time on site</span>
							</div>
						</div><!--end .card-body -->
					</div><!--end .card -->
				</div><!--end .col -->
				<!-- END ALERT - TIME ON SITE -->

			</div><!--end .row -->

<!-- END CONTENT -->
@stop
@section('scripts')
<script src="{{ asset('assets/backend/js/core/demo/DemoDashboard.js') }}"></script>
@stop