<!-- Meet the Founder & CEO Section -->
<section class="about-us-section-style1 pt-60 pb-100 bg-no-repeat bg-cover bg-pos-cb meet-the-ceo-founder"
    data-background="{{ asset('assets/images/bg/abs-bg1.png') }}"
    data-overlay-light="3"
    style="background-image: url({{ asset('assets/images/bg/abs-bg1.png') }});">

    <div class="container">
        <div class="row">
            @if($ceo)
                <!-- Left Column - Images -->
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                    <div class="optech-thumb extra-mr">
                        <img src="{{ $ceo->avatar_url }}" alt="{{ $ceo->name }}">
                        <div class="optech-thumb-position">
                            <img src="{{ $ceo->avatar_url }}" alt="{{ $ceo->name }}">
                        </div>
                        <div class="optech-shape1">
                            <img alt="shape" width="133" height="200" decoding="async" data-nimg="1"
                                style="color:transparent" src="{{ asset('assets/images/inner-images/shape1.svg') }}">
                        </div>
                        <div class="optech-shape2">
                            <img alt="shape" width="104" height="107" decoding="async" data-nimg="1"
                                style="color:transparent" src="{{ asset('assets/images/inner-images/shape2.svg') }}">
                        </div>
                    </div>
                </div>

                <!-- Right Column - Content -->
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                    <div class="title-box">
                        <h5 class="side-line-left sub">Introducing Our Founder & CEO</h5>
                        <h2 class="title mrb-5 mrb-lg-35">
                            <span class="text-gradient-color">
                                @if($ceo->social_links && isset($ceo->social_links['linkedin']))
                                    <a href="{{ $ceo->social_links['linkedin'] }}" target="_blank">
                                        {{ $ceo->name }}
                                    </a>
                                @else
                                    {{ $ceo->name }}
                                @endif
                            </span>
                        </h2>
                    </div>

                    <p class="mrb-10">
                        {{ $ceo->bio }}
                    </p>

                    @if($ceo->description)
                        <p>
                            {{ $ceo->description }}
                        </p>
                    @endif

                    <div class="row">
                        <div class="col-lg-12 mt-2">
                            <div class="d-inline d-md-flex align-items-center mt-40">
                                <a href="{{ route('our-story') }}" class="theme-btn-1 mrr-40 mrb-sm-20">
                                    Learn More
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @else
                <div class="col-lg-12">
                    <p class="text-center">CEO information not available.</p>
                </div>
            @endif
        </div>
    </div>
</section>
