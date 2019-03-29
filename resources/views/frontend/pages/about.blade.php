@extends('layouts.frontend') 
@section('content')
<section class="image-page-header">
    <div class="image-wrapper" data-src="{{asset('img/hero.jpg')}}" uk-img>
        <h1 class="image-header-text">Background Image</h1>
    </div>
</section>
<section class="uk-section-default uk-padding-small-top uk-padding-small-bottom">
    <div class="uk-container uk-padding uk-padding-remove-horizontal">
        <div uk-grid>
            <div class="uk-width-1-1">
                <div class="section-title">
                    <h3 class="heading-tertiary">The Kreative Rugs Concept:</h3>
                    <span class="divide-line"></span>
                </div>
            </div>
            <div class="uk-width-1-5 uk-margin-remove-top"></div>
            <div class="uk-width-3-5 uk-margin-remove-top">
                <p class="uk-text-center">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quae iusto soluta quisquam autem architecto unde, veritatis blanditiis
                    necessitatibus. Neque assumenda recusandae sapiente consequuntur laboriosam a quae corporis vero explicabo
                    ipsam adipisci dignissimos necessitatibus, quaerat tempora fugit officia minima debitis architecto earum?
                    Veniam dignissimos ea nobis cupiditate sequi ipsam. Illo, dolores.
                </p>
            </div>
            <div class="uk-width-1-5 uk-margin-remove-top"></div>
        </div>
    </div>
    <div class="uk-height-medium uk-flex uk-flex-center uk-flex-middle uk-background-cover" data-src="{{asset('img/hero.jpg')}}"
        uk-img style="height:auto">
        <div class="uk-flex uk-flex-column uk-width-2-3 uk-padding uk-padding-remove-horizontal uk-text-center">
            <h2 class="uk-margin-small-bottom uk-margin-remove-top">Test</h2>
            <h5 class="uk-margin-small-bottom uk-margin-remove-top">Test</h5>
            <p class="uk-margin-small-bottom uk-margin-remove-top">Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic maxime omnis nobis accusamus facere odio culpa provident
                doloremque aliquam soluta non velit, nihil fugiat deleniti quaerat cum? Non illum explicabo dolorum amet
                quisquam cumque commodi, unde eligendi fuga consequuntur sit.</p>
            <p>
                <button class="uk-button uk-button-secondary">Secondary</button>
            </p>
        </div>
    </div>

</section>
<section class="uk-section-default uk-padding-small-top uk-padding-small-bottom">
    <div uk-grid class="uk-padding">
        <div class=" uk-width-1-5"></div>
        <div class=" uk-width-3-5">
            <div class="section-title">
                <h3 class="heading-tertiary">The Kreative Rugs Concept:</h3>
                <span class="divide-line"></span>
            </div>
            <div class="section-content">
                <div class="section-content__centered">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Enim, quisquam corporis eius impedit nam in recusandae repellat
                    blanditiis, cum eos accusamus inventore ut sunt quidem accusantium animi quam ullam deleniti assumenda,
                    explicabo eaque ratione qui?
                </div>
            </div>
        </div>
        <div class=" uk-width-1-5">
        </div>
    </div>
</section>
<div class="uk-section-muted uk-padding-small uk-padding-remove-horizontal">
    <div class="uk-container uk-padding">
        @foreach($teams->chunk(3) as $items)
        <div uk-grid>
            @foreach ($items as $team)               
            <div class="uk-width-1-3@m uk-width-1-1@s">
                <div class="uk-card uk-card-default">
                    <div class="uk-card-media-top">
                        <img src="{{ asset($team->avatar) }}" alt="{{$team->name}}">                        
                    </div>
                    <div class="uk-card-body uk-padding-small">
                        <h3 class="uk-card-title uk-margin-remove-bottom">{{$team->name}}</h3>
                        <p class="designation uk-margin-remove-top">{{$team->designation}}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        @endforeach
        <div uk-grid>
            <div class="uk-width-1-5"></div>
            <div class="uk-width-3-5 uk-text-center">
                <h5>Our Artisans</h5>
                <p>Last but definitely not least, our company is made up of our very talented artisans who are, of course, the
                    heart, soul and core of our company.Without their hard work and dedication, nothing would be possible.
                    All our artisans have years of experience under their belt which gives us immense pride and drive us
                    to deliver our best, every step of the way.</p>
            </div>
            <div class="uk-width-1-5"></div>
        </div>
    </div>
</div>


@stop