<section once="footers" class="cid-roVnEoY9ZI" id="footer7-f">
    <div class="container">
        <div class="media-container-row align-center mbr-white">
            <div class="row social-row">
                <div class="social-list align-right pb-2">
                    @isset($setting->facebook)
                    <div class="soc-item">
                        <a href="{{$setting->facebook}}" target="_blank">
                            <span class="socicon-facebook socicon mbr-iconfont mbr-iconfont-social"></span>
                        </a>
                    </div>
                    @endisset
                    @isset($setting->facebook)
                    <div class="soc-item">
                        <a href=" {{$setting->twitter}}" target="_blank">
                            <span class="socicon-twitter socicon mbr-iconfont mbr-iconfont-social"></span>
                        </a>
                    </div>
                    @endisset
                    @isset($setting->facebook)
                    <div class="soc-item">
                        <a href="{{$setting->instagram}}" target="_blank">
                            <span class="socicon-instagram socicon mbr-iconfont mbr-iconfont-social"></span>
                        </a>
                    </div>
                    @endisset
                </div>
            </div>
            <div class="row row-copirayt">
                <p class="mbr-text mb-0 mbr-fonts-style mbr-white align-center display-7">
                    © Copyright {{ date('Y') }} {{config('app.name')}} - All Rights Reserved
                </p>
            </div>
        </div>
    </div>
</section>