@extends('layouts.backend')
@section('content')
<div class="row">
    <div class="col-lg-offset-1 col-md-10">
    <form action="{{route('setting.store')}}" class="form form-validate" method="POST">
        @csrf
        <div class="card">
            <div class="card-head style-primary">
                <header>Site Settings</header>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group floating-label {{$errors->has('site_name') ? 'has-error' : ''}}">
                            <input type="text" class="form-control"
                            id="site_name {{$errors->has('site_name') ? 'inputError' : ''}}" name="site_name"
                            value="{{ old('site_name') }}" >
                            @if($errors->has('site_name'))
                            <span class="help-block">{{ $errors->first('site_name') }}</span>
                            @endif
                            <label for="site_name">Site Name</label>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group floating-label {{$errors->has('facebook') ? 'has-error' : ''}}">
                            <input type="text" class="form-control"
                            id="facebook {{$errors->has('facebook') ? 'inputError' : ''}}" name="facebook"
                            value="{{ old('facebook') }}" >
                            @if($errors->has('facebook'))
                            <span class="help-block">{{ $errors->first('facebook') }}</span>
                            @endif
                            <label for="facebook">Facebook</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group floating-label {{$errors->has('tagline') ? 'has-error' : ''}}">
                            <input type="text" class="form-control"
                            id="tagline {{$errors->has('tagline') ? 'inputError' : ''}}" name="tagline"
                            value="{{ old('tagline') }}" >
                            @if($errors->has('tagline'))
                            <span class="help-block">{{ $errors->first('tagline') }}</span>
                            @endif
                            <label for="tagline">Tag Line</label>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group floating-label {{$errors->has('twitter') ? 'has-error' : ''}}">
                            <input type="text" class="form-control"
                            id="twitter {{$errors->has('twitter') ? 'inputError' : ''}}" name="twitter"
                            value="{{ old('twitter') }}" >
                            @if($errors->has('twitter'))
                            <span class="help-block">{{ $errors->first('twitter') }}</span>
                            @endif
                            <label for="twitter">Twitter</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group floating-label {{$errors->has('address') ? 'has-error' : ''}}">
                            <input type="text" class="form-control"
                            id="address {{$errors->has('address') ? 'inputError' : ''}}" name="address"
                            value="{{ old('address') }}" >
                            @if($errors->has('address'))
                            <span class="help-block">{{ $errors->first('address') }}</span>
                            @endif
                            <label for="address">Address</label>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group floating-label {{$errors->has('instagram') ? 'has-error' : ''}}">
                            <input type="text" class="form-control"
                            id="instagram {{$errors->has('instagram') ? 'inputError' : ''}}" name="instagram"
                            value="{{ old('instagram') }}" >
                            @if($errors->has('instagram'))
                            <span class="help-block">{{ $errors->first('instagram') }}</span>
                            @endif
                            <label for="instagram">Instagram</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group floating-label {{$errors->has('city') ? 'has-error' : ''}}">
                            <input type="text" class="form-control"
                            id="city {{$errors->has('city') ? 'inputError' : ''}}" name="city"
                            value="{{ old('city') }}" >
                            @if($errors->has('city'))
                            <span class="help-block">{{ $errors->first('city') }}</span>
                            @endif
                            <label for="city">City</label>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        {{-- <div class="form-group floating-label {{$errors->has('googleplus') ? 'has-error' : ''}}">
                            <input type="text" class="form-control"
                            id="googleplus {{$errors->has('googleplus') ? 'inputError' : ''}}"
                            name="googleplus"
                            value="{{ old('googleplus') }}" >
                            @if($errors->has('googleplus'))
                            <span class="help-block">{{ $errors->first('googleplus') }}</span>
                            @endif
                            {{ Form::label('googleplus', 'Google+ ') }}
                        </div> --}}
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group floating-label {{$errors->has('phone') ? 'has-error' : ''}}">
                            <input type="text" class="form-control"
                            id="phone {{$errors->has('phone') ? 'inputError' : ''}}" name="phone"
                            value="{{ old('phone') }}" >
                            @if($errors->has('phone'))
                            <span class="help-block">{{ $errors->first('phone') }}</span>
                            @endif
                            <label for="phone">Phone</label>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group floating-label {{$errors->has('youtube') ? 'has-error' : ''}}">
                            <input type="text" class="form-control"
                            id="youtube {{$errors->has('youtube') ? 'inputError' : ''}}" name="youtube"
                            value="{{ old('youtube') }}" >
                            @if($errors->has('youtube'))
                            <span class="help-block">{{ $errors->first('youtube') }}</span>
                            @endif
                            <label for="youtube">Youtube</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group floating-label {{$errors->has('website') ? 'has-error' : ''}}">
                            <input type="website" class="form-control"
                            id="website {{$errors->has('website') ? 'inputError' : ''}}" name="website"
                            value="{{ old('website') }}" >
                            @if($errors->has('website'))
                            <span class="help-block">{{ $errors->first('website') }}</span>
                            @endif
                            <label for="website">Website</label>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        {{-- <div class="form-group floating-label {{$errors->has('whats_app') ? 'has-error' : ''}}">
                            <input type="text" class="form-control"
                            id="whats_app {{$errors->has('whats_app') ? 'inputError' : ''}}" name="whats_app"
                            value="{{ old('whats_app') }}" >
                            @if($errors->has('whats_app'))
                            <span class="help-block">{{ $errors->first('whats_app') }}</span>
                            @endif
                            {{ Form::label('whats_app', 'Whats app ') }}
                        </div> --}}
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group floating-label {{$errors->has('mobile') ? 'has-error' : ''}}">
                            <input type="mobile" class="form-control"
                            id="mobile {{$errors->has('mobile') ? 'inputError' : ''}}" name="mobile"
                            value="{{ old('mobile') }}" >
                            @if($errors->has('mobile'))
                            <span class="help-block">{{ $errors->first('mobile') }}</span>
                            @endif
                            <label for="mobile">Mobile</label>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group floating-label {{$errors->has('mailbox') ? 'has-error' : ''}}">
                            <input type="text" class="form-control"
                            id="mailbox {{$errors->has('mailbox') ? 'inputError' : ''}}" name="mailbox"
                            value="{{ old('mailbox') }}" >
                            @if($errors->has('mailbox'))
                            <span class="help-block">{{ $errors->first('mailbox') }}</span>
                            @endif                            
                            <label for="mailbox">Mailbox</label>
                        </div>
                    </div>
                </div>                
                <div class="row">
                    <div class="col-sm-6">
                        <h4>Google Map Link</h4>
                        <div class="form-group floating-label {{$errors->has('map') ? 'has-error' : ''}}">
                            <textarea name="map"
                            id="map {{$errors->has('map') ? 'inputError' : ''}}"
                            cols="30" rows="5"  style="width: 100%; resize: none;"></textarea>
                            @if($errors->has('map'))
                            <span class="help-block">{{ $errors->first('map') }}</span>
                            @endif

                        </div>
                    </div>
                    <div class="col-sm-6">
                        <h4>Google Tag </h4>
                        <div class="form-group floating-label {{$errors->has('gtag') ? 'has-error' : ''}}">
                            <textarea name="gtag"
                            id="gtag {{$errors->has('gtag') ? 'inputError' : ''}}"
                            cols="30" rows="5"  style="width: 100%; resize: none;"></textarea>
                            @if($errors->has('gtag'))
                            <span class="help-block">{{ $errors->first('gtag') }}</span>
                            @endif

                        </div>
                    </div>                    
                </div>
            </div><!--end .card body-->
            <div class="card-actionbar">
                <div class="card-actionbar-row">
                    <div class="col-sm-12">                        
                        <button type="submit" class="btn btn-lg  btn-block btn-primary ink-reaction"> Save</button>
                    </div>
                </div>
            </div>
        </form>
        </div><!--end .col -->
    </div>
</div>
@stop