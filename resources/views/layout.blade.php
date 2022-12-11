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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flexslider/2.7.2/flexslider.min.css" integrity="sha512-c7jR/kCnu09ZrAKsWXsI/x9HCO9kkpHw4Ftqhofqs+I2hNxalK5RGwo/IAhW3iqCHIw55wBSSCFlm8JP0sw2Zw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{asset('asset/stylesheet/icomoon.css')}}">
    <link rel="stylesheet" href="{{asset('asset/stylesheet/animate.css')}}">
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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js" integrity="sha512-jGsMH83oKe9asCpkOVkBnUrDDTp8wl+adkB2D+//JtlxO4SrLoJdhbOysIFQJloQFD+C4Fl1rMsQZF76JjV0eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-parallax/1.1.3/jquery-parallax-min.js" integrity="sha512-ES/eSqVi/9sgeZfvunOto+gwgFGrD/hzi5UOJFDR1Me8acKSBJIb2Gk0IyKje2ZaX+OovAG2/bRzj/uBcNeesg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.4/waypoints.min.js" integrity="sha512-O9uGz1yuiGC+6SX3a/l9UpuDeujmKAtN9s10q5SjJM6OG1NF5Yx4QbO8TVc1Wty2VwsFD2QLQVtuYYTbOixF2w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js" integrity="sha512-uto9mlQzrs59VwILcLiRYeLKPPbS/bT71da/OEBYEwcdNUk8jYIy+D176RYoop1Da+f9mvkYrmj5MCLZWEtQuA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAOvgMzMavm0loFdwqNrzzVh42X_-lDZ3w"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js" integrity="sha512-5nBm8I4981vJDHhtHCaImHU+wcnmbheiFpmE03QLuYshaimnRk15jbW6sNK4/URdyqohIUQzNLsqdZ7bB3l5yg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{asset('asset/javascript/jquery-countTo.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flexslider/2.6.0/jquery.flexslider-min.js" integrity="sha512-rAwslC02shr6z0zkx8cDS+IvQBYYeJuB4VawR94I+cofNhvXPRSxMpWtD3UdN5P5eShxPXpEyf/m2URx7yAQQA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js" integrity="sha512-Eak/29OTpb36LLo2r47IpVzPBLXnAMPAVypbSZiZ4Qkf8p/7S/XRG5xp7OKWPPYfJT6metI+IORkR5G8F900+g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.11.1/jquery.validate.min.js" integrity="sha512-emPswKmLFtjIzEQnECO0K1syIQhO9ZVE5eG+PtirksDTRPj4pDxBqnr8kF64UHO0kO/E6lYVAfCi/4X2aOk6Nw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
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
