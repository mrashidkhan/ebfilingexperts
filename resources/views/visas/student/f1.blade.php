@extends('layouts.app')

@section('content')

<section class="hero-section visa-hero">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <div class="hero-content">
                    <h1>F-1 Visa - Academic Student</h1>
                    <p class="lead">The **F-1 visa** is the primary nonimmigrant visa for individuals wishing to pursue **full-time academic studies** at a U.S. university, college, high school, private elementary school, seminary, conservatory, or other academic institution.</p>
                    <div class="hero-cta">
                        <a href="{{ route('contactus') }}" class="theme-btn-6">Schedule Free Consultation</a>
                        <a href="#f1-overview" class="theme-btn-outline">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="hero-image">
                    <img src="{{ asset('assets/images/visa-pages/f1-hero.jpg') }}" alt="F1 Visa" />
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
                    <h3>D/S</h3>
                    <p>Duration of Status (D/S)</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="stat-box">
                    <h3>I-20</h3>
                    <p>Required Core Document</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="stat-box">
                    <h3>1 Year</h3>
                    <p>Minimum Before Work (CPT)</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="stat-box">
                    <h3>12 Months</h3>
                    <p>Standard Post-Grad OPT</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="f1-overview" class="content-section py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <h2 class="section-title">What is an F-1 Visa?</h2>
                <p>The F-1 visa allows a foreign student to live in the United States while studying full-time at an educational institution approved by the Student and Exchange Visitor Program (SEVP). Unlike many nonimmigrant visas, the F-1 is granted for the **Duration of Status (D/S)**, meaning the student can remain in the U.S. for the entire duration of their academic program plus an authorized grace period.</p>

                <div class="info-box mt-4">
                    <h4>Key F-1 Work and Training Options</h4>
                    <ul class="benefits-list">
                        <li>**On-Campus Employment:** Limited work is permitted on campus after the first academic year.</li>
                        <li>**Curricular Practical Training (CPT):** Temporary employment directly related to the student's major field of study, often integrated into the curriculum.</li>
                        <li>**Optional Practical Training (OPT):** Temporary employment for 12 months (or 36 months for STEM majors) directly related to the student's major after graduation.</li>
                        <li>**Severe Economic Hardship:** Work authorization may be available if unforeseen economic circumstances arise.</li>
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
                <h2 class="section-title text-center mb-5">F-1 Visa Eligibility Requirements</h2>

                <div class="row">
                    <div class="col-md-6 mb-4">
                        <div class="eligibility-card">
                            <div class="card-icon">
                                <i class="bi bi-book-fill"></i>
                            </div>
                            <h4>Acceptance at SEVP School</h4>
                            <p>You must be accepted by an SEVP-approved school and receive the **Form I-20, Certificate of Eligibility for Nonimmigrant Student Status**.</p>
                        </div>
                    </div>

                    <div class="col-md-6 mb-4">
                        <div class="eligibility-card">
                            <div class="card-icon">
                                <i class="bi bi-currency-dollar"></i>
                            </div>
                            <h4>Sufficient Funds</h4>
                            <p>You must demonstrate that you have sufficient funds to cover your tuition and living expenses for the entire duration of your stay.</p>
                        </div>
                    </div>

                    <div class="col-md-6 mb-4">
                        <div class="eligibility-card">
                            <div class="card-icon">
                                <i class="bi bi-house-fill"></i>
                            </div>
                            <h4>Strong Ties to Home Country</h4>
                            <p>You must have a **residence abroad** that you do not intend to abandon and must demonstrate strong ties to your home country.</p>
                        </div>
                    </div>

                    <div class="col-md-6 mb-4">
                        <div class="eligibility-card">
                            <div class="card-icon">
                                <i class="bi bi-clock-fill"></i>
                            </div>
                            <h4>Full-Time Enrollment</h4>
                            <p>You must intend to be a **full-time student** at the educational institution.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="process-section py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <h2 class="section-title text-center mb-5">F-1 Visa Application Process</h2>

                <div class="process-timeline">
                    <div class="timeline-item">
                        <div class="timeline-number">1</div>
                        <div class="timeline-content">
                            <h4>Obtain Form I-20</h4>
                            <p>Apply to and be accepted by an SEVP-approved school. The school will issue **Form I-20**.</p>
                        </div>
                    </div>

                    <div class="timeline-item">
                        <div class="timeline-number">2</div>
                        <div class="timeline-content">
                            <h4>Pay SEVIS I-901 Fee</h4>
                            <p>Pay the required SEVIS I-901 fee to activate your record in the Student and Exchange Visitor Information System (SEVIS).</p>
                        </div>
                    </div>

                    <div class="timeline-item">
                        <div class="timeline-number">3</div>
                        <div class="timeline-content">
                            <h4>File DS-160 and Pay MRV Fee</h4>
                            <p>Complete the **Form DS-160** (Online Nonimmigrant Visa Application) and pay the Machine Readable Visa (MRV) fee.</p>
                        </div>
                    </div>

                    <div class="timeline-item">
                        <div class="timeline-number">4</div>
                        <div class="timeline-content">
                            <h4>Consular Interview</h4>
                            <p>Schedule and attend a visa interview at a U.S. Embassy or Consulate. Bring all required documents, including the I-20 and proof of funds.</p>
                        </div>
                    </div>

                    <div class="timeline-item">
                        <div class="timeline-number">5</div>
                        <div class="timeline-content">
                            <h4>Enter U.S.</h4>
                            <p>You may enter the U.S. up to **30 days** before the start date listed on your I-20.</p>
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
                <h2 class="section-title text-center mb-5">Key Required Documents for F-1 Application</h2>

                <div class="documents-list">
                    <h4>Primary Documents:</h4>
                    <ul>
                        <li>Valid passport (valid for 6+ months beyond intended stay)</li>
                        <li>Nonimmigrant Visa Application, **Form DS-160** confirmation page</li>
                        <li>**Form I-20**, Certificate of Eligibility for Nonimmigrant Student Status</li>
                        <li>**SEVIS I-901 fee receipt**</li>
                        <li>One 2x2 photograph (meeting photo requirements)</li>
                    </ul>

                    <h4 class="mt-4">Supporting Documentation (Crucial for Interview):</h4>
                    <ul>
                        <li>Evidence of financial support (bank statements, sponsorship letters)</li>
                        <li>Academic documentation (transcripts, diplomas, standardized test scores)</li>
                        <li>Evidence of ties to your home country (e.g., job offer letter, property deeds, family commitments)</li>
                        <li>Receipt for MRV fee payment</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="faq-section py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <h2 class="section-title text-center mb-5">Frequently Asked Questions</h2>

                <div class="accordion" id="f1FAQ">
                    <div class="accordion-item">
                        <h3 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                                Can my spouse and children come with me on an F-1 visa?
                            </button>
                        </h3>
                        <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#f1FAQ">
                            <div class="accordion-body">
                                Yes. Your spouse and unmarried children under 21 years of age may apply for the **F-2 dependent visa** to accompany you. F-2 dependents are not allowed to work but may attend school.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                                Can I work on an F-1 visa?
                            </button>
                        </h3>
                        <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#f1FAQ">
                            <div class="accordion-body">
                                Yes, but with restrictions. You are permitted limited **on-campus employment** after your first academic year. You may be eligible for off-campus work through **CPT** or **OPT** only after obtaining authorization and meeting specific criteria. Unauthorized employment is a violation of your visa status.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                                What is the difference between F-1 and M-1 visas?
                            </button>
                        </h3>
                        <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#f1FAQ">
                            <div class="accordion-body">
                                The **F-1 visa** is for students pursuing academic studies, such as degree programs at universities. The **M-1 visa** is for students pursuing non-academic or vocational training, such as flight school or trade courses. M-1 students have tighter restrictions on extensions and are generally not eligible for OPT.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="cta-section py-5 bg-primary text-white">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <h2>Begin Your U.S. Academic Journey</h2>
                <p class="lead mb-4">Our immigration team provides expert guidance to navigate the I-20, SEVIS, and F-1 visa interview process successfully.</p>
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
                    <h4>M-1 Visa</h4>
                    <p>For vocational and non-academic students</p>
                    <a href="{{ route('m1-visa') }}" class="visa-link">Learn More →</a>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="visa-card">
                    <h4>J-1 Visa</h4>
                    <p>For exchange visitors, including scholars and interns</p>
                    <a href="{{ route('j1-visa') }}" class="visa-link">Learn More →</a>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="visa-card">
                    <h4>H-1B Visa</h4>
                    <p>Common post-graduation work visa for F-1 students</p>
                    <a href="{{ route('h1b-visa') }}" class="visa-link">Learn More →</a>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
