@extends('layouts.app')

@section('content')

<section class="hero-section visa-hero">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <div class="hero-content">
                    <h1>H-2B Visa - Temporary Non-Agricultural Worker</h1>
                    <p class="lead">The **H-2B visa** allows U.S. employers to hire foreign nationals to fill **temporary, non-agricultural** jobs where insufficient qualified and available U.S. workers exist.</p>
                    <div class="hero-cta">
                        <a href="{{ route('contactus') }}#calendar" class="theme-btn-6">Schedule Employer Consultation</a>
                        <a href="#requirements" class="theme-btn-outline">View Program Requirements</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="hero-image">
                    <img src="{{ asset('assets/images/visa-pages/h2b-hero.jpg') }}" alt="B1 B-2 Visa" />
                                    </div>
            </div>
        </div>
    </div>
</section>

---

<section class="stats-section py-5">
    <div class="container">
        <div class="row text-center">
            <div class="col-md-3">
                <div class="stat-box">
                    <h3>66,000</h3>
                    <p>Statutory Annual Cap (Often Supplemented)</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="stat-box">
                    <h3>1 Year</h3>
                    <p>Initial Maximum Period of Stay</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="stat-box">
                    <h3>3 Years</h3>
                    <p>Maximum Total Stay (with Extensions)</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="stat-box">
                    <h3>I-129</h3>
                    <p>Required Employer Petition</p>
                </div>
            </div>
        </div>
    </div>
</section>

---

<section id="requirements" class="content-section py-5 bg-light">
    <div class="container">
        <h2 class="section-title text-center mb-5">H-2B Eligibility and Temporary Need Types</h2>
        <p class="text-center lead">The H-2B program is employer-driven and is strictly for non-agricultural work that is temporary in nature.</p>
        <div class="row mt-4">
            <div class="col-lg-6 mb-4">
                <h3><i class="fas fa-building mr-2"></i> Employer Requirements (Petitioner)</h3>
                <ul class="list-group list-group-flush requirement-list">
                    <li class="list-group-item">Demonstrate the job is **Temporary** (lasting no more than one year).</li>
                    <li class="list-group-item">Prove that **no qualified U.S. workers** are able, willing, or available to fill the position.</li>
                    <li class="list-group-item">Offer a wage that meets or exceeds the **prevailing wage** to avoid adversely affecting U.S. workers.</li>
                    <li class="list-group-item">Job must be in a non-agricultural sector (e.g., hospitality, construction, landscaping).</li>
                </ul>
            </div>

            <div class="col-lg-6 mb-4">
                <h3><i class="fas fa-calendar-alt mr-2"></i> Four Types of Temporary Need</h3>
                <ul class="list-group list-group-flush requirement-list">
                    <li class="list-group-item">**Seasonal Need:** Work tied to a season of the year by an event or pattern (e.g., summer resort staff).</li>
                    <li class="list-group-item">**Peak Load Need:** Need to temporarily supplement permanent staff due to a short-term, seasonal demand.</li>
                    <li class="list-group-item">**Intermittent Need:** Employer has not employed permanent workers and needs occasional workers for short periods.</li>
                    <li class="list-group-item">**One-Time Occurrence:** A temporary event of short duration creates a need for temporary workers (e.g., a one-off project).</li>
                </ul>
            </div>
        </div>
    </div>
</section>

---

<section id="process" class="process-section py-5">
    <div class="container">
        <h2 class="section-title text-center mb-5">H-2B Application Process Overview</h2>
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <div class="process-step">
                    <span class="step-number">1</span>
                    <h4>Temporary Labor Certification (DOL)</h4>
                    <p>The U.S. employer files **Form ETA-9142B** with the Department of Labor (DOL) to confirm the temporary need and that they have attempted to recruit U.S. workers.</p>
                </div>
                <div class="process-step">
                    <span class="step-number">2</span>
                    <h4>USCIS Petition (Form I-129)</h4>
                    <p>Once the Labor Certification is approved, the employer files **Form I-129, Petition for a Nonimmigrant Worker,** with USCIS on behalf of the prospective employee(s).</p>
                </div>
                <div class="process-step">
                    <span class="step-number">3</span>
                    <h4>Consular Processing (DS-160)</h4>
                    <p>After the I-129 petition is approved (Form I-797), the foreign worker completes the online **Form DS-160** and attends an interview at a U.S. Embassy or Consulate to obtain the H-2B visa stamp.</p>
                </div>
            </div>
        </div>
    </div>
</section>

---

<section class="details-section py-5 bg-danger-subtle">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mb-4">
                <h3 class="text-danger"><i class="fas fa-exclamation-triangle mr-2"></i> Prohibited Activities</h3>
                <ul class="no-list text-dark">
                    <li><i class="fas fa-times-circle"></i> **Working for a different employer** than the one named on the approved I-129 petition.</li>
                    <li><i class="fas fa-times-circle"></i> **Engaging in work that is permanent or long-term** in nature.</li>
                    <li><i class="fas fa-times-circle"></i> **Remaining in the U.S. beyond the authorized period of stay** (maximum of 3 years total).</li>
                    <li><i class="fas fa-times-circle"></i> Using the visa to seek **Permanent Residency (Green Card)**, as the H-2B is a nonimmigrant visa.</li>
                </ul>
            </div>

            <div class="col-lg-6 mb-4">
                <h3><i class="fas fa-users mr-2"></i> Family and Dependents (H-4 Visa)</h3>
                <p>Spouses and unmarried children under 21 years of age may accompany the principal H-2B worker by applying for an **H-4 nonimmigrant visa**.</p>
                <div class="alert alert-info" role="alert">
                    <i class="fas fa-info-circle mr-2"></i> **Important Note:** H-4 dependents are generally **not authorized to work** in the United States under this status.
                </div>
            </div>
        </div>
    </div>
</section>

---

<section class="cta-section py-5 bg-dark text-white" style="background-color: #212529 !important;">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-10 text-center">
                {{-- Explicitly setting text color on the heading to ensure visibility against the dark background --}}
                <h2 class="display-5 font-weight-bold mb-3" style="color: white;">
                    Don't Miss the H-2B Filing Window: **Strategic Staffing Starts Now**
                </h2>

                {{-- Explicitly setting text color on the paragraph --}}
                <p class="lead mb-5 px-lg-5" style="color: white;">
                    The statutory annual cap of **66,000 visas** is consistently met on the very first day. **Failure to plan months in advance** means losing out on essential temporary labor.
                </p>

                {{-- The button uses theme-btn-light, which is assumed to have a light color scheme --}}
                <a href="{{ route('contactus') }}" class="theme-btn-light btn-lg text-uppercase">
                    Secure Your Consultation to Start Planning
                </a>
            </div>
        </div>
    </div>
</section>



<section class="related-visas-section py-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="section-title text-center mb-5">Explore Related Work Visa Options</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mb-4">
                <div class="visa-card text-center">
                    <h4>H-2A Visa</h4>
                    <p>For temporary or seasonal **agricultural** work.</p>
                    {{-- Assuming an H-2A route exists based on the category --}}
                    <a href="{{ route('h2a-visa') }}" class="visa-link">Explore H-2A Details →</a>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="visa-card text-center">
                    <h4>H-1B Visa</h4>
                    <p>For specialized occupation workers requiring a bachelor's degree.</p>
                    <a href="{{ route('h1b-visa') }}" class="visa-link">Explore H-1B Details →</a>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
