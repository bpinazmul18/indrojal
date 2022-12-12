@extends('layout')

@section('content')

<style>
    .flex-1 {
        flex: 1;
    }

    .service-image-box2:hover .content-service p {
        color: #fff;
    }

</style>

<div class="flat-slider clearfix">
    <div class="rev_slider_wrapper fullwidthbanner-container">
        <div id="rev-slider1" class="rev_slider fullwidthabanner">
            <ul>
                <!-- Slide 2 -->
                <li data-transition="random">
                    <!-- Main Image -->
                    <img src="{{asset('asset/images/rev-slider/8.png')}}" alt="" data-bgposition="center center" data-no-retina>
                    <!--<div class="overlay"></div>-->

                </li>
                <!-- /End Slide 2 -->

                <!-- Slide 3 -->
                <li data-transition="random">
                    <!-- Main Image -->
                    <img src="{{asset('asset/images/rev-slider/7.jpg')}}" alt="" data-bgposition="center center" data-no-retina>
                    <!--<div class="overlay"></div>-->

                </li>
                <!-- /End Slide 3 -->

                <!-- Slide 4 -->
                <li data-transition="random">
                    <!-- Main Image -->
                    <img src="{{asset('asset/images/rev-slider/55.jpg')}}" alt="" data-bgposition="center center" data-no-retina>
                    <!--<div class="overlay"></div>-->

                </li>
                <!-- /End Slide 4 -->

            </ul>
        </div>
    </div>
</div><!-- flat-slider -->
<section class="features py-5">
    <div class="container d-lg-flex">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-4">
                <div class="card shadow-lg border-0 p-4 rounded-3 text-center iconbox-features hv-background-before">
                    <div class="iconbox-icon"><span class="icon"><img src="{{asset('asset/images/home_icon/1.png')}}" alt="" data-bgposition="center center" data-no-retina></span></div>
                    <div class="iconbox-content">
                        <h3 class="title">ক্রিয়েটিভ বা সৃজনশীল সেবা </h3>
                        <p class="mb-0">
                            ডিজিটাল ভিডিও প্রোডাকশন, কপিরাইটিং, গ্রাফিক্স ডিজাইন, ডিজিটাল ফটোগ্রাফি, ইউ এক্স ডিজাইন,
                            এনিমেশন,
                            ইউএক্স টেস্টিং
                        </p>
                        <a class="stretched-link" href="{{ url('#') }}"></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card shadow-lg border-0 p-4 rounded-3 text-center iconbox-features hv-background-before">
                    <div class="iconbox-icon"><span class="icon"><img src="{{asset('asset/images/home_icon/3.png')}}" alt="" data-bgposition="center center" data-no-retina></span></div>
                    <div class="iconbox-content">
                        <h3 class="title">তথ্যপ্রযুক্তি বা আইটি সেবা</h3>
                        <p class="mb-0">
                            ওয়েব ডেভেলপমেন্ট, মোবাইল এপ্লিকেশন ডেভেলপমেন্ট, প্রসেস অটোমেশন, সাইবার সিকিউরিটি,
                            এন্টারপ্রাইজ
                            সল্যুশন
                        </p>
                        <a class="stretched-link" href="{{ url('#') }}"></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card shadow-lg border-0 p-4 rounded-3 text-center iconbox-features hv-background-before">
                    <div class="iconbox-icon"><img class="icon" src="{{asset('asset/images/home_icon/2.png')}}" alt="" data-bgposition="center center" data-no-retina></div>
                    <div class="iconbox-content">
                        <h3 class="title">ডিজিটাল মার্কেটিং ও ব্র্যান্ডিং সেবা</h3>
                        <p class="mb-0">
                            ডিজিটাল স্ট্রাটেজি, সোশাল মিডিয়া ম্যানেজমেন্ট, ইনফ্লুয়েন্সার মার্কেটিং, গ্রাহক বিশ্লেষণ ও
                            এনালেটিক্স, সোশাল মিডিয়া মার্কেটিং, ব্র্যান্ড এক্টিভেশন, সমন্বিত প্রচারণা বা ইন্টিগ্রেটেড
                            মার্কেটিং
                        </p>
                        <a class="stretched-link" href="{{ url('#') }}"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- features -->
<section class="who-we-are who-we-are-style1 py-5">
    <div class="container">
        <div class="row d-flex align-items-center">
            <div class="col-sm-12 col-lg-2 col-12">
                <div class="featured-post position-relative">
                    <div class="iconbox-award">
                        <span class="icon-trophy"></span>
                        <div class="spinning-circle"></div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-lg-10 col-12">
                <div class="flat-spacer" data-desktop="0" data-sdesktop="0" data-mobi="50" data-smobi="50"></div>
                <div class="content">

                    <div class="title d-flex align-items-center">
                        <span>৫</span>
                        <h4 style="font-size: 20px;">বছরের বেশী সময়ের অভিজ্ঞতা সম্পন্ন <span style="font-size: 30px; padding:0; color:#000"> ইন্দ্রজাল </span>,দিচ্ছে সবচেয়ে সাশ্রয়ে
                            সবার সেরা ডিজিটাল মার্কেটিং সেবা।</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!-- who-we-are -->
<section class="fact-type2 py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-3">
                <div class="card border-0 rounded-3 shadow-lg text-center p-4 counter">
                    <div class="mb-3"><span class="icon icon-team"></span></div>
                    <div class="mb-2 content">
                        <span class="h1 numb-count" data-from="0" data-to="56" data-speed="2000" data-inviewport="yes">৫৬</span>
                        <span class="numb-plus">+</span>
                        <span class="name-count d-block">শুভ ক্লায়েন্ট</span>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card border-0 rounded-3 shadow-lg text-center p-4 counter">
                    <div class="mb-3"><span class="icon icon-portfolio"></span></div>
                    <div class="mb-2 content">
                        <span class="h1 numb-count" data-from="0" data-to="34" data-speed="2000" data-inviewport="yes">৩৪</span>
                        <span class="name-count d-block">সমাপ্ত প্রকল্প</span>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card border-0 rounded-3 shadow-lg text-center p-4 counter">
                    <div class="mb-3"><span class="icon icon-observation"></span></div>
                    <div class="mb-2 content">
                        <span class="h1 numb-count" data-from="0" data-to="34" data-speed="2000" data-inviewport="yes">৩৪</span>
                        <span class="name-count d-block">দক্ষ বিশেষজ্ঞ</span>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card border-0 rounded-3 shadow-lg text-center p-4 counter">
                    <div class="mb-3"><span class="icon icon-spam"></span></div>
                    <div class="mb-2 content">
                        <span class="h1 numb-count" data-from="0" data-to="38" data-speed="2000" data-inviewport="yes">৩৪</span>
                        <span class="name-count d-block">মিডিয়া পোস্ট</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- fact -->
<section class="cta-type2 parallax parallax3 overflow-hidden position-relative py-5">
    <div class="container position-relative text-center">
        <div class="cta-content position-relative">
            <div class="icon"><span class="icon-support"></span></div>
            <div class="f-text text-white">আপনি কি আরও ভাল জন্য প্রস্তুত,</div>
            <div class="s-text text-white">আরও উত্পাদনশীল ব্যবসা?</div>
            <div class="flat-contact-now btn-linear hv-linear-gradient">
                <a href="{{ url('contact') }}" class="font-style linear-color border-corner">এখনই যোগাযোগ করুন<span class="icon-arrow-pointing-to-right"></span></a>
            </div>
        </div>
        <div class="circle-border circle-border1 none-767"></div>
        <div class="circle-border circle-border2 none-767"></div>
        <div class="circle-border circle-border3 none-767"></div>
    </div>
</section><!-- cta -->
<section class="flat-it-services flat-it-services-style1 pt-5 pb-0">
    <div class="container">
        <div class="title-section text-center mb-5">
            <h2 class="sub-title flat-title mb-0">আমাদের সেবাসমূহ</h2>
        </div>
        <x-items-list :items="$services" />
    </div>
</section>
<!-- flat-it-services -->

<section class="background-two-section pt-5 pb-0">
    <div class="flat-case-study flat-case-study-type1 flat-case-study-style1">
        <div class="container">
            <div class="title-section text-center mb-5">
                <p class="sub-title flat-title mb-0">আমাদের এন্টারপ্রাইজ সল্যুশনগুলো </p>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay="400ms">
                    <div class="overflow-hidden card shadow-lg border-0 p-0 rounded-3 text-center mb-5 flat-case-service2">
                        <div class="featured-post position-relative">
                            <div class="entry-image">
                                <img class="img-fluid" src="{{asset('asset/images/services/HRM.png')}}" alt="images">
                            </div>
                            <!--<span>IT Manages</span>-->
                        </div>
                        <div class="case-content text-center p-4">
                            <h3 class="title">এইচআরএম সিস্টেম</h3>
                            <a class="stretched-link" href="{{ url('hrm-details') }}"></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6 wow fadeInLeft" data-wow-delay="200ms">
                    <div class="overflow-hidden card shadow-lg border-0 p-0 rounded-3 text-center mb-5 flat-case-service2">
                        <div class="featured-post position-relative">
                            <div class="entry-image">
                                <img class="img-fluid" src="{{asset('asset/images/services/E-Commerce.png')}}" alt="images">
                            </div>
                            <!--<span>Service Manages</span>-->
                        </div>
                        <div class="case-content text-center p-4">
                            <h3 class="title">ই-কমার্স ওয়েবসাইট</h3>
                            <a class="stretched-link" href="{{ url('ecommerce-details') }}"></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 wow fadeInRight" data-wow-delay="200ms">
                    <div class="overflow-hidden card shadow-lg border-0 p-0 rounded-3 text-center mb-5 flat-case-service2">
                        <div class="featured-post position-relative">
                            <div class="entry-image">
                                <img class="img-fluid" src="{{asset('asset/images/services/Payroll.jpg')}}" alt="images">
                            </div>
                            <!--<span>IT Manages</span>-->
                        </div>
                        <div class="case-content text-center p-4">
                            <h3 class="title">পেরোল</h3>
                            <a class="stretched-link" href="{{ url('payroll-details') }}"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- background-two-section -->
<section class="testimonial testimonial-style1 py-4">
    <div class="container">
        <div class="title-section text-center mb-0">
            <p class="sub-title">প্রশংসাপত্র</p>
            <h2 class="flat-title">আমাদের কি বলে সম্মানিত গ্রাহকরা!</h2>
        </div>
        <div class="custom-nav-testimonial">
            <div class="banners-z">
                <div class="flat-carousel-box data-effect clearfix" data-zero="0" data-gap="30" data-column="2" data-column2="1" data-column3="1" data-column4="1" data-column5="1" data-dots="false" data-auto="false" data-nav="false" data-loop="true">
                    <div class="owl-carousel" style="transition:.50s">
                        <div class="card border-0 my-5 testimonial-box testimonial-box-type1 position-relative">
                            <div class="endorser d-sm-flex align-items-center">
                                <div class="avatar"><img src="{{asset('asset/images/testimonial/man.png')}}" alt="images"></div>
                                <div class="info">
                                    <h3 class="name">করিম হক</h3>
                                    <p class="role">মার্কেটিং অফিসার</p>
                                </div>
                            </div>
                            <div class="flat-spacer" data-desktop="26" data-sdesktop="26" data-mobi="15" data-smobi="15"></div>
                            <div class="content-testimonial">
                                <div class="text-bold">
                                    আমার ব্র্যান্ডটি নিয়ে ইন্দ্রজালের সাথে কাজ করতে দারুণ লেগেছে! আমার নিজের
                                    ব্র্যান্ডের অনেক অজানা সম্ভাবনা তারা আমায় দেখিয়েছে। যে সব কারণে তাদের সাথে কাজ করতে
                                    আমি স্বাচ্ছন্দ্য বোধ করেছি তা হচ্ছে তাদের দুর্দান্ত সব ক্রিয়েটিভ আইডিয়া,
                                    সময়ােপযােগী কারিগরি দক্ষতা, কার্যকর স্ট্র্যাটেজি এবং আমাদের ব্র্যান্ডকে উপস্থাপন
                                    করে এমন উপযুক্ত কনটেন্ট সরবরাহ করার দক্ষতা । ইন্দ্রজালের সহযোগিতা আমি অনেক দিন
                                    ধরে নিচ্ছি এবং তাদের সাথে একটি ভাল সম্পর্ক বজায় রাখার মতো আন্তরিক সহায়তা আমি তাদের
                                    কাছ থেকে সবসময় পেয়েছি।
                                </div>

                            </div>
                            <div class="spinning-circle"></div>
                            <div class="icon-represent"><span class="icon-trophy"></span></div>
                        </div>
                        <div class="card border-0 my-5 testimonial-box testimonial-box-type1 position-relative">
                            <div class="endorser d-sm-flex align-items-center">
                                <div class="avatar"><img src="{{asset('asset/images/testimonial/man.png')}}" alt="images"></div>
                                <div class="info">
                                    <h3 class="name">কং কিয়াং</h3>
                                    <p class="role">মার্কেটিং অফিসার</p>
                                </div>
                            </div>
                            <div class="flat-spacer" data-desktop="26" data-sdesktop="26" data-mobi="15" data-smobi="15"></div>
                            <div class="content-testimonial">
                                <div class="text-bold">
                                    ইন্দ্রজালের সাথে কাজ করাটা ছিল এক অন্যরকম অভিজ্ঞতা! তারা একটি পরিকল্পিত ডিজিটাল
                                    মার্কেটিং স্ট্র্যাটেজি তৈরি করেছে এবং ডিজিটাল প্ল্যাটফর্মে আমাদের ব্র্যান্ডটি তুলে
                                    ধরতে দুর্দান্ত অবদান রেখেছে। তারা আমাদের প্রয়োজনগুলি বোঝে এবং তার জন্য মানানসই
                                    সমাধান সরবরাহ করে। । আমার পরিচিত যে কারো ডিজিটাল মার্কেটিং সেবার জন্য আমরা
                                    ইন্দ্রজালের নামটাই সুপারিশ করব।
                                </div>

                            </div>
                            <div class="spinning-circle"></div>
                            <div class="icon-represent"><span class="icon-trophy"></span></div>
                        </div>
                        <div class="card border-0 my-5 testimonial-box testimonial-box-type1 position-relative">
                            <div class="endorser d-sm-flex align-items-center">
                                <div class="avatar"><img src="{{asset('asset/images/testimonial/man.png')}}" alt="images"></div>
                                <div class="info">
                                    <h3 class="name">খ্রিস্টান প্রিয়াঙ্কা</h3>
                                    <p class="role">মার্কেটিং অফিসার</p>
                                </div>
                            </div>
                            <div class="flat-spacer" data-desktop="26" data-sdesktop="26" data-mobi="15" data-smobi="15"></div>
                            <div class="content-testimonial">
                                <div class="text-bold">
                                    যে সেবা আমি 'ইন্দ্রজাল'-এর কাছ থেকে পেয়েছি তাতে আমরা ইম্প্রেসড। তাদের
                                    পেশাদারিত্ব, ডিটেইলসের প্রতি মনোযোগ এবং আগ্রহের সাথে আমাদের কথা শোনার বিষয়টি আমার
                                    সবচেয়ে বেশী ভাল লেগেছে। ডিজিটাল মার্কেটিং এর জন্য কিভাবে খরচ করলে আমার বিনিয়োগের
                                    সর্বোচ্চ সদব্যবহার হবে, সে সম্পর্কেও ইন্দ্রজাল আমাকে পথ দেখিয়েছে। আমি আসলেই
                                    ইম্প্রেসড।
                                </div>
                            </div>
                            <div class="spinning-circle"></div>
                            <div class="icon-represent"><span class="icon-trophy"></span></div>
                        </div>
                        <div class="card border-0 my-5 testimonial-box testimonial-box-type1 position-relative">
                            <div class="endorser d-sm-flex align-items-center">
                                <div class="avatar"><img src="{{asset('asset/images/testimonial/man.png')}}" alt="images"></div>
                                <div class="info">
                                    <h3 class="name">প্রিয়াঙ্কা কিয়াং</h3>
                                    <p class="role">সিইও, পার্কো</p>
                                </div>
                            </div>
                            <div class="flat-spacer" data-desktop="26" data-sdesktop="26" data-mobi="15" data-smobi="15"></div>
                            <div class="content-testimonial">
                                <div class="text-bold">
                                    আগে আমার নামে অনেকগুলি ফেইক পেইজ ও প্রোফাইল ছিল। ইন্দ্রজাল সাহয্যে আমার
                                    ফেইসবুক প্রোফাইল ও পেইজ মেন্টেইন করে আমি এখন বেশ স্বস্তিতে আছি। আমার পেইজ ভেরিফাইড
                                    করতে যা যা করা প্রয়োজন তার সবটুকুই ইন্দ্রজাল করেছে। তার উপর আমার শত ব্যস্ততার মাঝেও
                                    আমার
                                    অনুসারীদেরকে সবসময় আমার বিষয়ে আপডেট রাখার জন্য ধন্যবাদ ইন্দ্রজাল।
                                </div>
                            </div>
                            <div class="spinning-circle"></div>
                            <div class="icon-represent"><span class="icon-trophy"></span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>=

<!-- get-in-touch -->
<div class="blog-post blog-post-style1">
    <div class="partners">
        <!-- partners -->
        <div class="container">
            <div class="banners-z">
                <div class="flat-carousel-box data-effect clearfix" data-zero="0" data-gap="70" data-column="6" data-column2="5" data-column3="4" data-column4="2" data-dots="false" data-auto="true" data-nav="false" data-loop="true">
                    <div class="owl-carousel">
                        <img src="{{asset('asset/images/partners/01.png')}}" alt="images">
                        <img src="{{asset('asset/images/partners/02.png')}}" alt="images">
                        <img src="{{asset('asset/images/partners/03.png')}}" alt="images">
                        <img src="{{asset('asset/images/partners/04.png')}}" alt="images">
                        <img src="{{asset('asset/images/partners/05.png')}}" alt="images">
                        <img src="{{asset('asset/images/partners/06.png')}}" alt="images">
                        <img src="{{asset('asset/images/partners/03.png')}}" alt="images">
                        <img src="{{asset('asset/images/partners/05.png')}}" alt="images">
                        <img src="{{asset('asset/images/partners/06.png')}}" alt="images">
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>


@endsection
