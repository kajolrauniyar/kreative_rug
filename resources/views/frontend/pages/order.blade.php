@extends('layouts.frontend') 
@section('content')
<section class="image-page-header">
    <div class="image-wrapper uk-light" data-src="{{asset('img/process.jpg')}}" uk-img>
        <h1 class="image-header-text">Rug Making Process</h1>
    </div>
</section>
<section class="uk-section-default uk-padding-small-top uk-padding-small-bottom">
    <div class="uk-container uk-padding uk-padding-remove-horizontal">
        <p class="uk-h4 uk-text-center">Small paragraph to stress about our commitments Our rugs are handcrafted in a traditional manner, just as it used
            to be centuries ago. unlike other rugs made using machines, our rugs are made lovingly by hand hence it posses
            an exquisite look. Each rug takes several days & weeks to complete. Our experienced & dedicated craftsman have
            a visionary eye to excel in art & drive creativity.
        </p>
        <div uk-grid>
            <div class="uk-width-1-2">
                <h3 class="uk-h3">Source of the raw material</h3>
                <p>The process of making rug starts with sourcing of raw materials. breeders come from Tibet to sell the wool,
                    silk & when the material arrives, we proceed further. we use both silk & wool to make our rugs.
                </p>
            </div>
            <div class="uk-width-1-2">
                <img src="{{asset('img/raw.jpg')}}" alt="">
            </div>
        </div>
        <div uk-grid>
            <div class="uk-width-1-2">
                <img src="{{ asset('img/spin.jpg') }}" alt="">
            </div>
            <div class="uk-width-1-2">
                <h3 class="uk-h3">Hand carding and hand spinning</h3>
                <p>After the material arrives, then comes hand carding-weavers use hand machines locally called " charkha" for
                    processing & making yarn. For this process- the locals form the countryside region will assist us. On
                    completion, you will likely see the following image. Later it is brought back to our weaving location
                    in Kathmandu for washing
                </p>
            </div>
        </div>

        <div uk-grid>
            <div class="uk-width-1-2">
                <h3 class="uk-h3">Dyeing</h3>
                <p>To create colourful dyes, we follow the practice of collecting plant dyes. These plant dyes are non-toxic
                    ingredients includes swiss Sandoz colours. moreover, in a traditional manner- "pot dyeing". The Firewood
                    is used for this purpose because the inconsistent heat infuses an organic uneven look into the dyed yarn
                    giving an extra beauty to the final rug. Contingent upon the ideal shade, this procedure can be long
                    and the yarn must be washed four to multiple times again to remove any natural residue. Later the yarn
                    is ‘sun-dried’ & on drying, the yarn is put into balls & is ready to be woven.

                </p>
            </div>
            <div class="uk-width-1-2">
                <img src="{{ asset('img/dye.jpg') }}" alt="">
            </div>
        </div>
        <div uk-grid>
            <div class="uk-width-1-2">
                <img src="{{ asset('img/weave.jpg') }}" alt="">
            </div>
            <div class="uk-width-1-2">
                <h3 class="uk-h3">Weaving</h3>
                <p>For the weaving process, there are 3 0r 4 weavers involved according to the size of the rug. The Tibetan
                    Rugs are woven by folding a persistent length of yarn around a bar laid over the warps stretched on the
                    loom. At the point when the pole has been wrapped for its whole length, a blade is slid along the bar,
                    cutting the wrapped yarn into two lines of pile tufts.
                </p>
            </div>
        </div>

        <div uk-grid>
            <div class="uk-width-1-2">
                <h3 class="uk-h3">Clipping</h3>
                <p>Here comes the clipping process. For clipping the rug is first removed from the loom & put flat on the floor
                    for the clipping-a process to make the irregular surface even. However, there are speculations about
                    Tibetan rugs that the rug can't be 100% even unlike machine-made rugs.

                </p>
            </div>
            <div class="uk-width-1-2">
                <img src="https://source.unsplash.com/640x480/?nature" alt="">
            </div>
        </div>
        <div uk-grid>
            <div class="uk-width-1-2">
                <img src="https://source.unsplash.com/640x480/?nature" alt="">
            </div>
            <div class="uk-width-1-2">
                <h3 class="uk-h3">Embossing/carving</h3>
                <p>Carving-a process of cutting a groove into carpet pile to create the 3-dimensional look. Embossing- a technique
                    used in finishing carpets in which feathered incisions are made in the pile where different colours meet.

                </p>
            </div>
        </div>

        <div uk-grid>
            <div class="uk-width-1-2">
                <h3 class="uk-h3">Cleaning/Washing</h3>
                <p>After rugs make it way through carving/embossing process, the carpet is washed again. This process involves
                    the traditional way of washing a wooden block is run up & down the carpet surface to break through the
                    fibres & offer it through clean. Later it is again sun-dried.
                </p>
            </div>
            <div class="uk-width-1-2">
                <img src="{{ asset('img/wash.jpg') }}" alt="">
            </div>
        </div>
        <div uk-grid>
            <div class="uk-width-1-2">
                <img src="https://source.unsplash.com/640x480/?nature" alt="">
            </div>
            <div class="uk-width-1-2">
                <h3 class="uk-h3">Finishing Touches</h3>
                <p>The final touches are very important to have the desired look. During the process, the carving, clipping
                    process can be repeated & applied if necessary. Finally, Fringe can be added at your discretion.
                </p>
            </div>
        </div>

    </div>
</section>
@endsection