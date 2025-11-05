@extends('layouts.app')

@section('content')

<!-- Hero Section -->
<section class="hero-section visa-category-hero">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8 mx-auto text-center">
                <h1>Student Visas for the United States</h1>
                <p class="lead">Pursue your educational dreams in the United States. We help students navigate F1, M1, and J1 visa applications for academic and vocational programs.</p>
            </div>
        </div>
    </div>
</section>

<!-- Student Visas Grid -->
<section class="visas-grid-section py-5">
    <div class="container">
        <div class="row">
            <!-- F1 Visa Card -->
            <div class="col-lg-4 mb-4">
                <div class="visa-category-card">
                    <div class="visa-card-header">
                        <h3>F1 Visa</h3>
                        <span class="visa-badge">Most Popular</span>
                    </div>
                    <div class="visa-card-body">
                        <p class="visa-subtitle">Academic Student</p>
                        <p>For full-time academic studies at accredited colleges, universities, high schools, or language training programs.</p>

                        <div class="visa-quick-facts">
                            <div class="fact-item">
                                <span class="fact-label">Duration:</span>
                                <span class="fact-value">Study duration + 60 days</span>
                            </div>
                            <div class="fact-item">
                                <span class="fact-label">Work Authorization:</span>
                                <span class="fact-value">OPT: 12 months (36 STEM)</span>
                            </div>
                        </div>

                        <ul class="visa-highlights">
                            <li>Full-time academic programs</li>
                            <li>OPT work authorization available</li>
                            <li>STEM extension (24 months)</li>
                            <li>Can transfer schools</li>
                            <li>On-campus work allowed (20hrs/week)</li>
                        </ul>

                        <a href="{{ route('f1-visa') }}" class="visa-learn-more">Learn More About F1 →</a>
                    </div>
                </div>
            </div>

            <!-- M1 Visa Card -->
            <div class="col-lg-4 mb-4">
                <div class="visa-category-card">
                    <div class="visa-card-header">
                        <h3>M1 Visa</h3>
                    </div>
                    <div class="visa-card-body">
                        <p class="visa-subtitle">Vocational Student</p>
                        <p>For students enrolled in vocational or technical training programs, including trade schools and flight schools.</p>

                        <div class="visa-quick-facts">
                            <div class="fact-item">
                                <span class="fact-label">Duration:</span>
                                <span class="fact-value">Course duration + 30 days</span>
                            </div>
                            <div class="fact-item">
                                <span class="fact-label">Work Authorization:</span>
                                <span class="fact-value">1 month per 4 months study</span>
                            </div>
                        </div>

                        <ul class="visa-highlights">
                            <li>Vocational/technical training</li>
                            <li>Trade schools, flight schools</li>
                            <li>Practical training available</li>
                            <li>Cannot transfer to F1</li>
                            <li>Limited work authorization</li>
                        </ul>

                        <a href="{{ route('m1-visa') }}" class="visa-learn-more">Learn More About M1 →</a>
                    </div>
                </div>
            </div>

            <!-- J1 Visa Card -->
            <div class="col-lg-4 mb-4">
                <div class="visa-category-card">
                    <div class="visa-card-header">
                        <h3>J1 Visa</h3>
                        <span class="visa-badge">Exchange Program</span>
                    </div>
                    <div class="visa-card-body">
                        <p class="visa-subtitle">Exchange Visitor</p>
                        <p>For educational and cultural exchange programs including students, researchers, professors, au pairs, and trainees.</p>

                        <div class="visa-quick-facts">
                            <div class="fact-item">
                                <span class="fact-label">Duration:</span>
                                <span class="fact-value">Program dependent</span>
                            </div>
                            <div class="fact-item">
                                <span class="fact-label">Work Authorization:</span>
                                <span class="fact-value">Varies by program</span>
                            </div>
                        </div>

                        <ul class="visa-highlights">
                            <li>Cultural exchange programs</li>
                            <li>Research scholars welcome</li>
                            <li>Various program categories</li>
                            <li>May have 2-year home requirement</li>
                            <li>Sponsored programs only</li>
                        </ul>

                        <a href="{{ route('j1-visa') }}" class="visa-learn-more">Learn More About J1 →</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Comparison Table -->
<section class="comparison-section py-5 bg-light">
    <div class="container">
        <h2 class="text-center mb-5">Compare Student Visas</h2>
        <div class="table-responsive">
            <table class="table visa-comparison-table">
                <thead>
                    <tr>
                        <th>Visa Type</th>
                        <th>Program Type</th>
                        <th>Duration</th>
                        <th>Work Options</th>
                        <th>Transfer Schools</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>F1</strong></td>
                        <td>Academic</td>
                        <td>Study + 60 days</td>
                        <td>OPT (12-36 months)</td>
                        <td>Yes</td>
                    </tr>
                    <tr>
                        <td><strong>M1</strong></td>
                        <td>Vocational</td>
                        <td>Study + 30 days</td>
                        <td>Limited practical training</td>
                        <td>No</td>
                    </tr>
                    <tr>
                        <td><strong>J1</strong></td>
                        <td>Exchange</td>
                        <td>Program length</td>
                        <td>Program dependent</td>
                        <td>Program dependent</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>

<!-- Transition to Work Visa Section -->
<section class="transition-section py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <h2>Planning to Work After Graduation?</h2>
                <p class="lead mb-4">Many students transition from F1 to H1B or other work visas after graduation. We can help you plan your path from student to professional.</p>
                <div class="transition-options">
                    <a href="{{ route('h1b-visa') }}" class="transition-card">
                        <h4>F1 → H1B</h4>
                        <p>Most common transition path</p>
                    </a>
                    <a href="{{ route('o1avisa') }}" class="transition-card">
                        <h4>F1 → O1A</h4>
                        <p>For exceptional students</p>
                    </a>
                    <a href="{{ route('eb2-niw') }}" class="transition-card">
                        <h4>F1 → EB2-NIW</h4>
                        <p>Direct to green card</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cta-section py-5 bg-primary text-white">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <h2>Ready to Start Your U.S. Education Journey?</h2>
                <p class="lead mb-4">Get expert guidance on student visa applications and maximize your opportunities for post-graduation work authorization.</p>
                <a href="{{ route('contactus') }}#calendar" class="theme-btn-light">Schedule Free Consultation</a>
            </div>
        </div>
    </div>
</section>

@endsection
