@extends('layouts.app')

@section('content')

<!-- Hero Section -->
<section class="hero-section visa-hero">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <div class="hero-content">
                    <h1>EB5 Visa - Immigrant Investor Program</h1>
                    <p class="lead">Expert guidance for EB5 investor visa applications. We help foreign nationals obtain U.S. permanent residency through strategic investments in job-creating enterprises with our comprehensive immigration services.</p>
                    <div class="hero-cta">
                        <a href="{{ route('contactus') }}" class="theme-btn-6">Schedule Free Consultation</a>
                        <a href="#eb5-overview" class="theme-btn-outline">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="hero-image">
                    <img src="{{ asset('assets/images/visa-pages/eb5-hero.jpg') }}" alt="EB5 Visa" />
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
                    <h3>$800K-$1.05M</h3>
                    <p>Investment Amount</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="stat-box">
                    <h3>10 Jobs</h3>
                    <p>Must Create</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="stat-box">
                    <h3>Green Card</h3>
                    <p>Permanent Residency</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="stat-box">
                    <h3>2-4 Years</h3>
                    <p>Processing Time</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Overview Section -->
<section id="eb5-overview" class="content-section py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <h2 class="section-title">What is an EB5 Visa?</h2>
                <p>The EB5 Immigrant Investor Program provides a direct pathway to U.S. permanent residency (green card) for foreign nationals who invest substantial capital in job-creating businesses in the United States. Established by Congress in 1990, the EB5 program is designed to stimulate the U.S. economy through capital investment and job creation by foreign investors.</p>

                <div class="info-box mt-4">
                    <h4>Key Benefits of EB5 Visa</h4>
                    <ul class="benefits-list">
                        <li>Direct path to permanent residency (green card)</li>
                        <li>No employer sponsorship required</li>
                        <li>Entire family included (spouse and unmarried children under 21)</li>
                        <li>Live, work, and study anywhere in the United States</li>
                        <li>Path to U.S. citizenship after 5 years</li>
                        <li>No language, education, or business experience requirements</li>
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
                <h2 class="section-title text-center mb-5">EB5 Visa Eligibility Requirements</h2>

                <div class="row">
                    <div class="col-md-6 mb-4">
                        <div class="eligibility-card">
                            <div class="card-icon">
                                <i class="bi bi-cash-stack"></i>
                            </div>
                            <h4>Required Investment Amount</h4>
                            <p>$800,000 in Targeted Employment Area (TEA) or $1,050,000 in standard areas</p>
                        </div>
                    </div>

                    <div class="col-md-6 mb-4">
                        <div class="eligibility-card">
                            <div class="card-icon">
                                <i class="bi bi-people-fill"></i>
                            </div>
                            <h4>Job Creation Requirement</h4>
                            <p>Must create or preserve at least 10 full-time jobs for qualified U.S. workers</p>
                        </div>
                    </div>

                    <div class="col-md-6 mb-4">
                        <div class="eligibility-card">
                            <div class="card-icon">
                                <i class="bi bi-shield-check"></i>
                            </div>
                            <h4>Lawful Source of Funds</h4>
                            <p>Must demonstrate that investment capital was obtained through lawful means</p>
                        </div>
                    </div>

                    <div class="col-md-6 mb-4">
                        <div class="eligibility-card">
                            <div class="card-icon">
                                <i class="bi bi-graph-up"></i>
                            </div>
                            <h4>Active Investment</h4>
                            <p>Capital must be at risk and invested in a new commercial enterprise</p>
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
                <h2 class="section-title text-center mb-5">EB5 Application Process</h2>

                <div class="process-timeline">
                    <div class="timeline-item">
                        <div class="timeline-number">1</div>
                        <div class="timeline-content">
                            <h4>Choose Investment Option</h4>
                            <p>Select between Regional Center or Direct Investment pathway</p>
                        </div>
                    </div>

                    <div class="timeline-item">
                        <div class="timeline-number">2</div>
                        <div class="timeline-content">
                            <h4>Invest Capital</h4>
                            <p>Transfer $800K (TEA) or $1.05M to the investment project or regional center</p>
                        </div>
                    </div>

                    <div class="timeline-item">
                        <div class="timeline-number">3</div>
                        <div class="timeline-content">
                            <h4>File Form I-526E</h4>
                            <p>Submit immigrant petition to USCIS with evidence of investment and job creation plan</p>
                        </div>
                    </div>

                    <div class="timeline-item">
                        <div class="timeline-number">4</div>
                        <div class="timeline-content">
                            <h4>Wait for I-526E Approval</h4>
                            <p>USCIS reviews petition (typically 18-36 months) to verify compliance</p>
                        </div>
                    </div>

                    <div class="timeline-item">
                        <div class="timeline-number">5</div>
                        <div class="timeline-content">
                            <h4>Apply for Conditional Green Card</h4>
                            <p>File Form I-485 (if in U.S.) or go through consular processing abroad</p>
                        </div>
                    </div>

                    <div class="timeline-item">
                        <div class="timeline-number">6</div>
                        <div class="timeline-content">
                            <h4>Remove Conditions (Form I-829)</h4>
                            <p>After 2 years, file to remove conditions and obtain permanent green card</p>
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
                    <h4>For Investment and Source of Funds:</h4>
                    <ul>
                        <li>Evidence of lawful source of funds (bank statements, tax returns, business records)</li>
                        <li>Investment transfer documentation (wire transfers, escrow agreements)</li>
                        <li>Business plan showing job creation projections</li>
                        <li>Financial statements and economic analysis</li>
                        <li>Evidence of capital contribution and at-risk investment</li>
                        <li>Regional Center documentation (if applicable)</li>
                        <li>Proof of TEA designation (if claiming lower investment amount)</li>
                    </ul>

                    <h4 class="mt-4">For the Investor and Family:</h4>
                    <ul>
                        <li>Valid passports for investor, spouse, and children</li>
                        <li>Birth certificates and marriage certificate</li>
                        <li>Police certificates from all countries of residence</li>
                        <li>Medical examination results</li>
                        <li>Form I-526E petition with supporting evidence</li>
                        <li>Photographs meeting U.S. visa requirements</li>
                        <li>Form I-485 (if adjusting status in U.S.) or DS-260 (consular processing)</li>
                        <li>Financial support documents (Form I-864 not required)</li>
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

                <div class="accordion" id="eb5FAQ">
                    <div class="accordion-item">
                        <h3 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                                What is the difference between Regional Center and Direct Investment?
                            </button>
                        </h3>
                        <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#eb5FAQ">
                            <div class="accordion-body">
                                Regional Center EB5 allows passive investment through USCIS-approved regional centers and counts indirect jobs toward the 10-job requirement. Direct Investment requires active management and only counts direct employees. Regional Center is more popular (90%+ of cases) as it offers more flexibility and easier job creation compliance.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                                What is a Targeted Employment Area (TEA)?
                            </button>
                        </h3>
                        <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#eb5FAQ">
                            <div class="accordion-body">
                                A TEA is an area with high unemployment (150% of national average) or a rural area. Investments in TEAs qualify for the reduced investment amount of $800,000 instead of $1,050,000. Most Regional Center projects are structured in TEAs to offer the lower investment threshold.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                                How long does the EB5 process take?
                            </button>
                        </h3>
                        <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#eb5FAQ">
                            <div class="accordion-body">
                                Total timeline is typically 2-4 years from investment to permanent green card. I-526E processing takes 18-36 months, conditional green card issuance takes 6-12 months, and I-829 (condition removal) takes another 12-24 months. Processing times vary based on country of origin and USCIS workload.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4">
                                Can I get my investment back?
                            </button>
                        </h3>
                        <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#eb5FAQ">
                            <div class="accordion-body">
                                Yes, EB5 investments are meant to be temporary. After the required 2-year conditional period and I-829 approval, investors typically receive their capital back (with or without returns, depending on the project structure). However, the investment must remain at risk during the conditional period to comply with EB5 requirements.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq5">
                                What happens if the project fails?
                            </button>
                        </h3>
                        <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#eb5FAQ">
                            <div class="accordion-body">
                                EB5 requires capital to be "at risk," meaning there's no guarantee of return. If a project fails before job creation requirements are met, it could jeopardize your green card petition. This is why thorough due diligence and selecting established Regional Centers with proven track records is critical. Legal and financial advisors should review all projects before investment.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq6">
                                Does my family get green cards too?
                            </button>
                        </h3>
                        <div id="faq6" class="accordion-collapse collapse" data-bs-parent="#eb5FAQ">
                            <div class="accordion-body">
                                Yes! Your spouse and unmarried children under 21 are included in your EB5 petition at no additional investment. They all receive conditional green cards and eventually permanent green cards. This makes EB5 an excellent option for families seeking to immigrate together.
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
                <h2>Ready to Start Your EB5 Green Card Journey?</h2>
                <p class="lead mb-4">Get expert guidance from our immigration specialists. We'll help you navigate the EB5 investment process and secure permanent residency for your family.</p>
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
                    <h4>E2 Visa</h4>
                    <p>Lower investment ($100K-$200K) but no green card pathway</p>
                    <a href="{{ route('e2-visa') }}" class="visa-link">Learn More →</a>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="visa-card">
                    <h4>EB1A Visa</h4>
                    <p>Green card for individuals with extraordinary ability</p>
                    <a href="{{ route('eb1a-visa') }}" class="visa-link">Learn More →</a>
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
