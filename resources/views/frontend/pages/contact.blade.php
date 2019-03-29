@extends('layouts.frontend') 
@section('content')
<section class="page-header">
    <div class="uk-container">
        <div class="section-title">
            <h2 class="heading-secondary">Lorem ipsum dolor sit amet.</h2>
            <span class="divide-line"></span>
        </div>
        <div class="uk-child-width-1-1 uk-text-center " uk-grid>
            <div class="contact-details">
                <h3>Say "Hi" or Have Queries ?</h3>
                <p>Kreative Rugs, Keshar Mahal, Road, Kathmandu, Nepal </p>
                <p>example@example.com</p>
                <p>+1-908xxxx</p>
            </div>

            <div class="contact__social-box">
                <h3 class="heading-tertiary">Social Links</h3>
                <div class="contact__social-box__contact__social">
                    <a href="#"><span uk-icon="facebook"></span></a>
                    <a href="#"><span uk-icon="twitter"></span></a>
                    <a href="#"><span uk-icon="instagram"></span></a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="contact-form-section">
    <div class="contact-form-container">
        <form action="{{ route('frontend.contact') }}" method="POST" id="contact-form">
        @csrf
        <div uk-grid>
            <div class="uk-width-1-1 uk-width-1-3@m">
                <label class="uk-form-label" for="name">Name</label>
                <div class="uk-form-controls">
                    <input class="uk-input" id="name" type="text" placeholder="Jane Doe" name="fullName">
                </div>
            </div>
            <div class="uk-width-1-1 uk-width-1-3@m">
                    <label class="uk-form-label" for="subjeect">Subject</label>
                    <div class="uk-form-controls">
                        <input class="uk-input" id="subjeect" type="text" placeholder="Subject" name="subject">
                    </div>
                </div>
            <div class="uk-width-1-1 uk-width-1-3@m">
                <label class="uk-form-label" for="email">Email</label>
                <div class="uk-form-controls">
                    <input class="uk-input" id="email" type="email" name="email" placeholder="jane.doe@example.com">
                </div>
            </div>
        </div>
        <div uk-grid>
            <div class="uk-width-1-1">
                <label class="uk-form-label" for="message">Message</label>
                <div class="uk-form-controls">
                    <textarea name="message" id="message" rows="10" class="uk-textarea" style="resize: none;" placeholder="Your message"></textarea>
                </div>
            </div>
            <div class="uk-width-1-1 uk-text-center">
                <button type="submit" class="btn btn__outline" class="g-recaptcha" data-sitekey="6LervpkUAAAAAOfNki8EXyYihvjafwUPSL9OY0bb" data-callback='onSubmit'>Send </button>
            </div>
        </div>
        </form>
    </div>
</section>
@endsection
@section('scripts')
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<script>
  function onSubmit(token) {
    document.getElementById("contact-form").submit();
  }
</script>
@stop