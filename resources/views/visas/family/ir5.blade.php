@extends('layouts.app')

@section('content')

<!-- Hero Section -->
<section class="hero-section visa-hero">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <div class="hero-content">
                    <h1>IR5 Visa - Parent of U.S. Citizen</h1>
                    <p class="lead">Expert guidance for IR5 parent visa applications. We help U.S. citizens bring their parents to the United States as permanent residents, enabling families to reunite and live together permanently.</p>
                    <div class="hero-cta">
                        <a href="{{ route('contactus') }}" class="theme-btn-6">Schedule Free Consultation</a>
                        <a href="#ir5-overview" class="theme-btn-outline">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="hero-image">
                    <img src="{{ asset('assets/images/visa-pages/ir5-hero.jpg') }}" alt="IR5 Visa" />
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
                    <h3>21+ Years</h3>
                    <p>Petitioner Age Req.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Overview Section -->
<section id="ir5-overview" class="content-section py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <h2 class="section-title">What is an IR5 Visa?</h2>
                <p>The IR5 visa is an immigrant visa that allows parents of U.S. citizens to obtain permanent residency (green card) in the United States. This visa is classified as an "immediate relative" category, meaning there are no annual quotas or waiting periods beyond normal processing times. U.S. citizens must be at least 21 years old to sponsor their parents.</p>

                <div class="info-box mt-4">
                    <h4>Key Benefits of IR5 Visa</h4>
                    <ul class="benefits-list">
                        <li>Direct path to permanent residency (green card)</li>
                        <li>No annual quota or visa number waiting</li>
                        <li>Work authorization upon receiving green card</li>
                        <li>Access to Medicare and Social Security benefits</li>
                        <li>Travel freely in and out of the United States</li>
                        <li>Path to U.S. citizenship after 5 years (optional)</li>
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
                <h2 class="section-title text-center mb-5">IR5 Visa Eligibility Requirements</h2>

                <div class="row">
                    <div class="col-md-6 mb-4">
                        <div class="eligibility-card">
                            <div class="card-icon">
                                <i class="bi bi-person-check"></i>
                            </div>
                            <h4>Adult U.S. Citizen Child</h4>
                            <p>Petitioning child must be a U.S. citizen and at least 21 years old</p>
                        </div>
                    </div>

                    <div class="col-md-6 mb-4">
                        <div class="eligibility-card">
                            <div class="card-icon">
                                <i class="bi bi-heart-fill"></i>
                            </div>
                            <h4>Parent-Child Relationship</h4>
                            <p>Must prove legitimate parent-child relationship (biological, adoptive, or step-parent)</p>
                        </div>
                    </div>

                    <div class="col-md-6 mb-4">
                        <div class="eligibility-card">
                            <div class="card-icon">
                                <i class="bi bi-cash-coin"></i>
                            </div>
                            <h4>Financial Support</h4>
                            <p>U.S. citizen child must meet income requirements (125% of poverty guidelines)</p>
                        </div>
                    </div>

                    <div class="col-md-6 mb-4">
                        <div class="eligibility-card">
                            <div class="card-icon">
                                <i class="bi bi-shield-check"></i>
                            </div>
                            <h4>Admissibility Requirements</h4>
                            <p>Parent must pass medical examination and security background checks</p>
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
                <h2 class="section-title text-center mb-5">IR5 Application Process</h2>

                <div class="process-timeline">
                    <div class="timeline-item">
                        <div class="timeline-number">1</div>
                        <div class="timeline-content">
                            <h4>File Form I-130</h4>
                            <p>U.S. citizen child files Petition for Alien Relative with USCIS</p>
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
                            <p>Approved petition forwarded to National Visa Center for immigrant visa processing</p>
                        </div>
                    </div>

                    <div class="timeline-item">
                        <div class="timeline-number">4</div>
                        <div class="timeline-content">
                            <h4>Submit Documents to NVC</h4>
                            <p>Pay fees, submit DS-260, financial documents (I-864), and civil documents</p>
                        </div>
                    </div>

                    <div class="timeline-item">
                        <div class="timeline-number">5</div>
                        <div class="timeline-content">
                            <h4>Attend Consular Interview</h4>
                            <p>Parent interviews at U.S. Embassy/Consulate in home country</p>
                        </div>
                    </div>

                    <div class="timeline-item">
                        <div class="timeline-number">6</div>
                        <div class="timeline-content">
                            <h4>Receive Visa & Enter U.S.</h4>
                            <p>Upon approval, receive immigrant visa and enter U.S. to receive green card</p>
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
                    <h4>For the U.S. Citizen Petitioner (Child):</h4>
                    <ul>
                        <li>Proof of U.S. citizenship (passport, birth certificate, naturalization certificate)</li>
                        <li>Proof of age (must be 21 or older)</li>
                        <li>Form I-130 (Petition for Alien Relative)</li>
                        <li>Birth certificate showing parent-child relationship</li>
                        <li>Form I-864 (Affidavit of Support) with financial documents</li>
                        <li>Tax returns, W-2s, and pay stubs for past 3 years</li>
                        <li>Proof of current employment or income source</li>
                    </ul>

                    <h4 class="mt-4">For the Parent (Beneficiary):</h4>
                    <ul>
                        <li>Valid passport (6+ months validity beyond intended entry)</li>
                        <li>Birth certificate with English translation</li>
                        <li>Marriage certificate (if both parents applying together)</li>
                        <li>Police certificates from all countries of residence since age 16</li>
                        <li>Medical examination results (completed by panel physician)</li>
                        <li>Form DS-260 (Immigrant Visa Application)</li>
                        <li>Two passport-style photographs per visa requirements</li>
                        <li>Evidence of relationship to U.S. citizen (photos, letters, family documents)</li>
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

                <div class="accordion" id="ir5FAQ">
                    <div class="accordion-item">
                        <h3 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                                Can I sponsor both of my parents together?
                            </button>
                        </h3>
                        <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#ir5FAQ">
                            <div class="accordion-body">
                                Yes! You can file separate I-130 petitions for each parent simultaneously. If your parents are married, they can coordinate their applications and interviews. Each parent receives their own green card, and processing typically occurs on similar timelines when filed together.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                                How long does IR5 visa processing take?
                            </button>
                        </h3>
                        <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#ir5FAQ">
                            <div class="accordion-body">
                                Total processing time typically ranges from 12-18 months. I-130 approval takes 8-12 months, followed by 4-6 months for NVC processing and consular interview. As immediate relatives, IR5 beneficiaries face no visa quota backlogs, making the process more predictable than other family preference categories.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                                What income do I need to sponsor my parents?
                            </button>
                        </h3>
                        <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#ir5FAQ">
                            <div class="accordion-body">
                                You must show income at 125% of the federal poverty guidelines for your household size (including yourself, sponsored parents, and any dependents). For 2025, sponsoring both parents typically requires around $35,000-$40,000 annual income. If you don't meet this, you can use a joint sponsor or combine household income with a spouse.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4">
                                Can my parents work in the U.S. with IR5 visa?
                            </button>
                        </h3>
                        <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#ir5FAQ">
                            <div class="accordion-body">
                                Yes! Once your parents receive their green cards, they have permanent work authorization and can work for any employer without restrictions. They also qualify for Social Security and Medicare if they work and pay into these systems.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq5">
                                Can green card holders sponsor their parents?
                            </button>
                        </h3>
                        <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#ir5FAQ">
                            <div class="accordion-body">
                                No. Only U.S. citizens can sponsor parents for green cards. If you're currently a green card holder, you must first become a U.S. citizen (which typically requires 5 years of permanent residence) before filing an I-130 petition for your parents. This is an important distinction from spouse or child sponsorship, where green card holders can petition.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq6">
                                What if my parent has overstayed a visa before?
                            </button>
                        </h3>
                        <div id="faq6" class="accordion-collapse collapse" data-bs-parent="#ir5FAQ">
                            <div class="accordion-body">
                                Previous visa violations, overstays, or unlawful presence can complicate the IR5 process. Parents must typically leave the U.S. for consular processing, which may trigger 3-year or 10-year bars depending on the length of unlawful presence. However, immediate relative petitioners may be eligible for provisional unlawful presence waivers (Form I-601A). Consult with an immigration attorney to evaluate your specific situation.
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
                <h2>Ready to Bring Your Parents to the United States?</h2>
                <p class="lead mb-4">Get expert guidance from our immigration specialists. We'll help you navigate the IR5 process and reunite your family permanently.</p>
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
                    <p>Bring your spouse to the U.S. as a permanent resident</p>
                    <a href="{{ route('cr1-ir1-visa') }}" class="visa-link">Learn More →</a>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="visa-card">
                    <h4>K1 Visa</h4>
                    <p>Fiancé visa for marriage-based immigration</p>
                    <a href="{{ route('k1-visa') }}" class="visa-link">Learn More →</a>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="visa-card">
                    <h4>B2 Visa</h4>
                    <p>Temporary visitor visa for parents to visit the U.S.</p>
                    <a href="{{ route('b2-visa') }}" class="visa-link">Learn More →</a>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
