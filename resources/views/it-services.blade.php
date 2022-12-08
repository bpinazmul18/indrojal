@extends('layout')

@section('content')

<div class="page-title parallax parallax1 position-relative clearfix">
    <div class="section-overlay"></div>
    <div class="container">
        <div class="breadcrumbs position-relative">
            <div class="breadcrumbs-wrap">
                <h1 class="title"> ভাইয়া ডিজিটাল-এর সেবা-সমুহ</h1>
                <ul class="breadcrumbs-inner">
                    <li><a href="index.php">হোম</a></li>
                    <li><a href="#">সেবা</a></li>
                </ul>
            </div>
        </div>
    </div>
</div><!-- page-title -->

<div class="flat-it-services flat-it-services-style4 py-5">
    <div class="container">
        <x-services-list :services="$it_services" />
    </div>
</div><!-- flat-it-services -->
<div class="cta">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8 col-12">
                <div class="cta-content position-relative">
                    <div class="caption">আপনি কি আরও ভাল জন্য প্রস্তুত?,</div>
                    <div class="flat-spacer" data-desktop="10" data-sdesktop="10" data-mobi="10" data-smobi="10"></div>
                    <h2 class="title">প্রযুক্তিতে সময় এবং অর্থ অপচয় করা বন্ধ করুন.</h2>
                </div>
            </div>
            <div class="col-lg-4 col-12">
                <div class="flat-contact-now">
                    <a href="#" class="border-corner">এখনই যোগাযোগ করুন<span class="icon-arrow-pointing-to-right"></span></a>
                </div>
            </div>
        </div>
    </div>
</div><!-- cta -->

@endsection
