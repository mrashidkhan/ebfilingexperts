@extends('layouts.app')

@section('content')

<section class="hero-section visa-category-hero">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <h1>Family-Based Visas</h1>
                <p class="lead">Reunite with your loved ones in the United States. Explore family-based immigration options including spouse, fiancé, and parent visas.</p>
            </div>
        </div>
    </div>
</section>

<section class="visas-grid-section py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mb-4">
                <div class="visa-category-card">
                    <div class="visa-card-header">
                        <h3>K1 Visa</h3>
                        <span class="visa-badge">Fiancé</span>
                    </div>
                    <div class="visa-card-body">
                        <p class="visa-subtitle">Fiancé(e) of U.S. Citizen</p>
                        <p>Enter the U.S. to marry your U.S. citizen fiancé within 90 days.</p>
                        <ul class="visa-highlights">
                            <li>90-day validity after entry</li>
                            <li>Must marry within 90 days</li>
                            <li>Adjust status after marriage</li>
                            <li>Faster than spouse visa</li>
                        </ul>
                        <a href="{{ route('k1-visa') }}" class="visa-learn-more">Learn More →</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 mb-4">
                <div class="visa-category-card">
                    <div class="visa-card-header">
                        <h3>CR1/IR1 Visa</h3>
                        <span class="visa-badge">Green Card</span>
                    </div>
                    <div class="visa-card-body">
                        <p class="visa-subtitle">Spouse of U.S. Citizen</p>
                        <p>Permanent residence for spouses of U.S. citizens. Get green card upon entry.</p>
                        <ul class="visa-highlights">
                            <li>Immediate green card</li>
                            <li>CR1: married < 2 years</li>
                            <li>IR1: married 2+ years</li>
                            <li>No adjustment needed</li>
                        </ul>
                        <a href="{{ route('cr1-ir1-visa') }}" class="visa-learn-more">Learn More →</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 mb-4">
                <div class="visa-category-card">
                    <div class="visa-card-header">
                        <h3>K3 Visa</h3>
                    </div>
                    <div class="visa-card-body">
                        <p class="visa-subtitle">Spouse Waiting for Immigrant Visa</p>
                        <p>Join your U.S. citizen spouse while waiting for immigrant visa processing.</p>
                        <ul class="visa-highlights">
                            <li>Temporary visa</li>
                            <li>2-year validity</li>
                            <li>Can work with EAD</li>
                            <li>Less common now</li>
                        </ul>
                        <a href="{{ route('k3-visa') }}" class="visa-learn-more">Learn More →</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 mb-4">
                <div class="visa-category-card">
                    <div class="visa-card-header">
                        <h3>IR5 Visa</h3>
                        <span class="visa-badge">Parents</span>
                    </div>
                    <div class="visa-card-body">
                        <p class="visa-subtitle">Parent of U.S. Citizen</p>
                        <p>Permanent residence for parents of adult U.S. citizens (21+).</p>
                        <ul class="visa-highlights">
                            <li>Immediate relative category</li>
                            <li>No quota or waiting</li>
                            <li>Direct green card</li>
                            <li>Must be 21+ to sponsor</li>
                        </ul>
                        <a href="{{ route('ir5-visa') }}" class="visa-learn-more">Learn More →</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="cta-section py-5 bg-primary text-white">
    <div class="container text-center">
        <h2>Bring Your Family to the United States</h2>
        <p class="lead mb-4">Let us help you reunite with your loved ones through family-based immigration.</p>
        <a href="{{ route('contactus') }}#calendar" class="theme-btn-light">Schedule Consultation</a>
    </div>
</section>

@endsection


===========================================
FILE: views/tourist/index.blade.php
===========================================
@extends('layouts.app')

@section('content')

<section class="hero-section visa-category-hero">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <h1>Tourist & Visitor Visas</h1>
                <p class="lead">Planning to visit the United States for business or pleasure? We help you navigate the B1/B2 visa application process.</p>
            </div>
        </div>
    </div>
</section>

<section class="visas-grid-section py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 mb-4">
                <div class="visa-category-card">
                    <div class="visa-card-header">
                        <h3>B1/B2 Visa</h3>
                        <span class="visa-badge">Most Common</span>
                    </div>
                    <div class="visa-card-body">
                        <p class="visa-subtitle">Business & Tourist Combined</p>
                        <p>Combination visa for both business and tourist purposes.</p>
                        <ul class="visa-highlights">
                            <li>Up to 6 months per visit</li>
                            <li>10-year validity typical</li>
                            <li>Multiple entries</li>
                            <li>Flexible purposes</li>
                        </ul>
                        <a href="{{ route('b1-b2-visa') }}" class="visa-learn-more">Learn More →</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 mb-4">
                <div class="visa-category-card">
                    <div class="visa-card-header">
                        <h3>B1 Visa</h3>
                    </div>
                    <div class="visa-card-body">
                        <p class="visa-subtitle">Business Visitor</p>
                        <p>For temporary business activities, meetings, and conferences.</p>
                        <ul class="visa-highlights">
                            <li>Business meetings</li>
                            <li>Conferences/conventions</li>
                            <li>Contract negotiations</li>
                            <li>No employment allowed</li>
                        </ul>
                        <a href="{{ route('b1-visa') }}" class="visa-learn-more">Learn More →</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 mb-4">
                <div class="visa-category-card">
                    <div class="visa-card-header">
                        <h3>B2 Visa</h3>
                    </div>
                    <div class="visa-card-body">
                        <p class="visa-subtitle">Tourist Visitor</p>
                        <p>For tourism, vacation, visiting family, or medical treatment.</p>
                        <ul class="visa-highlights">
                            <li>Tourism & sightseeing</li>
                            <li>Visiting family/friends</li>
                            <li>Medical treatment</li>
                            <li>Social events</li>
                        </ul>
                        <a href="{{ route('b2-visa') }}" class="visa-learn-more">Learn More →</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="cta-section py-5">
    <div class="container text-center">
        <h2>Plan Your U.S. Visit</h2>
        <p class="lead mb-4">Get expert assistance with your B1/B2 visa application and interview preparation.</p>
        <a href="{{ route('contactus') }}#calendar" class="theme-btn-6">Schedule Consultation</a>
    </div>
</section>

@endsection


===========================================
FILE: views/special/index.blade.php
===========================================
@extends('layouts.app')

@section('content')

<section class="hero-section visa-category-hero">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <h1>Special Category Visas</h1>
                <p class="lead">Unique visa options for athletes, entertainers, religious workers, journalists, and crime victims.</p>
            </div>
        </div>
    </div>
</section>

<section class="visas-grid-section py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mb-4">
                <div class="visa-category-card">
                    <div class="visa-card-header">
                        <h3>P1 Visa</h3>
                    </div>
                    <div class="visa-card-body">
                        <p class="visa-subtitle">Athletes & Entertainers</p>
                        <p>For internationally recognized athletes and entertainment groups.</p>
                        <ul class="visa-highlights">
                            <li>Professional athletes</li>
                            <li>Entertainment groups</li>
                            <li>International recognition required</li>
                            <li>Event-based duration</li>
                        </ul>
                        <a href="{{ route('p1-visa') }}" class="visa-learn-more">Learn More →</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 mb-4">
                <div class="visa-category-card">
                    <div class="visa-card-header">
                        <h3>R1 Visa</h3>
                    </div>
                    <div class="visa-card-body">
                        <p class="visa-subtitle">Religious Workers</p>
                        <p>For ministers and religious workers in non-profit organizations.</p>
                        <ul class="visa-highlights">
                            <li>Religious workers/ministers</li>
                            <li>30 months initial</li>
                            <li>Up to 5 years total</li>
                            <li>Can lead to green card</li>
                        </ul>
                        <a href="{{ route('r1-visa') }}" class="visa-learn-more">Learn More →</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 mb-4">
                <div class="visa-category-card">
                    <div class="visa-card-header">
                        <h3>I Visa</h3>
                    </div>
                    <div class="visa-card-body">
                        <p class="visa-subtitle">Foreign Media & Journalists</p>
                        <p>For representatives of foreign media visiting the U.S.</p>
                        <ul class="visa-highlights">
                            <li>Journalists & reporters</li>
                            <li>Film crews</li>
                            <li>Foreign media only</li>
                            <li>Stay duration based</li>
                        </ul>
                        <a href="{{ route('i-visa') }}" class="visa-learn-more">Learn More →</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 mb-4">
                <div class="visa-category-card">
                    <div class="visa-card-header">
                        <h3>U Visa</h3>
                        <span class="visa-badge">Humanitarian</span>
                    </div>
                    <div class="visa-card-body">
                        <p class="visa-subtitle">Crime Victims</p>
                        <p>For victims of certain crimes who assist law enforcement.</p>
                        <ul class="visa-highlights">
                            <li>Crime victim protection</li>
                            <li>4-year duration</li>
                            <li>Can lead to green card</li>
                            <li>10,000 annual cap</li>
                        </ul>
                        <a href="{{ route('u-visa') }}" class="visa-learn-more">Learn More →</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="cta-section py-5 bg-light">
    <div class="container text-center">
        <h2>Need Help with a Special Category Visa?</h2>
        <p class="lead mb-4">Our immigration experts have experience with unique visa situations.</p>
        <a href="{{ route('contactus') }}#calendar" class="theme-btn-6">Schedule Consultation</a>
    </div>
</section>

@endsection
