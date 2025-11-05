@extends('layouts.app')

@section('content')

<section class="hero-section visa-hero">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <div class="hero-content">
                    <h1>U Visa - Victims of Criminal Activity</h1>
                    <p class="lead">Temporary immigration status for victims of certain crimes who have suffered **substantial physical or mental abuse** and are **helpful to U.S. law enforcement** in the investigation or prosecution of the criminal activity. This humanitarian visa provides a direct path to lawful permanent residency.</p>
                    <div class="hero-cta">
                        <a href="{{ route('contactus') }}" class="theme-btn-6">Schedule Free Consultation</a>
                        <a href="#u-visa-overview" class="theme-btn-outline">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="hero-image">
                    {{-- Placeholder image for U Visa --}}
                    <img src="{{ asset('assets/images/visa-pages/u-visa-hero.jpg') }}" alt="U Visa" />
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
                    <h3>4 Years</h3>
                    <p>Initial Maximum Duration</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="stat-box">
                    <h3>10,000</h3>
                    <p>Annual Principal Cap</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="stat-box">
                    <h3>3 Years</h3>
                    <p>Time to Apply for Green Card</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="stat-box">
                    <h3>I-918</h3>
                    <p>Main Petition Form</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="u-visa-overview" class="content-section py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <h2 class="section-title">What is the U Visa?</h2>
                <p>The U nonimmigrant status (U visa) was established to encourage non-citizen victims of serious crimes to report crimes and cooperate with law enforcement, ultimately strengthening the ability to investigate and prosecute criminal activity.</p>
                <p>It provides victims and their qualifying family members with **lawful status** and **work authorization**. The visa is granted for up to four years, after which the holder may become eligible to apply for **Lawful Permanent Resident** status (a Green Card).</p>

                <div class="info-box mt-4">
                    <h4>Qualifying Crimes Include:</h4>
                    <ul class="benefits-list">
                        <li>Domestic Violence, Sexual Assault, Abusive Sexual Contact, Prostitution</li>
                        <li>Kidnapping, Abduction, False Imprisonment, Unlawful Criminal Restraint</li>
                        <li>Trafficking (including Sexual Exploitation and Slave Trade)</li>
                        <li>Murder, Manslaughter, Felonious Assault, Torture</li>
                        <li>Blackmail, Extortion, Witness Tampering, Obstruction of Justice</li>
                    </ul>
                    <p class="small text-muted mt-3">*The list is non-exhaustive and includes any similar activity where the elements of the crime are substantially similar to one of the crimes listed.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="eligibility-section py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <h2 class="section-title text-center mb-5">U Visa Eligibility Requirements</h2>

                <div class="row">
                    <div class="col-md-6 mb-4">
                        <div class="eligibility-card">
                            <div class="card-icon">
                                <i class="bi bi-person-badge-fill"></i>
                            </div>
                            <h4>Victim of a Qualifying Crime</h4>
                            <p>You must be the victim of one of the criminal activities listed in the statute.</p>
                        </div>
                    </div>

                    <div class="col-md-6 mb-4">
                        <div class="eligibility-card">
                            <div class="card-icon">
                                <i class="bi bi-shield-fill"></i>
                            </div>
                            <h4>Substantial Harm</h4>
                            <p>You must have suffered **substantial physical or mental abuse** as a direct result of the criminal activity.</p>
                        </div>
                    </div>

                    <div class="col-md-6 mb-4">
                        <div class="eligibility-card">
                            <div class="card-icon">
                                <i class="bi bi-hand-thumbs-up-fill"></i>
                            </div>
                            <h4>Cooperation with Authorities</h4>
                            <p>You must possess information about the crime and be, or be likely to be, **helpful** in the investigation or prosecution.</p>
                        </div>
                    </div>

                    <div class="col-md-6 mb-4">
                        <div class="eligibility-card">
                            <div class="card-icon">
                                <i class="bi bi-geo-alt-fill"></i>
                            </div>
                            <h4>Crime Location</h4>
                            <p>The criminal activity must have occurred in the United States or violated U.S. laws.</p>
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
                <h2 class="section-title text-center mb-5">U Visa Application Process (Form I-918)</h2>

                <div class="process-timeline">
                    <div class="timeline-item">
                        <div class="timeline-number">1</div>
                        <div class="timeline-content">
                            <h4>Obtain Law Enforcement Certification</h4>
                            <p>Secure a signed **Form I-918, Supplement B** from an authorized official (e.g., police, prosecutor) certifying your helpfulness.</p>
                        </div>
                    </div>

                    <div class="timeline-item">
                        <div class="timeline-number">2</div>
                        <div class="timeline-content">
                            <h4>File Petition with USCIS</h4>
                            <p>Submit **Form I-918** (the main petition), the signed Supplement B, a personal statement, and all supporting evidence to USCIS.</p>
                        </div>
                    </div>

                    <div class="timeline-item">
                        <div class="timeline-number">3</div>
                        <div class="timeline-content">
                            <h4>Bona Fide Determination (BFD)</h4>
                            <p>USCIS may make an initial review and grant a BFD, providing deferred action and **work authorization** while the case is on the waiting list.</p>
                        </div>
                    </div>

                    <div class="timeline-item">
                        <div class="timeline-number">4</div>
                        <div class="timeline-content">
                            <h4>Final Visa Approval</h4>
                            <p>Once a visa number becomes available (due to the annual cap), USCIS grants the U nonimmigrant status (U-1 visa).</p>
                        </div>
                    </div>

                    <div class="timeline-item">
                        <div class="timeline-number">5</div>
                        <div class="timeline-content">
                            <h4>Apply for Green Card</h4>
                            <p>After maintaining continuous physical presence in U status for at least **three years**, you can apply for lawful permanent residence via Form I-485.</p>
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
                <h2 class="section-title text-center mb-5">Key Required Documentation</h2>

                <div class="documents-list">
                    <h4>For the Principal Victim (Petitioner):</h4>
                    <ul>
                        <li>**Form I-918**, Petition for U Nonimmigrant Status</li>
                        <li>**Form I-918, Supplement B**, U Nonimmigrant Status Certification (signed by a certifying official)</li>
                        <li>A **Personal Statement** describing the criminal activity and the substantial abuse suffered</li>
                        <li>Evidence of the crime (e.g., police reports, court records, medical records)</li>
                        <li>If inadmissible, **Form I-192**, Application for Advance Permission to Enter as a Nonimmigrant (Waiver)</li>
                    </ul>

                    <h4 class="mt-4">For Qualifying Family Members:</h4>
                    <ul>
                        <li>**Form I-918, Supplement A**, Petition for Qualifying Family Member of U-1 Recipient</li>
                        <li>Evidence of the relationship to the principal victim (e.g., marriage certificate, birth certificate)</li>
                        <li>Qualifying family members include spouse and children (under 21), and for principal victims under 21, parents and unmarried siblings under 18</li>
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

                <div class="accordion" id="uVisaFAQ">
                    <div class="accordion-item">
                        <h3 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                                Does the perpetrator need to be convicted for me to get a U visa?
                            </button>
                        </h3>
                        <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#uVisaFAQ">
                            <div class="accordion-body">
                                No. A conviction, prosecution, or even an arrest is **not** required for a victim to be eligible for U nonimmigrant status. You only need to prove you were, are, or are likely to be helpful in the detection, investigation, or prosecution of the crime.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                                How long is the waiting time for a U visa?
                            </button>
                        </h3>
                        <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#uVisaFAQ">
                            <div class="accordion-body">
                                Processing times are long due to the annual cap of 10,000 principal visas per fiscal year. Currently, the total process from filing to final U visa approval can take several years, but eligible applicants may receive a **Bona Fide Determination** which grants a work permit and deferred action while waiting.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                                Can my family members get a U visa too?
                            </button>
                        </h3>
                        <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#uVisaFAQ">
                            <div class="accordion-body">
                                Yes. Qualifying family members may receive derivative U status. If you are under 21, you can petition for your spouse, children, parents, and unmarried siblings under 18. If you are over 21, you can petition for your spouse and children. They apply using Form I-918, Supplement A.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4">
                                What is the path from a U visa to a Green Card?
                            </button>
                        </h3>
                        <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#uVisaFAQ">
                            <div class="accordion-body">
                                After holding U status for a continuous period of at least **three years** and not unreasonably refusing to provide assistance to law enforcement, you may apply for Lawful Permanent Resident status (Green Card) by filing Form I-485.
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
                <h2>Protect Your Rights with a U Visa Petition</h2>
                <p class="lead mb-4">The process requires careful documentation of the crime and certification from law enforcement. Let our experts manage your humanitarian petition.</p>
                <a href="{{ route('contactus') }}#calendar" class="theme-btn-light">Schedule Free Consultation</a>
            </div>
        </div>
    </div>
</section>

<section class="related-visas-section py-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="section-title text-center mb-5">Explore Other Special/Humanitarian Visa Options</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="visa-card">
                    <h4>VAWA Self-Petition</h4>
                    <p>For abused spouses, children, or parents of U.S. citizens or LPRs. (Uses existing route for template consistency)</p>
                    <a href="{{ route('h1b-visa') }}" class="visa-link">Learn More →</a>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="visa-card">
                    <h4>T Visa</h4>
                    <p>For victims of severe forms of human trafficking. (Uses existing route for template consistency)</p>
                    <a href="{{ route('o1avisa') }}" class="visa-link">Learn More →</a>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="visa-card">
                    <h4>Asylum</h4>
                    <p>Protection for individuals who fear persecution in their home country. (Uses existing route for template consistency)</p>
                    <a href="{{ route('eb1a-visa') }}" class="visa-link">Learn More →</a>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
