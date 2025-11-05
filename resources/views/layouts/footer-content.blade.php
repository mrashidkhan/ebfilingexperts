<!-- footer area -->
<style>
    .footer-container-inner #hsForm_c025a44a-dce0-42a8-976c-0ed29a567cdd {
        display: flex;
        height: 42px;
        background-color: #f0ffff;
        border-radius: 50px;
        width: min-content;
    }

    .footer-container-inner {
        margin-bottom: 32px;
    }

    .footer-container-inner h5 {
        text-transform: initial !important;
    }

    .footer-container-inner .hs_error_rollup .no-list.hs-error-msgs label {
        display: none;
    }

    .footer-container-inner label#label-email-c025a44a-dce0-42a8-976c-0ed29a567cdd {
        display: none;
    }

    .footer-container-inner #email-c025a44a-dce0-42a8-976c-0ed29a567cdd {
        padding: 6px 10px;
        border-radius: 50px;
        font-size: 14px;
        width: 190px;
    }

    .hs_submit.hs-submit {
        background-color: transparent !important;
    }

    .actions {
        background-color: transparent !important;
    }

    .footer-container-inner .submitted-message {
        font-size: 18px;
        color: #ffffff;
        font-weight: 600;
    }

    .footer-container-inner .hs-button.primary.large {
        /* top: 1px;
    right: 0; */
        height: calc(100% - 3px);
        border: none;
        border-radius: 60px;
        outline: none;
        margin: 3px 3px;
        padding: 4px 20px;
        cursor: pointer;
        background: #0f767d;
        color: #ffffff;
        transition: width 0.35s ease-in-out, background 0.35s ease-in-out;
    }

    .footer-container-inner label.hs-error-msg.hs-main-font-element {
        font-size: 11px;
        padding-top: 4px;
        color: red;
    }

    @media screen (max-width:1199px) and (min-width:992px) {
        .footer-container-inner.hs-button.primary.large {
            padding: 4px 10px;
        }

        .footer-container-inner #hsForm_c025a44a-dce0-42a8-976c-0ed29a567cdd {
            margin-left: -14px;
        }
    }

    @media screen and (max-width:400px) {
        .footer-container-inner #email-c025a44a-dce0-42a8-976c-0ed29a567cdd {
            width: 180px;
        }
    }
</style>
<footer class="main-footer style-two">
    <div class="pattern-layer-one" style="background-image: url(images/inner-images/pattern-7.png)"></div>
    <div class="pattern-layer-two" style="background-image: url(images/inner-images/pattern-8.png)"></div>
    <!--Waves end-->
    <div class="container">
        <!--Widgets Section-->
        <div class="widgets-section">
            <div class="row clearfix">
                <!-- Footer Column -->
                <div class="footer-column col-lg-4 col-md-6 col-sm-12 mobile-width-50">
                    <div class="footer-widget logo-widget">
                        <!-- <div class="footer-widget links-widget"> -->
                        <div class="footer-container-inner">
                            <h5 class="mb-3">Subscribe to our Newsletter</h5>
                            <div class="content">
                                <script charset="utf-8" type="text/javascript" src="../js-na2.hsforms.net/forms/embed/v2.js"></script>
                                <script>
                                    hbspt.forms.create({
                                        portalId: "242188622",
                                        formId: "c025a44a-dce0-42a8-976c-0ed29a567cdd",
                                        region: "na2"
                                    });
                                </script>
                            </div>
                        </div>

                        <h5>Let's get Social!</h5>

                        <!-- Social Box -->
                        <ul class="social-box">
                            <li>
                                <a href="https://www.linkedin.com" target="_blank">
                                    <img src="{{ asset('assets/images/inner-images/linkedin.png') }}" alt="linkedin">
                                </a>
                            </li>
                            <li>
                                <a href="https://facebook.com" target="_blank">
                                    <img src="{{ asset('assets/images/inner-images/facebook.png') }}" alt="facebook">
                                </a>
                            </li>
                            <li>
                                <a href="https://instagram.com" target="_blank">
                                    <img src="{{ asset('assets/images/inner-images/instagram.png') }}" alt="instagram">
                                </a>
                            </li>
                            <li>
                                <a href="https://x.com" target="_blank">
                                    <img src="{{ asset('assets/images/inner-images/social-media.png') }}"
                                        alt="Twitter">
                                </a>
                            </li>
                            <li>
                                <a href="https://www.youtube.com" target="_blank">
                                    <img src="{{ asset('assets/images/inner-images/youtube.png') }}" alt="youtube">
                                </a>
                            </li>
                            <li>
                                <a href="https://medium.com" target="_blank">
                                    <img src="{{ asset('assets/images/inner-images/medium.png') }}" alt="medium">
                                </a>
                            </li>
                        </ul>
                        <!-- TrustBox script -->
                        <script type="text/javascript" src="https://widget.trustpilot.com/bootstrap/v5/tp.widget.bootstrap.min.js" async>
                        </script>
                        <!-- End TrustBox script -->


                    </div>
                </div>
                <!-- Footer Column -->
                <div class="footer-column col-lg-2 col-md-6 col-sm-12 mobile-width-50 mobile-sm">
                    <div class="footer-widget links-widget">
                        <h5>Quick Links</h5>
                        <ul class="list-link">
                            <li><a href="{{ route('eb1a-visa') }}">EB1 Visa</a></li>
                            <li><a href="{{ route('o1avisa') }}">O-1A Visa</a></li>
                            <li><a href="{{ route('eb2-niw') }}">EB2-NIW</a></li>
                            {{-- <li><a href="{{ route('turing-ai') }}">Turing AI</a></li> --}}
                            <li><a href="{{ route('who-are-we') }}">Who are we</a></li>
                            <!-- <li><a href="{{ route('partnerships-boundless') }}">Boundless Partner</a></li> -->
                            <li><a href="{{ route('our-story') }}">Our Story</a></li>
                        </ul>
                    </div>
                </div>
                <!-- Column -->
                <!-- Footer Column -->
                <div class="footer-column col-lg-2 col-md-6 col-sm-12 mobile-width-50 mobile-sm">
                    <div class="footer-widget news-widget">
                        <h5>Resources</h5>

                        <ul class="list-link">
  <li><a href="{{ route('reviews') }}">Testimonials</a></li>
  {{-- <li><a href="{{ route('case-studies') }}">Case Studies</a></li> --}}
  {{-- <li><a href="{{ route('vodcast') }}">Vodcast</a></li> --}}
  <li><a href="{{ route('blog') }}">Blog</a></li>
  <li><a href="{{ route('faqs') }}">FAQ's</a></li>
</ul>
                    </div>
                </div>
                <!-- Footer Column -->
                <div class="footer-column col-lg-4 col-md-6 col-sm-12 mobile-width-50">
                    <div class="footer-widget contact-widget">
                        <h5>Contact Us</h5>
                        <ul>

                            <li class="contact-widget-list">
                                <span class="icon bi bi-envelope-paper"></span>
                                <strong><a href="mailto:contact@eb1fillingexperts.com">contact@eb1fillingexperts.com</a></strong>

                            </li>
                            <li class="contact-widget-list">
  <span class="icon location bi bi-geo-alt-fill"></span>
  <strong class="address">2727 LBJ Freeway, Suite 200, Dallas, TX 75234</strong>
</li>



                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Footer Bottom -->

    <div class="footer-bottom">
        <div class="footer-copyright-bottom">
            <div class="container border-bottom-solid-footer">
                <div class="row clearfix">
                    <!-- Column -->
                    <div class="column col-lg-12 col-md-12 col-sm-12">
                        <div class="copyright"><a href="{{ route('disclaimer') }}" style="color: #fff; text-decoration: underline;">
  <b style="color: #fff;">Disclaimer:</b>
</a> EB Filing Experts provides educational resources and informational content to help you understand the EB-1A Green Card process.
    However, we are not a law firm and do not provide legal advice, legal services, or official representation before U.S.
    immigration authorities. Our services are designed to complement, not replace, professional legal counsel.
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="column col-lg-2 col-md-12 col-sm-12">
                        <ul class="footer-nav">

                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer-bottom-copyright">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7 col-md-5 col-sm-12 col-xs-12">
                            <p class="copyright-text">
                                <b>EB Filing Experts LLC</b> © 2025. All Rights Reserved
                            </p>
                        </div>
                        <div class="col-lg-5 col-md-7 col-sm-12 col-xs-12">
                            <ul class="footer-privacy-policy">
                                <li><a href="{{ route('privacy-policy') }}">Privacy Policy</a></li>
                                <li><a href="{{ route('terms-of-use') }}">Terms of Use</a></li>
                                <li><a href="{{ route('refund-policy') }}">Refund Policy</a></li>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- ----------- linkedin -------------- -->
<script type="text/javascript">
    _linkedin_partner_id = "6930706";
    window._linkedin_data_partner_ids = window._linkedin_data_partner_ids || [];
    window._linkedin_data_partner_ids.push(_linkedin_partner_id);
</script>
<script type="text/javascript">
    (function(l) {
        if (!l) {
            window.lintrk = function(a, b) {
                window.lintrk.q.push([a, b])
            };
            window.lintrk.q = []
        }
        var s = document.getElementsByTagName("script")[0];
        var b = document.createElement("script");
        b.type = "text/javascript";
        b.async = true;
        b.src = "https://snap.licdn.com/li.lms-analytics/insight.min.js";
        s.parentNode.insertBefore(b, s);
    })(window.lintrk);
</script>
<noscript>
    <img height="1" width="1" style="display:none;" alt=""
        src="https://px.ads.linkedin.com/collect/?pid=6930706&amp;fmt=gif" />
</noscript>

<!-- Start of HubSpot Embed Code -->
<script type="text/javascript" id="hs-script-loader" async defer src="../js-na2.hs-scripts.com/242188622.js"></script>
<!-- End of HubSpot Embed Code -->




<!-----------------------Pop - Up-------------------------->
<!-- Only show on home page -->
@if (Route::currentRouteName() === 'index')
    <section class="disclaimer-popup">
        <div id="myModal" class="modal fade-centered" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Disclaimer</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <p class="mb-0 pt-1">
                            Content from <b>EB Filing Experts</b> serves educational and informational aims exclusively. Although we endeavor to deliver helpful guidance, since we are not an attorney's office we cannot furnish legal counsel or advocate with U.S. immigration agencies.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        $(document).ready(function() {
            $("#myModal").modal("show");
        });
    </script>
@endif
<!-----------------------Pop - Up-------------------------->
<!-- Back to Top Start -->
<div class="anim-scroll-to-top">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
    </svg>
</div>
<!-- Back to Top end -->
<!-- ---------------- counter ------------ -->
<script>
    $(document).ready(function() {
        $('.count-text1').each(function() {
            var $this = $(this);
            var countTo = parseInt($this.attr('data-stop'));
            var speed = parseInt($this.attr('data-speed')) || 2000;

            $({
                countNum: parseInt($this.text())
            }).animate({
                countNum: countTo
            }, {
                duration: speed,
                easing: 'swing',
                step: function() {
                    $this.text(Math.floor(this.countNum));
                },
                complete: function() {
                    $this.text(this.countNum);
                }
            });
        });
    });
</script>
<!-- particles.js lib - https://github.com/VincentGarreau/particles.js -->
<script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
<script src="https://threejs.org/examples/js/libs/stats.min.js"></script>
<script>
    $(document).ready(function() {
        $('#home-carousel').on('slid.bs.carousel', function() {
            $("#home-carousel").carousel("pause");
        });
    });
</script>
<script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
<script src="https://threejs.org/examples/js/libs/stats.min.js"></script>

<script>
    var githubImagePath = "{{ asset('img/github.svg') }}";

    particlesJS("particles-js", {
        particles: {
            number: {
                value: 80,
                density: {
                    enable: true,
                    value_area: 800
                }
            },
            color: {
                value: "#000"
            },
            shape: {
                type: "circle",
                stroke: {
                    width: 0,
                    color: "#000000"
                },
                polygon: {
                    nb_sides: 5
                },
                image: {
                    src: githubImagePath,
                    width: 10,
                    height: 10
                }
            },
            opacity: {
                value: 0.5,
                random: false,
                anim: {
                    enable: false,
                    speed: 1,
                    opacity_min: 0.1,
                    sync: false
                }
            },
            size: {
                value: 3,
                random: true,
                anim: {
                    enable: false,
                    speed: 20,
                    size_min: 0.5,
                    sync: false
                }
            },
            line_linked: {
                enable: true,
                distance: 1,
                color: "#000",
                opacity: 0.4,
                width: 1
            },
            move: {
                enable: true,
                speed: 6,
                direction: "none",
                random: false,
                straight: false,
                out_mode: "out",
                bounce: false,
                attract: {
                    enable: false,
                    rotateX: 60,
                    rotateY: 120
                }
            }
        },
        interactivity: {
            detect_on: "canvas",
            events: {
                onhover: {
                    enable: true,
                    mode: "grab"
                },
                onclick: {
                    enable: true,
                    mode: "repulse"
                },
                resize: true
            },
            modes: {
                grab: {
                    distance: 100,
                    line_linked: {
                        opacity: 1
                    }
                },
                bubble: {
                    distance: 100,
                    size: 40,
                    duration: 2,
                    opacity: 8,
                    speed: 3
                },
                repulse: {
                    distance: 200,
                    duration: 0.4
                },
                push: {
                    particles_nb: 65
                },
                remove: {
                    particles_nb: 42
                }
            }
        },
        retina_detect: true
    });

    var count_particles, stats, update;
    stats = new Stats();
    stats.setMode(0);
    stats.domElement.style.position = "absolute";
    stats.domElement.style.left = "0px";
    stats.domElement.style.top = "0px";
    document.body.appendChild(stats.domElement);
    count_particles = document.querySelector(".js-count-particles");
    update = function() {
        stats.begin();
        stats.end();
        if (window.pJSDom[0].pJS.particles && window.pJSDom[0].pJS.particles.array) {
            count_particles.innerText = window.pJSDom[0].pJS.particles.array.length;
        }
        requestAnimationFrame(update);
    };
    requestAnimationFrame(update);
</script>
<script>
    let question = document.querySelectorAll(".question");
    question.forEach((question) => {
        question.addEventListener("click", (event) => {
            const active = document.querySelector(".question.active");
            if (active && active !== question) {
                active.classList.toggle("active");
                active.nextElementSibling.style.maxHeight = 0;
            }
            question.classList.toggle("active");
            const answer = question.nextElementSibling;
            if (question.classList.contains("active")) {
                answer.style.maxHeight = answer.scrollHeight + "px";
            } else {
                answer.style.maxHeight = 0;
            }
        });
    });
</script>
<script>
        function mobileImages(images, breakpoint) {
        images = images || "img"; // default selector
        breakpoint = breakpoint || 568; // default breakpoint
        $(images).attr("src", function () {
          var mobile = $(this).data("mobile-src");
          var desktop = $(this).data("desktop-src");
          if ($(window).width() >= breakpoint) {
            return desktop;
          } else {
            return mobile;
          }
        });
      }

      $(document).ready(function () {
        var $grid = $(".leadership-container .leadership").isotope({
          layoutMode: "packery", // depends on packery-mode.pkgd.min.js
          itemSelector: ".leader", // selector for all isotope elements
          percentPosition: true, // elements are positioned relatively
          filter: ".ceo" // default filter
        });

        // Adjust layout on each image load.
        // Depends on imagesloaded.pkgd.min.js
        $grid.imagesLoaded().progress(function () {
          $grid.isotope("layout");
        });

        $grid.on("click", ".executives", function () {
          $(".leader").removeClass("active"); // clear all the active boxes
          $(this).parents(".leader").addClass("active"); // activate this box
          $(this).parents(".leader").next(".team").addClass("active"); // activate the following team box
          $grid.isotope({
            filter: ".ceo, .team.active"
          }); // default filter plus active team box
          return false; // don't follow the link
        });

        $grid.on("click", ".active .executives, .close", function () {
          $(".leader").removeClass("active"); // clear all the active boxes
          $grid.isotope({
            filter: ".ceo"
          }); // default filter
          return false; // don't follow the link
        });

        // Trigger mobileImages on ready and resize
        $(window)
          .on("resize", function () {
            mobileImages();
          })
          .trigger("resize");
      });

      //
      // Code to generate random placeholder images
      // Not needed in any production context
      //

      var randomRgb = function () {
        var r = Math.floor(Math.random() * 256);
        var g = Math.floor(Math.random() * 256);
        var b = Math.floor(Math.random() * 256);
        return [r, g, b];
      };

      // See: http://stackoverflow.com/a/1855903/186965
      var colourIsLight = function (r, g, b) {
        var a = 1 - (0.299 * r + 0.587 * g + 0.114 * b) / 255;
        return a < 0.5;
      };

      var colourFromRgb = function (r, g, b) {
        return "rgb(" + r + "," + g + "," + b + ")";
      };

      // RGB to HEX: http://jsfiddle.net/mushigh/myoskaos/
      function rgb2hex(rgb) {
        rgb = rgb.match(
          /^rgba?[\s+]?\([\s+]?(\d+)[\s+]?,[\s+]?(\d+)[\s+]?,[\s+]?(\d+)[\s+]?/i
        );
        // return (rgb && rgb.length === 4) ? "#" +    // with #
        return rgb && rgb.length === 4
          ? "" + // no #
          ("0" + parseInt(rgb[1], 10).toString(16)).slice(-2) +
          ("0" + parseInt(rgb[2], 10).toString(16)).slice(-2) +
          ("0" + parseInt(rgb[3], 10).toString(16)).slice(-2)
          : "";
      }

      $("img.autoGen").each(function () {
        var bgRgb = randomRgb();
        var bgColour = colourFromRgb(bgRgb[0], bgRgb[1], bgRgb[2]);
        var bgHex = rgb2hex(bgColour);
        var textColour = colourIsLight(bgRgb[0], bgRgb[1], bgRgb[2])
          ? "000000"
          : "ffffff";

        var imgSrc = "https://placehold.it/800x450/" + bgHex + "/" + textColour;
        $(this).attr("src", imgSrc);
        $(this).parent().next(".team").find("img").attr("src", imgSrc);
      });
</script>
<script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.nice-select.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.appear.min.js') }}"></script>
<script src="{{ asset('assets/js/wow.min.js') }}"></script>
<script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.event.move.js') }}"></script>
<script src="{{ asset('assets/js/tilt.jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/magnific-popup.min.js') }}"></script>
<script src="{{ asset('assets/js/backtotop.js') }}"></script>
<script src="{{ asset('assets/js/trigger.js') }}"></script>

<script>
    $(document).ready(function() {
        $("#myModal").modal("show");
    });
</script>
