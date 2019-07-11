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
@if (isset($page->content{1}->sectionTitle) && isset($page->content{1}->sectionContent))
<div class="uk-light" uk-grid>
        <div class="section-title uk-width-1-1">
                <h4 class="heading-tertiary uk-dark">{!!$page->content{1}->sectionTitle!!}</h4>
                <span class="divide-line"></span>
            </div>
    <div class="uk-background-cover uk-height-medium uk-panel uk-flex uk-flex-center uk-flex-middle uk-width-1-1" style="background-image: url(https://source.unsplash.com/2024x768/?wine-bottle);">
        {{-- {!!$page->content{1}->sectionContent!!} --}}
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident impedit atque eius? Dolorem deleniti perferendis deserunt nisi magnam minima sed aperiam? Eos blanditiis nisi, culpa explicabo beatae possimus, quisquam inventore accusantium aut excepturi ratione optio? Magnam vero expedita dolores odio esse animi praesentium nobis iste modi nisi hic commodi illo adipisci eum ullam minus, voluptatum facere eius, distinctio at deleniti consectetur amet? Hic temporibus, quis maxime id porro eos excepturi doloremque expedita magnam, ipsum laboriosam, blanditiis tempora accusantium tempore provident perferendis. Vel laboriosam consequuntur voluptatum fugit nobis tempora. Mollitia minima quos quae quisquam ullam temporibus illum, ex dolore maxime saepe et natus sapiente facilis facere! Numquam neque deserunt reprehenderit natus debitis, dolor eligendi sequi provident maxime quo. Deleniti consectetur quia cum quis fuga blanditiis ea nesciunt optio perspiciatis, voluptates et sed sunt exercitationem sint natus. Quibusdam placeat quaerat laborum fuga officia, delectus distinctio impedit, totam molestias molestiae ipsum consequuntur vero sint accusantium doloremque repudiandae! Nostrum debitis expedita rerum itaque distinctio eos, at pariatur ipsa quia voluptatibus modi veniam incidunt numquam porro perspiciatis, odit aut. Eveniet repellendus illo nihil hic ducimus sit, ab cumque modi asperiores aut exercitationem, odit obcaecati dolore! Corrupti fugit ipsam quam exercitationem consequuntur ratione sunt aperiam accusantium?
    </div>
</div>
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

{{-- @if (isset($page->content{1}->sectionTitle) && isset($page->content{1}->sectionContent))
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
@endif --}}
@stop