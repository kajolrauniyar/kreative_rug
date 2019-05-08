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
        @foreach($teams->chunk(3) as $items)
        <div uk-grid>
            @foreach ($items as $team)
            <div class="uk-width-1-3@m uk-width-1-1@s">
                <div class="uk-card uk-card-default ">
                    <div class="uk-card-media-top">
                        <img src="{{ asset($team->avatar) }}" alt="{{$team->name}}">
                    </div>
                    <div class="uk-card-body uk-padding-small uk-text-center">
                        <h3 class="uk-card-title uk-margin-remove-bottom">{{$team->name}}</h3>
                        <p class="designation uk-margin-remove-top">{{$team->designation}}</p>
                        <p class="description uk-margin-remove-top">
                            {!! substr($team->description, 0, 100) !!} @if (strlen($team->description) > 100) ....
                            <a href="#" uk-toggle="target: #team-member-{{$loop->iteration}}">Read more</a> @endif
                        </p>
                    </div>
                </div>
            </div>
            <!-- This is the modal with the outside close button -->
            <div id="team-member-{{$loop->iteration}}" uk-modal>
                <div class="uk-modal-dialog uk-modal-body">
                    <button class="uk-modal-close-outside" type="button" uk-close></button>
                    <p class="uk-margin-remove-top">{!!$team->description!!}</p>
                </div>
            </div>
            @endforeach
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
        <div class="uk-background-cover uk-height-large uk-panel " style="background-image: url('{{asset($page->content{0}->sectionImage)}}');">
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