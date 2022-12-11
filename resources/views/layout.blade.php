<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>ইন্দ্রজাল</title>
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('asset/icon/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('asset/icon/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('asset/icon/favicon-16x16.png')}}">
    <link rel="manifest" href="{{asset('/site.webmanifest')}}">

    <!-- Mobile Specific Metas-->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Bootstrap-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.2/css/bootstrap.min.css" integrity="sha512-CpIKUSyh9QX2+zSdfGP+eWLx23C8Dj9/XmHjZY2uDtfkdLGo0uY12jgcnkX9vXOgYajEKb/jiw67EYm+kBf+6g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Template Style-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="{{asset('asset/stylesheet/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('asset/stylesheet/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('asset/stylesheet/animate.css')}}">
    <link rel="stylesheet" href="{{asset('asset/stylesheet/icomoon.css')}}">
    <link rel="stylesheet" href="{{asset('asset/stylesheet/jquery-fancybox.css')}}">
    <link rel="stylesheet" href="{{asset('asset/stylesheet/style.css')}}">
    <link rel="stylesheet" href="{{asset('asset/stylesheet/shortcodes.css')}}">
    <link rel="stylesheet" href="{{asset('asset/stylesheet/responsive.css')}}">
    <link rel="stylesheet" href="{{asset('asset/stylesheet/flexslider.css')}}">
    <link rel="stylesheet" href="{{asset('asset/rev-slider/css/layers.css')}}">
    <link rel="stylesheet" href="{{asset('asset/rev-slider/css/navigation.css')}}">
    <link rel="stylesheet" href="{{asset('asset/rev-slider/css/settings.css')}}">

</head>
<body class="counter-scroll">
    <!-- loading -->
    <x-loading />

    <!-- top-bar -->
    <x-top-bar />

    <!-- Header -->
    <x-header />

    <!-- Main -->
    <main>
        @yield('content')
    </main>


    <!-- footer -post -->
    <x-footer />

    <script src="{{asset('asset/javascript/jquery.min.js')}}"></script>
    <script src="{{asset('asset/javascript/parallax.js')}}"></script>
    <script src="{{asset('asset/javascript/plugins.js')}}"></script>
    <script src="{{asset('asset/javascript/jquery-ui.js')}}"></script>
    <script src="{{asset('asset/javascript/gmap3.min.js')}}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAOvgMzMavm0loFdwqNrzzVh42X_-lDZ3w"></script>
    <script src="{{asset('asset/javascript/jquery-isotope.js')}}"></script>
    <script src="{{asset('asset/javascript/owl.carousel.min.js')}}"></script>
    <script src="{{asset('asset/javascript/equalize.min.js')}}"></script>
    <script src="{{asset('asset/javascript/jquery-fancybox.js')}}"></script>
    <script src="{{asset('asset/javascript/jquery-countTo.js')}}"></script>
    <script src="{{asset('asset/javascript/flex-slider.min.js')}}"></script>
    <script src="{{asset('asset/javascript/wow.min.js')}}"></script>
    <script src="{{asset('asset/javascript/jquery-validate.js')}}"></script>
    <script src="{{asset('asset/javascript/main.js')}}"></script>

    <!-- slider -->
    <script src="{{asset('asset/rev-slider/js/jquery.themepunch.tools.min.js')}}"></script>
    <script src="{{asset('asset/rev-slider/js/jquery.themepunch.revolution.min.js')}}"></script>
    <script src="{{asset('asset/javascript/rev-slider.js')}}"></script>

    <!-- Load Extensions only on Local File Systems ! The following part can be removed on Server for On Demand Loading -->
    <script src="{{asset('asset/rev-slider/js/extensions/extensionsrevolution.extension.actions.min.js')}}"></script>
    <script src="{{asset('asset/rev-slider/js/extensions/extensionsrevolution.extension.carousel.min.js')}}"></script>
    <script src="{{asset('asset/rev-slider/js/extensions/extensionsrevolution.extension.kenburn.min.js')}}"></script>
    <script src="{{asset('asset/rev-slider/js/extensions/extensionsrevolution.extension.layeranimation.min.js')}}"></script>
    <script src="{{asset('asset/rev-slider/js/extensions/extensionsrevolution.extension.migration.min.js')}}"></script>
    <script src="{{asset('asset/rev-slider/js/extensions/extensionsrevolution.extension.navigation.min.js')}}"></script>
    <script src="{{asset('asset/rev-slider/js/extensions/extensionsrevolution.extension.parallax.min.js')}}"></script>
    <script src="{{asset('asset/rev-slider/js/extensions/extensionsrevolution.extension.slideanims.min.js')}}"></script>
    <script src="{{asset('asset/rev-slider/js/extensions/extensionsrevolution.extension.video.min.js')}}"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            // for web page
            $("#webpage_no").click(function() {
                $('#show_page_content').hide('fast');
                $("#webpage_no").prop("checked", true);
                $("#webpage_yes").prop("checked", false);
            });
            $("#webpage_yes").click(function() {
                $('#show_page_content').show('fast');
                $("#webpage_yes").prop("checked", true);
                $("#webpage_no").prop("checked", false);
            });
            // for social paid
            $("#social_paid_no").click(function() {
                $('#show_social_paid').hide('fast');
                $("#social_paid_no").prop("checked", true);
                $("#social_paid_yes").prop("checked", false);
            });
            $("#social_paid_yes").click(function() {
                $('#show_social_paid').show('fast');
                $("#social_paid_yes").prop("checked", true);
                $("#social_paid_no").prop("checked", false);
            });
            // for social report
            $("#social_report_no").click(function() {
                $('#show_social_report').hide('fast');
                $("#social_report_no").prop("checked", true);
                $("#social_report_yes").prop("checked", false);
            });
            $("#social_report_yes").click(function() {
                $('#show_social_report').show('fast');
                $("#social_report_yes").prop("checked", true);
                $("#social_report_no").prop("checked", false);
            });
        });

    </script>
</body>

</html>
