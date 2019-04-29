@section('title') | About Us @endsection
@extends('layouts.frontend') 
@section('content')
<section class="mbr-section content5 cid-roVukTcMBF mbr-parallax-background " style="background-image: url('{{$page->banner}}');" id="content5-1j">
        <div class="mbr-overlay" style="opacity: 0.4; background-color: rgb(35, 35, 35);">
        </div>
    
        <div class="container">
            <div class="media-container-row">
                <div class="title col-12 col-md-8">
                    <h2 class="align-center mbr-bold mbr-white pb-3 mbr-fonts-style display-2"><span style="font-weight: normal;">
                    {{$page->title}}
                    </span></h2>
                </div>
            </div>
        </div>
    </section>
    
    <section class="mbr-section content4 cid-roVsvgVB6W" id="content4-1a">
        <div class="container">
            <div class="media-container-row">
                <div class="title col-12 col-md-8">
                    <h2 class="align-center pb-3 mbr-fonts-style display-5">
                        @isset($page->content{0}->sectionTitle)
                        {!!$page->content{0}->sectionTitle!!}
                        @endisset
                    </h2>
                    <h3 class="mbr-section-subtitle align-center mbr-light mbr-fonts-style display-5">
                        @isset($page->content{0}->sectionContent)
                        {!!$page->content{0}->sectionContent!!}
                        @endisset
                    </h3>
                    
                </div>
            </div>
        </div>
    </section>
    
    <section class="testimonials1 cid-roVvQHup0F" id="testimonials1-1s">
        <div class="container">
            <div class="media-container-row">
                <div class="title col-12 align-center">
                    <h2 class="pb-3 mbr-fonts-style display-2">
                        WHAT OUR FANTASTIC USERS SAY
                    </h2>
                    <h3 class="mbr-section-subtitle mbr-light pb-3 mbr-fonts-style display-5">
                        This theme is based on Bootstrap 4 - most powerful mobile first framework
                    </h3>
                </div>
            </div>
        </div>
    
        <div class="container pt-3 mt-2">
            @foreach($teams->chunk(3) as $items)
            <div class="media-container-row">
                @foreach ($items as $team)
                <div class="mbr-testimonial p-3 align-center col-12 col-md-6 col-lg-4">
                    <div class="panel-item p-3">
                        <div class="card-block">
                            <div class="testimonial-photo" style="height: 200px; width: 200px;">
                                <img src="{{ asset($team->avatar) }}">
                            </div>
                            <p class="mbr-text mbr-fonts-style display-7">
                                    {!! substr($team->description, 0, 55) !!} 
                                    @if (strlen($team->description) > 55) ....
                                    <a href="#" uk-toggle="target: #team-member-{{$loop->iteration}}">Read more</a> 
                                    @endif
                            </p>
                        </div>
                        <div class="card-footer">
                            <div class="mbr-author-name mbr-bold mbr-fonts-style display-7">
                                 {{$team->name}}
                            </div>
                            <small class="mbr-author-desc mbr-italic mbr-light mbr-fonts-style display-7">
                                   {{$team->designation}}
                            </small>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            @endforeach
        </div>   
    </section>
    
    <section class="mbr-section content4 cid-roVtc8RH17" id="content4-1e">
        <div class="container">
            <div class="media-container-row">
                <div class="title col-12 col-md-8">
                    <h2 class="align-center pb-3 mbr-fonts-style display-2">
                            @isset($page->content{1}->sectionTitle)
                            {!!$page->content{1}->sectionTitle!!}
                            @endisset
                    </h2>
                    
                    
                </div>
            </div>
        </div>
    </section>
    
    <section class="cid-roVtFI87iu" id="image2-1h">
        <figure class="mbr-figure container">
            <div class="image-block" style="width: 100%;">
                <img src="assets/images/background4.jpg" alt="Mobirise" title="">
            </div>
        </figure>
    </section>
    
    <section class="mbr-section article content1 cid-roVuHyJKGB" id="content1-1l">
        <div class="container">
            <div class="media-container-row">
                <div class="mbr-text col-12 mbr-fonts-style display-7 col-md-8"><p>
                    @isset($page->content{1}->sectionContent)
                    {!!$page->content{1}->sectionContent!!}
                    @endisset                    
            </div>
        </div>
    </section>
@stop