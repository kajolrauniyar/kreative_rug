@extends('layouts.frontend') 
@section('content')
<section class="header9 cid-roViXoCzPj mbr-fullscreen" id="header9-0" style="background-image: url('{{$home->banner}}');">

    

        <div class="mbr-overlay" style="opacity: 0.4; background-color: rgb(35, 35, 35);">
        </div>
    
        <div class="container">
            <div class="media-container-column mbr-white col-lg-8 col-md-10 m-auto">
                <h1 class="mbr-section-title align-left mbr-bold pb-3 mbr-fonts-style display-1"><span style="font-weight: normal;">
                    {{$home->heading}}
                </span></h1>
                <h3 class="mbr-section-subtitle align-left mbr-light pb-3 mbr-fonts-style display-2"><span style="font-style: normal;">
                        {{$home->subheading}}</span>
                </h3>
                
                
            </div>
        </div>
    
        <div class="mbr-arrow hidden-sm-down" aria-hidden="true">
            <a href="#next">
                <i class="mbri-down mbr-iconfont"></i>
            </a>
        </div>
    </section>

<section class="header3 cid-roVkN41TA4" id="header3-7">
    <div class="container">
        <div class="media-container-row">
            <div class="mbr-figure" style="width: 90%;">
                <img src="{{$home->section1_image}}" alt="{{config('app.name')}}">
            </div>

            <div class="media-content">

                <h3 class="mbr-section-subtitle align-left mbr-white mbr-light pb-3 mbr-fonts-style display-2">
                    {{$home->section1_title}}
                </h3>
                <div class="mbr-section-text mbr-white pb-3 ">
                    <p class="mbr-text mbr-fonts-style display-7">
                        {{$home->section1_content}}
                    </p>
                </div>

            </div>
        </div>
    </div>

</section>

<section class="header3 cid-roVlIlHZzX"  id="header3-8">
    <div class="container">
        <div class="media-container-row">
            <div class="mbr-figure" style="width: 90%;">
                <img src="{{$home->section2_image}}" alt="{{config('app.name')}}">
            </div>

            <div class="media-content">

                <h3 class="mbr-section-subtitle align-left mbr-white mbr-light pb-3 mbr-fonts-style display-2">
                    {{$home->section2_title}}
                </h3>
                <div class="mbr-section-text mbr-white pb-3 ">
                    <p class="mbr-text mbr-fonts-style display-7">
                        {{$home->section2_content}}
                    </p>
                </div>

            </div>
        </div>
    </div>

</section>

<section class="mbr-section info3 cid-roVmqkjWQh" id="info3-b" style="background-image: url({{asset($home->section3_image)}});" >    

        <div class="mbr-overlay" style="opacity: 0.5; background-color: rgb(35, 35, 35);">
        </div>
    
        <div class="container">
            <div class="row justify-content-center">
                <div class="media-container-column title col-12 col-md-10">
                    <h2 class="align-left mbr-bold mbr-white pb-3 mbr-fonts-style display-5">
                        {{$home->section3_title}}
                    </h2>
                    
                    <p class="mbr-text align-left mbr-white mbr-fonts-style display-7">
                        {{$home->section3_content}}
                    </p>
                    <div class="mbr-section-btn align-left py-4"><a class="btn btn-white-outline display-4" href="#">Discover</a></div>
                </div>
            </div>
        </div>
    </section>

<section class="header3 cid-roVmMtPRRm" id="header3-c">
    <div class="container">
        <div class="media-container-row">
            <div class="mbr-figure" style="width: 90%;">
                <img src="{{$home->section4_image}}" alt="{{config('app.name')}}">
            </div>

            <div class="media-content">

                <h3 class="mbr-section-subtitle align-left mbr-white mbr-light pb-3 mbr-fonts-style display-2">
                   {{$home->section4_title}}
                </h3>
                <div class="mbr-section-text mbr-white pb-3 ">
                    <p class="mbr-text mbr-fonts-style display-7">
                        {{$home->section4_content}}
                    </p>
                </div>

            </div>
        </div>
    </div>

</section>

<section class="mbr-section content5 cid-roVniTiCv4" style="background-image: url({{asset($home->section5_image)}});" id="content5-e">
    <div class="container">
        <div class="media-container-row">
            <div class="title col-12 col-md-8">

                <h3 class="mbr-section-subtitle align-center mbr-light mbr-white pb-3 mbr-fonts-style display-5">
                        {{$home->section5_title}}
                </h3>
                <p class="mbr-text align-center mbr-white pb-3 mbr-fonts-style display-7">
                        {{$home->section5_content}}
                </p>

            </div>
        </div>
    </div>
</section>
@stop