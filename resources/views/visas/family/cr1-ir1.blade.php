@extends('layouts.app')

@section('content')

<!-- Hero Section -->
<section class="hero-section visa-hero">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <div class="hero-content">
                    <h1>CR1/IR1 Visa - Spouse Immigrant Visa</h1>
                    <p class="lead">Expert guidance for CR1 and IR1 spouse visa applications. We help U.S. citizens reunite with their foreign spouses through direct permanent residency, avoiding the need for status adjustment after arrival.</p>
                    <div class="hero-cta">
                        <a href="{{ route('contactus') }}" class="theme-btn-6">Schedule Free Consultation</a>
                        <a href="#cr1-ir1-overview" class="theme-btn-outline">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="hero-image">
                    <img src="{{ asset('assets/images/visa-pages/cr1-ir1-hero.jpg') }}" alt="CR1/IR1 Visa" />
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
                    <h3>Green Card</h3>
                    <p>Immediate Residency</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="stat-box">
                    <h3>12-18 Months</h3>
                    <p>Processing Time</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="stat-box">
                    <h3>No Quota</h3>
                    <p>Immediate Relative</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="stat-box">
                    <h3>Work Immediately</h3>
                    <p>Upon Entry</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Overview Section -->
<section id="cr1-ir1-overview" class="content-section py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <h2 class="section-title">What is a CR1/IR1 Visa?</h2>
                <p>The CR1 and IR1 visas are immigrant visas for spouses of U.S. citizens. CR1 (Conditional Resident) is issued to couples married less than 2 years, while IR1 (Immediate Relative) is for couples married 2 years or more. Both visas grant immediate permanent residency upon entry to the United States, allowing spouses to receive green cards without adjustment of status.</p>

                <div class="info-box mt-4">
                    <h4>Key Benefits of CR1/IR1 Visa</h4>
                    <ul class="benefits-list">
                        <li>Receive green card immediately upon U.S. entry</li>
                        <li>Work authorization without additional applications</li>
                        <li>Travel freely in and out of the United States</li>
                        <li>No adjustment of status required after arrival</li>
                        <li>Access to Social Security number immediately</li>
                        <li>Path to U.S. citizenship after 3 years</li>
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
                <h2 class="section-title text-center mb-5">CR1/IR1 Visa Eligibility Requirements</h2>

                <div class="row">
                    <div class="col-md-6 mb-4">
                        <div class="eligibility-card">
                            <div class="card-icon">
                                <i class="bi bi-flag-fill"></i>
                            </div>
                            <h4>U.S. Citizen Petitioner</h4>
                            <p>Petitioning spouse must be a U.S. citizen (not just green card holder for CR1/IR1)</p>
                        </div>
                    </div>

                    <div class="col-md-6 mb-4">
                        <div class="eligibility-card">
                            <div class="card-icon">
                                <i class="bi bi-heart-fill"></i>
                            </div>
                            <h4>Valid Marriage</h4>
                            <p>Must be in a legally valid marriage recognized by the jurisdiction where it occurred</p>
                        </div>
                    </div>

                    <div class="col-md-6 mb-4">
                        <div class="eligibility-card">
                            <div class="card-icon">
                                <i class="bi bi-file-earmark-text"></i>
                            </div>
                            <h4>Evidence of Relationship</h4>
                            <p>Demonstrate bona fide marriage with documentation of genuine relationship</p>
                        </div>
                    </div>

                    <div class="col-md-6 mb-4">
                        <div class="eligibility-card">
                            <div class="card-icon">
                                <i class="bi bi-cash-coin"></i>
                            </div>
                            <h4>Financial Support</h4>
                            <p>U.S. citizen spouse must meet minimum income requirements (125% of poverty guidelines)</p>
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
                <h2 class="section-title text-center mb-5">CR1/IR1 Application Process</h2>

                <div class="process-timeline">
                    <div class="timeline-item">
                        <div class="timeline-number">1</div>
                        <div class="timeline-content">
                            <h4>File Form I-130</h4>
                            <p>U.S. citizen spouse files Petition for Alien Relative with USCIS</p>
                        </div>
                    </div>

                    <div class="timeline-item">
                        <div class="timeline-number">2</div>
                        <div class="timeline-content">
                            <h4>Wait for I-130 Approval</h4>
                            <p>USCIS reviews and approves petition (typically 8-12 months)</p>
                        </div>
                    </div>

                    <div class="timeline-item">
                        <div class="timeline-number">3</div>
                        <div class="timeline-content">
                            <h4>Case Sent to NVC</h4>
                            <p>Approved petition forwarded to National Visa Center for processing</p>
                        </div>
                    </div>

                    <div class="timeline-item">
                        <div class="timeline-number">4</div>
                        <div class="timeline-content">
                            <h4>Submit Documents to NVC</h4>
                            <p>Pay fees, submit DS-260, financial documents, and civil documents</p>
                        </div>
                    </div>

                    <div class="timeline-item">
                        <div class="timeline-number">5</div>
                        <div class="timeline-content">
                            <h4>Attend Consular Interview</h4>
                            <p>Foreign spouse interviews at U.S. Embassy/Consulate in home country</p>
                        </div>
                    </div>

                    <div class="timeline-item">
                        <div class="timeline-number">6</div>
                        <div class="timeline-content">
                            <h4>Receive Visa & Enter U.S.</h4>
                            <p>Upon approval, receive immigrant visa packet and enter U.S. to receive green card</p>
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
                    <h4>For the U.S. Citizen Petitioner:</h4>
                    <ul>
                        <li>Proof of U.S. citizenship (passport, birth certificate, naturalization certificate)</li>
                        <li>Form I-130 (Petition for Alien Relative)</li>
                        <li>Marriage certificate (certified copy with translation if needed)</li>
                        <li>Form I-864 (Affidavit of Support) with financial documents</li>
                        <li>Proof of income (tax returns, W-2s, pay stubs for past 3 years)</li>
                        <li>Evidence of previous marriage termination (if applicable)</li>
                        <li>Photographs of petitioner and beneficiary together</li>
                    </ul>

                    <h4 class="mt-4">For the Foreign Spouse (Beneficiary):</h4>
                    <ul>
                        <li>Valid passport (6+ months validity)</li>
                        <li>Birth certificate with English translation</li>
                        <li>Police certificates from all countries of residence since age 16</li>
                        <li>Medical examination results (Form I-693 equivalent)</li>
                        <li>Form DS-260 (Immigrant Visa Application)</li>
                        <li>Evidence of bona fide marriage (joint accounts, leases, photos, correspondence)</li>
                        <li>Divorce or death certificates from previous marriages</li>
                        <li>Two passport-style photographs</li>
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

                <div class="accordion" id="cr1ir1FAQ">
                    <div class="accordion-item">
                        <h3 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                                What's the difference between CR1 and IR1 visas?
                            </button>
                        </h3>
                        <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#cr1ir1FAQ">
                            <div class="accordion-body">
                                CR1 is for couples married less than 2 years at the time of green card issuance. It grants conditional permanent residence, requiring Form I-751 to remove conditions after 2 years. IR1 is for couples married 2+ years, granting immediate permanent residence without conditions. Both provide the same rights and benefits initially.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                                How long does CR1/IR1 processing take?
                            </button>
                        </h3>
                        <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#cr1ir1FAQ">
                            <div class="accordion-body">
                                Total processing time is typically 12-18 months from I-130 filing to visa issuance. I-130 approval takes 8-12 months, followed by 4-6 months for NVC processing and consular interview scheduling. Processing times vary by USCIS service center and U.S. Embassy/Consulate workload.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                                Should I choose K1 fiancé visa or CR1 spouse visa?
                            </button>
                        </h3>
                        <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#cr1ir1FAQ">
                            <div class="accordion-body">
                                CR1 is often better if you're already married: it provides immediate green card, work authorization, and travel freedom upon entry. K1 requires marriage within 90 days plus adjustment of status ($1,000+ extra), can't work immediately, and can't travel during adjustment. However, K1 may be faster initially for couples not yet married who want to marry in the U.S.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4">
                                Can my spouse work immediately with CR1/IR1?
                            </button>
                        </h3>
                        <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#cr1ir1FAQ">
                            <div class="accordion-body">
                                Yes! Upon entry to the U.S. with CR1/IR1 visa, your spouse receives permanent resident status and can work immediately without needing to file for work authorization. The green card serves as proof of both identity and work eligibility for Form I-9.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq5">
                                What income do I need to sponsor my spouse?
                            </button>
                        </h3>
                        <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#cr1ir1FAQ">
                            <div class="accordion-body">
                                The U.S. citizen petitioner must show income at least 125% of the federal poverty guidelines for household size. For 2025, this is approximately $25,000 for a household of 2. If income is insufficient, a joint sponsor (U.S. citizen or green card holder) can provide additional support, or you can use assets worth 5x the shortfall.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq6">
                                What happens at the consular interview?
                            </button>
                        </h3>
                        <div id="faq6" class="accordion-collapse collapse" data-bs-parent="#cr1ir1FAQ">
                            <div class="accordion-body">
                                The foreign spouse attends an interview at the U.S. Embassy/Consulate in their country. The consular officer reviews documents, verifies the authenticity of the marriage, and asks questions about the relationship, how you met, wedding details, and future plans. Bring original documents, medical exam results, and additional relationship evidence. If approved, you'll receive the immigrant visa packet to enter the U.S.
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
                <h2>Ready to Reunite with Your Spouse?</h2>
                <p class="lead mb-4">Get expert guidance from our immigration specialists. We'll help you navigate the CR1/IR1 process and bring your spouse home permanently.</p>
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
                    <h4>K1 Visa</h4>
                    <p>Fiancé visa if you're not yet married and want to marry in U.S.</p>
                    <a href="{{ route('k1-visa') }}" class="visa-link">Learn More →</a>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="visa-card">
                    <h4>K3 Visa</h4>
                    <p>Temporary option for married couples during long waits</p>
                    <a href="{{ route('k3-visa') }}" class="visa-link">Learn More →</a>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="visa-card">
                    <h4>IR5 Visa</h4>
                    <p>Bring your parents to the U.S. as permanent residents</p>
                    <a href="{{ route('ir5-visa') }}" class="visa-link">Learn More →</a>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
