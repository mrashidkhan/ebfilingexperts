@extends('layouts.app')

@section('content')

<!-- Hero Section -->
<section class="hero-section visa-category-hero">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8 mx-auto text-center">
                <h1>Special Category Visas</h1>
                <p class="lead">Explore specialized visa options for unique circumstances including athletes, entertainers, religious workers, media professionals, and crime victims. Each category addresses specific needs with tailored immigration solutions.</p>
            </div>
        </div>
    </div>
</section>

<!-- Special Visas Grid -->
<section class="visas-grid-section py-5">
    <div class="container">
        <div class="row">
            <!-- P1 Visa Card -->
            <div class="col-lg-6 mb-4">
                <div class="visa-category-card">
                    <div class="visa-card-header">
                        <h3>P1 Visa</h3>
                        <span class="visa-badge">Athletes & Entertainment</span>
                    </div>
                    <div class="visa-card-body">
                        <p class="visa-subtitle">Internationally Recognized Athletes and Entertainment Groups</p>
                        <p>For professional athletes, sports teams, and entertainment groups with international recognition coming to the United States for competitions, performances, or events.</p>

                        <div class="visa-quick-facts">
                            <div class="fact-item">
                                <span class="fact-label">Duration:</span>
                                <span class="fact-value">P1A: 5 years, P1B: 1 year</span>
                            </div>
                            <div class="fact-item">
                                <span class="fact-label">Extendable:</span>
                                <span class="fact-value">Yes, in increments</span>
                            </div>
                            <div class="fact-item">
                                <span class="fact-label">Processing:</span>
                                <span class="fact-value">2-4 months</span>
                            </div>
                        </div>

                        <ul class="visa-highlights">
                            <li>P1A for individual athletes and teams</li>
                            <li>P1B for internationally recognized entertainment groups</li>
                            <li>Requires labor consultation</li>
                            <li>Family can accompany on P4</li>
                            <li>Premium processing available</li>
                        </ul>

                        <a href="{{ route('p1-visa') }}" class="visa-learn-more">Learn More About P1 →</a>
                    </div>
                </div>
            </div>

            <!-- R1 Visa Card -->
            <div class="col-lg-6 mb-4">
                <div class="visa-category-card">
                    <div class="visa-card-header">
                        <h3>R1 Visa</h3>
                        <span class="visa-badge">Religious Workers</span>
                    </div>
                    <div class="visa-card-body">
                        <p class="visa-subtitle">Religious Workers and Ministers</p>
                        <p>For ministers, religious professionals, and workers in religious vocations or occupations coming to work for nonprofit religious organizations in the United States.</p>

                        <div class="visa-quick-facts">
                            <div class="fact-item">
                                <span class="fact-label">Duration:</span>
                                <span class="fact-value">30 months initial, 5 years max</span>
                            </div>
                            <div class="fact-item">
                                <span class="fact-label">Extendable:</span>
                                <span class="fact-value">Up to 5 years total</span>
                            </div>
                            <div class="fact-item">
                                <span class="fact-label">Processing:</span>
                                <span class="fact-value">3-6 months</span>
                            </div>
                        </div>

                        <ul class="visa-highlights">
                            <li>Must be member of religious denomination for 2+ years</li>
                            <li>Work for nonprofit religious organization</li>
                            <li>Can lead to green card (EB4)</li>
                            <li>Family can accompany on R2</li>
                            <li>R2 spouses cannot work</li>
                        </ul>

                        <a href="{{ route('r1-visa') }}" class="visa-learn-more">Learn More About R1 →</a>
                    </div>
                </div>
            </div>

            <!-- I Visa Card -->
            <div class="col-lg-6 mb-4">
                <div class="visa-category-card">
                    <div class="visa-card-header">
                        <h3>I Visa</h3>
                        <span class="visa-badge">Media & Press</span>
                    </div>
                    <div class="visa-card-body">
                        <p class="visa-subtitle">Foreign Media and Journalists</p>
                        <p>For representatives of foreign media, including journalists, reporters, film crews, and editors coming to the United States on assignment for foreign media organizations.</p>

                        <div class="visa-quick-facts">
                            <div class="fact-item">
                                <span class="fact-label">Duration:</span>
                                <span class="fact-value">Assignment duration</span>
                            </div>
                            <div class="fact-item">
                                <span class="fact-label">Extendable:</span>
                                <span class="fact-value">Yes, as needed</span>
                            </div>
                            <div class="fact-item">
                                <span class="fact-label">Processing:</span>
                                <span class="fact-value">2-4 weeks</span>
                            </div>
                        </div>

                        <ul class="visa-highlights">
                            <li>For foreign media representatives only</li>
                            <li>Must be employed by foreign media organization</li>
                            <li>Covers journalists, film crews, reporters</li>
                            <li>Family can accompany on I dependent visa</li>
                            <li>Fast processing for media assignments</li>
                        </ul>

                        <a href="{{ route('i-visa') }}" class="visa-learn-more">Learn More About I Visa →</a>
                    </div>
                </div>
            </div>

            <!-- U Visa Card -->
            <div class="col-lg-6 mb-4">
                <div class="visa-category-card">
                    <div class="visa-card-header">
                        <h3>U Visa</h3>
                        <span class="visa-badge">Humanitarian</span>
                    </div>
                    <div class="visa-card-body">
                        <p class="visa-subtitle">Victims of Qualifying Crimes</p>
                        <p>For victims of certain crimes who have suffered substantial mental or physical abuse and are willing to assist law enforcement in the investigation or prosecution of criminal activity.</p>

                        <div class="visa-quick-facts">
                            <div class="fact-item">
                                <span class="fact-label">Duration:</span>
                                <span class="fact-value">4 years</span>
                            </div>
                            <div class="fact-item">
                                <span class="fact-label">Annual Cap:</span>
                                <span class="fact-value">10,000 visas</span>
                            </div>
                            <div class="fact-item">
                                <span class="fact-label">Processing:</span>
                                <span class="fact-value">4-7 years (high demand)</span>
                            </div>
                        </div>

                        <ul class="visa-highlights">
                            <li>For victims of qualifying criminal activity</li>
                            <li>Must have suffered substantial harm</li>
                            <li>Must be helpful to law enforcement</li>
                            <li>Can apply for green card after 3 years</li>
                            <li>Work authorization included</li>
                        </ul>

                        <a href="{{ route('u-visa') }}" class="visa-learn-more">Learn More About U Visa →</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Comparison Section -->
<section class="comparison-section py-5 bg-light">
    <div class="container">
        <h2 class="text-center mb-5">Compare Special Category Visas</h2>
        <div class="table-responsive">
            <table class="table visa-comparison-table">
                <thead>
                    <tr>
                        <th>Visa Type</th>
                        <th>Purpose</th>
                        <th>Duration</th>
                        <th>Green Card Path</th>
                        <th>Family Included</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>P1</strong></td>
                        <td>Athletes/Entertainers</td>
                        <td>1-5 years</td>
                        <td>No (use EB1A)</td>
                        <td>✓ (P4)</td>
                    </tr>
                    <tr>
                        <td><strong>R1</strong></td>
                        <td>Religious Workers</td>
                        <td>30 months (5 year max)</td>
                        <td>✓ (EB4)</td>
                        <td>✓ (R2)</td>
                    </tr>
                    <tr>
                        <td><strong>I</strong></td>
                        <td>Foreign Media</td>
                        <td>Assignment duration</td>
                        <td>No</td>
                        <td>✓ (I dependent)</td>
                    </tr>
                    <tr>
                        <td><strong>U</strong></td>
                        <td>Crime Victims</td>
                        <td>4 years</td>
                        <td>✓ (after 3 years)</td>
                        <td>✓ (certain relatives)</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>

<!-- When to Use Each Visa -->
<section class="when-to-use-section py-5">
    <div class="container">
        <h2 class="text-center mb-5">Which Special Visa is Right for You?</h2>
        <div class="row">
            <div class="col-lg-6 mb-4">
                <div class="use-case-card">
                    <h4><i class="bi bi-trophy"></i> Choose P1 If You Are:</h4>
                    <ul>
                        <li>Professional athlete competing in U.S.</li>
                        <li>Member of internationally recognized entertainment group</li>
                        <li>Coming for specific sporting event or performance</li>
                        <li>Have sustained international recognition</li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-6 mb-4">
                <div class="use-case-card">
                    <h4><i class="bi bi-heart"></i> Choose R1 If You Are:</h4>
                    <ul>
                        <li>Minister or religious worker</li>
                        <li>Member of religious denomination for 2+ years</li>
                        <li>Working for nonprofit religious organization</li>
                        <li>Seeking path to permanent residency</li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-6 mb-4">
                <div class="use-case-card">
                    <h4><i class="bi bi-camera-video"></i> Choose I Visa If You Are:</h4>
                    <ul>
                        <li>Journalist or reporter on assignment</li>
                        <li>Working for foreign media organization</li>
                        <li>Film crew covering U.S. events</li>
                        <li>Need fast processing for media work</li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-6 mb-4">
                <div class="use-case-card">
                    <h4><i class="bi bi-shield-heart"></i> Choose U Visa If You Are:</h4>
                    <ul>
                        <li>Victim of qualifying crime in U.S.</li>
                        <li>Suffered substantial physical or mental abuse</li>
                        <li>Willing to assist law enforcement</li>
                        <li>Need protection and work authorization</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cta-section py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <h2>Need Help with a Special Category Visa?</h2>
                <p class="lead mb-4">Our immigration experts have experience with unique visa situations. Schedule a consultation to discuss your specific circumstances and determine the best path forward.</p>
                <a href="{{ route('contactus') }}#calendar" class="theme-btn-6">Schedule Free Consultation</a>
            </div>
        </div>
    </div>
</section>

<!-- Related Services -->
<section class="related-services py-5 bg-light">
    <div class="container">
        <h2 class="text-center mb-5">Explore Other Immigration Options</h2>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="service-card">
                    <h4>O1A Visa</h4>
                    <p>For individuals with extraordinary ability in athletics, arts, or entertainment</p>
                    <a href="{{ route('o1avisa') }}" class="service-link">Learn More →</a>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="service-card">
                    <h4>EB1A Green Card</h4>
                    <p>Permanent residency for individuals with extraordinary ability</p>
                    <a href="{{ route('eb1a-visa') }}" class="service-link">Learn More →</a>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="service-card">
                    <h4>Work Visas</h4>
                    <p>Explore employment-based visa options for professionals</p>
                    <a href="{{ route('work-visas') }}" class="service-link">Learn More →</a>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
