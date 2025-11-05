@extends('layouts.app')

@section('content')

<!-- Hero Section -->
<section class="hero-section visa-hero">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <div class="hero-content">
                    <h1>E2 Visa - Treaty Investor Visa</h1>
                    <p class="lead">Expert guidance for E2 investor visa applications. We help entrepreneurs and investors establish or acquire businesses in the United States through our proven immigration strategies and comprehensive support.</p>
                    <div class="hero-cta">
                        <a href="{{ route('contactus') }}#calendar" class="theme-btn-6">Schedule Free Consultation</a>
                        <a href="#e2-overview" class="theme-btn-outline">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="hero-image">
                    <img src="{{ asset('assets/images/visa-pages/e2-hero.jpg') }}" alt="E2 Visa" />
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
                    <h3>No Cap</h3>
                    <p>Unlimited Visas</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="stat-box">
                    <h3>5 Years</h3>
                    <p>Initial Validity</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="stat-box">
                    <h3>Indefinite</h3>
                    <p>Renewable Forever</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="stat-box">
                    <h3>80+</h3>
                    <p>Treaty Countries</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Overview Section -->
<section id="e2-overview" class="content-section py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <h2 class="section-title">What is an E2 Visa?</h2>
                <p>The E2 Treaty Investor visa allows nationals of treaty countries to enter and work in the United States based on a substantial investment in a U.S. business. This visa is ideal for entrepreneurs, business owners, and investors who want to start, purchase, or manage a business in the United States.</p>

                <div class="info-box mt-4">
                    <h4>Key Benefits of E2 Visa</h4>
                    <ul class="benefits-list">
                        <li>No minimum investment amount required by law (typically $100K-$200K)</li>
                        <li>Renewable indefinitely in 5-year increments</li>
                        <li>No annual cap or lottery system</li>
                        <li>Bring spouse and unmarried children under 21</li>
                        <li>Spouse can obtain work authorization (EAD)</li>
                        <li>Fast processing compared to employment-based visas</li>
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
                <h2 class="section-title text-center mb-5">E2 Visa Eligibility Requirements</h2>

                <div class="row">
                    <div class="col-md-6 mb-4">
                        <div class="eligibility-card">
                            <div class="card-icon">
                                <i class="bi bi-globe"></i>
                            </div>
                            <h4>Treaty Country National</h4>
                            <p>Must be a citizen of a country that has a treaty of commerce and navigation with the United States</p>
                        </div>
                    </div>

                    <div class="col-md-6 mb-4">
                        <div class="eligibility-card">
                            <div class="card-icon">
                                <i class="bi bi-cash-stack"></i>
                            </div>
                            <h4>Substantial Investment</h4>
                            <p>Investment must be substantial in relation to the total cost of the business (typically $100K-$200K+)</p>
                        </div>
                    </div>

                    <div class="col-md-6 mb-4">
                        <div class="eligibility-card">
                            <div class="card-icon">
                                <i class="bi bi-building-gear"></i>
                            </div>
                            <h4>Active Business Enterprise</h4>
                            <p>Must invest in a real, operating commercial enterprise (not passive investments)</p>
                        </div>
                    </div>

                    <div class="col-md-6 mb-4">
                        <div class="eligibility-card">
                            <div class="card-icon">
                                <i class="bi bi-person-workspace"></i>
                            </div>
                            <h4>Direct & Develop</h4>
                            <p>Must actively develop and direct the business enterprise as owner, manager, or essential employee</p>
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
                <h2 class="section-title text-center mb-5">E2 Application Process</h2>

                <div class="process-timeline">
                    <div class="timeline-item">
                        <div class="timeline-number">1</div>
                        <div class="timeline-content">
                            <h4>Verify Treaty Country Status</h4>
                            <p>Confirm your country has an E2 treaty with the United States</p>
                        </div>
                    </div>

                    <div class="timeline-item">
                        <div class="timeline-number">2</div>
                        <div class="timeline-content">
                            <h4>Identify Investment Opportunity</h4>
                            <p>Purchase an existing business, start a new business, or invest in a franchise</p>
                        </div>
                    </div>

                    <div class="timeline-item">
                        <div class="timeline-number">3</div>
                        <div class="timeline-content">
                            <h4>Make Substantial Investment</h4>
                            <p>Commit and transfer investment funds to the U.S. business (funds must be at risk)</p>
                        </div>
                    </div>

                    <div class="timeline-item">
                        <div class="timeline-number">4</div>
                        <div class="timeline-content">
                            <h4>Prepare Business Plan</h4>
                            <p>Develop comprehensive business plan showing viability and job creation potential</p>
                        </div>
                    </div>

                    <div class="timeline-item">
                        <div class="timeline-number">5</div>
                        <div class="timeline-content">
                            <h4>Submit Application Package</h4>
                            <p>File DS-160 and complete E2 application at U.S. Embassy/Consulate in your home country</p>
                        </div>
                    </div>

                    <div class="timeline-item">
                        <div class="timeline-number">6</div>
                        <div class="timeline-content">
                            <h4>Attend Visa Interview</h4>
                            <p>Interview at U.S. Embassy/Consulate, receive visa approval, and begin operations</p>
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
                    <h4>For the Business/Investment:</h4>
                    <ul>
                        <li>Comprehensive business plan with financial projections</li>
                        <li>Proof of investment (bank statements, wire transfers, purchase agreements)</li>
                        <li>Business formation documents (articles of incorporation, LLC operating agreement)</li>
                        <li>Lease agreement or property ownership documents</li>
                        <li>Evidence of business operations (contracts, invoices, marketing materials)</li>
                        <li>Financial statements and tax returns (if existing business)</li>
                        <li>Organizational chart showing management structure</li>
                    </ul>

                    <h4 class="mt-4">For the Investor:</h4>
                    <ul>
                        <li>Valid passport from treaty country (6+ months validity)</li>
                        <li>DS-160 confirmation page</li>
                        <li>Recent passport-sized photographs</li>
                        <li>Proof of source of investment funds (bank records, sale documents)</li>
                        <li>Resume/CV demonstrating business experience</li>
                        <li>Evidence of treaty country citizenship</li>
                        <li>Job descriptions and employee information (if applicable)</li>
                        <li>Personal financial statements</li>
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

                <div class="accordion" id="e2FAQ">
                    <div class="accordion-item">
                        <h3 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                                What is the minimum investment amount for E2 visa?
                            </button>
                        </h3>
                        <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#e2FAQ">
                            <div class="accordion-body">
                                There is no legal minimum investment amount for E2 visa. However, the investment must be "substantial" relative to the total cost of the business. In practice, most successful E2 applications involve investments of $100,000-$200,000 or more. The investment must also be sufficient to ensure successful operation of the business.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                                Can I apply for a green card while on E2 visa?
                            </button>
                        </h3>
                        <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#e2FAQ">
                            <div class="accordion-body">
                                E2 is not a dual intent visa, so you must maintain intent to return to your home country. However, you can pursue green card through other pathways such as EB5 (if you increase investment to $800K-$1.05M), employment-based sponsorship, or family sponsorship without necessarily affecting your E2 status.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                                Which countries qualify for E2 visa?
                            </button>
                        </h3>
                        <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#e2FAQ">
                            <div class="accordion-body">
                                Over 80 countries have E2 treaties with the U.S., including Argentina, Australia, Austria, Belgium, Canada, Chile, Colombia, France, Germany, Greece, Ireland, Italy, Japan, Mexico, Netherlands, New Zealand, Norway, Philippines, Poland, South Korea, Spain, Sweden, Switzerland, Taiwan, Thailand, Turkey, and UK. Check the State Department website for the complete list.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4">
                                Can my spouse work with E2 visa?
                            </button>
                        </h3>
                        <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#e2FAQ">
                            <div class="accordion-body">
                                Yes! E2 spouses can apply for Employment Authorization Document (EAD) and work for any employer in the United States. This is a significant benefit compared to other visa categories. Children under 21 can attend school but cannot work unless they obtain their own work authorization.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq5">
                                How long does E2 visa processing take?
                            </button>
                        </h3>
                        <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#e2FAQ">
                            <div class="accordion-body">
                                E2 visa processing typically takes 2-4 months from application submission to visa approval. Processing time varies by U.S. Embassy/Consulate and the complexity of your case. Ensure your business plan and documentation are thorough to avoid delays or requests for additional evidence.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq6">
                                What types of businesses qualify for E2 visa?
                            </button>
                        </h3>
                        <div id="faq6" class="accordion-collapse collapse" data-bs-parent="#e2FAQ">
                            <div class="accordion-body">
                                Almost any legitimate business qualifies: retail stores, restaurants, franchises, consulting firms, tech startups, manufacturing, professional services, e-commerce, and more. The business must be active and commercial (not passive investments like real estate or stocks). Popular options include franchises, restaurants, retail stores, and professional service businesses.
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
                <h2>Ready to Start Your E2 Investment Journey?</h2>
                <p class="lead mb-4">Get expert guidance from our immigration specialists. We'll help you navigate the E2 visa process and launch your American business dream.</p>
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
                    <h4>E1 Visa</h4>
                    <p>For treaty traders conducting substantial international trade</p>
                    <a href="{{ route('e1-visa') }}" class="visa-link">Learn More →</a>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="visa-card">
                    <h4>EB5 Visa</h4>
                    <p>Direct path to green card with $800K-$1.05M investment</p>
                    <a href="{{ route('eb5-visa') }}" class="visa-link">Learn More →</a>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="visa-card">
                    <h4>L1 Visa</h4>
                    <p>For opening U.S. branch of your foreign company</p>
                    <a href="{{ route('l1-visa') }}" class="visa-link">Learn More →</a>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
