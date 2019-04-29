@section('title') | Frequently Asked Question
@endsection
 
@extends('layouts.frontend') 
@section('content')
<section class="mbr-section content5 cid-roVrsM02uD mbr-parallax-background" style="background-image: url('{{$page->banner}}');" id="content5-11">
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

<section class="mbr-section article content9 cid-roVrtvjGWe" id="content9-12">



    <div class="container">
        <div class="inner-container" style="width: 100%;">
            <hr class="line" style="width: 25%;">
            <div class="section-text align-center mbr-fonts-style display-5">
                {!!$page->content{0}->sectionContent!!}
            </div>
            <hr class="line" style="width: 25%;">
        </div>
    </div>
</section>

<section class="accordion1 cid-roVrwTk5cy" id="accordion1-13">
    <div class="container">
        <div class="media-container-row">
            <div class="col-12 col-md-12">
                <div class="section-head text-center space30">
                    <h2 class="mbr-section-title pb-5 mbr-fonts-style display-2">
                            {!!$page->content{0}->sectionTitle!!}
                    </h2>
                </div>
                <div class="clearfix"></div>
                <div id="bootstrap-accordion_38" class="panel-group accordionStyles accordion" role="tablist" aria-multiselectable="true">
                    @foreach ($faqs as $faq)
                    <div class="card">
                        <div class="card-header" role="tab" id="headingOne">
                            <a role="button" class="panel-title collapsed text-black" data-toggle="collapse" data-core="" href="#collapse{{$loop->iteration}}_38" aria-expanded="false"
                                aria-controls="collapse1">
                                <h4 class="mbr-fonts-style display-5">
                                    <span class="sign mbr-iconfont mbri-arrow-down inactive"></span> {{$faq->query}}
                                </h4>
                            </a>
                        </div>
                        <div id="collapse{{$loop->iteration}}_38" class="panel-collapse noScroll collapse " role="tabpanel" aria-labelledby="headingOne" data-parent="#bootstrap-accordion_38">
                            <div class="panel-body p-4">
                                <p class="mbr-fonts-style panel-text display-7">
                                    {{$faq->answer}}
                                </p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

@stop