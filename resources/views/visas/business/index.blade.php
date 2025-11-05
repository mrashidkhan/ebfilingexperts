@extends('layouts.app')

@section('content')

<!-- Hero Section -->
<section class="hero-section visa-category-hero">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8 mx-auto text-center">
                <h1>Business & Investor Visas</h1>
                <p class="lead">Start or expand your business in the United States. Explore visa options for entrepreneurs, investors, and business professionals.</p>
            </div>
        </div>
    </div>
</section>

<!-- Business Visas Grid -->
<section class="visas-grid-section py-5">
    <div class="container">
        <div class="row">
            <!-- E2 Visa Card -->
            <div class="col-lg-4 mb-4">
                <div class="visa-category-card">
                    <div class="visa-card-header">
                        <h3>E2 Visa</h3>
                        <span class="visa-badge">Entrepreneurs</span>
                    </div>
                    <div class="visa-card-body">
                        <p class="visa-subtitle">Treaty Investor</p>
                        <p>Invest substantial capital in a U.S. business. Renewable indefinitely with no minimum investment requirement by law.</p>

                        <div class="visa-quick-facts">
                            <div class="fact-item">
                                <span class="fact-label">Duration:</span>
                                <span class="fact-value">5 years (renewable)</span>
                            </div>
                            <div class="fact-item">
                                <span class="fact-label">Investment:</span>
                                <span class="fact-value">$100K-$200K typical</span>
                            </div>
                            <div class="fact-item">
                                <span class="fact-label">Countries:</span>
                                <span class="fact-value">80+ treaty countries</span>
                            </div>
                        </div>

                        <ul class="visa-highlights">
                            <li>Start or buy a business</li>
                            <li>Bring spouse and children</li>
                            <li>Renewable indefinitely</li>
                            <li>No minimum investment by law</li>
                            <li>Spouse can work</li>
                        </ul>

                        <a href="{{ route('e2-visa') }}" class="visa-learn-more">Learn More About E2 →</a>
                    </div>
                </div>
            </div>

            <!-- E1 Visa Card -->
            <div class="col-lg-4 mb-4">
                <div class="visa-category-card">
                    <div class="visa-card-header">
                        <h3>E1 Visa</h3>
                    </div>
                    <div class="visa-card-body">
                        <p class="visa-subtitle">Treaty Trader</p>
                        <p>Conduct substantial trade between the U.S. and your treaty country. At least 51% of trade must be between the two countries.</p>

                        <div class="visa-quick-facts">
                            <div class="fact-item">
                                <span class="fact-label">Duration:</span>
                                <span class="fact-value">5 years (renewable)</span>
                            </div>
                            <div class="fact-item">
                                <span class="fact-label">Trade Volume:</span>
                                <span class="fact-value">Substantial</span>
                            </div>
                            <div class="fact-item">
                                <span class="fact-label">Countries:</span>
                                <span class="fact-value">50+ treaty countries</span>
                            </div>
                        </div>

                        <ul class="visa-highlights">
                            <li>Import/export businesses</li>
                            <li>No cap on visas</li>
                            <li>Renewable indefinitely</li>
                            <li>Bring employees</li>
                            <li>Trade includes services</li>
                        </ul>

                        <a href="{{ route('e1-visa') }}" class="visa-learn-more">Learn More About E1 →</a>
                    </div>
                </div>
            </div>

            <!-- EB5 Visa Card -->
            <div class="col-lg-4 mb-4">
                <div class="visa-category-card">
                    <div class="visa-card-header">
                        <h3>EB5 Visa</h3>
                        <span class="visa-badge">Green Card</span>
                    </div>
                    <div class="visa-card-body">
                        <p class="visa-subtitle">Immigrant Investor</p>
                        <p>Obtain permanent residency through investment. Invest $800K-$1.05M and create 10 full-time jobs to qualify.</p>

                        <div class="visa-quick-facts">
                            <div class="fact-item">
                                <span class="fact-label">Duration:</span>
                                <span class="fact-value">Permanent (Green Card)</span>
                            </div>
                            <div class="fact-item">
                                <span class="fact-label">Investment:</span>
                                <span class="fact-value">$800K or $1.05M</span>
                            </div>
                            <div class="fact-item">
                                <span class="fact-label">Jobs:</span>
                                <span class="fact-value">Create 10 full-time</span>
                            </div>
                        </div>

                        <ul class="visa-highlights">
                            <li>Direct path to green card</li>
                            <li>Regional center option</li>
                            <li>Entire family included</li>
                            <li>No employer sponsor needed</li>
                            <li>Live anywhere in the U.S.</li>
                        </ul>

                        <a href="{{ route('eb5-visa') }}" class="visa-learn-more">Learn More About EB5 →</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Investment Levels Section -->
<section class="investment-section py-5 bg-light">
    <div class="container">
        <h2 class="text-center mb-5">Investment Requirements Overview</h2>
        <div class="row">
            <div class="col-md-4 text-center mb-4">
                <div class="investment-card">
                    <h3>E2 Visa</h3>
                    <div class="investment-amount">$100K - $200K</div>
                    <p class="investment-note">Typical range (no legal minimum)</p>
                    <p>Renewable indefinitely</p>
                </div>
            </div>
            <div class="col-md-4 text-center mb-4">
                <div class="investment-card">
                    <h3>E1 Visa</h3>
                    <div class="investment-amount">Trade Volume</div>
                    <p class="investment-note">Substantial & continuous</p>
                    <p>Renewable indefinitely</p>
                </div>
            </div>
            <div class="col-md-4 text-center mb-4">
                <div class="investment-card highlighted">
                    <h3>EB5 Visa</h3>
                    <div class="investment-amount">$800K - $1.05M</div>
                    <p class="investment-note">+ 10 jobs requirement</p>
                    <p>Permanent Green Card</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cta-section py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <h2>Ready to Invest in Your American Dream?</h2>
                <p class="lead mb-4">Our immigration experts will help you choose the right investor visa and navigate the application process successfully.</p>
                <a href="{{ route('contactus') }}#calendar" class="theme-btn-6">Schedule Free Consultation</a>
            </div>
        </div>
    </div>
</section>

@endsection
