@extends('layout')

@section('content')


<div class="page-title parallax parallax2 position-relative clearfix">
    <div class="section-overlay"></div>
    <div class="container">
        <div class="breadcrumbs position-relative">
            <div class="breadcrumbs-wrap">
                <h1 class="title">বিস্তারিত</h1>
                <ul class="breadcrumbs-inner">
                    <li><a href="/">হোম</a></li>
                    <li><a href="#">বিস্তারিত</a></li>
                </ul>
            </div>
        </div>
    </div>
</div><!-- page-title -->
<div class="contact flat-row-half py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="get-in-touch get-in-touch-type1">

                    <div class="info-contact">
                        <p>ইন্দ্রজাল ডিজিটাল এজেন্সি<br>
                            শাহ আলী টাওয়ার (৭ম তলা)
                            <br>

                            ৩৩ কাওরান বাজার <br>ঢাকা - ১২১৫
                        </p>
                        <p>+০০ ১২৩৪৫৬৭৮৯</p>
                        <p>hello@indrojal.com.bd</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <form id="contactform" action="#./contact/contact-process.php" method="post" class="form-leave-comment form-submit">
                    <div class="text-wrap d-md-flex clearfix">
                        <div class="w-left position-relative">
                            <input type="text" name="firstname" id="firstname" value="" class="firstname" placeholder="Name*">
                            <span class="icon-user"></span>
                        </div>
                        <div class="w-right position-relative">
                            <input type="text" name="email" id="email" value="" class="email" placeholder="Email">
                            <span class="fa fa-envelope" aria-hidden="true"></span>
                        </div>
                    </div>
                    <div class="message-wrap mg-b50">
                        <textarea name="message" id="comment-message" rows="8" placeholder="Message here" required="required"></textarea>
                    </div>
                    <div class="flat-send-message btn-linear hv-linear-gradient text-center">
                        <button name="submit" type="submit" class="submit font-style linear-color border-corner" id="submit">এখনই বার্তা প্রেরণ করুন</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div><!-- contact -->

@endsection
