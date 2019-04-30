<footer class="footer">
    <div class="uk-container uk-padding-large">
        <div uk-grid>
            <div class="uk-width-1-1 uk-padding-remove-horizontal" uk-grid>
                <div class="footer-logo-box uk-width-1-1 uk-text-center">
                    <img src="{{ asset('img/logo-white.png') }}" alt="" style="height:5rem">
                </div>
                <div class="footer__social uk-width-1-1">
                    <ul class="footer__social__list">
                        @isset($setting->facebook)
                            <li class="footer__social__list__item"><a href="{{$setting->facebook}}" class="footer__social__list__item--link"><span uk-icon="facebook"></span></a></li>
                        @endisset
                        @isset($setting->twitter)
                        <li class="footer__social__list__item"><a href="{{$setting->twitter}}" class="footer__social__list__item--link"><span uk-icon="twitter"></span></a></li>
                        @endisset
                        @isset($setting->instagram)
                        <li class="footer__social__list__item"><a href="{{$setting->instagram}}" class="footer__social__list__item--link"><span uk-icon="instagram"></span></a></li>
                        @endisset
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>