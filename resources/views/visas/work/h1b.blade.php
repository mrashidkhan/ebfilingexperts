@extends('layouts.app')

@section('content')

<!-- Hero Section -->
<section class="hero-section visa-hero">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <div class="hero-content">
                    <h1>H1B Visa - Specialty Occupation Workers</h1>
                    <p class="lead">Expert guidance for H1B visa applications. We help skilled professionals secure work authorization in the United States through our streamlined process and proven success record.</p>
                    <div class="hero-cta">
                        <a href="{{ route('contactus') }}#calendar" class="theme-btn-6">Schedule Free Consultation</a>
                        <a href="#h1b-overview" class="theme-btn-outline">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="hero-image">
                    <img src="{{ asset('assets/images/visa-pages/h1b-hero.jpg') }}" alt="H1B Visa" />
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
                    <h3>85,000</h3>
                    <p>Annual H1B Cap</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="stat-box">
                    <h3>3 Years</h3>
                    <p>Initial Validity</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="stat-box">
                    <h3>6 Years</h3>
                    <p>Maximum Duration</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="stat-box">
                    <h3>95%+</h3>
                    <p>Success Rate</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Overview Section -->
<section id="h1b-overview" class="content-section py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <h2 class="section-title">What is an H1B Visa?</h2>
                <p>The H1B visa is a non-immigrant visa that allows U.S. companies to temporarily employ foreign workers in specialty occupations. These occupations typically require theoretical or technical expertise in specialized fields such as IT, engineering, mathematics, science, and medicine.</p>

                <div class="info-box mt-4">
                    <h4>Key Benefits of H1B Visa</h4>
                    <ul class="benefits-list">
                        <li>Work legally in the United States for up to 6 years</li>
                        <li>Dual intent visa - can pursue green card while on H1B</li>
                        <li>Bring spouse and children under H4 visa</li>
                        <li>H4 spouses may be eligible for work authorization</li>
                        <li>Travel in and out of the U.S. freely</li>
                        <li>Change employers through H1B transfer</li>
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
                <h2 class="section-title text-center mb-5">H1B Visa Eligibility Requirements</h2>

                <div class="row">
                    <div class="col-md-6 mb-4">
                        <div class="eligibility-card">
                            <div class="card-icon">
                                <i class="bi bi-mortarboard"></i>
                            </div>
                            <h4>Educational Qualification</h4>
                            <p>Bachelor's degree or higher (or equivalent) in a specific specialty related to the position</p>
                        </div>
                    </div>

                    <div class="col-md-6 mb-4">
                        <div class="eligibility-card">
                            <div class="card-icon">
                                <i class="bi bi-briefcase"></i>
                            </div>
                            <h4>Specialty Occupation</h4>
                            <p>Position must require specialized knowledge and bachelor's degree as minimum</p>
                        </div>
                    </div>

                    <div class="col-md-6 mb-4">
                        <div class="eligibility-card">
                            <div class="card-icon">
                                <i class="bi bi-building"></i>
                            </div>
                            <h4>U.S. Employer</h4>
                            <p>Must have a valid job offer from a U.S. employer willing to sponsor</p>
                        </div>
                    </div>

                    <div class="col-md-6 mb-4">
                        <div class="eligibility-card">
                            <div class="card-icon">
                                <i class="bi bi-cash-coin"></i>
                            </div>
                            <h4>Prevailing Wage</h4>
                            <p>Employer must pay the prevailing wage for the position and location</p>
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
                <h2 class="section-title text-center mb-5">H1B Application Process</h2>

                <div class="process-timeline">
                    <div class="timeline-item">
                        <div class="timeline-number">1</div>
                        <div class="timeline-content">
                            <h4>Find H1B Sponsor</h4>
                            <p>Secure a job offer from a U.S. employer willing to sponsor your H1B visa</p>
                        </div>
                    </div>

                    <div class="timeline-item">
                        <div class="timeline-number">2</div>
                        <div class="timeline-content">
                            <h4>LCA Filing</h4>
                            <p>Employer files Labor Condition Application (LCA) with Department of Labor</p>
                        </div>
                    </div>

                    <div class="timeline-item">
                        <div class="timeline-number">3</div>
                        <div class="timeline-content">
                            <h4>H1B Registration</h4>
                            <p>Register during the annual H1B lottery period (usually March)</p>
                        </div>
                    </div>

                    <div class="timeline-item">
                        <div class="timeline-number">4</div>
                        <div class="timeline-content">
                            <h4>Selection in Lottery</h4>
                            <p>Wait for lottery results and selection notification from USCIS</p>
                        </div>
                    </div>

                    <div class="timeline-item">
                        <div class="timeline-number">5</div>
                        <div class="timeline-content">
                            <h4>Petition Filing</h4>
                            <p>File Form I-129 petition with USCIS if selected in lottery</p>
                        </div>
                    </div>

                    <div class="timeline-item">
                        <div class="timeline-number">6</div>
                        <div class="timeline-content">
                            <h4>Approval & Start Work</h4>
                            <p>Receive approval notice and begin employment on October 1st</p>
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
                    <h4>For the Employer:</h4>
                    <ul>
                        <li>Labor Condition Application (LCA) certified by DOL</li>
                        <li>Company financial documents and tax returns</li>
                        <li>Evidence of ability to pay prevailing wage</li>
                        <li>Job description and organizational chart</li>
                        <li>Business licenses and incorporation documents</li>
                    </ul>

                    <h4 class="mt-4">For the Employee:</h4>
                    <ul>
                        <li>Valid passport (valid for at least 6 months)</li>
                        <li>Educational credentials (degree certificates, transcripts)</li>
                        <li>Credential evaluation report (if degree from outside U.S.)</li>
                        <li>Resume/CV showing work experience</li>
                        <li>Previous employment letters</li>
                        <li>Professional licenses or certifications</li>
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

                <div class="accordion" id="h1bFAQ">
                    <div class="accordion-item">
                        <h3 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                                How long does H1B processing take?
                            </button>
                        </h3>
                        <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#h1bFAQ">
                            <div class="accordion-body">
                                Regular processing takes 3-6 months. Premium processing (15 calendar days) is available for an additional fee of $2,500.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                                Can I apply for green card while on H1B?
                            </button>
                        </h3>
                        <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#h1bFAQ">
                            <div class="accordion-body">
                                Yes, H1B is a dual intent visa, meaning you can pursue permanent residency (green card) while maintaining H1B status.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                                What happens if I don't get selected in the lottery?
                            </button>
                        </h3>
                        <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#h1bFAQ">
                            <div class="accordion-body">
                                If not selected, you can try again next year. Consider alternatives like O1A visa, L1 visa, or EB2-NIW green card.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4">
                                Can my spouse work on H4 visa?
                            </button>
                        </h3>
                        <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#h1bFAQ">
                            <div class="accordion-body">
                                H4 spouses may be eligible for Employment Authorization Document (EAD) if the H1B holder has an approved I-140 or is in H1B extension beyond 6 years.
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
                <h2>Ready to Start Your H1B Visa Journey?</h2>
                <p class="lead mb-4">Get expert guidance from our immigration specialists. Schedule your free consultation today!</p>
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
                    <p>For individuals with extraordinary ability in their field</p>
                    <a href="{{ route('o1avisa') }}" class="visa-link">Learn More →</a>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="visa-card">
                    <h4>L1 Visa</h4>
                    <p>For intracompany transfers to U.S. branch</p>
                    <a href="{{ route('l1-visa') }}" class="visa-link">Learn More →</a>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="visa-card">
                    <h4>EB2-NIW</h4>
                    <p>Green card for professionals in national interest</p>
                    <a href="{{ route('eb2-niw') }}" class="visa-link">Learn More →</a>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
