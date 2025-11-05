@extends('layouts.app')

@section('content')

<section class="hero-section visa-hero">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <div class="hero-content">
                    <h1>J-1 Visa - Exchange Visitor Program</h1>
                    <p class="lead">The **J-1 visa** is a nonimmigrant visa designed for individuals approved to participate in **work- and study-based exchange visitor programs** in the United States, promoting mutual understanding between the U.S. and other countries.</p>
                    <div class="hero-cta">
                        <a href="{{ route('contactus') }}" class="theme-btn-6">Schedule Free Consultation</a>
                        <a href="#j1-overview" class="theme-btn-outline">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="hero-image">
                    <img src="{{ asset('assets/images/visa-pages/j1-hero.jpg') }}" alt="J1 Visa" />

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
                    <h3>DS-2019</h3>
                    <p>Required Core Form</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="stat-box">
                    <h3>15+</h3>
                    <p>Program Categories</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="stat-box">
                    <h3>D/S to 5 Years</h3>
                    <p>Duration (Varies by Category)</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="stat-box">
                    <h3>212(e)</h3>
                    <p>Home Residency Rule (May Apply)</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="j1-overview" class="content-section py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <h2 class="section-title">What is a J-1 Visa?</h2>
                <p>The J-1 visa is managed by the **U.S. Department of State (DoS)** and covers a wide range of programs aimed at cultural and educational exchange, including students, research scholars, teachers, trainees, interns, au pairs, and camp counselors.</p>
                <p>J-1 visa holders are sponsored by private and public entities designated by the DoS, which issue the core eligibility document, **Form DS-2019, Certificate of Eligibility for Exchange Visitor Status**.</p>

                <h3 class="mt-5">Common J-1 Visa Categories</h3>
                <div class="info-box mt-4">
                    <ul class="benefits-list">
                        <li>**Student (College/University):** Full-time academic study (similar to F-1, but under exchange rules).</li>
                        <li>**Professor & Research Scholar:** Teaching, lecturing, or conducting research (Max 5 years).</li>
                        <li>**Intern/Trainee:** Receiving on-the-job training in a specialized field (Intern: Max 1 year; Trainee: Max 18 months).</li>
                        <li>**Summer Work Travel:** Post-secondary students working and traveling during summer break (Max 4 months).</li>
                        <li>**Au Pair & Camp Counselor:** Childcare providers and summer camp staff.</li>
                        <li>**Physician:** Graduate medical education or training (must be sponsored by ECFMG).</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="eligibility-section py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <h2 class="section-title text-center mb-5">Key Requirement: The Two-Year Home Residency Rule (212(e))</h2>


                <div class="row">
                    <div class="col-md-6 mb-4">
                        <div class="eligibility-card border-danger">
                            <div class="card-icon text-danger">
                                <i class="bi bi-x-octagon-fill"></i>
                            </div>
                            <h4>What is 212(e)?</h4>
                            <p>Certain J-1 visitors and their J-2 dependents must return to their country of last legal residence for a cumulative total of **two years** at the end of their program.</p>
                        </div>
                    </div>

                    <div class="col-md-6 mb-4">
                        <div class="eligibility-card border-danger">
                            <div class="card-icon text-danger">
                                <i class="bi bi-person-fill-lock"></i>
                            </div>
                            <h4>If Subject to 212(e), You Cannot:</h4>
                            <p>You are ineligible to apply for an **H-1B, L-1, K visa, or Lawful Permanent Residency (Green Card)** until the two years are fulfilled or a waiver is obtained.</p>
                        </div>
                    </div>

                    <div class="col-md-12 mb-4">
                        <h4 class="text-center mt-3">Criteria for Being Subject to 212(e):</h4>
                        <div class="eligibility-list-horizontal">
                            <span class="badge bg-secondary me-2">U.S. or Home Government Funding (Direct/Indirect)</span>
                            <span class="badge bg-secondary me-2">Involvement in a Field on the **Exchange Visitor Skills List**</span>
                            <span class="badge bg-secondary me-2">Receiving **Graduate Medical Education or Training**</span>
                        </div>
                    </div>
                </div>

                <div class="text-center mt-4">
                    <p class="small text-muted">**Note:** You must check your **DS-2019 Form (Box 7)** and your visa stamp, or request an **Advisory Opinion** from the Department of State to confirm if you are subject to this requirement.</p>
                    <a href="{{ route('contactus') }}#waiver" class="btn btn-sm btn-outline-dark mt-2">Explore 212(e) Waivers</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="process-section py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <h2 class="section-title text-center mb-5">J-1 Visa Application Process</h2>

                <div class="process-timeline">
                    <div class="timeline-item">
                        <div class="timeline-number">1</div>
                        <div class="timeline-content">
                            <h4>Program Acceptance & Sponsorship</h4>
                            <p>Apply to and be accepted by a DoS-approved sponsor organization, which will then enroll you in the SEVIS system.</p>
                        </div>
                    </div>

                    <div class="timeline-item">
                        <div class="timeline-number">2</div>
                        <div class="timeline-content">
                            <h4>Receive DS-2019 & Pay SEVIS Fee</h4>
                            <p>The sponsor issues **Form DS-2019**. You must then pay the **SEVIS I-901 fee** (the fee amount varies by category).</p>
                        </div>
                    </div>

                    <div class="timeline-item">
                        <div class="timeline-number">3</div>
                        <div class="timeline-content">
                            <h4>File DS-160 and Schedule Interview</h4>
                            <p>Complete the **Form DS-160** (Online Nonimmigrant Visa Application) and schedule your consular interview.</p>
                        </div>
                    </div>

                    <div class="timeline-item">
                        <div class="timeline-number">4</div>
                        <div class="timeline-content">
                            <h4>Consular Interview & Approval</h4>
                            <p>Attend the interview, prove English proficiency, and demonstrate ties to your home country.</p>
                        </div>
                    </div>

                    <div class="timeline-item">
                        <div class="timeline-number">5</div>
                        <div class="timeline-content">
                            <h4>Enter U.S.</h4>
                            <p>You can enter the U.S. up to **30 days** before the start date on your DS-2019.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="documents-section py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <h2 class="section-title text-center mb-5">Dependents (J-2) and Work Authorization</h2>

                <div class="row">
                    <div class="col-md-6">
                        <h4>J-2 Dependent Visa</h4>
                        <ul>
                            <li>Spouses and unmarried children (under 21) are eligible for **J-2 status**.</li>
                            <li>Each dependent receives a separate **DS-2019**.</li>
                            <li>J-2 dependents can study full-time or part-time.</li>
                            <li>**Important:** If the J-1 holder is subject to 212(e), the J-2 dependents are also subject.</li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <h4>J-2 Work Authorization</h4>
                        <ul>
                            <li>J-2 spouses **can** apply for an **Employment Authorization Document (EAD)** from USCIS.</li>
                            <li>The work cannot be for the purpose of supporting the J-1 principal alien.</li>
                            <li>J-2 children cannot apply for work authorization.</li>
                            <li>J-1 principal holders are limited to work specified in their exchange program or through **Academic Training (AT)**.</li>
                        </ul>
                    </div>
                </div>

                <h4 class="mt-4 text-center">Key Documents to Bring to Interview:</h4>
                <ul class="documents-list-inline">
                    <li>**Form DS-2019**</li>
                    <li>**DS-160** Confirmation Page</li>
                    <li>**SEVIS I-901** Fee Receipt</li>
                    <li>Proof of English Proficiency</li>
                    <li>Proof of Funds</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="cta-section py-5 bg-primary text-white">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <h2>Ensure Compliance with J-1 Regulations</h2>
                <p class="lead mb-4">The J-1 visa's complexity, especially the 212(e) rule, requires careful planning. Consult us before beginning your program or applying for a waiver.</p>
                <a href="{{ route('contactus') }}#calendar" class="theme-btn-light">Schedule Free Consultation</a>
            </div>
        </div>
    </div>
</section>

<section class="related-visas-section py-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="section-title text-center mb-5">Explore Other Work & Study Visas</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="visa-card">
                    <h4>F-1 Visa</h4>
                    <p>For full-time academic students (non-exchange)</p>
                    <a href="{{ route('f1-visa') }}" class="visa-link">Learn More →</a>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="visa-card">
                    <h4>H-1B Visa</h4>
                    <p>Specialty occupation work visa (often the goal after J-1/F-1)</p>
                    <a href="{{ route('h1b-visa') }}" class="visa-link">Learn More →</a>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="visa-card">
                    <h4>O-1A Visa</h4>
                    <p>For individuals with extraordinary ability in science, education, business, or athletics</p>
                    <a href="{{ route('o1avisa') }}" class="visa-link">Learn More →</a>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
