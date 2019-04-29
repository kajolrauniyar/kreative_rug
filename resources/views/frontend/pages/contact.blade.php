@section('title') | Contact Us @endsection
@extends('layouts.frontend') 
@section('content')
<section class="map1 cid-roVoldSH1F" id="map1-j">
    <div class="google-map"><iframe frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyCx3d07zxHPLvkFBLlAR3Ng8a9wsAsGoJ8&amp;q=place_id:ChIJn6wOs6lZwokRLKy1iqRcoKw" allowfullscreen=""></iframe></div>
    </section>
    
    <section class="mbr-section contacts3 cid-roVos712Yb" id="contacts3-k">
        <!---->
        
        <!---->
        <!--Overlay-->
        
        <!--Container-->
        <div class="container">
            <div class="row">
                <!--Titles-->
                <div class="title col-12">
                    <h2 class="align-left mbr-fonts-style display-1">
                        Our Contacts
                    </h2>
                    
                </div>
                <div class="col-12">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <div class="wrapper">
                                <span class="iconfont-wrapper">
                                    <span class="amp-iconfont icon fa-thumbs-o-up fa"></span>
                                </span>
                                <div class="b-info b-adress">
                                    <h5 class="align-left mbr-fonts-style display-5">
                                        Address:
                                    </h5>
                                    <p class="mbr-text align-left mbr-fonts-style display-7">
                                        {{$setting->address}}, {{$setting->city}}
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="wrapper">
                                <span class="iconfont-wrapper">
                                    <span class="amp-iconfont icon fa-phone fa"></span>
                                </span>
                                <div class="b-info b-phone">
                                    <h5 class="align-left mbr-fonts-style display-5">
                                        Phone:
                                    </h5>
                                    <p class="mbr-text align-left mbr-fonts-style display-7">
                                        {{$setting->phone}}
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="wrapper">
                                <span class="iconfont-wrapper">
                                    <span class="amp-iconfont icon fa-comment-o fa"></span>
                                </span>
                                <div class="b-info b-mail">
                                    <h5 class="align-left mbr-fonts-style display-5">
                                        E-mail:
                                    </h5>
                                    <p class="mbr-text align-left mbr-fonts-style display-7">
                                        {{$setting->email}}
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="wrapper">
                                <span class="iconfont-wrapper">
                                    <span class="amp-iconfont icon fa-th-large fa"></span>
                                </span>
                                <div class="b-info b-mail">
                                    <h5 class="align-left mbr-fonts-style display-5">
                                        Working Hours:
                                    </h5>
                                    <p class="mbr-text align-left mbr-fonts-style display-7">
                                        Sun-Fri (9 am to 5 pm)
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="mbr-section form1 cid-roVovJdEWJ" id="form1-m">
        <div class="container">
            <div class="row justify-content-center">
                <div class="title col-12 col-lg-8">
                    <h2 class="mbr-section-title align-center pb-3 mbr-fonts-style display-2">
                        CONTACT FORM
                    </h2>
                    <h3 class="mbr-section-subtitle align-center mbr-light pb-3 mbr-fonts-style display-5">
                        Easily add subscribe and contact forms without any server-side integration.
                    </h3>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="media-container-column col-lg-8" data-form-type="formoid">
                    <!---Formbuilder Form--->
                    <form action="https://mobirise.com/" method="POST" class="mbr-form form-with-styler" data-form-title="Mobirise Form"><input type="hidden" name="email" data-form-email="true" value="58owSVbcNsJ+ZWMUDKqf8ASm/aPZkgGnCKSm6Mzzre7fIT43exaJ0r4G0lfCMFidPphWzQ+lr4jvL6CAfHJKjeJYXV7AEqbitdn6SlzCR3JzhyJVcK1idlZLzKosN7ye">
                        <div class="row row-sm-offset">
                            <div hidden="hidden" data-form-alert="" class="alert alert-success col-12">Thanks for filling out the form!</div>
                            <div hidden="hidden" data-form-alert-danger="" class="alert alert-danger col-12">
                            </div>
                        </div>
                        <div class="dragArea row row-sm-offset">
                            <div class="col-md-4  form-group" data-for="name">
                                <label for="name-form1-m" class="form-control-label mbr-fonts-style display-7">Name</label>
                                <input type="text" name="name" data-form-field="Name" required="required" class="form-control display-7" id="name-form1-m">
                            </div>
                            <div class="col-md-4  form-group" data-for="email">
                                <label for="email-form1-m" class="form-control-label mbr-fonts-style display-7">Email</label>
                                <input type="email" name="email" data-form-field="Email" required="required" class="form-control display-7" id="email-form1-m">
                            </div>
                            <div data-for="phone" class="col-md-4  form-group">
                                <label for="phone-form1-m" class="form-control-label mbr-fonts-style display-7">Phone</label>
                                <input type="tel" name="phone" data-form-field="Phone" class="form-control display-7" id="phone-form1-m">
                            </div>
                            <div data-for="message" class="col-md-12 form-group">
                                <label for="message-form1-m" class="form-control-label mbr-fonts-style display-7">Message</label>
                                <textarea name="message" data-form-field="Message" class="form-control display-7" id="message-form1-m"></textarea>
                            </div>
                            <div class="col-md-12 input-group-btn align-center"><button type="submit" class="btn btn-form btn-black display-4">SEND FORM</button></div>
                        </div>
                    </form><!---Formbuilder Form--->
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