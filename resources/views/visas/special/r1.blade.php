@extends('layouts.app')

@section('content')

<section class="hero-section visa-hero">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <div class="hero-content">
                    <h1>R-1 Visa - Religious Workers</h1>
                    <p class="lead">Expert guidance for **R-1 visa** applications. We help **ministers** and **religious workers** enter the United States temporarily to perform religious work for a qualifying non-profit religious organization.</p>
                    <div class="hero-cta">
                        <a href="{{ route('contactus') }}" class="theme-btn-6">Schedule Free Consultation</a>
                        <a href="#r1-overview" class="theme-btn-outline">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="hero-image">
                    <img src="{{ asset('assets/images/visa-pages/r1-hero.jpg') }}" alt="R-1 Visa" />
                </div>
            </div>
        </div>
    </div>
</section>

<section class="stats-section py-5">
    <div class="container">
        <div class="row text-center">
            <div class="col-md-4">
                <div class="stat-box">
                    <h3>5 Years</h3>
                    <p>Maximum Total Stay (with extension)</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="stat-box">
                    <h3>20 Hrs/Week</h3>
                    <p>Minimum Work Requirement</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="stat-box">
                    <h3>2 Yrs</h3>
                    <p>Minimum Membership Required</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="r1-overview" class="visa-overview-section py-5 bg-light-gray">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="section-title text-center mb-5">R-1 Visa Overview</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <p>The **R-1 visa** is a nonimmigrant visa for foreign nationals who wish to enter the United States temporarily to perform work as a minister or in a religious vocation or occupation. The R-1 visa requires a job offer from a U.S.-based religious organization that is a **non-profit** entity or affiliated with a non-profit religious denomination.</p>
                <p>This visa allows an initial stay of up to **30 months**, with a possible extension for a maximum total stay of **five years** (60 months). To qualify, both the worker and the sponsoring organization must meet specific requirements set by U.S. Citizenship and Immigration Services (USCIS).</p>
            </div>
        </div>
    </div>
</section>

<section class="eligibility-section py-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="section-title text-center mb-5">R-1 Visa Eligibility Requirements</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <h4>For the Religious Worker:</h4>
                <ul class="list-checked">
                    <li>Be a member of a religious denomination with a bona fide non-profit religious organization in the U.S..</li>
                    <li>Have been a member of that religious denomination for at least **two years** immediately preceding the filing of the petition.</li>
                    <li>Be coming to work as a minister or in a religious vocation or occupation in the United States.</li>
                    <li>Intend to work at least part-time, an average of at least **20 hours per week**.</li>
                </ul>
            </div>
            <div class="col-lg-6">
                <h4>For the Sponsoring Organization:</h4>
                <ul class="list-checked">
                    <li>Must be a **non-profit religious organization** in the United States, or an organization affiliated with the religious denomination in the U.S..</li>
                    <li>Must be exempt from taxation under Section 501(c)(3) of the Internal Revenue Code (IRS).</li>
                    <li>Must file **Form I-129**, Petition for a Nonimmigrant Worker, on the religious worker's behalf.</li>
                    <li>Must be able to provide verifiable evidence of the religious worker’s compensation, whether salaried, non-salaried, or self-support (for missionaries).</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="benefits-section py-5 bg-light-gray">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="section-title text-center mb-5">Key Benefits of the R-1 Visa</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mb-4">
                <div class="benefit-box">
                    <h4>Work Authorization</h4>
                    <p>Allows you to work legally in the U.S. for the specific petitioning religious organization.</p>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="benefit-box">
                    <h4>Family Included</h4>
                    <p>Your spouse and unmarried children under 21 are eligible to apply for an **R-2 visa** to accompany or join you.</p>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="benefit-box">
                    <h4>Path to Green Card</h4>
                    <p>The R-1 visa is considered a "dual intent" visa, allowing the holder to pursue **permanent residency** (Green Card) through the **EB-4** Special Immigrant Religious Worker category.</p>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="benefit-box">
                    <h4>Travel Flexibility</h4>
                    <p>Allows for travel in and out of the U.S. during the validity period, provided you maintain your R-1 status.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="process-section py-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="section-title text-center mb-5">R-1 Visa Application Process</h2>
            </div>
        </div>
        <div class="row process-flow">
            <div class="col-md-3 process-step">
                <div class="step-icon">1</div>
                <h4>Sponsor Files Petition</h4>
                <p>The U.S. religious organization files **Form I-129**, Petition for a Nonimmigrant Worker, on your behalf with USCIS.</p>
            </div>
            <div class="col-md-3 process-step">
                <div class="step-icon">2</div>
                <h4>Wait for Approval</h4>
                <p>USCIS reviews the petition. Upon approval, they issue an I-797 Notice of Action.</p>
            </div>
            <div class="col-md-3 process-step">
                <div class="step-icon">3</div>
                <h4>Apply for Visa</h4>
                <p>Once the petition is approved, you complete **Form DS-160**, Nonimmigrant Visa Application, and pay the required fees.</p>
            </div>
            <div class="col-md-3 process-step">
                <div class="step-icon">4</div>
                <h4>Consular Interview</h4>
                <p>You attend a visa interview at a U.S. Embassy or Consulate in your home country. If approved, the R-1 visa is placed in your passport.</p>
            </div>
        </div>
    </div>
</section>

<section class="cta-section py-5 text-center">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>Ready to Start Your R-1 Visa Journey?</h2>
                <p>Our experienced team can guide you through the complex requirements for both the worker and the sponsoring organization.</p>
                <a href="{{ route('contactus') }}#calendar" class="theme-btn-light">Schedule Free Consultation</a>
            </div>
        </div>
    </div>
</section>

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
                    <p>For individuals with extraordinary ability in the arts, science, education, business, or athletics</p>
                    <a href="{{ route('o1avisa') }}" class="visa-link">Learn More →</a>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="visa-card">
                    <h4>H1B Visa</h4>
                    <p>For specialty occupation workers in various fields</p>
                    <a href="{{ route('h1b-visa') }}" class="visa-link">Learn More →</a>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="visa-card">
                    <h4>EB1A Visa</h4>
                    <p>Permanent residency for extraordinary ability individuals</p>
                    <a href="{{ route('eb1a-visa') }}" class="visa-link">Learn More →</a>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
