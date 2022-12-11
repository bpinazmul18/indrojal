@extends('layout')

@section('content')
<div class="page-title parallax parallax2 position-relative clearfix">
    <div class="section-overlay"></div>
    <div class="container">
        <div class="breadcrumbs position-relative">
            <div class="breadcrumbs-wrap">
                <h1 class="title">অডিট সেবা</h1>
                <ul class="breadcrumbs-inner">
                    <li><a href="/">হোম</a></li>
                    <li><a href="#">অডিট সেবা</a></li>
                </ul>
            </div>
        </div>
    </div>
</div><!-- page-title -->
<div class="flat-case-details">
    <div class="container">
        <div class="bg-case-details border-corner">


            <div class="row">

                <div class="col-lg-12 col-md-12 col-12">
                    <div class="case-details-desc">
                        <h4 class="text-title">বিনামূল্যে অডিট সেবা</h4>
                        <p>ইন্দ্রজালের পক্ষ থেকে ফ্রি অডিট করে জেনে নিন আপনার ব্র্যান্ডটি ডিজিটাল মার্কেটিং এর
                            জন্য
                            কতটুকু প্রস্তুত। এই অডিট বা নিরীক্ষার মাধ্যমে আমরা বোঝার চেষ্টা করবো আপনার ব্যবসা বা
                            ব্র্যান্ডটির অনলাইন উপস্থিতি সুদৃঢ় করতে কি ধরণের কৌশল প্রয়োজন।
                        </p>

                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-12 d-flex flex-column align-items-center">
                    <div style="width: 100%;text-align: center;">
                        <h1><strong style="font-size: 22px;color: #000;">ফ্রি অডিট করুন:</strong></h1>
                        <hr>
                    </div>

                    <div class="col-lg-10">
                        <form class="form-leave-comment form-submit">
                            <label for="email" class="font-weight-bold text-dark">১। আপনার প্রতিষ্ঠানের কি ওয়েব পেইজ
                                আছে? </label>
                            <div class="form-group">
                                <label for="no" class="ml-3">না। </label>
                                <input type="radio" id="webpage_no" name="w_page">
                                <label for="yes" class="ml-2"> হ্যাঁ।</label>
                                <input type="radio" id="webpage_yes" name="w_page">
                            </div>
                            <div class="form-group ml-3" id="show_page_content" style="display: none;">
                                <label for="email" class="font-weight-bold text-dark"><i class='fa fa-chevron-right'></i> আপনার ওয়েবপেইজটিতে কি আপনার
                                    ব্র্যান্ড বা পণ্য বা সেবা সম্পর্কে তথ্য
                                    আছে? </label>
                                <div>
                                    <label for="no" class="ml-3">না। </label>
                                    <input type="radio" name="brand_service" id="no">
                                    <label for="yes" class="ml-2"> হ্যাঁ।</label>
                                    <input type="radio" name="brand_service" id="yes">
                                </div>
                                <label for="email" class="font-weight-bold text-dark"><i class='fa fa-chevron-right'></i> আপনার ওয়েবসাইটটি কি আপনার অন্যান্য
                                    সোশ্যাল মিডিয়া বা সামাজিক যোগাযোগ মাধ্যমের একাউন্টের সাথে সংযুক্ত? </label>
                                <div>
                                    <label for="no" class="ml-3">না। </label>
                                    <input type="radio" name="account" id="no">
                                    <label for="yes" class="ml-2"> হ্যাঁ।</label>
                                    <input type="radio" name="account" id="yes">
                                </div>
                                <label for="email" class="font-weight-bold text-dark"><i class='fa fa-chevron-right'></i> আপনার ওয়েবসাইটটির জন্য কি এসইও
                                    করেন? </label>
                                <div>
                                    <label for="no" class="ml-3">না। </label>
                                    <input type="radio" name="seo" id="no">
                                    <label for="yes" class="ml-2"> হ্যাঁ।</label>
                                    <input type="radio" name="seo" id="yes">
                                </div>
                                <label for="email" class="font-weight-bold text-dark"><i class='fa fa-chevron-right'></i> আপনার ওয়েবসাইটটি কি রেগুলার আপডেট
                                    করেন? </label>
                                <div>
                                    <label for="no" class="ml-3">না। </label>
                                    <input type="radio" name="update" id="no">
                                    <label for="yes" class="ml-2"> হ্যাঁ।</label>
                                    <input type="radio" name="update" id="yes">
                                </div>
                            </div>
                            <label for="email" class="font-weight-bold text-dark">২। কোন কোন সোশ্যাল মিডিয়ায় আপনার
                                ব্র্যান্ডের উপস্থিতি আছে?</label>
                            <div class="form-group">
                                <input class="ml-3" type="checkbox" name="facebook" id="facebook">
                                <label for="facebook">ফেইসবুক</label>
                                <input class="ml-2" type="checkbox" name="twitter" id="twitter">
                                <label for="twitter">টুইটার</label>
                                <input class="ml-2" type="checkbox" name="instragram" id="instragram">
                                <label for="instragram">ইন্সটাগ্রাম</label>
                                <input class="ml-2" type="checkbox" name="youtube" id="youtube">
                                <label for="youtube">ইউটিউব</label>
                                <input class="ml-2" type="checkbox" name="linkedin" id="linkedin">
                                <label for="linkedin">লিঙ্কড ইন</label>
                            </div>
                            <label for="email" class="font-weight-bold text-dark">৩। আপনার সোশ্যাল মিডিয়া কি রেগুলার
                                আপডেট করেন? </label>
                            <div class="form-group">
                                <label for="no" class="ml-3">না। </label>
                                <input type="radio" name="ragular">
                                <label for="yes" class="ml-2"> হ্যাঁ।</label>
                                <input type="radio" name="ragular">
                            </div>
                            <label for="email" class="font-weight-bold text-dark">৪। আপনি কি সোশ্যাল মিডিয়াতে পেইড
                                প্রমোশন করেন? </label>
                            <div class="form-group">
                                <label for="no" class="ml-3">না। </label>
                                <input type="radio" id="social_paid_no" name="social_paid">
                                <label for="yes" class="ml-2"> হ্যাঁ।</label>
                                <input type="radio" id="social_paid_yes" name="social_paid">
                            </div>
                            <div class="form-group ml-3" id="show_social_paid" style="display: none;">
                                <label for="email" class="font-weight-bold text-dark"><i class='fa fa-chevron-right'></i> আপনার পেইড প্রমোশনের জন্য কি কোন
                                    স্ট্র্যাটেজি আছে আপনার?</label>
                                <div>
                                    <label for="no" class="ml-3">না। </label>
                                    <input type="radio" name="promotion">
                                    <label for="yes" class="ml-2"> হ্যাঁ।</label>
                                    <input type="radio" name="promotion">
                                </div>
                            </div>
                            <label for="email" class="font-weight-bold text-dark">৫। আপনার কি কোন কন্টেন্ট স্ট্র্যাটেজি
                                আছে? </label>
                            <div class="form-group">
                                <label for="no" class="ml-3">না। </label>
                                <input type="radio" name="content">
                                <label for="yes" class="ml-2"> হ্যাঁ।</label>
                                <input type="radio" name="content">
                            </div>
                            <label for="email" class="font-weight-bold text-dark">৬। আপনি কি কি ধরণের কন্টেন্ট ব্যবহার
                                করেন? </label>
                            <div class="form-group">
                                <input class="ml-3" type="checkbox" name="text" id="text">
                                <label for="text">টেক্সট বা লিখা</label>
                                <input class="ml-2" type="checkbox" name="image" id="image">
                                <label for="image">ছবি</label>
                                <input class="ml-2" type="checkbox" name="graphic" id="graphic">
                                <label for="graphic">গ্রাফিক্স</label>
                                <input class="ml-2" type="checkbox" name="video" id="video">
                                <label for="video">ভিডিও</label>
                            </div>
                            <label for="email" class="font-weight-bold text-dark">৭।আপনার সোশ্যাল মিডিয়া একাউন্টগুলো কি
                                একে ওপরের সাথে লিঙ্কড? </label>
                            <div class="form-group">
                                <label for="no" class="ml-3">না। </label>
                                <input type="radio" name="linked">
                                <label for="yes" class="ml-2"> হ্যাঁ।</label>
                                <input type="radio" name="linked">
                            </div>
                            <label for="email" class="font-weight-bold text-dark">৮। আপনার সোশ্যাল মিডিয়া একাউন্টগুলো কি
                                ভেরিফাইড? </label>
                            <div class="form-group">
                                <label for="no" class="ml-3">না। </label>
                                <input type="radio" name="varified">
                                <label for="yes" class="ml-2"> হ্যাঁ।</label>
                                <input type="radio" name="varified">
                            </div>
                            <label for="email" class="font-weight-bold text-dark">৯। আপীনই কি সোশ্যাল মিডিয়ার
                                রিপোর্টগুলো বিশ্লেষণ করেন?</label>
                            <div class="form-group">
                                <label for="no" class="ml-3">না। </label>
                                <input type="radio" name="social_report" id="social_report_no">
                                <label for="yes" class="ml-2"> হ্যাঁ।</label>
                                <input type="radio" name="social_report" id="social_report_yes">
                            </div>
                            <div class="form-group ml-3" id="show_social_report" style="display: none;">
                                <label for="email" class="font-weight-bold text-dark"><i class='fa fa-chevron-right'></i> কত দিন পর পর</label>
                                <div>
                                    <input class="ml-3" type="checkbox" name="week" id="week">
                                    <label for="week">সাপ্তাহিক</label>
                                    <input class="ml-2" type="checkbox" name="month" id="month">
                                    <label for="month">মাসিক </label>
                                    <input class="ml-2" type="checkbox" name="two_month" id="two_month">
                                    <label for="two_month">২ মাসে</label>
                                    <input class="ml-2" type="checkbox" name="six_month" id="six_month">
                                    <label for="six_month">৬ মাসে</label>
                                </div>
                            </div>
                            <div class="form-row" style="column-count: 2; column-gap: 10px; row-gap:10px;">
                                <div class="col-md-5 font-weight-bold text-dark">
                                    <label for="name">নাম:</label>
                                    <input type="text" class="form-control" name="name" id="name" placeholder="নাম">

                                </div>
                                <div class="col-md-5 font-weight-bold text-dark">
                                    <label for="email">ইমেইল:</label>
                                    <input type="email" name="email" id="email" placeholder="ইমেইল">

                                </div>
                                <div class="col-md-5 font-weight-bold text-dark">
                                    <label for="phone">ফোন:</label>
                                    <input type="number" name="phone" id="phone" placeholder="ফোন">

                                </div>
                                <div class="col-md-5 font-weight-bold text-dark">
                                    <label for="organization">প্রতিষ্ঠান:</label>
                                    <input type="text" name="organization" id="organization" placeholder="প্রতিষ্ঠান">

                                </div>
                                <div class="col-md-5 font-weight-bold text-dark">
                                    <label for="designation">পদবি:</label>
                                    <input type="text" name="designation" id="designation" placeholder="পদবি">

                                </div>

                            </div>


                            <button name="submit" type="submit" class="mt-5 btn btn-primary submit font-style linear-color border-corner" id="submit">প্রেরণ
                                করুন</button>

                        </form>
                    </div>

                </div>


            </div>
        </div>
    </div>
</div>

@endsection
