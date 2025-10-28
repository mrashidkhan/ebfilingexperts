<!-- Leadership Team Section -->
<section class="leadership-main ptb-60">
    <div class="container">
        <div class="row bio-top">
            <!-- Section Title -->
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="our-team">
                    <h2>Our Leadership Team</h2>
                    <div class="border-bottom-line"></div>
                </div>
            </div>

            <!-- Leadership Container with Grid -->
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="leadership-grid">
                    @forelse($staffMembers as $member)
                        <!-- Team Member Card -->
                        <div class="staff-card" data-member-id="{{ $member->id }}">
                            <div class="card-image-wrapper">
                                <img
                                    src="{{ $member->avatar_url }}"
                                    alt="{{ $member->name }}"
                                    class="card-image"
                                />
                                <div class="card-overlay">
                                    <button class="btn-view-details" data-member-id="{{ $member->id }}">
                                        View Details
                                    </button>
                                </div>
                            </div>

                            <div class="card-content">
                                <h3 class="card-name">{{ $member->name }}</h3>
                                <p class="card-position">{{ $member->position }}</p>

                                <div class="card-social">
                                    @if($member->social_links && isset($member->social_links['linkedin']) && $member->social_links['linkedin'])
                                        <a
                                            href="{{ $member->social_links['linkedin'] }}"
                                            target="_blank"
                                            rel="noopener noreferrer"
                                            class="linkedin-icon"
                                            title="Connect on LinkedIn"
                                        >
                                            <img
                                                src="{{ asset('assets/images/inner-images/linkedin.png') }}"
                                                alt="LinkedIn"
                                            />
                                        </a>
                                    @else
                                        <span class="linkedin-icon-disabled">
                                            <img
                                                src="{{ asset('assets/images/inner-images/linkedin.png') }}"
                                                alt="LinkedIn"
                                            />
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <!-- Staff Detail Modal -->
                        <div class="staff-modal" id="modal-{{ $member->id }}" data-member-id="{{ $member->id }}">
                            <!-- Modal Overlay -->
                            <div class="modal-overlay"></div>

                            <!-- Modal Content -->
                            <div class="modal-content-wrapper">
                                <!-- Close Button -->
                                <button class="modal-close-btn" aria-label="Close modal">
                                    <svg width="30" height="30" viewBox="0 0 30 30" fill="none">
                                        <line x1="5" y1="5" x2="25" y2="25" stroke="white" stroke-width="2"/>
                                        <line x1="25" y1="5" x2="5" y2="25" stroke="white" stroke-width="2"/>
                                    </svg>
                                </button>

                                <!-- Modal Body -->
                                <div class="modal-body">
                                    <!-- Left - Image -->
                                    <div class="modal-image">
                                        <img
                                            src="{{ $member->avatar_url }}"
                                            alt="{{ $member->name }}"
                                        />
                                    </div>

                                    <!-- Right - Content -->
                                    <div class="modal-info">
                                        <h2 class="modal-name">{{ $member->name }}</h2>
                                        <p class="modal-position">{{ $member->position }}</p>
                                        <div class="modal-divider"></div>

                                        <div class="modal-bio">
                                            {!! nl2br(e($member->bio ?? $member->description ?? 'No description available')) !!}
                                        </div>

                                        @if($member->social_links && isset($member->social_links['linkedin']) && $member->social_links['linkedin'])
                                            <div class="modal-footer">
                                                <a
                                                    href="{{ $member->social_links['linkedin'] }}"
                                                    target="_blank"
                                                    rel="noopener noreferrer"
                                                    class="linkedin-link"
                                                >
                                                    <img
                                                        src="{{ asset('assets/images/inner-images/linkedin.png') }}"
                                                        alt="LinkedIn"
                                                    />
                                                    <span>Connect on LinkedIn</span>
                                                </a>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="col-lg-12">
                            <p class="text-center no-staff-message">
                                No staff members found. Please add staff members via the admin panel.
                            </p>
                        </div>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    /* Grid Layout */
    .leadership-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 30px;
        padding: 20px 0;
    }

    /* Desktop - 3 Columns */
    @media (min-width: 1200px) {
        .leadership-grid {
            grid-template-columns: repeat(3, 1fr);
            gap: 30px;
        }
    }

    /* Tablet - 2 Columns */
    @media (min-width: 768px) and (max-width: 1199px) {
        .leadership-grid {
            grid-template-columns: repeat(2, 1fr);
            gap: 25px;
        }
    }

    /* Mobile - 1 Column */
    @media (max-width: 767px) {
        .leadership-grid {
            grid-template-columns: 1fr;
            gap: 20px;
        }
    }

    /* Staff Card Styling */
    .staff-card {
        background: white;
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
        transition: all 0.3s ease;
        cursor: pointer;
    }

    .staff-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 12px 24px rgba(0, 0, 0, 0.15);
    }

    /* Card Image Wrapper */
    .card-image-wrapper {
        position: relative;
        overflow: hidden;
        height: 300px;
        background: #f0f0f0;
    }

    .card-image {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.3s ease;
    }

    .staff-card:hover .card-image {
        transform: scale(1.05);
    }

    /* Card Overlay */
    .card-overlay {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: rgba(0, 0, 0, 0.6);
        display: flex;
        align-items: center;
        justify-content: center;
        opacity: 0;
        transition: opacity 0.3s ease;
    }

    .staff-card:hover .card-overlay {
        opacity: 1;
    }

    .btn-view-details {
        padding: 10px 24px;
        background: linear-gradient(to right, #127a81 20%, #0b7078 40%, #1a596e 50%, #2b4063 70%, #342758 80%, #512663 100%);
        color: white;
        border: none;
        border-radius: 25px;
        font-size: 14px;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .btn-view-details:hover {
        transform: scale(1.05);
        box-shadow: 0 4px 12px rgba(18, 122, 129, 0.3);
    }

    /* Card Content */
    .card-content {
        padding: 20px;
        text-align: center;
    }

    .card-name {
        font-size: 18px;
        font-weight: 600;
        color: #333;
        margin: 0 0 8px 0;
    }

    .card-position {
        font-size: 14px;
        color: #666;
        margin: 0 0 15px 0;
    }

    /* Card Social */
    .card-social {
        display: flex;
        justify-content: center;
        gap: 10px;
    }

    .linkedin-icon,
    .linkedin-icon-disabled {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 32px;
        height: 32px;
        transition: all 0.3s ease;
    }

    .linkedin-icon {
        cursor: pointer;
    }

    .linkedin-icon:hover {
        transform: scale(1.15);
    }

    .linkedin-icon img,
    .linkedin-icon-disabled img {
        width: 24px;
        height: 24px;
    }

    .linkedin-icon-disabled img {
        opacity: 0.3;
    }

    /* ========== MODAL STYLES ========== */

    .staff-modal {
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        z-index: 2000;
        display: none;
        align-items: center;
        justify-content: center;
        animation: fadeInModal 0.3s ease;
    }

    .staff-modal.active {
        display: flex;
    }

    @keyframes fadeInModal {
        from {
            opacity: 0;
        }
        to {
            opacity: 1;
        }
    }

    /* Modal Overlay */
    .modal-overlay {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: rgba(0, 0, 0, 0.7);
        z-index: 1;
    }

    /* Modal Content Wrapper */
    .modal-content-wrapper {
        position: relative;
        z-index: 2;
        background: white;
        border-radius: 12px;
        width: 90%;
        max-width: 900px;
        max-height: 85vh;
        overflow: auto;
        display: flex;
        flex-direction: column;
        animation: slideUpModal 0.3s ease;
    }

    @keyframes slideUpModal {
        from {
            transform: translateY(50px);
            opacity: 0;
        }
        to {
            transform: translateY(0);
            opacity: 1;
        }
    }

    /* Close Button */
    .modal-close-btn {
        position: absolute;
        top: 20px;
        right: 20px;
        background: rgba(0, 0, 0, 0.5);
        border: none;
        border-radius: 50%;
        width: 40px;
        height: 40px;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        z-index: 10;
        transition: background 0.3s ease;
    }

    .modal-close-btn:hover {
        background: rgba(0, 0, 0, 0.8);
    }

    /* Modal Body */
    .modal-body {
        display: flex;
        flex-direction: row;
        padding: 40px;
    }

    /* Modal Image */
    .modal-image {
        flex: 0 0 40%;
        background: #f5f5f5;
        border-radius: 8px;
        overflow: hidden;
        margin-right: 40px;
    }

    .modal-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        min-height: 400px;
    }

    /* Modal Info */
    .modal-info {
        flex: 0 0 60%;
        overflow-y: auto;
        padding-right: 20px;
    }

    /* Custom scrollbar for modal-info */
    .modal-info::-webkit-scrollbar {
        width: 8px;
    }

    .modal-info::-webkit-scrollbar-track {
        background: #f1f1f1;
        border-radius: 4px;
    }

    .modal-info::-webkit-scrollbar-thumb {
        background: #127a81;
        border-radius: 4px;
    }

    .modal-info::-webkit-scrollbar-thumb:hover {
        background: #0b7078;
    }

    .modal-name {
        font-size: 28px;
        font-weight: 700;
        color: #333;
        margin: 0 0 10px 0;
    }

    .modal-position {
        font-size: 16px;
        color: #127a81;
        font-weight: 600;
        margin: 0 0 15px 0;
    }

    .modal-divider {
        height: 3px;
        background: linear-gradient(to right, #127a81, #0b7078, #1a596e);
        width: 60px;
        border-radius: 2px;
        margin: 20px 0;
    }

    .modal-bio {
        font-size: 15px;
        line-height: 1.8;
        color: #555;
        margin: 20px 0;
        white-space: pre-wrap;
        word-wrap: break-word;
    }

    /* Modal Footer */
    .modal-footer {
        margin-top: 30px;
        padding-top: 20px;
        border-top: 1px solid #eee;
    }

    .linkedin-link {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        text-decoration: none;
        color: #127a81;
        font-weight: 600;
        font-size: 14px;
        transition: all 0.3s ease;
    }

    .linkedin-link:hover {
        color: #0b7078;
        transform: translateX(5px);
    }

    .linkedin-link img {
        width: 24px;
        height: 24px;
    }

    /* No Staff Message */
    .no-staff-message {
        padding: 60px 20px;
        font-size: 16px;
        color: #999;
    }

    /* ========== RESPONSIVE MODAL ========== */

    @media (max-width: 768px) {
        .modal-body {
            flex-direction: column;
            padding: 20px;
        }

        .modal-image {
            flex: 0 0 auto;
            margin-right: 0;
            margin-bottom: 20px;
            min-height: 300px;
        }

        .modal-image img {
            min-height: 300px;
        }

        .modal-info {
            flex: 0 0 auto;
            padding-right: 0;
        }

        .modal-name {
            font-size: 22px;
        }

        .modal-close-btn {
            width: 36px;
            height: 36px;
        }

        .modal-close-btn svg {
            width: 24px;
            height: 24px;
        }

        .modal-content-wrapper {
            width: 95%;
            max-height: 95vh;
        }
    }

    @media (max-width: 480px) {
        .modal-body {
            padding: 15px;
        }

        .modal-info {
            padding-right: 0;
        }

        .modal-name {
            font-size: 20px;
        }

        .modal-position {
            font-size: 14px;
        }

        .modal-bio {
            font-size: 14px;
        }
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Get all view details buttons
        const viewDetailsButtons = document.querySelectorAll('.btn-view-details');
        const closeButtons = document.querySelectorAll('.modal-close-btn');
        const modals = document.querySelectorAll('.staff-modal');
        const modalOverlays = document.querySelectorAll('.modal-overlay');

        // Open modal on button click
        viewDetailsButtons.forEach(btn => {
            btn.addEventListener('click', function(e) {
                e.stopPropagation();
                const memberId = this.getAttribute('data-member-id');
                const modal = document.getElementById('modal-' + memberId);
                if (modal) {
                    modal.classList.add('active');
                    document.body.style.overflow = 'hidden';
                }
            });
        });

        // Close modal on close button click
        closeButtons.forEach(btn => {
            btn.addEventListener('click', function() {
                const modal = this.closest('.staff-modal');
                if (modal) {
                    modal.classList.remove('active');
                    document.body.style.overflow = 'auto';
                }
            });
        });

        // Close modal on overlay click
        modalOverlays.forEach(overlay => {
            overlay.addEventListener('click', function() {
                const modal = this.closest('.staff-modal');
                if (modal) {
                    modal.classList.remove('active');
                    document.body.style.overflow = 'auto';
                }
            });
        });

        // Close modal on ESC key
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                modals.forEach(modal => {
                    if (modal.classList.contains('active')) {
                        modal.classList.remove('active');
                        document.body.style.overflow = 'auto';
                    }
                });
            }
        });

        // Also close modal when clicking on card (for better UX)
        const staffCards = document.querySelectorAll('.staff-card');
        staffCards.forEach(card => {
            card.addEventListener('click', function() {
                const memberId = this.getAttribute('data-member-id');
                const modal = document.getElementById('modal-' + memberId);
                if (modal && !modal.classList.contains('active')) {
                    modal.classList.add('active');
                    document.body.style.overflow = 'hidden';
                }
            });
        });
    });
</script>
