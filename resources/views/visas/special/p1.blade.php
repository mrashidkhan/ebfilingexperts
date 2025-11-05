@extends('layouts.app')

@section('content')

<!-- Hero Section -->
<section class="hero-section visa-hero">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <div class="hero-content">
                    <h1>P1 Visa - Athletes and Entertainers</h1>
                    <p class="lead">Expert guidance for P1 visa applications. We help internationally recognized athletes, sports teams, and entertainment groups obtain work authorization for performances, competitions, and events in the United States.</p>
                    <div class="hero-cta">
                        <a href="{{ route('contactus') }}" class="theme-btn-6">Schedule Free Consultation</a>
                        <a href="#p1-overview" class="theme-btn-outline">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="hero-image">
                    <img src="{{ asset('assets/images/visa-pages/p1-hero.jpg') }}" alt="P1 Visa" />
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Quick Stats Section -->
<section class="stats-section py-5">
    <div class="container">
        <div class="row text-center">
            <div class="col-md-3">
                <div class="stat-box">
                    <h3>5 Years</h3>
                    <p>Maximum Duration</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="stat-box">
                    <h3>Event-Based</h3>
                    <p>Or Up to 1 Year</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="stat-box">
                    <h3>Extendable</h3>
                    <p>1-Year Increments</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="stat-box">
                    <h3>International</h3>
                    <p>Recognition Req.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Overview Section -->
<section id="p1-overview" class="content-section py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <h2 class="section-title">What is a P1 Visa?</h2>
                <p>The P1 visa is a nonimmigrant visa for internationally recognized athletes and entertainment groups coming to the United States to perform at specific athletic competitions, events, or entertainment performances. This visa category has two subcategories: P1A for individual athletes and athletic teams, and P1B for members of internationally recognized entertainment groups.</p>

                <div class="info-box mt-4">
                    <h4>Key Benefits of P1 Visa</h4>
                    <ul class="benefits-list">
                        <li>Work legally in the U.S. for sporting events or performances</li>
                        <li>Valid for event duration or up to 5 years (with extensions)</li>
                        <li>Bring spouse and children under 21 (P4 visa)</li>
                        <li>P4 dependents can study but cannot work</li>
                        <li>Can work for multiple employers/events simultaneously</li>
                        <li>Travel in and out of the U.S. during validity period</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Eligibility Section -->
<section class="eligibility-section py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <h2 class="section-title text-center mb-5">P1 Visa Eligibility Requirements</h2>

                <div class="row">
                    <div class="col-md-6 mb-4">
                        <div class="eligibility-card">
                            <div class="card-icon">
                                <i class="bi bi-trophy-fill"></i>
                            </div>
                            <h4>International Recognition (P1A)</h4>
                            <p>Athletes must have international recognition in their sport through sustained achievement</p>
                        </div>
                    </div>

                    <div class="col-md-6 mb-4">
                        <div class="eligibility-card">
                            <div class="card-icon">
                                <i class="bi bi-music-note-beamed"></i>
                            </div>
                            <h4>Internationally Known (P1B)</h4>
                            <p>Entertainment group must be internationally recognized with sustained acclaim for at least 1 year</p>
                        </div>
                    </div>

                    <div class="col-md-6 mb-4">
                        <div class="eligibility-card">
                            <div class="card-icon">
                                <i class="bi bi-building"></i>
                            </div>
                            <h4>U.S. Employer/Agent</h4>
                            <p>Must have a U.S. employer, sponsor, or agent filing petition on behalf of athlete/group</p>
                        </div>
                    </div>

                    <div class="col-md-6 mb-4">
                        <div class="eligibility-card">
                            <div class="card-icon">
                                <i class="bi bi-calendar-event"></i>
                            </div>
                            <h4>Specific Event/Competition</h4>
                            <p>Must be coming to participate in specific athletic competition or entertainment performance</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Process Section -->
<section class="process-section py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <h2 class="section-title text-center mb-5">P1 Application Process</h2>

                <div class="process-timeline">
                    <div class="timeline-item">
                        <div class="timeline-number">1</div>
                        <div class="timeline-content">
                            <h4>Obtain Consultation</h4>
                            <p>U.S. employer/agent obtains written consultation from appropriate labor organization or peer group</p>
                        </div>
                    </div>

                    <div class="timeline-item">
                        <div class="timeline-number">2</div>
                        <div class="timeline-content">
                            <h4>Gather Evidence</h4>
                            <p>Compile documentation proving international recognition and achievements</p>
                        </div>
                    </div>

                    <div class="timeline-item">
                        <div class="timeline-number">3</div>
                        <div class="timeline-content">
                            <h4>File Form I-129</h4>
                            <p>U.S. employer/agent files petition with USCIS (at least 45 days before event)</p>
                        </div>
                    </div>

                    <div class="timeline-item">
                        <div class="timeline-number">4</div>
                        <div class="timeline-content">
                            <h4>Wait for Approval</h4>
                            <p>USCIS reviews petition (can request premium processing for faster decision)</p>
                        </div>
                    </div>

                    <div class="timeline-item">
                        <div class="timeline-number">5</div>
                        <div class="timeline-content">
                            <h4>Apply for Visa</h4>
                            <p>Once approved, athlete/entertainer applies for P1 visa at U.S. Embassy/Consulate</p>
                        </div>
                    </div>

                    <div class="timeline-item">
                        <div class="timeline-number">6</div>
                        <div class="timeline-content">
                            <h4>Enter U.S. & Perform</h4>
                            <p>Receive P1 visa stamp and enter U.S. to participate in event/competition</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Required Documents Section -->
<section class="documents-section py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <h2 class="section-title text-center mb-5">Required Documents</h2>

                <div class="documents-list">
                    <h4>For P1A Athletes:</h4>
                    <ul>
                        <li>Form I-129 (Petition for Nonimmigrant Worker) with P supplement</li>
                        <li>Written consultation from appropriate labor organization</li>
                        <li>Copy of contract with U.S. team, organization, or event</li>
                        <li>Itinerary of events, competitions, or performances</li>
                        <li>Evidence of international recognition (awards, rankings, media coverage)</li>
                        <li>Documentation of athlete's achievements and career highlights</li>
                        <li>Evidence the event requires international-level athletes</li>
                        <li>For team sports: evidence team has achieved international recognition</li>
                    </ul>

                    <h4 class="mt-4">For P1B Entertainment Groups:</h4>
                    <ul>
                        <li>Form I-129 with P supplement</li>
                        <li>Written consultation from appropriate labor organization</li>
                        <li>Evidence group is internationally recognized (at least 1 year)</li>
                        <li>Proof that 75% of group members have substantial relationship with group for 1+ year</li>
                        <li>Itinerary of performances or events</li>
                        <li>Reviews, publicity materials, box office receipts</li>
                        <li>International awards, nominations, or critical acclaim</li>
                        <li>Evidence of performances in major venues worldwide</li>
                    </ul>

                    <h4 class="mt-4">For the Athlete/Entertainer:</h4>
                    <ul>
                        <li>Valid passport (6+ months validity)</li>
                        <li>Form DS-160 (Nonimmigrant Visa Application)</li>
                        <li>I-129 approval notice</li>
                        <li>Passport-sized photographs</li>
                        <li>Resume/CV with career achievements</li>
                        <li>Additional evidence of international recognition</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="faq-section py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <h2 class="section-title text-center mb-5">Frequently Asked Questions</h2>

                <div class="accordion" id="p1FAQ">
                    <div class="accordion-item">
                        <h3 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                                What qualifies as "internationally recognized" for P1 visa?
                            </button>
                        </h3>
                        <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#p1FAQ">
                            <div class="accordion-body">
                                For P1A athletes: sustained international recognition through rankings, participation in international competitions, awards, or membership on national teams. For P1B entertainment groups: international acclaim through major awards, reviews in major media, performances at renowned venues, or commercial success (chart positions, box office). The group must have been established for at least 1 year with 75% of members maintaining substantial relationship.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                                How long does P1 visa processing take?
                            </button>
                        </h3>
                        <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#p1FAQ">
                            <div class="accordion-body">
                                Regular processing takes 2-4 months. Premium processing (15 calendar days) is available for an additional $2,805 fee, which is highly recommended for time-sensitive events. Petitions should be filed at least 45 days before the event date, though earlier is better. After USCIS approval, consular visa processing takes 1-2 weeks.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                                Can individual entertainers get P1B visa?
                            </button>
                        </h3>
                        <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#p1FAQ">
                            <div class="accordion-body">
                                No, P1B is specifically for entertainment groups, not individual performers. Individual entertainers should consider O1B visa (for individuals with extraordinary ability in arts) or P2 visa (for artists performing under reciprocal exchange programs). Solo musicians, actors, or performers typically don't qualify for P1B unless performing as part of a recognized group.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4">
                                What is the labor consultation requirement?
                            </button>
                        </h3>
                        <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#p1FAQ">
                            <div class="accordion-body">
                                A labor consultation is a written advisory opinion from an appropriate U.S. labor organization (union) or peer group regarding the nature of the work and the athlete's/group's qualifications. For athletes, this might be from a league or player's association. For entertainers, from relevant entertainment unions (SAG-AFTRA, AFM, etc.). This consultation must be submitted with the I-129 petition.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq5">
                                Can I extend my P1 visa?
                            </button>
                        </h3>
                        <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#p1FAQ">
                            <div class="accordion-body">
                                Yes, P1 visas can be extended. P1A for athletes can be granted initially for event duration or up to 5 years, with 5-year extensions. P1B for entertainment groups is granted for event duration or up to 1 year initially, with 1-year extensions available. File extension petitions before current visa expires, providing evidence of continued need for services.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq6">
                                Can my family accompany me on P1 visa?
                            </button>
                        </h3>
                        <div id="faq6" class="accordion-collapse collapse" data-bs-parent="#p1FAQ">
                            <div class="accordion-body">
                                Yes, your spouse and unmarried children under 21 can accompany you on P4 dependent visas. P4 visa holders can attend school in the U.S. but cannot work. They can stay for the same duration as your P1 visa. If dependents need to work, they must obtain their own work visa or employment authorization through other means.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cta-section py-5 bg-primary text-white">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <h2>Ready to Compete or Perform in the United States?</h2>
                <p class="lead mb-4">Get expert guidance from our immigration specialists. We'll help you navigate the P1 visa process for athletes and entertainers.</p>
                <a href="{{ route('contactus') }}#calendar" class="theme-btn-light">Schedule Free Consultation</a>
            </div>
        </div>
    </div>
</section>

<!-- Related Visas Section -->
<section class="related-visas-section py-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="section-title text-center mb-5">Explore Other Visa Options</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="visa-card">
                    <h4>O1A Visa</h4>
                    <p>For individual athletes/entertainers with extraordinary ability</p>
                    <a href="{{ route('o1avisa') }}" class="visa-link">Learn More →</a>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="visa-card">
                    <h4>H1B Visa</h4>
                    <p>For specialty occupation workers in various fields</p>
                    <a href="{{ route('h1b-visa') }}" class="visa-link">Learn More →</a>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="visa-card">
                    <h4>EB1A Visa</h4>
                    <p>Permanent residency for extraordinary ability individuals</p>
                    <a href="{{ route('eb1a-visa') }}" class="visa-link">Learn More →</a>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
