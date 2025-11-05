@extends('layouts.app')

@section('content')

<!-- Hero Section -->
<section class="hero-section visa-hero">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <div class="hero-content">
                    <h1>K1 Visa - Fiancé(e) Visa</h1>
                    <p class="lead">Expert guidance for K1 fiancé visa applications. We help U.S. citizens bring their foreign fiancé(e)s to the United States to marry within 90 days, enabling couples to begin their lives together.</p>
                    <div class="hero-cta">
                        <a href="{{ route('contactus') }}" class="theme-btn-6">Schedule Free Consultation</a>
                        <a href="#k1-overview" class="theme-btn-outline">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="hero-image">
                    <img src="{{ asset('assets/images/visa-pages/k1-hero.jpg') }}" alt="K1 Visa" />
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
                    <h3>90 Days</h3>
                    <p>To Marry in U.S.</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="stat-box">
                    <h3>6-12 Months</h3>
                    <p>Processing Time</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="stat-box">
                    <h3>Single Entry</h3>
                    <p>Valid 6 Months</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="stat-box">
                    <h3>Green Card</h3>
                    <p>After Marriage</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Overview Section -->
<section id="k1-overview" class="content-section py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <h2 class="section-title">What is a K1 Visa?</h2>
                <p>The K1 visa, commonly known as the "fiancé visa," allows the foreign-citizen fiancé(e) of a U.S. citizen to enter the United States for the purpose of getting married. Once in the U.S., the couple must marry within 90 days of entry. After marriage, the foreign spouse can apply for adjustment of status to become a permanent resident (green card holder).</p>

                <div class="info-box mt-4">
                    <h4>Key Benefits of K1 Visa</h4>
                    <ul class="benefits-list">
                        <li>Allows fiancé(e) to enter U.S. before marriage</li>
                        <li>Get married in the United States with family and friends</li>
                        <li>Can bring unmarried children under 21 (K2 visa)</li>
                        <li>Faster initial entry compared to CR1 spouse visa</li>
                        <li>Can apply for work permit after entering U.S.</li>
                        <li>Path to green card after marriage and adjustment of status</li>
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
                <h2 class="section-title text-center mb-5">K1 Visa Eligibility Requirements</h2>

                <div class="row">
                    <div class="col-md-6 mb-4">
                        <div class="eligibility-card">
                            <div class="card-icon">
                                <i class="bi bi-flag-fill"></i>
                            </div>
                            <h4>U.S. Citizen Petitioner</h4>
                            <p>Petitioner must be a U.S. citizen (not green card holder) to file for fiancé(e)</p>
                        </div>
                    </div>

                    <div class="col-md-6 mb-4">
                        <div class="eligibility-card">
                            <div class="card-icon">
                                <i class="bi bi-heart-fill"></i>
                            </div>
                            <h4>Intent to Marry</h4>
                            <p>Both parties must intend to marry within 90 days of fiancé(e)'s arrival in U.S.</p>
                        </div>
                    </div>

                    <div class="col-md-6 mb-4">
                        <div class="eligibility-card">
                            <div class="card-icon">
                                <i class="bi bi-people-fill"></i>
                            </div>
                            <h4>In-Person Meeting</h4>
                            <p>Couple must have met in person at least once within the past 2 years (exceptions rare)</p>
                        </div>
                    </div>

                    <div class="col-md-6 mb-4">
                        <div class="eligibility-card">
                            <div class="card-icon">
                                <i class="bi bi-file-earmark-check"></i>
                            </div>
                            <h4>Legal to Marry</h4>
                            <p>Both parties must be legally free to marry (divorced/widowed if previously married)</p>
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
                <h2 class="section-title text-center mb-5">K1 Application Process</h2>

                <div class="process-timeline">
                    <div class="timeline-item">
                        <div class="timeline-number">1</div>
                        <div class="timeline-content">
                            <h4>File Form I-129F</h4>
                            <p>U.S. citizen files Petition for Alien Fiancé(e) with USCIS</p>
                        </div>
                    </div>

                    <div class="timeline-item">
                        <div class="timeline-number">2</div>
                        <div class="timeline-content">
                            <h4>Wait for I-129F Approval</h4>
                            <p>USCIS reviews and approves petition (typically 6-9 months)</p>
                        </div>
                    </div>

                    <div class="timeline-item">
                        <div class="timeline-number">3</div>
                        <div class="timeline-content">
                            <h4>Case Sent to NVC</h4>
                            <p>Approved petition forwarded to National Visa Center, then to U.S. Embassy</p>
                        </div>
                    </div>

                    <div class="timeline-item">
                        <div class="timeline-number">4</div>
                        <div class="timeline-content">
                            <h4>Complete DS-160 & Medical Exam</h4>
                            <p>Fiancé(e) completes visa application and medical examination</p>
                        </div>
                    </div>

                    <div class="timeline-item">
                        <div class="timeline-number">5</div>
                        <div class="timeline-content">
                            <h4>Attend Embassy Interview</h4>
                            <p>Fiancé(e) interviews at U.S. Embassy/Consulate in home country</p>
                        </div>
                    </div>

                    <div class="timeline-item">
                        <div class="timeline-number">6</div>
                        <div class="timeline-content">
                            <h4>Enter U.S. & Marry</h4>
                            <p>Receive K1 visa, enter U.S., and marry within 90 days</p>
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
                        <li>Form I-129F (Petition for Alien Fiancé)</li>
                        <li>Evidence of in-person meeting within past 2 years (photos, travel records)</li>
                        <li>Proof of intent to marry (engagement photos, wedding plans, correspondence)</li>
                        <li>Divorce or death certificates from previous marriages</li>
                        <li>Form I-134 (Affidavit of Support) with financial documents</li>
                        <li>Photos of couple together showing genuine relationship</li>
                    </ul>

                    <h4 class="mt-4">For the Foreign Fiancé(e):</h4>
                    <ul>
                        <li>Valid passport (6+ months validity beyond intended entry)</li>
                        <li>Birth certificate with English translation</li>
                        <li>Divorce or death certificates from previous marriages</li>
                        <li>Police certificates from all countries of residence since age 16</li>
                        <li>Medical examination results (Form DS-3025)</li>
                        <li>Form DS-160 (Nonimmigrant Visa Application)</li>
                        <li>Two passport-style photographs</li>
                        <li>Evidence of relationship (letters, emails, photos, phone records)</li>
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

                <div class="accordion" id="k1FAQ">
                    <div class="accordion-item">
                        <h3 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                                How long does the K1 visa process take?
                            </button>
                        </h3>
                        <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#k1FAQ">
                            <div class="accordion-body">
                                Total processing time typically ranges from 6-12 months from I-129F filing to visa issuance. USCIS takes 6-9 months to approve the petition, followed by 2-3 months for embassy processing and interview. Processing times vary by USCIS service center and U.S. Embassy workload.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                                What happens if we don't marry within 90 days?
                            </button>
                        </h3>
                        <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#k1FAQ">
                            <div class="accordion-body">
                                The 90-day period is strict and non-extendable. If you don't marry within 90 days, your fiancé(e) must leave the United States. The K1 visa cannot be extended or adjusted to another status without marriage. It's crucial to have wedding plans ready before your fiancé(e) enters the U.S.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                                Can my fiancé(e) work while on K1 visa?
                            </button>
                        </h3>
                        <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#k1FAQ">
                            <div class="accordion-body">
                                Not immediately. Your fiancé(e) cannot work upon entry with K1 visa. However, after entering the U.S., they can apply for Employment Authorization Document (EAD) by filing Form I-765, which typically arrives in 3-5 months. Most couples wait until after marriage to file for work permit along with green card application (I-485).
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4">
                                Should I choose K1 or CR1 spouse visa?
                            </button>
                        </h3>
                        <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#k1FAQ">
                            <div class="accordion-body">
                                K1 is best if you're not yet married and want to marry in the U.S., or if you want your fiancé(e) to arrive faster. However, CR1 spouse visa (if already married) provides immediate green card, work authorization, and travel freedom upon entry. CR1 also saves the cost and time of adjustment of status ($1,225+). Consider your circumstances carefully.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq5">
                                What is the in-person meeting requirement?
                            </button>
                        </h3>
                        <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#k1FAQ">
                            <div class="accordion-body">
                                The couple must have met in person at least once within 2 years before filing the I-129F petition. This is strictly enforced. Exceptions are extremely rare and only granted for extreme hardship or if the meeting would violate strict cultural or religious customs. Document all meetings with photos, travel records, and tickets.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq6">
                                What happens after the wedding?
                            </button>
                        </h3>
                        <div id="faq6" class="accordion-collapse collapse" data-bs-parent="#k1FAQ">
                            <div class="accordion-body">
                                After marriage, file Form I-485 (Adjustment of Status) to obtain a green card. You can simultaneously file I-765 (work permit) and I-131 (travel document). The adjustment process takes 10-18 months. Your spouse will receive a conditional green card (valid 2 years) if married less than 2 years, requiring Form I-751 to remove conditions later.
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
                <h2>Ready to Bring Your Fiancé(e) to the United States?</h2>
                <p class="lead mb-4">Get expert guidance from our immigration specialists. We'll help you navigate the K1 process and reunite with your loved one.</p>
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
                    <h4>CR1/IR1 Visa</h4>
                    <p>Spouse visa with immediate green card (if already married)</p>
                    <a href="{{ route('cr1-ir1-visa') }}" class="visa-link">Learn More →</a>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="visa-card">
                    <h4>K3 Visa</h4>
                    <p>Temporary visa for married couples awaiting CR1/IR1</p>
                    <a href="{{ route('k3-visa') }}" class="visa-link">Learn More →</a>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="visa-card">
                    <h4>B2 Visa</h4>
                    <p>Tourist visa for your fiancé(e) to visit before marriage</p>
                    <a href="{{ route('b2-visa') }}" class="visa-link">Learn More →</a>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
