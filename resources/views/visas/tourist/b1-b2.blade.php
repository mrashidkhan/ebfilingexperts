@extends('layouts.app')

@section('content')

<section class="hero-section visa-hero">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <div class="hero-content">
                    <h1>B-1/B-2 Visa - Combined Visitor Visa for Business & Pleasure</h1>
                    <p class="lead">The **B-1/B-2 visa** is the most common U.S. non-immigrant visa, allowing foreign nationals to travel temporarily to the United States for either business (B-1) or tourism/pleasure (B-2).</p>
                    <div class="hero-cta">
                        <a href="{{ route('contactus') }}#calendar" class="theme-btn-6">Schedule Visa Consultation</a>
                        <a href="#activities" class="theme-btn-outline">View Allowed Activities</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="hero-image">
                    <img src="{{ asset('assets/images/visa-pages/b1-b2-hero.jpg') }}" alt="B1 B-2 Visa" />

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
                    <h3>B-1</h3>
                    <p>Temporary Business</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="stat-box">
                    <h3>B-2</h3>
                    <p>Tourism & Pleasure</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="stat-box">
                    <h3>6 Months</h3>
                    <p>Maximum Stay per Entry</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="stat-box">
                    <h3>DS-160</h3>
                    <p>Mandatory Application Form</p>
                </div>
            </div>
        </div>
    </div>
</section>

---

<section id="activities" class="content-section py-5 bg-light">
    <div class="container">
        <h2 class="section-title text-center mb-5">Permitted Activities Under B-1 and B-2 Status</h2>
        <div class="row">
            <div class="col-lg-6 mb-5">
                <h3 class="mb-3"><i class="fas fa-briefcase mr-2"></i> B-1 Business Activities</h3>
                <p>Activities must be primarily for the benefit of an employer outside the U.S. and generally exclude productive labor or receiving salary from a U.S. source (except permitted honoraria).</p>
                <ul class="list-group list-group-flush activity-list">
                    <li class="list-group-item">Consult with business associates.</li>
                    <li class="list-group-item">Attend a scientific, educational, professional, or business convention/conference.</li>
                    <li class="list-group-item">Negotiate contracts.</li>
                    <li class="list-group-item">Engage in independent research.</li>
                    <li class="list-group-item">Settle an estate.</li>
                </ul>
            </div>

            <div class="col-lg-6 mb-5">
                <h3 class="mb-3"><i class="fas fa-map-marked-alt mr-2"></i> B-2 Pleasure/Tourism Activities</h3>
                <p>Activities of a recreational character, including tourism, amusement, and visits.</p>
                <ul class="list-group list-group-flush activity-list">
                    <li class="list-group-item">Tourism, sightseeing, and vacationing.</li>
                    <li class="list-group-item">Visiting friends and family.</li>
                    <li class="list-group-item">Seeking medical treatment (must provide proof of arrangements).</li>
                    <li class="list-group-item">Participation in social events, such as conventions or conferences.</li>
                    <li class="list-group-item">Enrollment in a short recreational course of study (e.g., cooking class, dance class) that does not grant credit.</li>
                </ul>
            </div>
        </div>
    </div>
</section>

---

<section id="requirements" class="requirements-section py-5">
    <div class="container">
        <h2 class="section-title text-center mb-5">Core Requirements: Overcoming the 214(b) Presumption</h2>
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <div class="alert alert-warning" role="alert">
                    <h4 class="alert-heading">Critical Point: Intent to Return</h4>
                    U.S. law (INA Section 214(b)) presumes all B-1/B-2 applicants are intending immigrants. You must provide compelling evidence to overcome this and prove your visit is temporary.
                </div>

                <div class="row mt-4">
                    <div class="col-md-6 mb-4">
                        <h4>1. Proof of Strong Ties to Home Country</h4>
                        <ul class="check-list">
                            <li><i class="fas fa-home"></i> **Residence:** Proof of a permanent residence outside the U.S. that you have no intention of abandoning.</li>
                            <li><i class="fas fa-users"></i> **Family Ties:** Evidence of immediate family members (spouse, children) remaining in your home country.</li>
                            <li><i class="fas fa-handshake"></i> **Employment/Financial Ties:** Letter from your employer, proof of business ownership, or substantial financial assets that require your return.</li>
                        </ul>
                    </div>
                    <div class="col-md-6 mb-4">
                        <h4>2. Required Documentation</h4>
                        <ul class="check-list">
                            <li><i class="fas fa-passport"></i> Valid Passport (must be valid six months beyond your intended stay).</li>
                            <li><i class="fas fa-file-invoice"></i> Printed DS-160 confirmation page and Fee Payment Receipt.</li>
                            <li><i class="fas fa-money-bill-wave"></i> Financial Proof (bank statements, tax returns) showing ability to cover U.S. expenses.</li>
                            <li><i class="fas fa-ticket-alt"></i> Travel Itinerary and round-trip/onward ticket.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

---

<section class="prohibited-section py-5 bg-danger-subtle">
    <div class="container">
        <h2 class="section-title text-center mb-5 text-danger">Activities Strictly Prohibited on a B-1/B-2 Visa</h2>
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <ul class="no-list">
                    <li><i class="fas fa-times-circle"></i> **Employment:** You cannot accept paid employment or work for a U.S. employer.</li>
                    <li><i class="fas fa-times-circle"></i> **Full-Time Study:** You cannot enroll in a full-time, credit-earning academic program.</li>
                    <li><i class="fas fa-times-circle"></i> **Crew Member Work:** You cannot enter to work as a crew member on a ship or aircraft.</li>
                    <li><i class="fas fa-times-circle"></i> **Permanent Residence:** You cannot use this visa to seek permanent residency in the U.S.</li>
                </ul>
            </div>
        </div>
    </div>
</section>

---

<section class="related-visas-section py-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="section-title text-center mb-5">Related Visitor Categories</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mb-4">
                <div class="visa-card text-center">
                    <h4>B-1 Visa (Business Only)</h4>
                    <p>Details and specific requirements for temporary business visitors.</p>
                    <a href="{{ route('b1-visa') }}" class="visa-link">Explore B-1 Details →</a>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="visa-card text-center">
                    <h4>B-2 Visa (Tourism Only)</h4>
                    <p>Details and specific requirements for tourists and visitors for pleasure.</p>
                    <a href="{{ route('b2-visa') }}" class="visa-link">Explore B-2 Details →</a>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
