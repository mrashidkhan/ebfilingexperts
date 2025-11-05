@extends('layouts.app')

@section('content')

<section class="hero-section visa-hero">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <div class="hero-content">
                    <h1>M-1 Visa - Vocational and Technical Students</h1>
                    <p class="lead">Expert guidance for **M-1 visa** applications. This visa is for full-time enrollment in non-academic or vocational programs, such as flight training, culinary arts, technical certifications, and other skill-based studies in the United States.</p>
                    <div class="hero-cta">
                        <a href="{{ route('contactus') }}" class="theme-btn-6">Schedule Free Consultation</a>
                        <a href="#m1-requirements" class="theme-btn-outline">View Requirements</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="hero-image">
                    {{-- Placeholder image for M-1/Student Visa --}}
                    <img src="{{ asset('assets/images/visa-pages/m1-hero.jpg') }}" alt="M-1 Visa" />
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
                    <h3>Vocational</h3>
                    <p>Study Type</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="stat-box">
                    <h3>Max 3 Years</h3>
                    <p>Total Duration (with extensions)</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="stat-box">
                    <h3>I-20 M-N</h3>
                    <p>Required Form</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="stat-box">
                    <h3>Max 6 Months</h3>
                    <p>Post-Completion Work (PT)</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="m1-requirements" class="visa-details-section py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <h2 class="section-title mb-4">M-1 Visa Key Requirements</h2>
                <p>The **M-1 (Vocational Student)** visa is for individuals pursuing a full-time course of study at a **SEVP-approved** vocational or non-academic institution. Unlike the F-1 visa, the M-1 has stricter rules regarding duration, work, and transferring schools.</p>

                <h3 class="mt-4">Eligibility Criteria:</h3>
                <ul class="check-list">
                    <li>**Full Course of Study:** You must maintain a full course of study (typically 18+ hours/week of classroom instruction or 22+ hours/week of lab/shop instruction).</li>
                    <li>**SEVP-Approved School:** You must be accepted by a U.S. school approved to enroll international students, which will issue a Form **I-20 M-N**.</li>
                    <li>**Financial Solvency:** You must demonstrate that you have sufficient funds immediately available to pay all tuition and living expenses for the entire period of your stay.</li>
                    <li>**Non-Immigrant Intent:** You must prove you have strong ties to your home country and intend to depart the U.S. upon completion of your studies.</li>
                </ul>

                <h3 class="mt-5">Practical Training (Work Authorization)</h3>
                <p>Work opportunities for M-1 students are highly restricted. **You may not work during your course of study.**</p>
                <p>You may be authorized for **Practical Training (PT)** only **after** you have completed your program. The authorization is limited to **one month of PT for every four months** of full-time study, with a maximum aggregate of **six months**.</p>
                <p class="note">**Important:** Any work must be directly related to your course of study and requires prior authorization from **USCIS** via **Form I-765** (Application for Employment Authorization).</p>

                <h3 class="mt-5">M-1 vs. F-1 Visa (Academic)</h3>
                <p>The M-1 visa is distinctly different from the **F-1 visa (Academic Student)**:</p>
                <ul class="diff-list">
                    <li>**Study Type:** M-1 is for **vocational/non-academic** studies; F-1 is for **academic** studies (university, college, language training).</li>
                    <li>**Work:** M-1 students **cannot** work during their studies; F-1 students have more flexibility with CPT and OPT.</li>
                    <li>**Duration:** M-1 status is limited to a maximum of **three years** total; F-1 status is granted for the duration of the student’s academic program.</li>
                </ul>

            </div>
            <div class="col-lg-4">
                <div class="sticky-sidebar">
                    <div class="sidebar-box mb-4">
                        <h4>M-1 Application Checklist</h4>
                        <ul class="document-list">
                            <li>Valid Passport</li>
                            <li>Form I-20 M-N (signed)</li>
                            <li>DS-160 Confirmation Page</li>
                            <li>SEVIS I-901 Fee Receipt</li>
                            <li>Proof of Financial Support</li>
                            <li>Evidence of Home Country Ties</li>
                            <li>Academic Transcripts/Diplomas</li>
                        </ul>
                    </div>
                    <div class="sidebar-box cta-box text-center">
                        <h5>Ready to Apply?</h5>
                        <p>Start your vocational journey in the U.S. today.</p>
                        <a href="{{ route('contactus') }}#calendar" class="theme-btn-light">Schedule Free Consultation</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="related-visas-section py-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="section-title text-center mb-5">Explore Other Student & Work Visas</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="visa-card">
                    <h4>F-1 Visa</h4>
                    <p>For academic and language students</p>
                    <a href="{{ route('f1-visa') ?? '#' }}" class="visa-link">Learn More →</a>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="visa-card">
                    <h4>J-1 Visa</h4>
                    <p>For exchange visitors, including certain students and trainees</p>
                    <a href="{{ route('j1-visa') ?? '#' }}" class="visa-link">Learn More →</a>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="visa-card">
                    <h4>H1B Visa</h4>
                    <p>For specialty occupation workers in various fields</p>
                    <a href="{{ route('h1b-visa') }}" class="visa-link">Learn More →</a>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
