<script type="text/javascript" src="{{ asset('plugins/jquerymobile-swipeupdown.js') }}"></script>

@if (\Illuminate\Support\Facades\Request::is('/'))

@else
    <!-- nicescrolljs -->
    <script type="text/javascript" src="{{ asset('js/smoothScroll.js') }}"></script>

    <!-- Yandex map -->
    <script defer src="http://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>

    {{-- new scripts --}}
    {{-- sb_slider --}}
    <script defer src="{{ asset('js/new_plugins/sb_slider/modernizr.custom.46884.js') }}"></script>
    <script defer src="{{ asset('js/new_plugins/3dGallery/jquery.gallery.js') }}"></script>

    <!-- Modal window js -->
    <script type="text/javascript" src="{{ asset('js/modal/js/classie.js') }}"></script>
    <script src="{{ asset('js/modal/js/modalEffects.js') }}"></script>

    <!-- swiper -->
    <script defer type="text/javascript" src="{{ asset('js/vendor/swiper/swiper.jquery.min.js') }}"></script>
    <script defer type="text/javascript" src="{{ asset('js/vendor/swiper/swiper.min.js') }}"></script>

    <!-- Begin swipejs scripts -->
    <script type="text/javascript" src="{{ asset('plugins/swipejs/swipe.js') }}"></script>
    <!-- End swipejs scripts -->

    <script src="/js/jquery.maskedinput.js" type="text/javascript"></script>
    <script src="{{ asset('js/callback.js') }}"></script>
@endif

{{-- Vide js --}}
<script defer src="{{ asset('js/videjs/jquery.vide.js') }}"></script>
<!-- videojs -->
<script defer src="{{ asset('js/videojs/video.js') }}"></script>
<script defer src="{{ asset('plugins/bigvideo/bigvideo.js') }}"></script>

<script defer src="{{ asset('js/new_plugins/sb_slider/jquery.slicebox.js') }}"></script>

<!-- Perfect scroll -->
<script defer type="text/javascript" src="{{ asset('js/min/perfect-scroll/perfect-scrollbar.jquery.min.js') }}"></script>
<script defer type="text/javascript" src="{{ asset('js/min/perfect-scroll/perfect-scrollbar.min.js') }}"></script>

<!-- app.js -->
<script defer type="text/javascript" src="{{ asset('js/min/app.min.js') }}"></script>

@if(app()->environment() == 'production')

    <!-- Google Analytics -->
    <script defer>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-64820374-1', 'auto');
        ga('send', 'pageview');

    </script>

    <!-- Yandex.Metrika counter -->
    <script defer type="text/javascript">
        (function (d, w, c) {
                (w[c] = w[c] || []).push(function() {
                try {
                    w.yaCounter32239699 = new Ya.Metrika({
                    id:32239699,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true
                });
                } catch(e) { }
            });

            var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
            s.type = "text/javascript";
            s.async = true;
            s.src = "https://mc.yandex.ru/metrika/watch.js";

            if (w.opera == "[object Opera]") {
                d.addEventListener("DOMContentLoaded", f, false);
            } else { f(); }
        })(document, window, "yandex_metrika_callbacks");
    </script>
    <noscript><div><img src="https://mc.yandex.ru/watch/32239699" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!-- /Yandex.Metrika counter -->

@endif

<script>

    (function() {
        $(window).on('load', function(){
            var support = { transitions: Modernizr.csstransitions },
            // transition end event name
                    transEndEventNames = { 'WebkitTransition': 'webkitTransitionEnd', 'MozTransition': 'transitionend', 'OTransition': 'oTransitionEnd', 'msTransition': 'MSTransitionEnd', 'transition': 'transitionend' },
                    transEndEventName = transEndEventNames[ Modernizr.prefixed( 'transition' ) ],
                    onEndTransition = function( el, callback ) {
                        var onEndCallbackFn = function( ev ) {
                            if( support.transitions ) {
                                if( ev.target != this ) return;
                                this.removeEventListener( transEndEventName, onEndCallbackFn );
                            }
                            if( callback && typeof callback === 'function' ) { callback.call(this); }
                        };
                        if( support.transitions ) {
                            el.addEventListener( transEndEventName, onEndCallbackFn );
                        }
                        else {
                            onEndCallbackFn();
                        }
                    };

            new GridFx(document.querySelector('.grid'), {
                imgPosition : {
                    x : -0.5,
                    y : 1
                },
                onOpenItem : function(instance, item) {
                    instance.items.forEach(function(el) {
                        if(item != el) {
                            var delay = Math.floor(Math.random() * 50);
                            el.style.WebkitTransition = 'opacity .5s ' + delay + 'ms cubic-bezier(.7,0,.3,1), -webkit-transform .5s ' + delay + 'ms cubic-bezier(.7,0,.3,1)';
                            el.style.transition = 'opacity .5s ' + delay + 'ms cubic-bezier(.7,0,.3,1), transform .5s ' + delay + 'ms cubic-bezier(.7,0,.3,1)';
                            el.style.WebkitTransform = 'scale3d(0.1,0.1,1)';
                            el.style.transform = 'scale3d(0.1,0.1,1)';
                            el.style.opacity = 0;
                        }
                    });
                },
                onCloseItem : function(instance, item) {
                    instance.items.forEach(function(el) {
                        if(item != el) {
                            el.style.WebkitTransition = 'opacity .4s, -webkit-transform .4s';
                            el.style.transition = 'opacity .4s, transform .4s';
                            el.style.WebkitTransform = 'scale3d(1,1,1)';
                            el.style.transform = 'scale3d(1,1,1)';
                            el.style.opacity = 1;

                            onEndTransition(el, function() {
                                el.style.transition = 'none';
                                el.style.WebkitTransform = 'none';
                            });
                        }
                    });
                }
            });
        });

    })();
</script>