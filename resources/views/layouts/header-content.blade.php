<header class="header-style-02 site-header">

    <nav class="main-menu sticky-header">
        <div class="strip">
            <p class="text-center"><b style="color: #ffffff;">Don't Miss Our Upcoming Free Webinar Event! </b></p>
            <marquee>
                <b style="color: #ffffff;">Don't Miss Our Upcoming Free Webinar Event!</b>
            </marquee>


        </div>
        <div class="container">
            <div class="main-menu-inner">
                <div class="main-menu-logo">
                    <a href="{{ route('index') }}">
                        <img src="{{ asset('assets/images/inner-images/logo-new.png') }}" alt="logo" />
                    </a>
                </div>
                <ul class="main-nav-menu">

                    <li><a href="{{ route('index') }}">Home</a></li>
                    <li class="menu-has-sub">
                        <a href="javascript:void()">Services</a>
                        <ul class="sub-menu dropdown-menu-submenu">
                            <li><a href="{{ route('eb1a-visa') }}">EB1 Visa (Green Card)</a></li>
                            <li><a href="{{ route('o1avisa') }}">O1A (Work Visa)</a></li>
                            <li><a href="{{ route('eb2-niw') }}">EB2-NIW (Green Card)</a></li>
                        </ul>
                    </li>

                    <!-- New Other Visas Menu -->
                    <li class="menu-has-sub">
                        <a href="javascript:void()">Other Visas</a>
                        <ul class="sub-menu dropdown-menu-submenu">
                            <!-- Work Visas -->
                            <li class="menu-has-sub has-sub-child">
                                <a href="{{ route('work-visas') }}">Work Visas</a>
                                <ul class="sub-menu dropdown-menu-submenu">
                                    <li><a href="{{ route('h1b-visa') }}">H1B Visa</a></li>
                                    <li><a href="{{ route('l1-visa') }}">L1 Visa</a></li>
                                    <li><a href="{{ route('tn-visa') }}">TN Visa</a></li>
                                    <li><a href="{{ route('h2b-visa') }}">H2B Visa</a></li>
                                    <li><a href="{{ route('e3-visa') }}">E3 Visa</a></li>
                                </ul>
                            </li>

                            <!-- Student Visas -->
                            <li class="menu-has-sub has-sub-child">
                                <a href="{{ route('student-visas') }}">Student Visas</a>
                                <ul class="sub-menu dropdown-menu-submenu">
                                    <li><a href="{{ route('f1-visa') }}">F1 Visa</a></li>
                                    <li><a href="{{ route('m1-visa') }}">M1 Visa</a></li>
                                    <li><a href="{{ route('j1-visa') }}">J1 Visa</a></li>
                                </ul>
                            </li>

                            <!-- Business & Investor Visas -->
                            <li class="menu-has-sub has-sub-child">
                                <a href="{{ route('business-investor-visas') }}">Business & Investor</a>
                                <ul class="sub-menu dropdown-menu-submenu">
                                    <li><a href="{{ route('e2-visa') }}">E2 Visa (Investor)</a></li>
                                    <li><a href="{{ route('e1-visa') }}">E1 Visa (Treaty Trader)</a></li>
                                    <li><a href="{{ route('eb5-visa') }}">EB5 Visa (Immigrant Investor)</a></li>
                                </ul>
                            </li>

                            <!-- Family-Based Visas -->
                            <li class="menu-has-sub has-sub-child">
                                <a href="{{ route('family-visas') }}">Family-Based Visas</a>
                                <ul class="sub-menu dropdown-menu-submenu">
                                    <li><a href="{{ route('k1-visa') }}">K1 Visa (Fiancé)</a></li>
                                    <li><a href="{{ route('k3-visa') }}">K3 Visa (Spouse)</a></li>
                                    <li><a href="{{ route('cr1-ir1-visa') }}">CR1/IR1 Visa (Spouse)</a></li>
                                    <li><a href="{{ route('ir5-visa') }}">IR5 Visa (Parents)</a></li>
                                </ul>
                            </li>

                            <!-- Tourist & Visitor Visas -->
                            <li class="menu-has-sub has-sub-child">
                                <a href="{{ route('tourist-visitor-visas') }}">Tourist & Visitor</a>
                                <ul class="sub-menu dropdown-menu-submenu">
                                    <li><a href="{{ route('b1-b2-visa') }}">B1/B2 Visa</a></li>
                                    <li><a href="{{ route('b1-visa') }}">B1 Visa (Business)</a></li>
                                    <li><a href="{{ route('b2-visa') }}">B2 Visa (Tourist)</a></li>
                                </ul>
                            </li>

                            <!-- Special Category Visas -->
                            <li class="menu-has-sub has-sub-child">
                                <a href="{{ route('special-visas') }}">Special Categories</a>
                                <ul class="sub-menu dropdown-menu-submenu">
                                    <li><a href="{{ route('p1-visa') }}">P1 Visa (Athletes/Entertainers)</a></li>
                                    <li><a href="{{ route('r1-visa') }}">R1 Visa (Religious Workers)</a></li>
                                    <li><a href="{{ route('i-visa') }}">I Visa (Journalists)</a></li>
                                    <li><a href="{{ route('u-visa') }}">U Visa (Crime Victims)</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    {{-- <li class="menu-has-sub">
                        <a href="{{ route('who-are-we') }}">About Us</a>
                        <ul class="dropdown-menu-submenu">
                            <li class="menu-has-sub has-sub-child">

                                <a href="{{ route('our-story') }}">Our Story</a>
                                <ul class="sub-menu dropdown-menu-submenu">
                                    <li><a href="{{ route('why-choose-us') }}">Why Choose Us?</a></li>
                                    <li><a href="{{ route('leadership-team') }}">Leadership Team</a></li>

                                </ul>
                            </li>

                        </ul>
                    </li> --}}

                    <li class="menu-has-sub">
                        <a href="{{ route('our-story') }}">Our Story</a>
                        <ul class="dropdown-menu-submenu">
                            {{-- <li><a href="{{ route('case-studies') }}">Case Studies</a></li>
<li><a href="{{ route('vodcast') }}">Vodcast</a></li> --}}
                            <li><a href="{{ route('why-choose-us') }}">Why Choose Us?</a></li>
                            <li><a href="{{ route('leadership-team') }}">Leadership Team</a></li>

                        </ul>
                    </li>

                    {{-- <li><a href="{{ route('turing-ai') }}">Turing AI</a></li> --}}
                    <li><a href="{{ route('reviews') }}">Testimonials</a></li>
                    <li class="menu-has-sub">
                        {{-- <a href="{{ route('resources') }}">Resources</a> --}}
                        <a href="javascript:void()">Resources</a>
                        <ul class="dropdown-menu-submenu">
                            {{-- <li><a href="{{ route('case-studies') }}">Case Studies</a></li>
<li><a href="{{ route('vodcast') }}">Vodcast</a></li> --}}
                            <li><a href="{{ route('blog') }}">Blog</a></li>
                            <li><a href="{{ route('faqs') }}">FAQ's</a></li>

                        </ul>
                    </li>
                    <li><a href="{{ route('contactus') }}">Contact Us</a></li>
                </ul>
                <div class="main-menu-right">
                    <a href="#" class="mobile-nav-toggler">
                        <span></span>
                        <span></span>
                        <span></span>
                    </a>

                    <div class="header-contact-btn">
                        <a href="{{ route('contactus') }}#calendar" class="theme-btn-6">Schedule Consultation</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>
<!-- Mobile Nav Sidebar Content Start -->
<div class="mobile-nav-wrapper">
    <div class="mobile-nav-overlay mobile-nav-toggler"></div>
    <div class="mobile-nav-content">
        <a href="#" class="mobile-nav-close mobile-nav-toggler">
            <span></span>
            <span></span>
        </a>
        <div class="side-panel-logo logo-box">
            <a href="{{ route('index') }}" aria-label="logo image">

                <img src="{{ asset('assets/images/inner-images/logo.png') }}" alt="logo" />
            </a>
        </div>
        <div class="mobile-nav-container"></div>
        <ul class="list-items mobile-sidebar-contact">
            <li> <i class="bi bi-envelope-paper"></i> <a href="mailto:contact@eb1aexperts.com"
                    style="padding-left:4px;"> contact@eb1fillingexperts.com</a>
            </li>
            <li><i class="bi bi-geo-alt"></i> <b style="color: #fff;"> Address :</b> 2727 LBJ Freeway, Suite 200
                Dallas, TX, 75234</li>

        </ul>

    </div>
</div>
<!-- Mobile Nav Sidebar Content End -->


<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-16934108216"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());
    gtag('config', 'AW-16934108216');
</script>


<!-- header area end -->
