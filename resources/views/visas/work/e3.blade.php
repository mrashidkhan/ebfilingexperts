@extends('layouts.app')

@section('content')

<section class="hero-section visa-hero">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <div class="hero-content">
                    <h1>E-3 Visa - Australian Specialty Occupation Workers</h1>
                    <p class="lead">The E-3 visa is exclusively for Australian nationals seeking temporary employment in a specialty occupation in the United States. It offers two-year stays that are indefinitely renewable, making it a highly desirable option.</p>
                    <div class="hero-cta">
                        <a href="{{ route('contactus') }}#calendar" class="theme-btn-6">Schedule Free Consultation</a>
                        <a href="#e3-overview" class="theme-btn-outline">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="hero-image">
                    <img src="{{ asset('assets/images/visa-pages/e3-hero.jpg') }}" alt="E-3 Visa" />
                </div>
            </div>
        </div>
    </div>
</section>

<section class="stats-section py-5">
    <div class="container">
        <div class="row text-center">
            <div class="col-md-3">
                <div class="stat-box">
                    <h3>10,500</h3>
                    <p>Annual E-3 Cap</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="stat-box">
                    <h3>Indefinite</h3>
                    <p>Total Max Duration</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="stat-box">
                    <h3>Australia</h3>
                    <p>Eligible Country</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="stat-box">
                    <h3>Work Authorized</h3>
                    <p>Spouse Eligibility</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="e3-overview" class="overview-section py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="section-title mb-4">E-3 Visa Overview & Requirements</h2>
                <p>The E-3 visa is a non-immigrant classification created specifically for **Australian citizens** to work in the U.S. in specialty occupations. Unlike the H-1B, this visa is not subject to the annual lottery and is reliably available year-round.</p>

                <h3 class="mt-4">Key Requirements for the E-3 Visa</h3>
                <ul class="check-list">
                    <li>You must be a <strong>national of Australia</strong>.</li>
                    <li>The position must qualify as a **"specialty occupation"** (requiring a bachelor's degree or higher in a specific specialty).</li>
                    <li>You must possess the necessary **academic or other qualifying credentials**.</li>
                    <li>You must have a **legitimate job offer** from a U.S. employer.</li>
                    <li>Your U.S. employer must first obtain a certified **Labor Condition Application (LCA)** from the Department of Labor.</li>
                    <li>You must demonstrate **nonimmigrant intent**, meaning you intend to depart the U.S. at the end of your temporary stay.</li>
                </ul>

                <h3 class="mt-4">Duration and Renewals</h3>
                <p>E-3 status is granted for an initial period of up to **two years**. It can be extended indefinitely in **two-year increments**, provided all requirements are continually met.</p>
            </div>
        </div>
    </div>
</section>

<hr>

<section class="dependents-section py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="section-title mb-4">Family & Dependents (E-3D)</h2>
                <p>The spouse and unmarried children under the age of 21 of the E-3 visa holder are eligible for **E-3D dependent status**. Dependents do **not** need to be Australian citizens.</p>
                <ul class="check-list">
                    <li><strong>Spouse Employment:</strong> Spouses are employment authorized **incident to status** and can work in the U.S. without restrictions.</li>
                    <li><strong>Children:</strong> Children of E-3 workers may attend school but are **not authorized to work**.</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<hr>

<section class="cta-section py-5 bg-dark text-white">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-9">
                <h2>Ready to start your E-3 Visa application?</h2>
                <p class="lead mb-0">Our legal team is ready to guide you through the LCA and consular processing.</p>
            </div>
            <div class="col-lg-3 text-lg-right mt-3 mt-lg-0">
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
                    <h4>H1B Visa</h4>
                    <p>For specialty occupation workers in various fields</p>
                    <a href="{{ route('h1b-visa') }}" class="visa-link">Learn More →</a>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="visa-card">
                    <h4>O1A Visa</h4>
                    <p>For individuals with extraordinary ability in their field</p>
                    <a href="{{ route('o1avisa') }}" class="visa-link">Learn More →</a>
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
