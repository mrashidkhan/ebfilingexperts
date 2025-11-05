@extends('layouts.app')

@section('content')

<section class="hero-section visa-hero">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <div class="hero-content">
                    <h1>B-1 Visa - Temporary Business Visitor</h1>
                    <p class="lead">The **B-1 visa** is a non-immigrant visa for individuals traveling to the United States temporarily to engage in business activities on behalf of a foreign employer.</p>
                    <div class="hero-cta">
                        <a href="{{ route('contactus') }}#calendar" class="theme-btn-6">Schedule Visa Consultation</a>
                        <a href="#b1-overview" class="theme-btn-outline">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="hero-image">
<img src="{{ asset('assets/images/visa-pages/b1-hero.jpg') }}" alt="B-1 Visa" />

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
                    <h3>6 Months</h3>
                    <p>Maximum Stay per Entry (Discretionary)</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="stat-box">
                    <h3>10 Years</h3>
                    <p>Typical Visa Validity (Issued as B-1/B-2)</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="stat-box">
                    <h3>Foreign</h3>
                    <p>Required Source of Income/Payment</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="stat-box">
                    <h3>DS-160</h3>
                    <p>Primary Application Form</p>
                </div>
            </div>
        </div>
    </div>
</section>

<hr>

<section id="b1-overview" class="visa-overview-section py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <h2 class="section-title">B-1 Visa Overview</h2>
                <p>The **B-1 Temporary Business Visitor visa** is intended for short-term trips to the U.S. for activities of a commercial or professional nature. It is crucial to understand that the B-1 visa is **not an employment visa**.</p>
                <p>To qualify, the applicant must demonstrate that their business activities primarily benefit a foreign employer or foreign business interest and that they have a foreign residence they do not intend to abandon.</p>
            </div>
        </div>
    </div>
</section>

<hr>

<section class="content-section py-5 bg-light">
    <div class="container">
        <h2 class="section-title text-center mb-5">Permissible B-1 Activities</h2>
        <div class="row">
            <div class="col-lg-6 mb-4">
                <div class="icon-box">
                    <i class="fas fa-handshake"></i>
                    <h4>Consultation & Negotiation</h4>
                    <p>Consult with business associates, negotiate contracts, and participate in short-term business-related activities.</p>
                </div>
            </div>
            <div class="col-lg-6 mb-4">
                <div class="icon-box">
                    <i class="fas fa-calendar-alt"></i>
                    <h4>Conferences & Meetings</h4>
                    <p>Attend scientific, educational, professional, or business conventions, conferences, or seminars.</p>
                </div>
            </div>
            <div class="col-lg-6 mb-4">
                <div class="icon-box">
                    <i class="fas fa-cogs"></i>
                    <h4>Equipment Servicing (Limited)</h4>
                    <p>Install, service, or repair commercial or industrial equipment purchased from outside the U.S., provided it is specified in the sales contract.</p>
                </div>
            </div>
            <div class="col-lg-6 mb-4">
                <div class="icon-box">
                    <i class="fas fa-money-bill-alt"></i>
                    <h4>Financial Matters</h4>
                    <p>Settle an estate or conduct independent research such as feasibility or marketing studies for a foreign entity.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<hr>

<section class="limitations-section py-5">
    <div class="container">
        <h2 class="section-title text-center mb-5">Key Limitations & Prohibited Activities</h2>
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <p class="lead text-danger text-center">A B-1 visa holder **CANNOT** engage in local employment or productive labor for hire in the United States.</p>
                <ul class="list-unstyled prohibited-list mt-4">
                    <li><i class="fas fa-times-circle text-danger"></i> Receiving a salary or payment from a **U.S. source** for services performed in the U.S.</li>
                    <li><i class="fas fa-times-circle text-danger"></i> Engaging in skilled or unskilled labor.</li>
                    <li><i class="fas fa-times-circle text-danger"></i> Operating a business in the U.S. that generates local income.</li>
                    <li><i class="fas fa-times-circle text-danger"></i> Engaging in full-time academic study (a separate F-1 visa is required).</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<hr>

<section class="application-process-section py-5 bg-light">
    <div class="container">
        <h2 class="section-title text-center mb-5">B-1 Application Process</h2>
        <div class="row">
            <div class="col-md-6 mb-4">
                <h4>Required Documents:</h4>
                <ul class="process-list">
                    <li>Passport valid for at least six months beyond your stay.</li>
                    <li>Completed Online Nonimmigrant Visa Application (**Form DS-160**) confirmation page.</li>
                    <li>Application fee payment receipt ($185).</li>
                    <li>**Letter from your Foreign Employer** detailing the purpose of the trip, the business activities, and assurance of foreign funding/return.</li>
                    <li>Evidence of financial solvency (bank statements) to cover all expenses.</li>
                    <li>Proof of strong ties to your home country (job, family, property).</li>
                </ul>
            </div>
            <div class="col-md-6 mb-4">
                <h4>Process Steps:</h4>
                <ol class="process-list">
                    <li>Complete and submit the online **Form DS-160**.</li>
                    <li>Pay the visa application fee.</li>
                    <li>Schedule a visa interview at the U.S. Embassy or Consulate.</li>
                    <li>Gather all required supporting documents.</li>
                    <li>Attend the interview with a Consular Officer.</li>
                    <li>Wait for visa processing and issuance.</li>
                </ol>
            </div>
        </div>
        <div class="text-center mt-4">
            <a href="{{ route('contactus') }}#calendar" class="theme-btn-6">Get Started with Your Application</a>
        </div>
    </div>
</section>

<hr>

<section class="related-visas-section py-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="section-title text-center mb-5">Explore Related Visitor Visas</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mb-4">
                <div class="visa-card text-center">
                    <h4>B-2 Visa</h4>
                    <p>For tourism, vacation, visiting family, or medical treatment.</p>
                    <a href="{{ route('b2-visa') }}" class="visa-link">B-2 Visa Details →</a>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="visa-card text-center">
                    <h4>B-1/B-2 Visa</h4>
                    <p>The most common combined visa for both business and tourism purposes.</p>
                    <a href="{{ route('b1-b2-visa') }}" class="visa-link">B-1/B-2 Visa Details →</a>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
