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
            {{-- B1/B2 Visa Card (Most Common) --}}
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

            {{-- B1 Visa Card (Business) --}}
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

            {{-- B2 Visa Card (Tourist) --}}
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
