@extends('layouts.app')

@section('content')

<!-- Hero Section -->
<section class="hero-section visa-hero">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <div class="hero-content">
                    <h1>E1 Visa - Treaty Trader Visa</h1>
                    <p class="lead">Expert guidance for E1 treaty trader visa applications. We help international businesses conduct substantial trade between the United States and their home country through our comprehensive immigration services.</p>
                    <div class="hero-cta">
                        <a href="{{ route('contactus') }}" class="theme-btn-6">Schedule Free Consultation</a>
                        <a href="#e1-overview" class="theme-btn-outline">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="hero-image">
                    <img src="{{ asset('assets/images/visa-pages/e1-hero.jpg') }}" alt="E1 Visa" />
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
                    <h3>50+</h3>
                    <p>Treaty Countries</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Overview Section -->
<section id="e1-overview" class="content-section py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <h2 class="section-title">What is an E1 Visa?</h2>
                <p>The E1 Treaty Trader visa allows nationals of countries with which the United States maintains a treaty of commerce and navigation to enter the U.S. for the purpose of conducting substantial trade. This visa is ideal for businesses engaged in import/export activities, international commerce, and cross-border trade operations.</p>

                <div class="info-box mt-4">
                    <h4>Key Benefits of E1 Visa</h4>
                    <ul class="benefits-list">
                        <li>Renewable indefinitely in 5-year increments</li>
                        <li>No annual cap or lottery system</li>
                        <li>Bring spouse and unmarried children under 21</li>
                        <li>Spouse can apply for work authorization (EAD)</li>
                        <li>Trade includes goods, services, technology, and banking</li>
                        <li>Fast processing compared to other work visas</li>
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
                <h2 class="section-title text-center mb-5">E1 Visa Eligibility Requirements</h2>

                <div class="row">
                    <div class="col-md-6 mb-4">
                        <div class="eligibility-card">
                            <div class="card-icon">
                                <i class="bi bi-globe"></i>
                            </div>
                            <h4>Treaty Country National</h4>
                            <p>Must be a national of a country that has a treaty of commerce and navigation with the United States</p>
                        </div>
                    </div>

                    <div class="col-md-6 mb-4">
                        <div class="eligibility-card">
                            <div class="card-icon">
                                <i class="bi bi-arrow-left-right"></i>
                            </div>
                            <h4>Substantial Trade</h4>
                            <p>At least 51% of total trade must be between the U.S. and your treaty country</p>
                        </div>
                    </div>

                    <div class="col-md-6 mb-4">
                        <div class="eligibility-card">
                            <div class="card-icon">
                                <i class="bi bi-graph-up-arrow"></i>
                            </div>
                            <h4>Continuous Trade Flow</h4>
                            <p>Trade must be substantial, continuous, and ongoing (numerous transactions over time)</p>
                        </div>
                    </div>

                    <div class="col-md-6 mb-4">
                        <div class="eligibility-card">
                            <div class="card-icon">
                                <i class="bi bi-person-badge"></i>
                            </div>
                            <h4>Executive/Essential Role</h4>
                            <p>Must hold executive/supervisory position or possess specialized essential skills</p>
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
                <h2 class="section-title text-center mb-5">E1 Application Process</h2>

                <div class="process-timeline">
                    <div class="timeline-item">
                        <div class="timeline-number">1</div>
                        <div class="timeline-content">
                            <h4>Verify Treaty Country Status</h4>
                            <p>Confirm that your country has an E1 treaty with the United States</p>
                        </div>
                    </div>

                    <div class="timeline-item">
                        <div class="timeline-number">2</div>
                        <div class="timeline-content">
                            <h4>Document Trade Activity</h4>
                            <p>Gather evidence of substantial trade between U.S. and treaty country</p>
                        </div>
                    </div>

                    <div class="timeline-item">
                        <div class="timeline-number">3</div>
                        <div class="timeline-content">
                            <h4>Complete DS-160 Form</h4>
                            <p>Fill out online nonimmigrant visa application form DS-160</p>
                        </div>
                    </div>

                    <div class="timeline-item">
                        <div class="timeline-number">4</div>
                        <div class="timeline-content">
                            <h4>Prepare Application Package</h4>
                            <p>Compile all required documents including trade records, company information, and personal documents</p>
                        </div>
                    </div>

                    <div class="timeline-item">
                        <div class="timeline-number">5</div>
                        <div class="timeline-content">
                            <h4>Schedule & Attend Interview</h4>
                            <p>Book visa interview appointment at U.S. Embassy/Consulate in your country</p>
                        </div>
                    </div>

                    <div class="timeline-item">
                        <div class="timeline-number">6</div>
                        <div class="timeline-content">
                            <h4>Receive Visa & Enter U.S.</h4>
                            <p>Upon approval, receive E1 visa stamp and enter the United States to conduct trade</p>
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
                    <h4>For the Company/Business:</h4>
                    <ul>
                        <li>Proof of treaty trader status (company nationality documentation)</li>
                        <li>Trade invoices and bills of lading for past 12 months</li>
                        <li>Financial statements and tax returns</li>
                        <li>Business licenses and articles of incorporation</li>
                        <li>Evidence of at least 51% trade between U.S. and treaty country</li>
                        <li>Contracts with U.S. and foreign business partners</li>
                        <li>Bank statements showing international transactions</li>
                    </ul>

                    <h4 class="mt-4">For the Applicant:</h4>
                    <ul>
                        <li>Valid passport from treaty country (6+ months validity)</li>
                        <li>DS-160 confirmation page</li>
                        <li>Passport-sized photographs (U.S. visa photo requirements)</li>
                        <li>Resume/CV demonstrating executive or essential skills</li>
                        <li>Job description and organizational chart</li>
                        <li>Educational credentials and professional certifications</li>
                        <li>Evidence of intent to return to home country upon visa expiration</li>
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

                <div class="accordion" id="e1FAQ">
                    <div class="accordion-item">
                        <h3 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                                What qualifies as "substantial trade" for E1 visa?
                            </button>
                        </h3>
                        <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#e1FAQ">
                            <div class="accordion-body">
                                Substantial trade means a continuous flow of trade items between the U.S. and treaty country. There's no minimum dollar amount, but trade must be sufficient to ensure continuous flow and numerous transactions. Quality and frequency matter more than the monetary value.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                                Can I apply for a green card while on E1 visa?
                            </button>
                        </h3>
                        <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#e1FAQ">
                            <div class="accordion-body">
                                E1 is not a dual intent visa, meaning you should maintain intent to return to your home country. However, you can pursue green card through other pathways like EB5 investor visa or employer sponsorship without necessarily affecting your E1 status.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                                What countries have E1 treaty with the United States?
                            </button>
                        </h3>
                        <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#e1FAQ">
                            <div class="accordion-body">
                                Over 50 countries have E1 treaties with the U.S., including Argentina, Australia, Austria, Belgium, Canada, China (Taiwan), Colombia, Denmark, France, Germany, Ireland, Italy, Japan, South Korea, Mexico, Netherlands, Norway, Spain, Sweden, Switzerland, Thailand, Turkey, and UK. Check the State Department website for the complete list.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4">
                                How long does E1 visa processing take?
                            </button>
                        </h3>
                        <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#e1FAQ">
                            <div class="accordion-body">
                                Processing time varies by U.S. Embassy/Consulate but typically takes 2-4 months from application submission to visa approval. Ensure all documentation is complete to avoid delays.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq5">
                                What types of trade qualify for E1 visa?
                            </button>
                        </h3>
                        <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#e1FAQ">
                            <div class="accordion-body">
                                Trade includes exchange of goods, services, international banking, insurance, transportation, tourism, technology transfer, and communications. Both tangible goods and intangible services qualify as long as they cross international borders between the U.S. and treaty country.
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
                <h2>Ready to Start Your E1 Treaty Trader Journey?</h2>
                <p class="lead mb-4">Get expert guidance from our immigration specialists. We'll help you navigate the E1 visa process and expand your international trade business.</p>
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
                    <p>For entrepreneurs and investors starting or buying U.S. businesses</p>
                    <a href="{{ route('e2-visa') }}" class="visa-link">Learn More →</a>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="visa-card">
                    <h4>L1 Visa</h4>
                    <p>For intracompany transfers to U.S. branch or affiliate</p>
                    <a href="{{ route('l1-visa') }}" class="visa-link">Learn More →</a>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="visa-card">
                    <h4>EB5 Visa</h4>
                    <p>Permanent residency through investment ($800K-$1.05M)</p>
                    <a href="{{ route('eb5-visa') }}" class="visa-link">Learn More →</a>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
