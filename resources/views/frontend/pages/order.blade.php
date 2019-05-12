@section('title') | Rug Making Process @endsection
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
<section class="uk-section-default uk-padding-small-top uk-padding-small-bottom">
    <div class="uk-container uk-padding uk-padding-remove-horizontal">
        @foreach ($processes as $process)
        @if ($loop->iteration%2 == 0 )
        <div uk-grid>
            <div class="uk-width-1-2">
            <h3 class="uk-h3">{{$loop->iteration}}. {{$process->title}}</h3>
                <p>
                    {{$process->description}}
                </p>
            </div>
            <div class="uk-width-1-2">
                <img src="{{ asset($process->path) }}" alt="{{$process->title}}">
            </div>
        </div>
        @else
        <div uk-grid>
            <div class="uk-width-1-2">
                <img src="{{ asset($process->path) }}" alt="{{$process->title}}">
            </div>
            <div class="uk-width-1-2">
                <h3 class="uk-h3">{{$loop->iteration}}. {{$process->title}}</h3>
                <p>
                    {{$process->description}}
                </p>
            </div>
        </div>
        @endif
        @endforeach
    </div>
</section>
@endsection