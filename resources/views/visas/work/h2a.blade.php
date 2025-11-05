@extends('layouts.app')

@section('content')

<section class="hero-section visa-hero">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <div class="hero-content">
                    <h1>H-2A Visa - Temporary Agricultural Worker</h1>
                    <p class="lead">The H-2A visa allows U.S. employers to bring foreign nationals to the United States to fill temporary or seasonal agricultural jobs.</p>
                    <div class="hero-cta">
                        <a href="{{ route('contactus') }}#calendar" class="theme-btn-6">Schedule Free Consultation</a>
                        <a href="#h2a-requirements" class="theme-btn-outline">View Requirements</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="hero-image">
                    {{-- Use an image relevant to agriculture or farming --}}
                    <img src="{{ asset('assets/images/visa-pages/h2a-hero.jpg') }}" alt="H-2A Agricultural Worker Visa" class="img-fluid" />
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
                    <h3>1 Year</h3>
                    <p>Initial Duration</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="stat-box">
                    <h3>3 Years</h3>
                    <p>Maximum Total Stay</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="stat-box">
                    <h3>No Cap</h3>
                    <p>Annual Visa Limit</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="stat-box">
                    <h3>DOL Certified</h3>
                    <p>Primary Requirement</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="h2a-requirements" class="visa-details-section py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <h2 class="section-title">H-2A Visa Overview</h2>
                <p>The **H-2A Temporary Agricultural Program** is critical for American agriculture, allowing employers to hire foreign workers when there is a shortage of available domestic workers to perform agricultural labor of a temporary or seasonal nature. This visa is strictly for agricultural work.</p>

                <h3 class="mt-5">Key Employer Requirements</h3>
                <p>Unlike many other work visas, the H-2A program imposes significant obligations on the employer to protect the foreign worker:</p>
                <ul>
                    <li>**Housing:** Employers must provide **free, approved housing** to all H-2A workers who cannot reasonably return to their residence the same day.</li>
                    <li>**Transportation:** Employers must provide or pay for the worker's transportation from their home country to the U.S. work site, and back at the end of the contract. They must also provide **daily transportation** between housing and the worksite.</li>
                    <li>**Wages:** Workers must be paid at least the **Adverse Effect Wage Rate (AEWR)**, the federal/state minimum wage, or the prevailing wage, whichever is highest.</li>
                    <li>**Work Guarantee:** The employer must guarantee employment for a period equal to at least 75% of the total workdays specified in the contract (the "three-fourths guarantee").</li>
                </ul>

                <h3 class="mt-5">H-2A Application Steps</h3>
                <ol>
                    <li>**Temporary Labor Certification (TLC):** The employer must first apply to the **Department of Labor (DOL)** for a TLC, proving they have a temporary need and that no qualified U.S. workers are available.</li>
                    <li>**USCIS Petition:** After receiving the approved TLC, the employer files **Form I-129, Petition for a Nonimmigrant Worker**, with U.S. Citizenship and Immigration Services (USCIS).</li>
                    <li>**Visa Application:** Once the I-129 petition is approved, prospective workers outside the U.S. apply for the H-2A visa at a U.S. Embassy or Consulate.</li>
                </ol>
            </div>
            <div class="col-lg-4">
                {{-- Placeholder for sidebar content (e.g., FAQ, contact form snippet) --}}
                <div class="sidebar-info p-4 border rounded shadow-sm sticky-top">
                    <h4>Ready to Apply?</h4>
                    <p>Start your application process today. Contact us for assistance with the DOL's complex Temporary Labor Certification (TLC) process.</p>
                    <a href="{{ route('contactus') }}#calendar" class="theme-btn-light">Schedule Free Consultation</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="related-visas-section py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="section-title text-center mb-5">Explore Other Visa Options</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="visa-card">
                    <h4>H-2B Visa</h4>
                    <p>For temporary non-agricultural workers in other seasonal industries.</p>
                    <a href="{{ route('h2b-visa') }}" class="visa-link">Learn More →</a>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="visa-card">
                    <h4>H-1B Visa</h4>
                    <p>For skilled specialty occupation workers (not temporary/seasonal).</p>
                    <a href="{{ route('h1b-visa') }}" class="visa-link">Learn More →</a>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="visa-card">
                    <h4>TN Visa</h4>
                    <p>For Canadian and Mexican professionals under USMCA/NAFTA.</p>
                    <a href="{{ route('tn-visa') }}" class="visa-link">Learn More →</a>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
