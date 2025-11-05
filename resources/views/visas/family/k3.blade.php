@extends('layouts.app')

@section('content')

<!-- Hero Section -->
<section class="hero-section visa-hero">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <div class="hero-content">
                    <h1>K3 Visa - Spouse of U.S. Citizen</h1>
                    <p class="lead">Expert guidance for K3 spouse visa applications. We help married couples reunite temporarily while waiting for immigrant visa processing, allowing spouses to enter the United States during extended separation periods.</p>
                    <div class="hero-cta">
                        <a href="{{ route('contactus') }}" class="theme-btn-6">Schedule Free Consultation</a>
                        <a href="#k3-overview" class="theme-btn-outline">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="hero-image">
                    <img src="{{ asset('assets/images/visa-pages/k3-hero.jpg') }}" alt="K3 Visa" />
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
                    <h3>2 Years</h3>
                    <p>Initial Validity</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="stat-box">
                    <h3>Renewable</h3>
                    <p>Can Extend</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="stat-box">
                    <h3>Work Permit</h3>
                    <p>EAD Available</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="stat-box">
                    <h3>Temporary</h3>
                    <p>Until Green Card</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Overview Section -->
<section id="k3-overview" class="content-section py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <h2 class="section-title">What is a K3 Visa?</h2>
                <p>The K3 visa is a nonimmigrant visa that allows the foreign spouse of a U.S. citizen to enter the United States while waiting for their immigrant visa (CR1/IR1) petition to be approved. Originally designed to reduce separation time for married couples, the K3 visa has become less common in recent years as CR1/IR1 processing times have improved and often match or beat K3 processing times.</p>

                <div class="info-box mt-4">
                    <h4>Key Benefits of K3 Visa</h4>
                    <ul class="benefits-list">
                        <li>Join U.S. citizen spouse while awaiting immigrant visa</li>
                        <li>Can apply for work authorization (EAD) after entry</li>
                        <li>Valid for 2 years, renewable in 2-year increments</li>
                        <li>Bring unmarried children under 21 (K4 visa)</li>
                        <li>Travel in and out of the U.S. with advance parole</li>
                        <li>Convert to permanent residence once I-130 approved</li>
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
                <h2 class="section-title text-center mb-5">K3 Visa Eligibility Requirements</h2>

                <div class="row">
                    <div class="col-md-6 mb-4">
                        <div class="eligibility-card">
                            <div class="card-icon">
                                <i class="bi bi-flag-fill"></i>
                            </div>
                            <h4>U.S. Citizen Petitioner</h4>
                            <p>Petitioner must be a U.S. citizen (not green card holder) legally married to foreign spouse</p>
                        </div>
                    </div>

                    <div class="col-md-6 mb-4">
                        <div class="eligibility-card">
                            <div class="card-icon">
                                <i class="bi bi-heart-fill"></i>
                            </div>
                            <h4>Valid Marriage</h4>
                            <p>Must be in a legally valid, bona fide marriage recognized by law</p>
                        </div>
                    </div>

                    <div class="col-md-6 mb-4">
                        <div class="eligibility-card">
                            <div class="card-icon">
                                <i class="bi bi-file-earmark-text"></i>
                            </div>
                            <h4>Filed I-130 Petition</h4>
                            <p>Must have already filed Form I-130 immigrant petition for spouse</p>
                        </div>
                    </div>

                    <div class="col-md-6 mb-4">
                        <div class="eligibility-card">
                            <div class="card-icon">
                                <i class="bi bi-clock-history"></i>
                            </div>
                            <h4>Pending Immigrant Visa</h4>
                            <p>K3 filed while I-130 is pending or approved but immigrant visa not yet available</p>
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
                <h2 class="section-title text-center mb-5">K3 Application Process</h2>

                <div class="process-timeline">
                    <div class="timeline-item">
                        <div class="timeline-number">1</div>
                        <div class="timeline-content">
                            <h4>File Form I-130</h4>
                            <p>U.S. citizen spouse must first file immigrant petition (I-130) for foreign spouse</p>
                        </div>
                    </div>

                    <div class="timeline-item">
                        <div class="timeline-number">2</div>
                        <div class="timeline-content">
                            <h4>File Form I-129F</h4>
                            <p>File Petition for Alien Fiancé(e) for K3 visa (after I-130 receipt notice)</p>
                        </div>
                    </div>

                    <div class="timeline-item">
                        <div class="timeline-number">3</div>
                        <div class="timeline-content">
                            <h4>Wait for I-129F Approval</h4>
                            <p>USCIS reviews K3 petition (often takes as long as I-130)</p>
                        </div>
                    </div>

                    <div class="timeline-item">
                        <div class="timeline-number">4</div>
                        <div class="timeline-content">
                            <h4>NVC Processing</h4>
                            <p>National Visa Center forwards case to U.S. Embassy/Consulate</p>
                        </div>
                    </div>

                    <div class="timeline-item">
                        <div class="timeline-number">5</div>
                        <div class="timeline-content">
                            <h4>Consular Interview</h4>
                            <p>Foreign spouse attends interview at U.S. Embassy with required documents</p>
                        </div>
                    </div>

                    <div class="timeline-item">
                        <div class="timeline-number">6</div>
                        <div class="timeline-content">
                            <h4>Enter U.S. on K3</h4>
                            <p>Receive K3 visa, enter U.S., and adjust to permanent resident when I-130 approved</p>
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
                        <li>Form I-130 receipt notice (must be filed first)</li>
                        <li>Form I-129F (Petition for Alien Fiancé - K3 version)</li>
                        <li>Marriage certificate (certified copy with translation)</li>
                        <li>Evidence of bona fide marriage (joint accounts, photos, correspondence)</li>
                        <li>Divorce or death certificates from previous marriages</li>
                        <li>Form I-134 (Affidavit of Support) with financial documents</li>
                    </ul>

                    <h4 class="mt-4">For the Foreign Spouse:</h4>
                    <ul>
                        <li>Valid passport (6+ months validity beyond intended entry)</li>
                        <li>Birth certificate with English translation</li>
                        <li>Police certificates from all countries of residence since age 16</li>
                        <li>Medical examination results from approved panel physician</li>
                        <li>Form DS-160 (Nonimmigrant Visa Application)</li>
                        <li>Divorce or death certificates from previous marriages</li>
                        <li>Two passport-style photographs</li>
                        <li>Additional evidence of genuine marital relationship</li>
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

                <div class="accordion" id="k3FAQ">
                    <div class="accordion-item">
                        <h3 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                                Is K3 visa still worth pursuing?
                            </button>
                        </h3>
                        <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#k3FAQ">
                            <div class="accordion-body">
                                In most cases today, K3 is no longer the best option. K3 processing often takes as long as CR1/IR1 immigrant visa processing (12-18 months), and CR1/IR1 provides immediate green card upon entry. K3 requires additional adjustment of status after entry. Most immigration attorneys recommend proceeding with CR1/IR1 directly unless there are compelling circumstances requiring faster temporary entry.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                                What's the difference between K3 and CR1 visa?
                            </button>
                        </h3>
                        <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#k3FAQ">
                            <div class="accordion-body">
                                K3 is a temporary nonimmigrant visa allowing entry while waiting for immigrant visa approval. CR1/IR1 is the immigrant visa itself, providing permanent residence immediately upon entry. CR1 holders can work and travel immediately, while K3 holders must apply for EAD and advance parole. Most importantly, CR1 doesn't require adjustment of status, saving time and money ($1,225+ in fees).
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                                Can I work on K3 visa?
                            </button>
                        </h3>
                        <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#k3FAQ">
                            <div class="accordion-body">
                                Not immediately. After entering the U.S. on K3 visa, you must file Form I-765 (Application for Employment Authorization) to obtain work permit. Processing takes 3-6 months. Most K3 holders file for EAD simultaneously with Form I-485 (Adjustment of Status) after the I-130 is approved.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4">
                                How long does K3 visa processing take?
                            </button>
                        </h3>
                        <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#k3FAQ">
                            <div class="accordion-body">
                                K3 processing typically takes 12-18 months or longer, often matching or exceeding CR1/IR1 processing times. This is why K3 has become less popular - it no longer offers the speed advantage it was designed to provide. Additionally, if I-130 is approved before K3 visa issuance, the K3 case is often converted to CR1.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq5">
                                What happens if I-130 is approved while on K3?
                            </button>
                        </h3>
                        <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#k3FAQ">
                            <div class="accordion-body">
                                If your I-130 is approved while you're in the U.S. on K3 status, you can file Form I-485 (Adjustment of Status) to become a permanent resident. You'll file I-485, I-765 (work permit), and I-131 (travel document) together. The adjustment process takes 10-18 months, after which you'll receive your green card.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq6">
                                Can I travel outside the U.S. on K3 visa?
                            </button>
                        </h3>
                        <div id="faq6" class="accordion-collapse collapse" data-bs-parent="#k3FAQ">
                            <div class="accordion-body">
                                Yes, K3 visa holders can travel in and out of the U.S. during the validity period. However, once you file Form I-485 (Adjustment of Status), you should not travel without advance parole (Form I-131). File I-131 simultaneously with I-485 to maintain travel flexibility. Traveling without advance parole can be considered abandonment of your adjustment application.
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
                <h2>Exploring K3 Visa Options?</h2>
                <p class="lead mb-4">Get expert guidance to determine if K3 or CR1/IR1 is the best choice for your situation. Schedule a consultation to discuss your options.</p>
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
                    <p>Often better choice - immediate green card for married couples</p>
                    <a href="{{ route('cr1-ir1-visa') }}" class="visa-link">Learn More →</a>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="visa-card">
                    <h4>K1 Visa</h4>
                    <p>For fiancé(e)s planning to marry in the United States</p>
                    <a href="{{ route('k1-visa') }}" class="visa-link">Learn More →</a>
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
