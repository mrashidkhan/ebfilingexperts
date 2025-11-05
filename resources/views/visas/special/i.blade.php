@extends('layouts.app')

@section('content')

<!-- Hero Section -->
<section class="hero-section visa-hero">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <div class="hero-content">
                    <h1>I Visa - Foreign Media and Journalists</h1>
                    <p class="lead">Expert guidance for I visa applications. We help foreign media representatives, journalists, reporters, and film crews obtain work authorization for media assignments and news coverage in the United States.</p>
                    <div class="hero-cta">
                        <a href="{{ route('contactus') }}" class="theme-btn-6">Schedule Free Consultation</a>
                        <a href="#i-overview" class="theme-btn-outline">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="hero-image">
                    <img src="{{ asset('assets/images/visa-pages/i-hero.jpg') }}" alt="I Visa" />
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
                    <h3>Assignment</h3>
                    <p>Duration Based</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="stat-box">
                    <h3>2-4 Weeks</h3>
                    <p>Processing Time</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="stat-box">
                    <h3>Renewable</h3>
                    <p>As Needed</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="stat-box">
                    <h3>Fast</h3>
                    <p>Quick Processing</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Overview Section -->
<section id="i-overview" class="content-section py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <h2 class="section-title">What is an I Visa?</h2>
                <p>The I visa is a nonimmigrant visa specifically designed for representatives of foreign media traveling to the United States to engage in their profession. This includes journalists, reporters, film crews, editors, and other media professionals working for foreign news organizations, newspapers, broadcasting companies, or other foreign media outlets covering U.S. events, news, or producing content.</p>

                <div class="info-box mt-4">
                    <h4>Key Benefits of I Visa</h4>
                    <ul class="benefits-list">
                        <li>Work as foreign media representative in the U.S.</li>
                        <li>Valid for duration of assignment or media activity</li>
                        <li>Fast processing compared to other work visas</li>
                        <li>No annual quota or cap limitations</li>
                        <li>Bring spouse and children (I dependent visa)</li>
                        <li>Renewable for continued assignments</li>
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
                <h2 class="section-title text-center mb-5">I Visa Eligibility Requirements</h2>

                <div class="row">
                    <div class="col-md-6 mb-4">
                        <div class="eligibility-card">
                            <div class="card-icon">
                                <i class="bi bi-newspaper"></i>
                            </div>
                            <h4>Foreign Media Organization</h4>
                            <p>Must be employed by or under contract with foreign media organization (outside U.S.)</p>
                        </div>
                    </div>

                    <div class="col-md-6 mb-4">
                        <div class="eligibility-card">
                            <div class="card-icon">
                                <i class="bi bi-camera-video"></i>
                            </div>
                            <h4>Media Professional Role</h4>
                            <p>Must be engaged in journalism, reporting, film production, or other media-related activities</p>
                        </div>
                    </div>

                    <div class="col-md-6 mb-4">
                        <div class="eligibility-card">
                            <div class="card-icon">
                                <i class="bi bi-globe"></i>
                            </div>
                            <h4>Foreign Media Outlet</h4>
                            <p>Employer must be a bona fide foreign media organization with headquarters outside U.S.</p>
                        </div>
                    </div>

                    <div class="col-md-6 mb-4">
                        <div class="eligibility-card">
                            <div class="card-icon">
                                <i class="bi bi-broadcast"></i>
                            </div>
                            <h4>Information/News Gathering</h4>
                            <p>Primary purpose must be information or news gathering for foreign audience</p>
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
                <h2 class="section-title text-center mb-5">I Visa Application Process</h2>

                <div class="process-timeline">
                    <div class="timeline-item">
                        <div class="timeline-number">1</div>
                        <div class="timeline-content">
                            <h4>Gather Documentation</h4>
                            <p>Obtain employment letter from foreign media organization and assignment details</p>
                        </div>
                    </div>

                    <div class="timeline-item">
                        <div class="timeline-number">2</div>
                        <div class="timeline-content">
                            <h4>Complete DS-160 Form</h4>
                            <p>Fill out online nonimmigrant visa application form (DS-160)</p>
                        </div>
                    </div>

                    <div class="timeline-item">
                        <div class="timeline-number">3</div>
                        <div class="timeline-content">
                            <h4>Pay Visa Fees</h4>
                            <p>Pay non-refundable visa application fee (MRV fee)</p>
                        </div>
                    </div>

                    <div class="timeline-item">
                        <div class="timeline-number">4</div>
                        <div class="timeline-content">
                            <h4>Schedule Interview</h4>
                            <p>Book visa interview appointment at U.S. Embassy/Consulate</p>
                        </div>
                    </div>

                    <div class="timeline-item">
                        <div class="timeline-number">5</div>
                        <div class="timeline-content">
                            <h4>Attend Interview</h4>
                            <p>Present documentation and answer questions about media assignment</p>
                        </div>
                    </div>

                    <div class="timeline-item">
                        <div class="timeline-number">6</div>
                        <div class="timeline-content">
                            <h4>Receive Visa & Travel</h4>
                            <p>Upon approval, receive I visa and travel to U.S. for media assignment</p>
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
                    <h4>For the Media Organization:</h4>
                    <ul>
                        <li>Letter from foreign media organization confirming employment</li>
                        <li>Details of assignment, purpose, and duration in U.S.</li>
                        <li>Proof of media organization's foreign status and legitimacy</li>
                        <li>Company registration documents from home country</li>
                        <li>Evidence of organization's media activities (publications, broadcasts)</li>
                        <li>Letter stating applicant's role and responsibilities</li>
                    </ul>

                    <h4 class="mt-4">For the Applicant (Media Representative):</h4>
                    <ul>
                        <li>Valid passport (6+ months validity beyond intended stay)</li>
                        <li>Form DS-160 confirmation page</li>
                        <li>Passport-sized photographs (U.S. visa photo requirements)</li>
                        <li>Resume/CV showing journalism or media experience</li>
                        <li>Press credentials or journalist identification</li>
                        <li>Employment contract or letter of assignment</li>
                        <li>Proof of professional qualifications in journalism/media</li>
                        <li>Evidence of ties to home country (intent to return)</li>
                        <li>Samples of previous work (articles, videos, broadcasts)</li>
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

                <div class="accordion" id="iVisaFAQ">
                    <div class="accordion-item">
                        <h3 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                                Who qualifies for an I visa?
                            </button>
                        </h3>
                        <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#iVisaFAQ">
                            <div class="accordion-body">
                                I visas are for representatives of foreign media traveling to the U.S. to engage in their profession. This includes reporters, journalists, film crews, editors, documentary producers working for foreign newspapers, TV stations, radio, online media, or news agencies. The key requirement is that you must be working for a foreign media organization (headquartered outside the U.S.) and gathering news/information for foreign audience.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                                How long does I visa processing take?
                            </button>
                        </h3>
                        <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#iVisaFAQ">
                            <div class="accordion-body">
                                I visa processing is typically faster than other work visas, usually taking 2-4 weeks from application to approval. Processing time varies by U.S. Embassy/Consulate and may be expedited for urgent news coverage. There's no USCIS petition required, which significantly speeds up the process compared to visas like H1B or L1.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                                Can freelance journalists get I visa?
                            </button>
                        </h3>
                        <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#iVisaFAQ">
                            <div class="accordion-body">
                                Freelance journalists can qualify for I visa if they have a valid contract or assignment with a foreign media organization. The key is demonstrating a relationship with a bona fide foreign media outlet. Simply being a freelancer without specific foreign media assignment typically doesn't qualify. You need documentation showing you're working on behalf of a foreign media organization.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4">
                                What's the difference between I visa and B1 visa for journalists?
                            </button>
                        </h3>
                        <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#iVisaFAQ">
                            <div class="accordion-body">
                                I visa is specifically for foreign media representatives actively engaged in journalism/media work in the U.S. B1 visa may be used for journalists attending conferences, consulting, or other business activities not directly involved in news gathering. If you're actively reporting, filming, or producing content in the U.S., I visa is the correct choice. If attending media events as a participant, B1 may suffice.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq5">
                                How long can I stay on I visa?
                            </button>
                        </h3>
                        <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#iVisaFAQ">
                            <div class="accordion-body">
                                I visa is typically granted for the duration of your media assignment or activity. There's no maximum time limit by law. Immigration officers at the port of entry determine the initial period of admission based on your assignment details. The visa can be renewed or extended as long as you continue to work for foreign media and have ongoing assignments in the U.S.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq6">
                                Can my family accompany me on I visa?
                            </button>
                        </h3>
                        <div id="faq6" class="accordion-collapse collapse" data-bs-parent="#iVisaFAQ">
                            <div class="accordion-body">
                                Yes, your spouse and unmarried children under 21 can accompany you on I dependent visas. They receive the same validity period as your I visa. However, I dependent visa holders cannot work in the U.S. They can attend school but need to obtain their own work authorization or visa if they want to work.
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
                <h2>Planning Media Coverage in the United States?</h2>
                <p class="lead mb-4">Get expert guidance from our immigration specialists. We'll help you navigate the I visa process for foreign media representatives and journalists.</p>
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
                    <h4>P1 Visa</h4>
                    <p>For athletes and internationally recognized entertainment groups</p>
                    <a href="{{ route('p1-visa') }}" class="visa-link">Learn More →</a>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="visa-card">
                    <h4>B1 Visa</h4>
                    <p>Business visitor visa for conferences and meetings</p>
                    <a href="{{ route('b1-visa') }}" class="visa-link">Learn More →</a>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="visa-card">
                    <h4>O1A Visa</h4>
                    <p>For individuals with extraordinary ability in their field</p>
                    <a href="{{ route('o1avisa') }}" class="visa-link">Learn More →</a>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
