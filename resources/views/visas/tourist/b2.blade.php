@extends('layouts.app')

@section('content')

<section class="hero-section visa-hero">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <div class="hero-content">
                    <h1>B-2 Visa - Temporary Visitor for Pleasure (Tourism)</h1>
                    <p class="lead">The **B-2 visa** is a non-immigrant visa for foreign nationals entering the U.S. temporarily for tourism, visiting family/friends, or seeking medical treatment. This is the primary visa for vacation and leisure travel.</p>
                    <div class="hero-cta">
                        <a href="{{ route('contactus') }}#calendar" class="theme-btn-6">Schedule Visa Consultation</a>
                        <a href="#b2-requirements" class="theme-btn-outline">View Requirements</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="hero-image">
                    {{-- Placeholder for a relevant image --}}

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
                    <h3>6 Months</h3>
                    <p>Maximum Stay per Entry (I-94)</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="stat-box">
                    <h3>214(b)</h3>
                    <p>Statutory Burden of Proof</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="stat-box">
                    <h3>DS-160</h3>
                    <p>Primary Application Form</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="stat-box">
                    <h3>No Work</h3>
                    <p>Employment Strictly Prohibited</p>
                </div>
            </div>
        </div>
    </div>
</section>

---

<section id="b2-activities" class="content-section py-5 bg-light">
    <div class="container">
        <h2 class="section-title text-center mb-5">Permissible Activities on a B-2 Visa</h2>
        <div class="row">
            <div class="col-lg-4 mb-4">
                <div class="icon-box">
                    <i class="fas fa-plane-departure"></i>
                    <h4>Tourism and Vacation</h4>
                    <p>General sightseeing, holidays, and recreational travel.</p>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="icon-box">
                    <i class="fas fa-user-friends"></i>
                    <h4>Visiting Friends and Family</h4>
                    <p>Social visits with relatives and friends who reside in the U.S.</p>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="icon-box">
                    <i class="fas fa-hospital"></i>
                    <h4>Medical Treatment</h4>
                    <p>Seeking specialized medical care (requires documentation from U.S. physician/facility).</p>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="icon-box">
                    <i class="fas fa-star"></i>
                    <h4>Social Events</h4>
                    <p>Attending cultural, social, or sporting events/contests as an **amateur** (not paid).</p>
                </div>
            </div>
            <div class="col-lg-8 mb-4">
                <div class="icon-box">
                    <i class="fas fa-book-open"></i>
                    <h4>Short-Term, Incidental Study</h4>
                    <p>Enrolling in a short recreational course of study, such as a brief cooking class or a 2-day workshop, where **no academic credit** is received.</p>
                </div>
            </div>
        </div>
    </div>
</section>

---

<section id="b2-requirements" class="requirements-section py-5">
    <div class="container">
        <h2 class="section-title text-center mb-5">Key B-2 Visa Requirements (Intent to Return)</h2>
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <div class="alert alert-danger" role="alert">
                    **The Burden of Proof (INA Section 214(b))**: All B-2 applicants are presumed to be intending immigrants. You must overcome this presumption by proving strong ties to your home country.
                </div>

                <div class="row mt-4">
                    <div class="col-md-6 mb-4">
                        <h4>1. Intent and Duration</h4>
                        <ul class="check-list">
                            <li>The purpose of your trip must be **temporary** (pleasure/leisure).</li>
                            <li>You plan to remain for a **specific, limited period** of time.</li>
                            <li>You have a **permanent residence** outside the U.S. that you do not intend to abandon.</li>
                        </ul>
                    </div>
                    <div class="col-md-6 mb-4">
                        <h4>2. Financial and Departure Ties</h4>
                        <ul class="check-list">
                            <li>You have **sufficient funds** to cover all your expenses during your stay.</li>
                            <li>You must present proof of **binding social and economic ties** to your home country (job, family, property, etc.).</li>
                            <li>You must have an **onward/return ticket** that demonstrates your intent to depart.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

---

<section class="application-process-section py-5 bg-light">
    <div class="container">
        <h2 class="section-title text-center mb-5">B-2 Visa Application Steps</h2>
        <div class="process-timeline">
            <div class="timeline-item">
                <div class="timeline-number">1</div>
                <div class="timeline-content">
                    <h4>Complete Form DS-160</h4>
                    <p>Fill out the Online Nonimmigrant Visa Application, **Form DS-160**, and print the confirmation page.</p>
                </div>
            </div>

            <div class="timeline-item">
                <div class="timeline-number">2</div>
                <div class="timeline-content">
                    <h4>Pay Fee & Schedule Interview</h4>
                    <p>Pay the non-refundable MRV application fee and schedule your required interview appointment at a U.S. Embassy or Consulate.</p>
                </div>
            </div>

            <div class="timeline-item">
                <div class="timeline-number">3</div>
                <div class="timeline-content">
                    <h4>Gather Supporting Documents</h4>
                    <p>Collect documents proving your **financial means** and strong **home country ties** (bank statements, job letters, property deeds, etc.). </p>
                </div>
            </div>

            <div class="timeline-item">
                <div class="timeline-number">4</div>
                <div class="timeline-content">
                    <h4>Attend the Interview</h4>
                    <p>Answer the Consular Officer's questions honestly and clearly, focusing on your temporary intent and strong foreign ties.</p>
                </div>
            </div>
        </div>
    </div>
</section>

---

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
                    <h4>B-1 Visa</h4>
                    <p>For temporary business activities, consulting, and negotiation.</p>
                    <a href="{{ route('b1-visa') }}" class="visa-link">B-1 Visa Details →</a>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="visa-card text-center">
                    <h4>B-1/B-2 Visa</h4>
                    <p>The common combined visa for both business and tourism purposes.</p>
                    <a href="{{ route('b1-b2-visa') }}" class="visa-link">B-1/B-2 Visa Details →</a>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
