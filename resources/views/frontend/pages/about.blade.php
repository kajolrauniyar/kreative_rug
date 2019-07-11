@section('title') | About Us
@endsection

@extends('layouts.frontend')
@section('content')
@include('frontend.partials._page-header')
@if (isset($page->content{0}->sectionTitle) && isset($page->content{0}->sectionContent))
<section class="uk-section-default uk-padding-small-top uk-padding-small-bottom">
    <div class="uk-container uk-padding uk-padding-remove-horizontal">
        <div uk-grid>
            <div class="uk-width-1-1">
                <div class="section-title">
                    <h3 class="heading-tertiary">{!!$page->content{0}->sectionTitle!!}</h3>
                    <span class="divide-line"></span>
                </div>
            </div>
            <div class="uk-width-1-5 uk-margin-remove-top"></div>
            <div class="uk-width-3-5 uk-margin-remove-top">
                <p class="uk-text-center">
                    {!!$page->content{0}->sectionContent!!}
                </p>
            </div>
            <div class="uk-width-1-5 uk-margin-remove-top"></div>
        </div>
    </div>
</section>
@endif
<div class="uk-section-muted uk-padding-small uk-padding-remove-horizontal">
    <div class="section-title">
        <h3 class="heading-tertiary">Our Team</h3>
        <span class="divide-line"></span>
    </div>
    <div class="uk-container uk-padding">
        @foreach ($teams as $team)
        <div uk-grid>
            <div class="uk-width-1-6"></div>
            <div class="uk-width-expand">
                @if ($loop->iteration %2 !== 0)
                <div uk-grid >
                    <div class="uk-width-1-3 uk-padding-remove-left">
                        <img src="{{ asset($team->avatar) }}" alt="{{$team->name}}">
                    </div>
                    <div class="uk-width-2-3 uk-card uk-card-default uk-card-body">
                        <h4 class="uk-margin-remove">{{$team->name}}</h4>
                        <h5 class="uk-margin-remove">{{$team->designation}}</h5>
                        <p>{!!$team->description!!}</p>
                    </div>
                </div>
                @else
                <div uk-grid>
                    <div class="uk-width-2-3 uk-card uk-card-default uk-card-body">
                        <h4 class="uk-margin-remove">{{$team->name}}</h4>
                        <h5 class="uk-margin-remove">{{$team->designation}}</h5>
                        <p>{!!$team->description!!}</p>
                    </div>
                    <div class="uk-width-1-3 uk-padding-remove-left">
                        <img src="{{ asset($team->avatar) }}" alt="{{$team->name}}">
                    </div>
                </div>
                @endif
            </div>
            <div class="uk-width-1-6"></div>
        </div>
        @endforeach
    </div>
</div>
@if (isset($page->content{1}->sectionTitle) && isset($page->content{1}->sectionContent))
<div class="uk-section-muted uk-padding-small uk-padding-remove-horizontal">
    <div class="section-title">
        <h4 class="heading-tertiary">{!!$page->content{1}->sectionTitle!!}</h4>
        <span class="divide-line"></span>
    </div>
    <div class="uk-container uk-padding uk-padding-remove-top">
        @isset($page->content{0}->sectionImage)
        <div class="uk-background-cover uk-height-large uk-panel "
            style="background-image: url('{{asset($page->content{0}->sectionImage)}}');">
        </div>
        @endisset
    </div>
    <div uk-grid>
        <div class="uk-width-1-5 uk-margin-remove-top"></div>
        <div class="uk-width-3-5 uk-margin-remove-top">
            <p class="uk-text-center">
                {!!$page->content{1}->sectionContent!!}
            </p>
        </div>
        <div class="uk-width-1-5 uk-margin-remove-top"></div>
    </div>
</div>
@endif
@stop