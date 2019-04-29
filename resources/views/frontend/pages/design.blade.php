@extends('layouts.frontend') 
@section('content')
{{-- <section class="uk-section uk-section-muted">
  <div class="uk-container">
    <div class="section-title">
      <h2 class="heading-secondary">The Creative Process</h2>
      <span class="divide-line"></span>
    </div>
  </div>

  <div class="uk-container uk-margin-top uk-visible@m">

    <div class="uk-child-width-1-4 first-row uk-height-match" uk-grid>
      <div class="step-first-row">
        <img src="{{ asset('img/1.png') }}" alt="" srcset="">
        <div class="step-title">
          Connect With Us
        </div>
        <div class="step-content">
          Share your ideas with us, either using the contact form or via email at info@kreativerugs.com.
        </div>
      </div>
      <div class="step-first-row">
        <img src="{{ asset('img/2.png') }}" alt="" srcset="">
        <div class="step-title">
          Idea Development
        </div>
        <div class="step-content">
          Our designing team will work on your idea, and eventually contact you for further information, if needed.
        </div>
      </div>
      <div class="step-first-row">
        <img src="{{ asset('img/3.png') }}" alt="" srcset="">
        <div class="step-title">
          Submit Design
        </div>
        <div class="step-content">
          Based on your ideas, our designing team will present a few design options (digital renderings).
        </div>
      </div>
      <div class="step-first-row">
        <img src="{{ asset('img/4.png') }}" alt="" srcset="">
        <div class="step-title">
          Feedback
        </div>
        <div class="step-content">
          We will await feedback any changes asked can be inforporeated and re-sent.
        </div>
      </div>

    </div>

    <div class="uk-child-width-1-4 second-row uk-margin-remove-top uk-height-match" uk-grid>
      <div class="second-row-step">
        <img src="{{ asset('img/8.png') }}" alt="" srcset="">
        <div class="step-title">
          Strike Off
        </div>
        <div class="step-content">
          Upon approva, a carefully selected sample of selected portion of the rug will be woven and sen to you to ensure the color
          is right. (Not mandatory, however advised, as rug color may be slightly vary from the digital rendition).
        </div>
      </div>
      <div class="second-row-step">
        <img src="{{ asset('img/7.png') }}" alt="" srcset="">
        <div class="step-title">
          Weaving
        </div>
        <div class="step-content">
          Upon satisfaction with the 'strike-off', our artisans will start their work and an accurate delivery date will be confirmed.
        </div>
      </div>
      <div class="second-row-step">
        <img src="{{ asset('img/6.png') }}" alt="" srcset="">
        <div class="step-title">
          Update
        </div>
        <div class="step-content">
          Interested in getting updates ? Let us know, and we would be more than happy to send your pictures of your rug as it undergoes
          different stages of production.
        </div>
      </div>
      <div class="second-row-step">
        <img src="{{ asset('img/5.png') }}" alt="" srcset="">
        <div class="step-title">
          Shipping
        </div>
        <div class="step-content">
          Almost there - the rug, upon completion, will be shipped to you via express cargo.
        </div>
      </div>
    </div>

  </div>

  <div class="uk-container uk-margin-top">
    <div class="section-title">
      <h2 class="heading-secondary">{!!$page->content{0}->sectionTitle!!}</h2>
      <span class="divide-line"></span>
    </div>
    <div class="section-content">
      <div class="section-content__centered">
        {!!$page->content{0}->sectionContent!!}
      </div>
    </div>
  </div>
</section> --}}
<section class="mbr-section content5 cid-roVwAzri7p mbr-parallax-background" style="background-image: url('{{$page->banner}}');" id="content5-1v">
    <div class="container">
        <div class="media-container-row">
            <div class="title col-12 col-md-8">
                <h2 class="align-center mbr-bold mbr-white pb-3 mbr-fonts-style display-2"><span style="font-weight: normal;">
                    {{$page->title}}
                </span>
              </h2>  
            </div>
        </div>
    </div>
</section>

<section class="mbr-section content4 cid-roVwXsujZ9" id="content4-1z">

    

    <div class="container">
        <div class="media-container-row">
            <div class="title col-12 col-md-8">                
                <h3 class="mbr-section-subtitle align-center mbr-light mbr-fonts-style display-5">
                    {{$page->content{0}->sectionTitle}}
                </h3>
                
            </div>
        </div>
    </div>
</section>

<section class="mbr-section article content9 cid-roVwXWWJfI" id="content9-20">
    
     

    <div class="container">
        <div class="inner-container" style="width: 100%;">
            <hr class="line" style="width: 10%;">
            <div class="section-text align-center mbr-fonts-style display-7">
                {!!$page->content{0}->sectionContent!!}
                </div>
            <hr class="line" style="width: 10%;">
        </div>
        </div>
</section>

<section class="mbr-section form1 cid-roVwKFCujx" id="form1-1y">

    

    
    <div class="container">
        <div class="row justify-content-center">
            <div class="title col-12 col-lg-8">
                
                <h3 class="mbr-section-subtitle align-center mbr-light pb-3 mbr-fonts-style display-5">
                    Connect with our Kreative Team
                </h3>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="media-container-column col-lg-8" data-form-type="formoid">
                <!---Formbuilder Form--->
                <form action="#" method="POST" class="mbr-form form-with-styler" data-form-title="Mobirise Form">
                  <input type="hidden" name="email" data-form-email="true" value="KhUZexe9/X0VEURZfoinIcN9CIPaD0YmzHm9+6xxlfuVcVLkP+wTSQ390Dwpj86yxIBUWD/AoP2M9yCTALxQm/Obd1jlfcP8jHpyX2X7JPbcKNBlvm1uj0XwGAQucZ8w">
                    <div class="row row-sm-offset">
                        <div hidden="hidden" data-form-alert="" class="alert alert-success col-12">Thanks for filling out the form!</div>
                        <div hidden="hidden" data-form-alert-danger="" class="alert alert-danger col-12">
                        </div>
                    </div>
                    <div class="dragArea row row-sm-offset">
                        <div class="col-md-4  form-group" data-for="name">
                            <label for="name-form1-1y" class="form-control-label mbr-fonts-style display-7">Name</label>
                            <input type="text" name="name" data-form-field="Name" required="required" class="form-control display-7" id="name-form1-1y">
                        </div>
                        <div class="col-md-4  form-group" data-for="email">
                            <label for="email-form1-1y" class="form-control-label mbr-fonts-style display-7">Email</label>
                            <input type="email" name="email" data-form-field="Email" required="required" class="form-control display-7" id="email-form1-1y">
                        </div>
                        <div data-for="phone" class="col-md-4  form-group">
                            <label for="phone-form1-1y" class="form-control-label mbr-fonts-style display-7">Phone</label>
                            <input type="tel" name="phone" data-form-field="Phone" class="form-control display-7" id="phone-form1-1y">
                        </div>
                        <div data-for="message" class="col-md-12 form-group">
                            <label for="message-form1-1y" class="form-control-label mbr-fonts-style display-7">Message</label>
                            <textarea name="message" data-form-field="Message" class="form-control display-7" id="message-form1-1y"></textarea>
                        </div>
                        <div class="col-md-12 input-group-btn align-center">
                          <button type="submit" class="btn btn-form btn-black display-4">SEND </button>
                        </div>
                    </div>
                </form><!---Formbuilder Form--->
            </div>
        </div>
    </div>
</section>
@endsection