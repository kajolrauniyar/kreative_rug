@extends('layouts.frontend') 
@section('content')
<div class="image-header" data-src="https://source.unsplash.com/weekly?contact"
    uk-img>
    <h1>Contact Us</h1>
</div>
<section class="uk-section uk-section-default">
    <div class="uk-container">
        <div uk-grid>
            <div class="uk-width-2-5">
                <h4>{{$setting->site_name}}</h4>
                <p class="contact-details">{{$setting->address}}, {{$setting->city}}</p>
                <p class="contact-details">{{$setting->mailbox}},{{$setting->phone}}</p>
                <h4 class="uk-margin-small uk-margin-remove-horizontal">Follow us on:</h4>
                <div class="contact__social-box__contact__social">
                    @isset($setting->facebook)
                    <a href="{{$setting->facebook}}"><span uk-icon="facebook"></span></a> @endisset @isset($setting->twiter)
                    <a href="{{$setting->twitter}}"><span uk-icon="twitter"></span></a> @endisset @isset($setting->instagram)
                    <a href="{{$setting->instagram}}"><span uk-icon="instagram"></span></a> @endisset @isset($setting->youtube)
                    <a href="{{$setting->youtube}}"><span uk-icon="youtube"></span></a> @endisset
                </div>
            </div>
            <div class="uk-width-3-5">
                <h4>Say "Hi" or Have Queries ?</h4>
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
                            <button type="submit" class="btn btn__outline" class="g-recaptcha" data-sitekey="6LervpkUAAAAAOfNki8EXyYihvjafwUPSL9OY0bb"
                                data-callback='onSubmit'>Send </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
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