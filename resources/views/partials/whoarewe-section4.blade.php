{{-- Our Values Section --}}
<section class="our-values-main ptb-60">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="our-values-inner">
          <h3 class="title-heading text-center pb-3">Our Values</h3>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 tab-none">
        <div class="our-values-tabs">
          <ul class="nav nav-tabs d-none d-lg-flex" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
              <button class="nav-link active" id="general-enquiry" data-bs-toggle="tab"
                data-bs-target="#general-enquiry-pane" type="button" role="tab" aria-controls="general-enquiry-pane"
                aria-selected="true">
                <img src="{{ asset('assets/images/inner-images/Passion-w.png') }}" alt="Passion" class="our-values-tabs-active">
                <img src="{{ asset('assets/images/inner-images/Passion-b.png') }}" alt="Passion" class="our-values-tabs-in-active">
                <p>Passion</p>
              </button>
            </li>

            <li class="nav-item" role="presentation">
              <button class="nav-link" id="membership-admin" data-bs-toggle="tab"
                data-bs-target="#membership-admin-pane" type="button" role="tab"
                aria-controls="membership-admin-pane" aria-selected="false">
                <img src="{{ asset('assets/images/inner-images/dedication-w.png') }}" alt="Dedication" class="our-values-tabs-active">
                <img src="{{ asset('assets/images/inner-images/dedication-b.png') }}" alt="Dedication" class="our-values-tabs-in-active">
                <p>Dedication</p>
              </button>
            </li>

            <li class="nav-item" role="presentation">
              <button class="nav-link" id="chapter-events" data-bs-toggle="tab"
                data-bs-target="#chapter-events-pane" type="button" role="tab" aria-controls="chapter-events-pane"
                aria-selected="false">
                <img src="{{ asset('assets/images/inner-images/Expertise-w.png') }}" alt="Expertise" class="our-values-tabs-active">
                <img src="{{ asset('assets/images/inner-images/Expertise-b.png') }}" alt="Expertise" class="our-values-tabs-in-active">
                <p>Expertise</p>
              </button>
            </li>

            <li class="nav-item" role="presentation">
              <button class="nav-link" id="Integrity" data-bs-toggle="tab" data-bs-target="#Integrity-pane"
                type="button" role="tab" aria-controls="Integrity-pane" aria-selected="false">
                <img src="{{ asset('assets/images/inner-images/Integrity-w.png') }}" alt="Integrity" class="our-values-tabs-active">
                <img src="{{ asset('assets/images/inner-images/Integrity-b.png') }}" alt="Integrity" class="our-values-tabs-in-active">
                <p>Integrity</p>
              </button>
            </li>

            <li class="nav-item" role="presentation">
              <button class="nav-link" id="Expertise" data-bs-toggle="tab" data-bs-target="#Expertise-pane"
                type="button" role="tab" aria-controls="Expertise-pane" aria-selected="false">
                <img src="{{ asset('assets/images/inner-images/Client-Centered-w.png') }}" alt="Client-Centered" class="our-values-tabs-active">
                <img src="{{ asset('assets/images/inner-images/Client-Centered-b.png') }}" alt="Client-Centered" class="our-values-tabs-in-active">
                <p>Client-Centered</p>
              </button>
            </li>
          </ul>
        </div>
      </div>

      <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
        <div class="our-values-information">
          <div class="tab-content accordion" id="myTabForm">
            {{-- Passion Tab --}}
            <div class="tab-pane fade show active accordion-item" id="general-enquiry-pane" role="tabpanel"
              aria-labelledby="general-enquiry" tabindex="0">
              <h2 class="accordion-header d-lg-none" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                  data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Passion</button>
              </h2>
              <div id="collapseOne" class="accordion-collapse collapse show d-lg-block"
                aria-labelledby="headingOne" data-bs-parent="#myTabForm">
                <div class="accordion-body">
                  <h3 class="our-values-heading">Passion</h3>
                  <p>Your immigration goals are achievable, and we're here to make it happen.</p>
                </div>
              </div>
            </div>

            {{-- Dedication Tab --}}
            <div class="tab-pane fade accordion-item" id="membership-admin-pane" role="tabpanel"
              aria-labelledby="membership-admin" tabindex="0">
              <h2 class="accordion-header d-lg-none" id="headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Dedication</button>
              </h2>
              <div id="collapseTwo" class="accordion-collapse collapse d-lg-block" aria-labelledby="headingTwo"
                data-bs-parent="#myTabForm">
                <div class="accordion-body">
                  <h3 class="our-values-heading">Dedication</h3>
                  <p>Excellence isn't optional. Every service we provide is meticulously crafted to surpass your expectations.</p>
                </div>
              </div>
            </div>

            {{-- Expertise Tab --}}
            <div class="tab-pane fade accordion-item" id="chapter-events-pane" role="tabpanel"
              aria-labelledby="chapter-events" tabindex="0">
              <h2 class="accordion-header d-lg-none" id="headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Expertise</button>
              </h2>
              <div id="collapseThree" class="accordion-collapse collapse d-lg-block" aria-labelledby="headingThree"
                data-bs-parent="#myTabForm">
                <div class="accordion-body">
                  <h3 class="our-values-heading">Expertise</h3>
                  <p>We bring in-depth expertise of the EB1A process and continuously monitor regulatory changes to keep our strategies current and effective.</p>
                </div>
              </div>
            </div>

            {{-- Integrity Tab --}}
            <div class="tab-pane fade accordion-item" id="Integrity-pane" role="tabpanel"
              aria-labelledby="Integrity" tabindex="0">
              <h2 class="accordion-header d-lg-none" id="headingfoure">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#collapsefoure" aria-expanded="false" aria-controls="collapsefoure">Integrity</button>
              </h2>
              <div id="collapsefoure" class="accordion-collapse collapse d-lg-block" aria-labelledby="headingfoure"
                data-bs-parent="#myTabForm">
                <div class="accordion-body">
                  <h3 class="our-values-heading">Integrity</h3>
                  <p>Honesty and transparency guide every interaction with our clients. You can trust our guidance and our process.</p>
                </div>
              </div>
            </div>

            {{-- Client-Centered Tab --}}
            <div class="tab-pane fade accordion-item" id="Expertise-pane" role="tabpanel"
              aria-labelledby="Expertise" tabindex="0">
              <h2 class="accordion-header d-lg-none" id="headingfive">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#collapsefive" aria-expanded="false" aria-controls="collapsefive">Client-Centered</button>
              </h2>
              <div id="collapsefive" class="accordion-collapse collapse d-lg-block" aria-labelledby="headingfive"
                data-bs-parent="#myTabForm">
                <div class="accordion-body">
                  <h3 class="our-values-heading">Client-Centered</h3>
                  <p>We exist to serve your goals. Client success is the foundation of everything we do.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
{{-- End Our Values Section --}}
