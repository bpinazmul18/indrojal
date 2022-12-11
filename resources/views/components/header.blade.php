<header id="header" class="header header-type1 bg-header-s1 bg-color">
    <div class="container">
        <div class="flex-header d-flex">
            <div id="logo" class="logo d-flex align-items-center justify-content-start">
                <a href="/" title="Logo"><img src="{{asset('asset/images/logo/indrojal-logo.png')}}" data-width="168" data-height="38" alt="images" data-retina="{{asset('asset/images/logo/indrojal-logo.png')}}"></a>
            </div>
            <div class="content-menu d-flex align-items-center justify-content-end">
                <div class="nav-wrap">
                    <div class="btn-menu"><span></span></div>
                    <nav id="mainnav" class="mainnav">
                        <ul class="menu">
                            <li>
                                <a href="/" class="{{ Request::segment(1) === null ? 'active' : '' }}">ইন্দ্রজাল
                                </a>
                            </li>

                            <!-- <li>
                                <a href="{{ url('it-services') }}"
                                    class="{{ Request::segment(1) === 'it-services' ? 'active' : '' }}">সেবাখাত</a>
                            </li> -->

                            <li><a href="{{ url('it-services') }}" class="{{ Request::segment(1) === 'it-services' ? 'active' : '' }}">আইটি
                                    সেবাসমূহ</a></li>
                            <li>
                                <a href="{{ url('products') }}" class="{{ Request::segment(1) === 'products' ? 'active' : '' }}">এন্টারপ্রাইজ
                                    সল্যুশন </a>
                            </li>
                            <li>
                                <a href="{{ url('contact') }}" class="{{ Request::segment(1) === 'contact' ? 'active' : '' }}">যোগাযোগ </a>
                            </li>
                            <li>
                                <a href="{{ url('about') }}" class="{{ Request::segment(1) === 'about' ? 'active' : '' }}">আমাদের সম্পর্কে
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('audit') }}" class="{{ Request::segment(1) === 'audit' ? 'active' : '' }}">বিনামূল্যে
                                    অডিট সেবা </a>
                                <ul class="sub-menu">
                                    <li>
                                        <a href="{{ url('it-services-digital') }}">ডিজিটাল মার্কেটিং সেবা-সমুহ</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
