@extends('layouts.frontend')
@section('content')
    <section class="image-page-header" data-src="{{asset($page->banner)}}" uk-img>
      <div class="page-title__wrapper">
          <h1 class="uk-position-large uk-position-center-right" style="bottom: 16%; left: 4%;">{{$page->title}}</h1>
      </div>
</section>
<section class="uk-section uk-section-muted">
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
  <div class="uk-container">
    <div class="section-title">
      <h2 class="heading-secondary">8 steps to your perfect rug.</h2>
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
          Upon approva, a carefully selected sample of selected portion of the rug will be woven and sen to you to
          ensure the color
          is right. (Not mandatory, however advised, as rug color may be slightly vary from the digital rendition).
        </div>
      </div>
      <div class="second-row-step">
        <img src="{{ asset('img/7.png') }}" alt="" srcset="">
        <div class="step-title">
          Weaving
        </div>
        <div class="step-content">
          Upon satisfaction with the 'strike-off', our artisans will start their work and an accurate delivery date will
          be confirmed.
        </div>
      </div>
      <div class="second-row-step">
        <img src="{{ asset('img/6.png') }}" alt="" srcset="">
        <div class="step-title">
          Update
        </div>
        <div class="step-content">
          Interested in getting updates ? Let us know, and we would be more than happy to send your pictures of your rug
          as it undergoes
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

  <div class="uk-container uk-margin-top uk-hidden@m">

    <div class="uk-child-width-1-2 uk-height-match mobile-odd-wrapper" uk-grid>

      <div class="uk-text-center first">
          <img src="{{ asset('img/1.png') }}" alt="" srcset="">
          <div class="mobile-step-title">
            1. Connect With Us
          </div>
          <div class="mobile-step-content">
            Share your ideas with us, either using the contact form or via email at info@kreativerugs.com.
          </div>
      </div>

      <div class="uk-text-center second">
          <img src="{{ asset('img/2.png') }}" alt="" srcset="">
          <div class="mobile-step-title">
            2. Idea Development
          </div>
          <div class="mobile-step-content">
            Our designing team will work on your idea, and eventually contact you for further information, if needed.
          </div>        
      </div>
    </div>

    <div class="uk-child-width-1-2 uk-height-match  mobile-even-wrapper" uk-grid>
      <div class="uk-text-center first">
          <img src="{{ asset('img/3.png') }}" alt="" srcset="">
          <div class="mobile-step-title">
           3. Submit Design
          </div>
          <div class="mobile-step-content">
            Based on your ideas, our designing team will present a few design options (digital renderings).
          </div>
      </div>

        <div class="uk-text-center second">
            <img src="{{ asset('img/4.png') }}" alt="" srcset="">
            <div class="mobile-step-title">
              4. Feedback
            </div>
            <div class="mobile-step-content">
              We will await feedback any changes asked can be inforporeated and re-sent.
            </div>
        </div>
    </div>

    <div class="uk-child-width-1-2 uk-height-match  mobile-odd-wrapper" uk-grid>
        <div class="uk-text-center first">
            <img src="{{ asset('img/8.png') }}" alt="" srcset="">
            <div class="mobile-step-title">
            5. Strike Off
            </div>
            <div class="mobile-step-content">
              Upon approva, a carefully selected sample of selected portion of the rug will be woven and sen to you to
              ensure the color
              is right. (Not mandatory, however advised, as rug color may be slightly vary from the digital rendition).
            </div>
          </div>
          <div class="uk-text-center second">
            <img src="{{ asset('img/7.png') }}" alt="" srcset="">
            <div class="mobile-step-title">
              6. Weaving
            </div>
            <div class="mobile-step-content">
              Upon satisfaction with the 'strike-off', our artisans will start their work and an accurate delivery date will
              be confirmed.
            </div>
          </div>
    </div>

    <div class="uk-child-width-1-2 uk-height-match  mobile-even-wrapper" uk-grid>
        <div class="uk-text-center first">
            <img src="{{ asset('img/6.png') }}" alt="" srcset="">
            <div class="mobile-step-title">
              Update
            </div>
            <div class="mobile-step-content">
              Interested in getting updates ? Let us know, and we would be more than happy to send your pictures of your rug
              as it undergoes
              different stages of production.
            </div>
          </div>
          <div class="uk-text-center second">
            <img src="{{ asset('img/5.png') }}" alt="" srcset="">
            <div class="mobile-step-title">
              Shipping
            </div>
            <div class="mobile-step-content">
              Almost there - the rug, upon completion, will be shipped to you via express cargo.
            </div>
          </div>      
    </div>
  </div>

</section>
<div class="uk-container uk-margin-top" style="background:white !important;">
  <div class="section-title">
    <h2 class="heading-secondary">Design Your Own Rug</h2>
    <span class="divide-line"></span>
  </div>
  <div class="section-content">
    <form action="{{ route('frontend.customDesign') }}" method="POST" class="uk-form-stacked"
      enctype="multipart/form-data">
      @csrf
      <div uk-grid>
        <div class="uk-width-1-1 uk-width-1-2@m">
          <label class="uk-form-label" for="name">Name</label>
          <div class="uk-form-controls">
            <input class="uk-input" id="name" type="text" placeholder="Jane Doe" name="fullName">
          </div>
        </div>
        <div class="uk-width-1-1 uk-width-1-2@m">
          <label class="uk-form-label" for="email">Email</label>
          <div class="uk-form-controls">
            <input class="uk-input" id="email" type="email" name="email" placeholder="jane.doe@example.com">
          </div>
        </div>
      </div>
      <div uk-grid>
        <div class="uk-width-1-1 uk-width-1-3@m">
          <label class="uk-form-label" for="phone">Phone number</label>
          <div class="uk-form-controls">
            <input class="uk-input" id="phone" name="phone" type="tel">
          </div>
        </div>
        <div class="uk-width-1-1 uk-width-1-3@m">
          <label class="uk-form-label" for="rugSize">Rug Size</label>
          <div class="uk-form-controls">
            <input class="uk-input" id="rugSize" name="rugSize" type="text" placeholder="8.ft x 5.ft">
          </div>
        </div>
        <div class="uk-width-1-1 uk-width-1-3@m">
          <label class="uk-form-label" for="upload">Upload Your Design</label>
          <div class="uk-form-controls">
            <div uk-form-custom="target: true">
              <input type="file" name="upload">
              <input class="uk-input uk-form-width-medium" id="upload " type="text" placeholder="Select file" disabled>
            </div>
          </div>
        </div>
      </div>
      <div uk-grid>
        <div class="uk-width-1-1">
          <label class="uk-form-label" for="otherDetails">Other Details</label>
          <div class="uk-form-controls">
            <textarea class="uk-textarea" rows="5" id="otherDetails" placeholder="Other Details" name="otherDetails"
              style="resize: none"></textarea>
          </div>
        </div>
      </div>
      <div uk-grid>
        <div class="uk-width-1-1 uk-text-center">
          <button class="btn btn__outline" type="submit">Send</button>
        </div>
      </div>
    </form>
  </div>
</div>
@endsection