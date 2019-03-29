@extends('layouts.backend')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card card-tiles style-default-light">

            <!-- BEGIN BLOG POST HEADER -->
            <div class="row">
                <div class="col-sm-9">
                    <div class="card-body style-default-dark">
                        <h2>{{ $page->title}}</h2>
                        <div class="text-default-light">
                            Status:
                            @if($page->status == 0)
                            Unpublished
                            @else
                            Published
                            @endif
                        </div>
                        <div class="text-default-light">
                        </div>
                    </div>
                </div><!--end .col -->
                <div class="col-sm-3">
                    <div class="card-body">
                        <a href="{{ route('page.index') }}"
                        class="btn btn-block ink-reaction btn-success">Save</a>
                        <a href="{{ route('page.edit',$page->id) }}"
                         class="btn btn-block ink-reaction btn-info">Edit</a>
                     </div>
                 </div><!--end .col -->
             </div><!--end .row -->
             <!-- END BLOG POST HEADER -->

             <div class="row">

                <!-- BEGIN BLOG POST TEXT -->
                <div class="col-md-12">
                    <article class="style-default-bright">
                        <div class="card-body">
                            <div class="banner" style="background-image: url({{asset($page->banner) }});    height: 60vh;
                                    background-size: contain; "></div>
                                    @foreach ($page->content as $content)
                                    <h4>{{$content->sectionTitle}}</h4>
                                    <p class="lead">
                                            {!! $content->sectionContent !!}
                                        </p>
                                    @endforeach
                        </div><!--end .card-body -->
                    </article>
                </div><!--end .col -->
                <!-- END BLOG POST TEXT -->
            </div><!--end .row -->
        </div><!--end .card -->
    </div><!--end .col -->
</div><!--end .row -->
@stop
