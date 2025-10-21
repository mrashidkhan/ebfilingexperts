<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Admin Dashboard') | {{ config('app.name') }}</title>

    <!-- Favicon and touch Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('img/favicon_io/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('img/favicon_io/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('img/favicon_io/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('img/favicon_io/site.webmanifest') }}">

    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="{{ isset($metaTags) ? $metaTags['title'] : 'Open Clusters Systems' }}" />
    <meta property="og:type" content="{{ isset($metaTags) ? $metaTags['type'] : 'website' }}" />
    <meta property="og:description" content="{{ isset($metaTags) ? $metaTags['description'] : 'Open Clusters Systems: Empowering businesses with cutting-edge IT solutions tailored to your specific needs.' }}" />
    <meta property="og:image" content="{{ isset($metaTags) ? $metaTags['image'] : asset('img/logo.png') }}" />
    <meta property="og:url" content="{{ isset($metaTags) ? $metaTags['url'] : request()->url() }}" />
    <meta property="og:site_name" content="{{ isset($metaTags) ? $metaTags['site_name'] : 'Open Clusters Systems' }}" />

    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ isset($metaTags) ? $metaTags['title'] : 'Open Clusters Systems' }}">
    <meta name="twitter:description" content="{{ isset($metaTags) ? $metaTags['description'] : 'Open Clusters Systems: Empowering businesses with cutting-edge IT solutions tailored to your specific needs.' }}">
    <meta name="twitter:image" content="{{ isset($metaTags) ? $metaTags['image'] : asset('img/favicon.png') }}">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <!-- Quill.js CSS -->
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">

    <!-- RESPONSIVE ADMIN CSS - FIXED FOR LAPTOP VIEW -->
    <style>
        /* MOBILE-FIRST RESPONSIVE ADMIN LAYOUT - LAPTOP OPTIMIZED */

        /* Global overflow prevention */
        html, body {
            overflow-x: hidden;
            max-width: 100vw;
        }

        /* Top Navigation */
        .navbar {
            z-index: 1050;
        }

        .navbar-brand {
            padding-top: 0.75rem;
            padding-bottom: 0.75rem;
        }

        .navbar-nav .nav-link {
            padding-right: 0.5rem;
            padding-left: 0.5rem;
        }

        /* Mobile-First Sidebar */
        .sidebar {
            position: fixed;
            top: 0;
            bottom: 0;
            left: -250px; /* Hidden by default on mobile */
            z-index: 1040;
            width: 250px;
            background-color: #212529;
            transition: left 0.3s ease-in-out;
            padding-top: 48px;
            box-shadow: inset -1px 0 0 rgba(0, 0, 0, .1);
        }

        .sidebar.show {
            left: 0; /* Visible when toggled */
        }

        .sidebar-sticky {
            position: relative;
            top: 0;
            height: calc(100vh - 48px);
            padding-top: 0.5rem;
            overflow-x: hidden;
            overflow-y: auto;
        }

        .sidebar .nav-link {
            color: #adb5bd;
            padding: 0.75rem 1rem;
            border-radius: 0;
        }

        .sidebar .nav-link:hover {
            color: #fff;
            background-color: #495057;
        }

        .sidebar .nav-link.active {
            color: #fff;
            background-color: #0d6efd;
        }

        .sidebar .nav-link i {
            margin-right: 0.5rem;
            width: 16px;
        }

        .sidebar .sidebar-heading {
            color: #16C60C !important;
            font-size: 0.75rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.05em;
        }

        /* Main Content - Mobile First */
        .main-content {
            margin-left: 0; /* No margin on mobile */
            padding-top: 48px;
            min-height: 100vh;
            transition: margin-left 0.3s ease-in-out;
            width: 100%;
            max-width: 100vw;
            overflow-x: hidden;
        }

        /* Main content container fixes */
        .main-content .container-fluid {
            width: 100%;
            max-width: 100%;
            padding-left: 15px;
            padding-right: 15px;
            overflow-x: hidden;
        }

        /* Sidebar Overlay for Mobile */
        .sidebar-overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100vw;
            height: 100vh;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 1035;
        }

        .sidebar-overlay.show {
            display: block;
        }

        /* Mobile Sidebar Toggle Button */
        .mobile-sidebar-toggle {
            display: inline-block;
            background: none;
            border: none;
            color: #adb5bd;
            font-size: 1.25rem;
            padding: 0.375rem;
        }

        .mobile-sidebar-toggle:hover {
            color: #fff;
        }

        /* LAPTOP-SPECIFIC FIXES (768px to 1199px) */
        @media (min-width: 768px) and (max-width: 1199.98px) {
            .sidebar {
                left: 0; /* Always visible */
            }

            .main-content {
                margin-left: 250px; /* Add margin for sidebar */
                width: calc(100vw - 250px); /* CRITICAL: Set proper width */
                max-width: calc(100vw - 250px);
            }

            .main-content .container-fluid {
                padding-left: 12px;
                padding-right: 12px;
                max-width: calc(100vw - 250px - 24px); /* Account for sidebar + padding */
            }

            .mobile-sidebar-toggle {
                display: none;
            }

            .sidebar-overlay {
                display: none !important;
            }
        }

        /* Standard tablet and larger screens (768px+) */
        @media (min-width: 768px) {
            .sidebar {
                left: 0; /* Always visible */
            }

            .main-content {
                margin-left: 250px; /* Add margin for sidebar */
            }

            .mobile-sidebar-toggle {
                display: none;
            }

            .sidebar-overlay {
                display: none !important;
            }
        }

        /* Desktop (1200px+) - Full layout */
        @media (min-width: 1200px) {
            .main-content {
                margin-left: 250px;
                width: calc(100vw - 250px);
                max-width: calc(100vw - 250px);
            }

            .main-content .container-fluid {
                padding-left: 15px;
                padding-right: 15px;
                max-width: calc(100vw - 250px - 30px);
            }
        }

        /* Card Styles */
        .card-stats {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            border: none;
            color: white;
        }

        .card-stats-2 {
            background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
            border: none;
            color: white;
        }

        .card-stats-3 {
            background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
            border: none;
            color: white;
        }

        .card-stats-4 {
            background: linear-gradient(135deg, #43e97b 0%, #38f9d7 100%);
            border: none;
            color: white;
        }

        /* Table Styles */
        .table-actions {
            white-space: nowrap;
        }

        .table-actions .btn {
            padding: 0.25rem 0.5rem;
            margin: 0 0.125rem;
        }

        .status-badge {
            font-size: 0.75rem;
            padding: 0.25em 0.5em;
        }

        .featured-badge {
            background: linear-gradient(45deg, #ffd700, #ffed4e);
            color: #333;
            font-weight: bold;
        }

        /* Custom Quill.js Styles */
        .quill-editor-container {
            border: 1px solid #ced4da;
            border-radius: 0.375rem;
            background: white;
        }

        .quill-editor-container .ql-toolbar {
            border: none;
            border-bottom: 1px solid #ced4da;
            border-radius: 0.375rem 0.375rem 0 0;
        }

        .quill-editor-container .ql-container {
            border: none;
            border-radius: 0 0 0.375rem 0.375rem;
            font-size: 14px;
        }

        .quill-editor-container .ql-editor {
            min-height: 300px;
            max-height: 500px;
            overflow-y: auto;
        }

        .quill-editor-container .ql-editor.ql-blank::before {
            color: #6c757d;
            font-style: italic;
        }

        /* Page Header Responsive - FIXED FOR BUTTON CUTOFF */
        .main-content .container-fluid {
            padding-left: 15px;
            padding-right: 15px;
        }

        /* Page header with proper spacing */
        .page-header {
            padding-top: 1rem;
            padding-bottom: 0.5rem;
            margin-bottom: 1rem;
            min-height: 60px;
        }

        .page-header h1 {
            margin-bottom: 0;
            flex-grow: 1;
        }

        .page-header .page-actions {
            flex-shrink: 0;
            margin-left: 1rem;
        }

        /* LAPTOP-SPECIFIC PAGE HEADER FIXES */
        @media (min-width: 768px) and (max-width: 1199.98px) {
            .main-content .container-fluid {
                padding-left: 12px;
                padding-right: 12px;
            }

            .page-header {
                padding-top: 0.875rem;
                padding-bottom: 0.5rem;
                padding-left: 0.5rem;
                padding-right: 1rem; /* Increased right padding */
            }

            .page-header h1 {
                font-size: 1.75rem;
            }

            .page-header .page-actions {
                margin-left: 0.75rem;
                margin-right: 1rem; /* Added right margin */
                flex-shrink: 0;
            }

            /* Ensure button has enough space */
            .page-actions .btn {
                margin-right: 0.5rem;
            }
        }

        @media (max-width: 767.98px) {
            .main-content .container-fluid {
                padding-left: 0.75rem;
                padding-right: 0.75rem;
            }

            .page-header {
                flex-direction: column;
                align-items: flex-start !important;
                gap: 0.5rem;
                padding-top: 0.75rem;
            }

            .page-header .page-actions {
                margin-left: 0;
                align-self: flex-end;
            }

            .page-header h1 {
                font-size: 1.5rem;
            }
        }

        @media (max-width: 576px) {
            .page-header h1 {
                font-size: 1.25rem;
            }
        }

        /* Ensure all cards are responsive */
        .card {
            overflow-x: hidden;
            max-width: 100%;
        }

        /* Mobile-friendly alerts */
        @media (max-width: 576px) {
            .alert {
                margin-bottom: 1rem;
                font-size: 0.875rem;
            }
        }

        /* Additional overflow fixes */
        .row {
            margin-left: 0;
            margin-right: 0;
        }

        [class*="col-"] {
            min-width: 0;
            max-width: 100%;
        }

        /* Ensure proper box-sizing */
        * {
            box-sizing: border-box;
        }
    </style>
    @stack('styles')
</head>

<body>
    <!-- Sidebar Overlay for Mobile -->
    <div class="sidebar-overlay" id="sidebarOverlay" onclick="toggleSidebar()"></div>

    <!-- Top Navigation -->
    <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
        <!-- Mobile Sidebar Toggle Button -->
        <button class="mobile-sidebar-toggle" type="button" onclick="toggleSidebar()">
            <i class="fas fa-bars"></i>
        </button>

        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="{{ route('admin.dashboard') }}">
            <i class="fas fa-cogs me-2"></i>
            <span class="d-none d-sm-inline">Admin Panel</span>
            <span class="d-sm-none">Admin</span>
        </a>

        <div class="navbar-nav">
            <div class="nav-item text-nowrap">
                <a class="nav-link px-3" href="{{ route('index') }}" target="_blank">
                    <i class="fas fa-external-link-alt me-1"></i>
                    <span class="d-none d-sm-inline">View Site</span>
                </a>
            </div>
        </div>
    </nav>

    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <nav id="sidebarMenu" class="sidebar d-md-block bg-dark">
                <div class="sidebar-sticky pt-3">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('admin.dashboard*') ? 'active' : '' }}" href="{{ route('admin.dashboard') }}">
                                <i class="fas fa-tachometer-alt"></i>
                                Dashboard
                            </a>
                        </li>
                    </ul>

                    <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                        <span>Content Management</span>
                    </h6>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('admin.posts*') ? 'active' : '' }}" href="{{ route('admin.posts.index') }}">
                                <i class="fas fa-file-alt"></i>
                                Posts
                                @php
                                    $draftCount = \App\Models\Post::where('status', 'draft')->count();
                                @endphp
                                @if($draftCount > 0)
                                    <span class="badge bg-warning text-dark ms-auto">{{ $draftCount }}</span>
                                @endif
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('admin.categories*') ? 'active' : '' }}" href="{{ route('admin.categories.index') }}">
                                <i class="fas fa-folder"></i>
                                Categories
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('admin.tags*') ? 'active' : '' }}" href="{{ route('admin.tags.index') }}">
                                <i class="fas fa-tags"></i>
                                Tags
                            </a>
                        </li>
                    </ul>

                    <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                        <span>Engagement</span>
                    </h6>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('admin.comments*') ? 'active' : '' }}" href="{{ route('admin.comments.index') }}">
                                <i class="fas fa-comments"></i>
                                Comments
                                @php
                                    $pendingCount = \App\Models\PostComment::where('status', 'pending')->count();
                                @endphp
                                @if($pendingCount > 0)
                                    <span class="badge bg-danger ms-auto">{{ $pendingCount }}</span>
                                @endif
                            </a>
                        </li>
                    </ul>

                    <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                        <span>Team Management</span>
                    </h6>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('admin.staff*') ? 'active' : '' }}" href="{{ route('admin.staff.index') }}">
                                <i class="fas fa-users"></i>
                                Staff
                            </a>
                        </li>
                    </ul>

                    <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                        <span>Quick Actions</span>
                    </h6>
                    <ul class="nav flex-column mb-2">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('admin.posts.create') }}">
                                <i class="fas fa-plus"></i>
                                New Post
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('admin.categories.create') }}">
                                <i class="fas fa-plus"></i>
                                New Category
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('admin.staff.create') }}">
                                <i class="fas fa-plus"></i>
                                New Staff
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>

            <!-- Main Content -->
            <main class="main-content">
                <div class="container-fluid">
                    <!-- Page Header -->
                    @if(isset($pageTitle) || View::hasSection('page-title'))
                    <div class="page-header d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center border-bottom">
                        <h1 class="h2">@yield('page-title', $pageTitle ?? '')</h1>
                        <div class="page-actions">
                            @yield('page-actions')
                        </div>
                    </div>
                    @endif

                    <!-- Flash Messages -->
                    @if(session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <i class="fas fa-check-circle me-2"></i>{{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                        </div>
                    @endif

                    @if(session('error'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <i class="fas fa-exclamation-circle me-2"></i>{{ session('error') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                        </div>
                    @endif

                    @if(session('warning'))
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <i class="fas fa-exclamation-triangle me-2"></i>{{ session('warning') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                        </div>
                    @endif

                    <!-- Main Content Area -->
                    @yield('content')
                </div>
            </main>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Chart.js for dashboard -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <!-- Quill.js JS -->
    <script src="https://cdn.quilljs.com/1.3.6/quill.min.js"></script>

    <script>
        // Mobile Sidebar Toggle Function
        function toggleSidebar() {
            const sidebar = document.getElementById('sidebarMenu');
            const overlay = document.getElementById('sidebarOverlay');

            sidebar.classList.toggle('show');
            overlay.classList.toggle('show');
        }

        // Close sidebar when clicking on a link (mobile only)
        document.addEventListener('DOMContentLoaded', function() {
            const sidebarLinks = document.querySelectorAll('.sidebar .nav-link');
            sidebarLinks.forEach(link => {
                link.addEventListener('click', function() {
                    if (window.innerWidth < 768) {
                        toggleSidebar();
                    }
                });
            });

            // Auto-hide alerts after 5 seconds
            setTimeout(function() {
                var alerts = document.querySelectorAll('.alert');
                alerts.forEach(function(alert) {
                    if (alert.querySelector('.btn-close')) {
                        alert.querySelector('.btn-close').click();
                    }
                });
            }, 5000);

            // Initialize Quill editors
            initializeQuillEditors();
        });

        // Initialize Quill.js editors
        function initializeQuillEditors() {
            const quillContainers = document.querySelectorAll('.quill-editor');

            quillContainers.forEach(function(container) {
                const editorId = container.getAttribute('data-editor-id');
                const textarea = document.getElementById(editorId);

                if (textarea && !container.querySelector('.ql-toolbar')) {
                    const quill = new Quill(container, {
                        theme: 'snow',
                        placeholder: 'Write your content here...',
                        modules: {
                            toolbar: [
                                [{ 'header': [1, 2, 3, 4, 5, 6, false] }],
                                [{ 'font': [] }],
                                [{ 'size': ['small', false, 'large', 'huge'] }],
                                ['bold', 'italic', 'underline', 'strike'],
                                [{ 'color': [] }, { 'background': [] }],
                                [{ 'script': 'sub'}, { 'script': 'super' }],
                                [{ 'align': [] }],
                                [{ 'list': 'ordered'}, { 'list': 'bullet' }],
                                [{ 'indent': '-1'}, { 'indent': '+1' }],
                                ['blockquote', 'code-block'],
                                ['link', 'image', 'video'],
                                ['clean']
                            ]
                        }
                    });

                    // Set initial content from textarea
                    if (textarea.value) {
                        quill.root.innerHTML = textarea.value;
                    }

                    // Sync content with hidden textarea on change
                    quill.on('text-change', function() {
                        textarea.value = quill.root.innerHTML;
                    });

                    // Also sync on form submission
                    const form = textarea.closest('form');
                    if (form) {
                        form.addEventListener('submit', function() {
                            textarea.value = quill.root.innerHTML;
                        });
                    }
                }
            });
        }

        // Function to reinitialize Quill editors (useful for dynamic content)
        function reinitializeQuillEditors() {
            initializeQuillEditors();
        }

        // Confirm delete actions
        function confirmDelete(message = 'Are you sure you want to delete this item?') {
            return confirm(message);
        }

        // Select All checkbox functionality
        function toggleSelectAll(selectAllCheckbox) {
            const checkboxes = document.querySelectorAll('input[name="items[]"]');
            checkboxes.forEach(checkbox => {
                checkbox.checked = selectAllCheckbox.checked;
            });
            updateBulkActions();
        }

        // Update bulk actions visibility
        function updateBulkActions() {
            const checkboxes = document.querySelectorAll('input[name="items[]"]:checked');
            const bulkActions = document.querySelector('.bulk-actions');
            if (bulkActions) {
                bulkActions.style.display = checkboxes.length > 0 ? 'block' : 'none';
            }
        }
    </script>

    @stack('scripts')
</body>
</html>
