@extends('layouts.app')

@section('content')

<section class="hero-section visa-hero">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <div class="hero-content">
                    <h1>L-1 Visa - Intracompany Transferee</h1>
                    <p class="lead">Expert guidance for L-1 visa applications. We help multinational companies transfer essential **executives, managers, and specialized knowledge** employees to their U.S. offices.</p>
                    <div class="hero-cta">
                        <a href="{{ route('contactus') }}#calendar" class="theme-btn-6">Schedule Free Consultation</a>
                        <a href="#l1-overview" class="theme-btn-outline">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="hero-image">
                    {{-- Replace 'l1-hero.jpg' with your actual image asset --}}
                    <img src="{{ asset('assets/images/visa-pages/l1-hero.jpg') }}" alt="L-1 Intracompany Transferee Visa" class="img-fluid" />
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
                    <h3>7 / 5 Years</h3>
                    <p>Maximum Duration (L-1A / L-1B)</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="stat-box">
                    <h3>L-1A & L-1B</h3>
                    <p>Two Classifications</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="stat-box">
                    <h3>No Cap</h3>
                    <p>Annual Limit</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="stat-box">
                    <h3>Dual Intent</h3>
                    <p>Allows for Green Card Intent</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="l1-overview" class="details-section py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="section-title text-center mb-5">L-1 Visa: The Intracompany Transfer</h2>
                <p>The L-1 visa is a nonimmigrant visa that allows an employer to transfer an executive, manager, or an employee with specialized knowledge from one of its affiliated foreign offices to one of its offices in the United States. This visa is a crucial tool for **multinational companies** operating across borders.</p>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-md-6 mb-4">
                <div class="card h-100 p-4">
                    <h4 class="text-primary">L-1A: Managers and Executives</h4>
                    <p>This classification is for employees transferring to serve in an executive or managerial capacity. Key benefits include a longer maximum stay and a more direct path to permanent residency (EB-1C).</p>
                    <ul class="list-unstyled detail-list">
                        <li><i class="fas fa-check-circle text-success me-2"></i> **Maximum Stay:** Up to **7 years** total.</li>
                        <li><i class="fas fa-check-circle text-success me-2"></i> **Initial Petition:** 3 years (1 year for a new U.S. office).</li>
                        <li><i class="fas fa-check-circle text-success me-2"></i> **Green Card Path:** Eligible for the EB-1C priority category.</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="card h-100 p-4">
                    <h4 class="text-primary">L-1B: Specialized Knowledge</h4>
                    <p>This classification is for employees who have special knowledge of the company’s product, service, research, equipment, techniques, management, or other proprietary interests.</p>
                    <ul class="list-unstyled detail-list">
                        <li><i class="fas fa-check-circle text-success me-2"></i> **Maximum Stay:** Up to **5 years** total.</li>
                        <li><i class="fas fa-check-circle text-success me-2"></i> **Initial Petition:** 3 years (1 year for a new U.S. office).</li>
                        <li><i class="fas fa-check-circle text-success me-2"></i> **Knowledge Requirement:** Expertise not readily available in the U.S. labor market.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="requirements-section py-5">
    <div class="container">
        <h2 class="section-title text-center mb-5">Key Requirements for L-1 Visa</h2>
        <div class="row">
            <div class="col-md-6 mb-4">
                <h4 class="text-secondary">Employee Qualifications</h4>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Must have worked for a qualifying organization abroad for at least **one continuous year** within the three years preceding the petition.</li>
                    <li class="list-group-item">The employment abroad must have been in a managerial, executive (L-1A), or specialized knowledge (L-1B) capacity.</li>
                    <li class="list-group-item">Must be entering the U.S. to provide services in a similar qualifying capacity.</li>
                </ul>
            </div>
            <div class="col-md-6 mb-4">
                <h4 class="text-secondary">Employer/Company Qualifications</h4>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">The U.S. and foreign companies must have a **qualifying relationship** (parent, subsidiary, affiliate, or branch).</li>
                    <li class="list-group-item">The employer must be **doing business** (regular, systematic, and continuous provision of goods and/or services) in the U.S. and at least one other country.</li>
                    <li class="list-group-item">For a "New Office" L-1, the employer must submit a business plan and demonstrate the ability to support the executive/manager within one year.</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="dependents-section py-5 bg-light">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <h2 class="section-title mb-3">Family Members on the L-2 Visa</h2>
                <p>The **L-2 visa** is available to the spouse and unmarried children under the age of 21 of the L-1 principal holder. This allows families to stay together during the foreign national's assignment in the U.S.</p>
                <ul class="list-unstyled detail-list">
                    <li><i class="fas fa-users text-primary me-2"></i> **Spouses:** L-2 spouses are permitted to work in the U.S. and are granted employment authorization incident to their status.</li>
                    <li><i class="fas fa-school text-primary me-2"></i> **Children:** L-2 children may attend school (primary, secondary, and higher education) full-time in the U.S.</li>
                </ul>
            </div>
            <div class="col-lg-4 text-center">
                 <a href="{{ route('contactus') }}" class="theme-btn-6 mt-4">Start Your L-2 Application</a>
            </div>
        </div>
    </div>
</section>

<section class="cta-section py-5">
    <div class="container text-center">
        <h2>Ready to Transfer Your Key Employee to the U.S.?</h2>
        <p class="lead mb-4">The L-1 process can be complex. Our legal team can guide your company through the entire petition process, from initial filing to final approval.</p>
        <a href="{{ route('contactus') }}#calendar" class="theme-btn-light">Schedule Free Consultation</a>
    </div>
</section>

<section class="related-visas-section py-5 bg-white">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="section-title text-center mb-5">Explore Other Visa Options</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="visa-card">
                    <h4>EB-1C Green Card</h4>
                    <p>Permanent residency for multinational managers and executives.</p>
                    <a href="{{ route('eb1c-visa') }}" class="visa-link">Learn More →</a>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="visa-card">
                    <h4>H-1B Visa</h4>
                    <p>For specialty occupation workers in various fields.</p>
                    <a href="{{ route('h1b-visa') }}" class="visa-link">Learn More →</a>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="visa-card">
                    <h4>E-2 Treaty Investor Visa</h4>
                    <p>For individuals investing a substantial amount of capital in a U.S. business.</p>
                    <a href="{{ route('e2-visa') }}" class="visa-link">Learn More →</a>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
