@extends('layouts.app')

@section('content')

<section class="hero-section visa-hero">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <div class="hero-content">
                    <h1>TN Visa - USMCA Professional</h1>
                    <p class="lead">The TN Nonimmigrant status allows qualified **Canadian and Mexican professionals** to work in the United States in a prearranged business activity under the USMCA trade agreement.</p>
                    <div class="hero-cta">
                        <a href="{{ route('contactus') }}#calendar" class="theme-btn-6">Schedule Free Consultation</a>
                        <a href="#tn-overview" class="theme-btn-outline">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="hero-image">
                    {{-- Replace with your TN Visa specific image --}}
                    <img src="{{ asset('assets/images/visa-pages/tn-hero.jpg') }}" alt="TN Visa" />
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
                    <h3>3 Years</h3>
                    <p>Initial Maximum Duration</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="stat-box">
                    <h3>Indefinite</h3>
                    <p>Potential for Renewal</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="stat-box">
                    <h3>Canada & Mexico</h3>
                    <p>Eligible Citizens Only</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="stat-box">
                    <h3>No Work</h3>
                    <p>Dependent Spousal Work</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="tn-overview" class="visa-details-section py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="section-title">TN Visa Overview</h2>
                <p>The TN classification stems from the North American Free Trade Agreement (NAFTA), which has been updated and replaced by the **United States-Mexico-Canada Agreement (USMCA)**. This status provides a simplified pathway for Canadian and Mexican citizens to work in the U.S. in a professional capacity. It is a highly sought-after nonimmigrant status for professionals in over 60 designated occupations.</p>

                <h3 class="mt-4">Key Features and Benefits</h3>
                <ul class="check-list">
                    <li><strong>No Annual Cap:</strong> Unlike the H-1B visa, the TN visa is not subject to a numerical lottery.</li>
                    <li><strong>Fast Processing:</strong> Canadian citizens can often apply directly at a U.S. Port of Entry (border crossing or airport) and receive an instant decision.</li>
                    <li><strong>Unlimited Extensions:</strong> TN status can be renewed indefinitely in **3-year increments**, provided the applicant continues to meet the eligibility requirements.</li>
                </ul>

                <h3 class="mt-4">Important Limitation: Nonimmigrant Intent</h3>
                <p>The TN visa is a **nonimmigrant visa**, meaning you must prove that you do not intend to stay in the U.S. permanently. Any attempt to pursue U.S. permanent residency (a Green Card) through certain applications (like filing for Adjustment of Status, Form I-485) may be a basis for denial of a TN application or extension.</p>
            </div>
        </div>
    </div>
</section>

<section class="visa-requirements-section py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="section-title text-center mb-5">TN Visa Eligibility Requirements</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mb-4">
                <div class="icon-box">
                    <i class="fas fa-globe-americas"></i>
                    <h4>Citizenship</h4>
                    <p>You must be a citizen of **Canada** or **Mexico**. Permanent residents of either country are not eligible.</p>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="icon-box">
                    <i class="fas fa-briefcase"></i>
                    <h4>Prearranged Employment</h4>
                    <p>You must have a full-time or part-time job offer from a U.S. employer to perform services at a professional level.</p>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="icon-box">
                    <i class="fas fa-list-alt"></i>
                    <h4>Qualifying Profession</h4>
                    <p>Your job must fall within one of the **60+ designated professions** listed in the USMCA, such as:</p>
                    <ul class="list-unstyled ml-3">
                        <li>• Accountant</li>
                        <li>• Engineer</li>
                        <li>• Computer Systems Analyst</li>
                        <li>• Management Consultant</li>
                        <li>• Teacher (College/University)</li>
                        <li>• Registered Nurse</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="icon-box">
                    <i class="fas fa-graduation-cap"></i>
                    <h4>Education/Credentials</h4>
                    <p>You must possess the qualifications for your profession, typically a **Baccalaureate or Licenciatura Degree**, or a professional license where specified.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="visa-process-section py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="section-title">Application and Extension Process</h2>
                <div class="timeline">
                    <div class="timeline-item">
                        <h4>Application for Canadian Citizens</h4>
                        <p>Canadians can apply for TN status directly at a U.S. port of entry (land border or airport pre-flight inspection) with the required documentation (employment letter, proof of credentials, etc.). An immediate decision is usually given.</p>
                    </div>
                    <div class="timeline-item">
                        <h4>Application for Mexican Citizens</h4>
                        <p>Mexicans must first apply for a TN visa stamp at a U.S. embassy or consulate in Mexico before being able to travel and seek admission to the U.S.</p>
                    </div>
                    <div class="timeline-item">
                        <h4>Extension of Status</h4>
                        <p>TN status can be extended for up to three years at a time. This can be done by a Canadian citizen applying at a Port of Entry, or by the U.S. employer filing a **Form I-129 Petition** with USCIS on behalf of the employee.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="dependent-visa-section py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="section-title text-center mb-4">Dependents (TD Status)</h2>
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <p>The spouse and unmarried children under 21 of a principal TN worker are eligible for **Trade Dependent (TD) status**.</p>
                        <ul class="check-list">
                            <li><strong>Permitted Activities:</strong> TD dependents are **permitted to study** in the U.S.</li>
                            <li><strong>Work Restriction:</strong> TD status **does NOT permit employment** in the United States. Dependents must qualify for a separate, independent work-authorized visa (like H-1B or O-1) to work.</li>
                        </ul>
                    </div>
                    <div class="col-md-6 text-center">

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="cta-section py-5 bg-dark text-white text-center">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>Ready to Start Your TN Visa Application?</h2>
                <p class="lead mb-4">Our experts can help determine your eligibility and guide you through the fast-track application process.</p>
                <a href="{{ route('contactus') }}#calendar" class="theme-btn-light">Schedule Free Consultation</a>
            </div>
        </div>
    </div>
</section>

<section class="related-visas-section py-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="section-title text-center mb-5">Explore Other Work Visa Options</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="visa-card">
                    <h4>H1B Visa</h4>
                    <p>For specialty occupation workers with a bachelor's degree</p>
                    <a href="{{ route('h1b-visa') }}" class="visa-link">Learn More →</a>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="visa-card">
                    <h4>L1 Visa</h4>
                    <p>For intracompany transfers (executives, managers, specialized knowledge)</p>
                    <a href="{{ route('l1-visa') }}" class="visa-link">Learn More →</a>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="visa-card">
                    <h4>O1A Visa</h4>
                    <p>For individuals with extraordinary ability in their field</p>
                    <a href="{{ route('o1avisa') }}" class="visa-link">Learn More →</a>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
