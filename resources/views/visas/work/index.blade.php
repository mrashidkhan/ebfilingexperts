@extends('layouts.app')

@section('content')

<!-- Hero Section -->
<section class="hero-section visa-category-hero">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8 mx-auto text-center">
                <h1>Work Visas for the United States</h1>
                <p class="lead">Explore employment-based visa options to work legally in the United States. From H1B to TN visas, we help professionals navigate the complex immigration process.</p>
            </div>
        </div>
    </div>
</section>

<!-- Work Visas Grid -->
<section class="visas-grid-section py-5">
    <div class="container">
        <div class="row">
            <!-- H1B Visa Card -->
            <div class="col-lg-6 mb-4">
                <div class="visa-category-card">
                    <div class="visa-card-header">
                        <h3>H1B Visa</h3>
                        <span class="visa-badge">Most Popular</span>
                    </div>
                    <div class="visa-card-body">
                        <p class="visa-subtitle">Specialty Occupation Workers</p>
                        <p>The H1B visa is for professionals in specialty occupations requiring theoretical or technical expertise. Popular among IT professionals, engineers, doctors, and researchers.</p>

                        <div class="visa-quick-facts">
                            <div class="fact-item">
                                <span class="fact-label">Duration:</span>
                                <span class="fact-value">3 years (extendable to 6)</span>
                            </div>
                            <div class="fact-item">
                                <span class="fact-label">Annual Cap:</span>
                                <span class="fact-value">85,000</span>
                            </div>
                            <div class="fact-item">
                                <span class="fact-label">Processing:</span>
                                <span class="fact-value">3-6 months</span>
                            </div>
                        </div>

                        <ul class="visa-highlights">
                            <li>Requires bachelor's degree or equivalent</li>
                            <li>Dual intent - can pursue green card</li>
                            <li>Spouse can work with EAD</li>
                            <li>Subject to annual lottery</li>
                        </ul>

                        <a href="{{ route('h1b-visa') }}" class="visa-learn-more">Learn More About H1B →</a>
                    </div>
                </div>
            </div>

            <!-- L1 Visa Card -->
            <div class="col-lg-6 mb-4">
                <div class="visa-category-card">
                    <div class="visa-card-header">
                        <h3>L1 Visa</h3>
                        <span class="visa-badge">No Lottery</span>
                    </div>
                    <div class="visa-card-body">
                        <p class="visa-subtitle">Intracompany Transfer</p>
                        <p>Transfer from a foreign company to its U.S. branch, subsidiary, or affiliate. Available for managers (L1A) and employees with specialized knowledge (L1B).</p>

                        <div class="visa-quick-facts">
                            <div class="fact-item">
                                <span class="fact-label">Duration:</span>
                                <span class="fact-value">L1A: 7 years, L1B: 5 years</span>
                            </div>
                            <div class="fact-item">
                                <span class="fact-label">Annual Cap:</span>
                                <span class="fact-value">None</span>
                            </div>
                            <div class="fact-item">
                                <span class="fact-label">Processing:</span>
                                <span class="fact-value">3-6 months</span>
                            </div>
                        </div>

                        <ul class="visa-highlights">
                            <li>No prevailing wage requirement</li>
                            <li>No lottery system</li>
                            <li>Dual intent visa</li>
                            <li>Requires 1 year employment abroad</li>
                        </ul>

                        <a href="{{ route('l1-visa') }}" class="visa-learn-more">Learn More About L1 →</a>
                    </div>
                </div>
            </div>

            <!-- TN Visa Card -->
            <div class="col-lg-6 mb-4">
                <div class="visa-category-card">
                    <div class="visa-card-header">
                        <h3>TN Visa</h3>
                        <span class="visa-badge">USMCA</span>
                    </div>
                    <div class="visa-card-body">
                        <p class="visa-subtitle">Canadian & Mexican Professionals</p>
                        <p>Fast-track work visa for Canadian and Mexican citizens in qualifying professions under the USMCA agreement. No petition required for Canadians.</p>

                        <div class="visa-quick-facts">
                            <div class="fact-item">
                                <span class="fact-label">Duration:</span>
                                <span class="fact-value">3 years (renewable)</span>
                            </div>
                            <div class="fact-item">
                                <span class="fact-label">Annual Cap:</span>
                                <span class="fact-value">None</span>
                            </div>
                            <div class="fact-item">
                                <span class="fact-label">Processing:</span>
                                <span class="fact-value">Same day (Canadians)</span>
                            </div>
                        </div>

                        <ul class="visa-highlights">
                            <li>Available to 60+ professions</li>
                            <li>Fast processing at port of entry</li>
                            <li>Renewable indefinitely</li>
                            <li>Canadian/Mexican citizens only</li>
                        </ul>

                        <a href="{{ route('tn-visa') }}" class="visa-learn-more">Learn More About TN →</a>
                    </div>
                </div>
            </div>

            <!-- H2B Visa Card -->
            <div class="col-lg-6 mb-4">
                <div class="visa-category-card">
                    <div class="visa-card-header">
                        <h3>H2B Visa</h3>
                    </div>
                    <div class="visa-card-body">
                        <p class="visa-subtitle">Temporary Non-Agricultural Workers</p>
                        <p>For temporary or seasonal non-agricultural work such as hospitality, construction, landscaping, and other industries with seasonal demand.</p>

                        <div class="visa-quick-facts">
                            <div class="fact-item">
                                <span class="fact-label">Duration:</span>
                                <span class="fact-value">Up to 1 year</span>
                            </div>
                            <div class="fact-item">
                                <span class="fact-label">Annual Cap:</span>
                                <span class="fact-value">66,000</span>
                            </div>
                            <div class="fact-item">
                                <span class="fact-label">Processing:</span>
                                <span class="fact-value">4-6 months</span>
                            </div>
                        </div>

                        <ul class="visa-highlights">
                            <li>For seasonal/temporary work</li>
                            <li>No degree requirement</li>
                            <li>Labor certification required</li>
                            <li>Can extend in 1-year increments</li>
                        </ul>

                        <a href="{{ route('h2b-visa') }}" class="visa-learn-more">Learn More About H2B →</a>
                    </div>
                </div>
            </div>

            <!-- E3 Visa Card -->
            <div class="col-lg-6 mb-4">
                <div class="visa-category-card">
                    <div class="visa-card-header">
                        <h3>E3 Visa</h3>
                        <span class="visa-badge">Australian Only</span>
                    </div>
                    <div class="visa-card-body">
                        <p class="visa-subtitle">Australian Specialty Workers</p>
                        <p>Exclusively for Australian nationals in specialty occupations. Similar to H1B but with significant advantages including faster processing and dual intent.</p>

                        <div class="visa-quick-facts">
                            <div class="fact-item">
                                <span class="fact-label">Duration:</span>
                                <span class="fact-value">2 years (renewable)</span>
                            </div>
                            <div class="fact-item">
                                <span class="fact-label">Annual Cap:</span>
                                <span class="fact-value">10,500 (rarely reached)</span>
                            </div>
                            <div class="fact-item">
                                <span class="fact-label">Processing:</span>
                                <span class="fact-value">2-4 months</span>
                            </div>
                        </div>

                        <ul class="visa-highlights">
                            <li>Australian citizens only</li>
                            <li>Faster than H1B</li>
                            <li>Dual intent visa</li>
                            <li>Spouse can work with EAD</li>
                        </ul>

                        <a href="{{ route('e3-visa') }}" class="visa-learn-more">Learn More About E3 →</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Comparison Section -->
<section class="comparison-section py-5 bg-light">
    <div class="container">
        <h2 class="text-center mb-5">Compare Work Visas</h2>
        <div class="table-responsive">
            <table class="table visa-comparison-table">
                <thead>
                    <tr>
                        <th>Visa Type</th>
                        <th>Duration</th>
                        <th>Cap</th>
                        <th>Education Required</th>
                        <th>Dual Intent</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>H1B</strong></td>
                        <td>3+3 years</td>
                        <td>Yes (85,000)</td>
                        <td>Bachelor's</td>
                        <td>✓</td>
                    </tr>
                    <tr>
                        <td><strong>L1</strong></td>
                        <td>5-7 years</td>
                        <td>No</td>
                        <td>Varies</td>
                        <td>✓</td>
                    </tr>
                    <tr>
                        <td><strong>TN</strong></td>
                        <td>3 years</td>
                        <td>No</td>
                        <td>Varies</td>
                        <td>✗</td>
                    </tr>
                    <tr>
                        <td><strong>H2B</strong></td>
                        <td>1 year</td>
                        <td>Yes (66,000)</td>
                        <td>No</td>
                        <td>✗</td>
                    </tr>
                    <tr>
                        <td><strong>E3</strong></td>
                        <td>2 years</td>
                        <td>Yes (10,500)</td>
                        <td>Bachelor's</td>
                        <td>✓</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cta-section py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <h2>Not Sure Which Work Visa is Right for You?</h2>
                <p class="lead mb-4">Schedule a free consultation with our immigration experts. We'll assess your situation and recommend the best visa option for your career goals.</p>
                <a href="{{ route('contactus') }}#calendar" class="theme-btn-6">Schedule Free Consultation</a>
            </div>
        </div>
    </div>
</section>

<!-- Related Services -->
<section class="related-services py-5 bg-light">
    <div class="container">
        <h2 class="text-center mb-5">Explore Other Immigration Options</h2>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="service-card">
                    <h4>EB1A Green Card</h4>
                    <p>Permanent residency for individuals with extraordinary ability</p>
                    <a href="{{ route('eb1a-visa') }}" class="service-link">Learn More →</a>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="service-card">
                    <h4>O1A Visa</h4>
                    <p>Work visa for individuals with extraordinary ability</p>
                    <a href="{{ route('o1avisa') }}" class="service-link">Learn More →</a>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="service-card">
                    <h4>EB2-NIW</h4>
                    <p>Green card for professionals in the national interest</p>
                    <a href="{{ route('eb2-niw') }}" class="service-link">Learn More →</a>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
