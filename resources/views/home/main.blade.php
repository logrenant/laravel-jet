<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Title -->
    <title>@yield('title')</title>
    @include('home._head')
    @yield('head')

</head>
<body>
@include('home._header')
@yield('content')
@include('home._footer')
























































<!-- JS Implementing Plugins -->
<script src="../../assets/vendor/hs-header/dist/hs-header.min.js"></script>
<script src="../../assets/vendor/hs-mega-menu/dist/hs-mega-menu.min.js"></script>
<script src="../../assets/vendor/hs-unfold/dist/hs-unfold.min.js"></script>
<script src="../../assets/vendor/hs-show-animation/dist/hs-show-animation.min.js"></script>

<!-- JS Front -->
<script src="../../assets/js/hs.validation.js"></script>

<!-- JS Plugins Init. -->
<script>
    $(document).on('ready', function () {
        // initialization of header
        var header = new HSHeader($('#header')).init();

        // initialization of HSMegaMenu component
        var megaMenu = new HSMegaMenu($('.js-mega-menu')).init();

        // initialization of unfold
        var unfold = new HSUnfold('.js-hs-unfold-invoker').init();

        // initialization of form validation
        $('.js-validate').each(function () {
            $.HSCore.components.HSValidation.init($(this), {
                rules: {
                    confirmPassword: {
                        equalTo: '#signupPassword'
                    }
                }
            });
        });

        // initialization of show animations
        $('.js-animation-link').each(function () {
            var showAnimation = new HSShowAnimation($(this)).init();
        });
    });
</script>
<!-- JS Global Compulsory -->
<script src="../../assets/vendor/jquery/dist/jquery.min.js"></script>
<script src="../../assets/vendor/jquery-migrate/dist/jquery-migrate.min.js"></script>
<script src="../../assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

<!-- JS Implementing Plugins -->
<script src="../../assets/vendor/hs-header/dist/hs-header.min.js"></script>
<script src="../../assets/vendor/hs-go-to/dist/hs-go-to.min.js"></script>
<script src="../../assets/vendor/hs-unfold/dist/hs-unfold.min.js"></script>
<script src="../../assets/vendor/hs-mega-menu/dist/hs-mega-menu.min.js"></script>
<script src="../../assets/vendor/hs-show-animation/dist/hs-show-animation.min.js"></script>
<script src="../../assets/vendor/jquery-validation/dist/jquery.validate.min.js"></script>
<script src="../../assets/vendor/slick-carousel/slick/slick.js"></script>
<script src="../../assets/vendor/jquery-countdown/dist/jquery.countdown.min.js"></script>

<!-- JS Front -->
<script src="../../assets/js/hs.core.js"></script>
<script src="../../assets/js/hs.validation.js"></script>
<script src="../../assets/js/hs.slick-carousel.js"></script>
<script src="../../assets/js/hs.countdown.js"></script>

<!-- JS Plugins Init. -->
<script>
    $(document).on('ready', function () {
        // initialization of header
        var header = new HSHeader($('#header')).init();

        // initialization of mega menu
        var megaMenu = new HSMegaMenu($('.js-mega-menu'), {
            desktop: {
                position: 'left'
            }
        }).init();

        // initialization of unfold
        var unfold = new HSUnfold('.js-hs-unfold-invoker').init();

        // initialization of form validation
        $('.js-validate').each(function () {
            $.HSCore.components.HSValidation.init($(this), {
                rules: {
                    confirmPassword: {
                        equalTo: '#signupPassword'
                    }
                }
            });
        });

        // initialization of show animations
        $('.js-animation-link').each(function () {
            var showAnimation = new HSShowAnimation($(this)).init();
        });

        // initialization of slick carousel
        $('.js-slick-carousel').each(function () {
            var slickCarousel = $.HSCore.components.HSSlickCarousel.init($(this));
        });

        // initialization of countdowns
        $('.js-countdown').each(function () {
            var countdown = $.HSCore.components.HSCountdown.init($(this), {
                yearsElSelector: '.js-cd-years',
                monthsElSelector: '.js-cd-months',
                daysElSelector: '.js-cd-days',
                hoursElSelector: '.js-cd-hours',
                minutesElSelector: '.js-cd-minutes',
                secondsElSelector: '.js-cd-seconds'
            });
        });

        // initialization of go to
        $('.js-go-to').each(function () {
            var goTo = new HSGoTo($(this)).init();
        });
    });
</script>

<!-- IE Support -->
<script>
    if (/MSIE \d|Trident.*rv:/.test(navigator.userAgent)) document.write('<script src="../../assets/vendor/polifills.js"><\/script>');
</script>
</body>
</html>
