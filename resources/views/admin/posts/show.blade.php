@extends('admin.layout.app')

@section('title', 'Post: ' . $post->title)
@section('page-title', 'Post Details')

@section('page-actions')
<div class="d-flex gap-2 flex-wrap">
    <a href="{{ route('blog.show', $post) }}" target="_blank" class="btn btn-outline-info">
        <i class="fas fa-external-link-alt me-2"></i><span class="d-none d-sm-inline">View Live</span><span class="d-sm-none">Live</span>
    </a>
    <a href="{{ route('admin.posts.edit', $post) }}" class="btn btn-primary">
        <i class="fas fa-edit me-2"></i><span class="d-none d-sm-inline">Edit Post</span><span class="d-sm-none">Edit</span>
    </a>
    <a href="{{ route('admin.posts.index') }}" class="btn btn-outline-secondary">
        <i class="fas fa-arrow-left me-2"></i><span class="d-none d-sm-inline">Back to Posts</span><span class="d-sm-none">Back</span>
    </a>
</div>
@endsection

@push('styles')
<style>
/* CONSOLIDATED MOBILE-RESPONSIVE SHOW POST STYLES */

/* Global overflow prevention */
html, body {
    overflow-x: hidden;
    max-width: 100vw;
}

/* Mobile-first responsive layout */
.mobile-content-padding {
    padding-bottom: 0;
}

.mobile-main-content {
    margin-bottom: 1rem;
}

.mobile-sidebar-card {
    margin-bottom: 1rem;
}

/* Card styles */
.card {
    overflow-x: hidden;
    border-radius: 0.5rem;
    box-shadow: 0 2px 4px rgba(0,0,0,0.1);
}

.card-header {
    background-color: #f8f9fa;
    border-bottom: 1px solid #dee2e6;
    padding: 1rem;
}

.card-header h5 {
    font-size: 1.1rem;
    margin-bottom: 0;
}

.card-body {
    padding: 1rem;
}

/* Mobile post header */
.mobile-post-header {
    padding: 1rem;
    border-radius: 0.5rem;
    background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
    margin-bottom: 1rem;
    overflow-x: hidden;
}

.mobile-post-meta {
    display: flex;
    flex-wrap: wrap;
    gap: 0.5rem;
    margin-bottom: 1rem;
    font-size: 0.9rem;
}

.mobile-post-meta > span {
    background: white;
    padding: 0.25rem 0.5rem;
    border-radius: 0.25rem;
    border: 1px solid #dee2e6;
    font-size: 0.8rem;
    white-space: nowrap;
}

/* Statistics grid */
.mobile-stats-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 1rem;
    margin-bottom: 1rem;
}

.mobile-stat-card {
    text-align: center;
    padding: 1rem;
    background: white;
    border-radius: 0.5rem;
    border: 1px solid #dee2e6;
    box-shadow: 0 2px 4px rgba(0,0,0,0.05);
}

.mobile-stat-card h4 {
    font-size: 1.5rem;
    margin-bottom: 0.25rem;
    font-weight: 700;
}

.mobile-stat-card small {
    font-size: 0.8rem;
    color: #6c757d;
}

/* Featured image */
.mobile-featured-image {
    width: 100%;
    height: auto;
    border-radius: 0.5rem;
    margin-bottom: 1rem;
    box-shadow: 0 2px 8px rgba(0,0,0,0.1);
}

/* Content styles */
.mobile-content {
    font-size: 1rem;
    line-height: 1.6;
}

.mobile-content img {
    max-width: 100%;
    height: auto;
    border-radius: 0.375rem;
}

.content img {
    max-width: 100%;
    height: auto;
    border-radius: 0.375rem;
}

/* Tags */
.mobile-tags {
    display: flex;
    flex-wrap: wrap;
    gap: 0.5rem;
    margin-top: 1rem;
}

/* Comments */
.mobile-comments {
    max-height: 400px;
    overflow-y: auto;
}

.mobile-comment {
    padding: 0.75rem;
    border-bottom: 1px solid #dee2e6;
    margin-bottom: 0.75rem;
}

.mobile-comment:last-child {
    border-bottom: none;
    margin-bottom: 0;
}

.mobile-comment-header {
    display: flex;
    align-items: center;
    margin-bottom: 0.5rem;
}

.mobile-comment-avatar {
    width: 32px;
    height: 32px;
    border-radius: 50%;
    margin-right: 0.5rem;
}

.mobile-comment-name {
    font-weight: 600;
    font-size: 0.9rem;
}

.mobile-comment-date {
    font-size: 0.8rem;
    color: #6c757d;
    margin-left: auto;
}

.mobile-comment-content {
    font-size: 0.9rem;
    line-height: 1.5;
    margin-bottom: 0.5rem;
}

/* Info sections */
.mobile-info-row {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 0.5rem 0;
    border-bottom: 1px solid #f0f0f0;
    font-size: 0.9rem;
}

.mobile-info-row:last-child {
    border-bottom: none;
}

.mobile-info-label {
    font-weight: 600;
    color: #6c757d;
}

.seo-info-mobile .mobile-info-row {
    padding: 0.75rem;
    margin: 0;
    border-radius: 0.25rem;
    background: #f8f9fa;
    margin-bottom: 0.5rem;
    border: none;
}

.seo-info-mobile .mobile-info-row:last-child {
    margin-bottom: 0;
}

/* Mobile-specific styles (up to 768px) */
@media (max-width: 767.98px) {
    .mobile-content-padding {
        padding-bottom: 120px; /* Space for fixed action buttons */
    }

    .card-body {
        padding: 0.875rem;
    }

    .card-header {
        padding: 0.875rem;
    }

    .mobile-post-header {
        padding: 0.875rem;
    }

    .mobile-stats-grid {
        grid-template-columns: repeat(2, 1fr);
        gap: 0.75rem;
    }

    .mobile-stat-card {
        padding: 0.875rem;
    }

    .mobile-comment {
        padding: 0.625rem;
    }

    .mobile-comment-avatar {
        width: 30px;
        height: 30px;
    }

    /* Dropdown actions */
    .mobile-dropdown-actions {
        margin-bottom: 1rem;
    }

    /* Fixed mobile action buttons */
    .mobile-quick-actions {
        position: fixed;
        bottom: 0;
        left: 0;
        right: 0;
        background: white;
        border-top: 1px solid #dee2e6;
        padding: 1rem;
        z-index: 1020;
        box-shadow: 0 -2px 10px rgba(0,0,0,0.1);
    }

    .mobile-quick-actions .btn {
        font-size: 0.9rem;
        padding: 0.75rem;
        border-radius: 0.375rem;
    }
}

/* Small mobile (up to 576px) */
@media (max-width: 575.98px) {
    .card-body {
        padding: 0.75rem;
    }

    .card-header {
        padding: 0.75rem;
    }

    .card-header h5 {
        font-size: 1rem;
    }

    .mobile-post-header {
        padding: 0.75rem;
    }

    .mobile-post-meta {
        font-size: 0.8rem;
    }

    .mobile-post-meta > span {
        font-size: 0.75rem;
        padding: 0.2rem 0.4rem;
    }

    .mobile-stats-grid {
        gap: 0.5rem;
    }

    .mobile-stat-card {
        padding: 0.75rem;
    }

    .mobile-stat-card h4 {
        font-size: 1.25rem;
    }

    .mobile-quick-actions {
        padding: 0.875rem;
    }

    .mobile-quick-actions .btn {
        padding: 0.875rem;
        font-size: 0.85rem;
    }

    .mobile-comment {
        padding: 0.5rem;
    }

    .mobile-comment-avatar {
        width: 28px;
        height: 28px;
    }

    .mobile-comment-name {
        font-size: 0.85rem;
    }

    .mobile-comment-content {
        font-size: 0.85rem;
    }

    .badge {
        font-size: 0.7rem;
        padding: 0.25em 0.4em;
    }

    .mobile-info-row {
        font-size: 0.85rem;
        padding: 0.4rem 0;
    }
}

/* Tablet and larger (768px+) */
@media (min-width: 768px) {
    .mobile-quick-actions {
        display: none !important;
    }

    .mobile-content-padding {
        padding-bottom: 0;
    }

    .mobile-post-header,
    .mobile-stats-grid {
        display: none !important;
    }

    .mobile-dropdown-actions {
        display: none;
    }
}

/* Desktop (992px+) */
@media (min-width: 992px) {
    .card-body {
        padding: 1.25rem;
    }

    .card-header {
        padding: 1rem 1.25rem;
    }
}

/* Featured badge */
.featured-badge {
    background: linear-gradient(45deg, #ffd700, #ffed4e);
    color: #333;
    font-weight: bold;
}

/* Status badges */
.badge {
    font-weight: 500;
}

/* Responsive row spacing */
.row {
    margin-left: 0;
    margin-right: 0;
}

[class*="col-"] {
    padding-left: 0.75rem;
    padding-right: 0.75rem;
    box-sizing: border-box;
}

/* Ensure all elements use border-box */
* {
    box-sizing: border-box;
}

/* Avatar images */
.rounded-circle {
    object-fit: cover;
}

/* Dropdown menu improvements */
.dropdown-menu {
    box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
    border: none;
    border-radius: 0.5rem;
}

.dropdown-item {
    padding: 0.5rem 1rem;
    font-size: 0.9rem;
}

.dropdown-item:hover {
    background-color: #f8f9fa;
}

/* Text colors */
.text-primary { color: #0d6efd !important; }
.text-success { color: #198754 !important; }
.text-info { color: #0dcaf0 !important; }
.text-warning { color: #ffc107 !important; }
.text-danger { color: #dc3545 !important; }
.text-muted { color: #6c757d !important; }
</style>
@endpush

@section('content')
<div class="mobile-content-padding">
    <div class="row">
        <!-- Post Content -->
        <div class="col-lg-8 mobile-main-content">
            <!-- Mobile Post Header -->
            <div class="mobile-post-header d-lg-none">
                <div class="d-flex justify-content-between align-items-start mb-3">
                    <div class="flex-grow-1">
                        @if($post->status === 'published')
                            <span class="badge bg-success mb-2">Published</span>
                        @elseif($post->status === 'draft')
                            <span class="badge bg-secondary mb-2">Draft</span>
                        @else
                            <span class="badge bg-warning text-dark mb-2">{{ ucfirst($post->status) }}</span>
                        @endif

                        @if($post->is_featured)
                            <span class="badge featured-badge mb-2 ms-1">
                                <i class="fas fa-star me-1"></i>Featured
                            </span>
                        @endif
                    </div>

                    <div class="dropdown mobile-dropdown-actions">
                        <button class="btn btn-outline-secondary btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown">
                            <i class="fas fa-ellipsis-v"></i>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li>
                                <form method="POST" action="{{ route('admin.posts.toggle-status', $post) }}" class="d-inline">
                                    @csrf
                                    @method('PATCH')
                                    <button type="submit" class="dropdown-item">
                                        <i class="fas fa-{{ $post->status === 'published' ? 'eye-slash' : 'eye' }} me-2"></i>
                                        {{ $post->status === 'published' ? 'Unpublish' : 'Publish' }}
                                    </button>
                                </form>
                            </li>
                            <li>
                                <form method="POST" action="{{ route('admin.posts.toggle-featured', $post) }}" class="d-inline">
                                    @csrf
                                    @method('PATCH')
                                    <button type="submit" class="dropdown-item">
                                        <i class="fas fa-star me-2"></i>
                                        {{ $post->is_featured ? 'Remove Featured' : 'Make Featured' }}
                                    </button>
                                </form>
                            </li>
                            <li><hr class="dropdown-divider"></li>
                            <li>
                                <form method="POST" action="{{ route('admin.posts.destroy', $post) }}" class="d-inline" onsubmit="return confirm('Are you sure you want to delete this post?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="dropdown-item text-danger">
                                        <i class="fas fa-trash me-2"></i>Delete Post
                                    </button>
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>

                <h1 class="h4 mb-3">{{ $post->title }}</h1>

                <div class="mobile-post-meta">
                    <span>
                        <img src="{{ $post->staff->avatar_url }}" class="rounded-circle me-1" width="16" height="16" alt="">
                        {{ $post->staff->name }}
                    </span>
                    <span>{{ $post->published_at ? $post->published_at->format('M d, Y') : 'Not published' }}</span>
                    <span>{{ $post->reading_time_text }}</span>
                </div>
            </div>

            <!-- Mobile Statistics -->
            <div class="d-lg-none mb-3">
                <div class="mobile-stats-grid">
                    <div class="mobile-stat-card">
                        <h4 class="text-primary">{{ number_format($post->views_count) }}</h4>
                        <small>Views</small>
                    </div>
                    <div class="mobile-stat-card">
                        <h4 class="text-success">{{ $post->comments->count() }}</h4>
                        <small>Comments</small>
                    </div>
                    <div class="mobile-stat-card">
                        <h4 class="text-info">{{ $post->approvedComments->count() }}</h4>
                        <small>Approved</small>
                    </div>
                    <div class="mobile-stat-card">
                        <h4 class="text-warning">{{ $post->comments->where('status', 'pending')->count() }}</h4>
                        <small>Pending</small>
                    </div>
                </div>
            </div>

            <!-- Desktop Post Header -->
            <div class="card mb-4 d-none d-lg-block">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-start mb-3">
                        <div>
                            @if($post->status === 'published')
                                <span class="badge bg-success mb-2">Published</span>
                            @elseif($post->status === 'draft')
                                <span class="badge bg-secondary mb-2">Draft</span>
                            @else
                                <span class="badge bg-warning text-dark mb-2">{{ ucfirst($post->status) }}</span>
                            @endif

                            @if($post->is_featured)
                                <span class="badge featured-badge mb-2 ms-1">
                                    <i class="fas fa-star me-1"></i>Featured
                                </span>
                            @endif
                        </div>

                        <div class="dropdown">
                            <button class="btn btn-outline-secondary btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown">
                                <i class="fas fa-ellipsis-v"></i>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li>
                                    <form method="POST" action="{{ route('admin.posts.toggle-status', $post) }}" class="d-inline">
                                        @csrf
                                        @method('PATCH')
                                        <button type="submit" class="dropdown-item">
                                            <i class="fas fa-{{ $post->status === 'published' ? 'eye-slash' : 'eye' }} me-2"></i>
                                            {{ $post->status === 'published' ? 'Unpublish' : 'Publish' }}
                                        </button>
                                    </form>
                                </li>
                                <li>
                                    <form method="POST" action="{{ route('admin.posts.toggle-featured', $post) }}" class="d-inline">
                                        @csrf
                                        @method('PATCH')
                                        <button type="submit" class="dropdown-item">
                                            <i class="fas fa-star me-2"></i>
                                            {{ $post->is_featured ? 'Remove Featured' : 'Make Featured' }}
                                        </button>
                                    </form>
                                </li>
                                <li><hr class="dropdown-divider"></li>
                                <li>
                                    <form method="POST" action="{{ route('admin.posts.destroy', $post) }}" class="d-inline" onsubmit="return confirm('Are you sure you want to delete this post?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="dropdown-item text-danger">
                                            <i class="fas fa-trash me-2"></i>Delete Post
                                        </button>
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <h1 class="h3 mb-3">{{ $post->title }}</h1>

                    <div class="d-flex align-items-center text-muted mb-4">
                        <img src="{{ $post->staff->avatar_url }}" class="rounded-circle me-2" width="32" height="32" alt="">
                        <span class="me-3">By <strong>{{ $post->staff->name }}</strong></span>
                        <span class="me-3">{{ $post->published_at ? $post->published_at->format('M d, Y') : 'Not published' }}</span>
                        <span class="me-3">{{ $post->reading_time_text }}</span>
                    </div>

                    @if($post->featured_image)
                    <div class="mb-4">
                        <img src="{{ $post->featured_image_url }}" class="img-fluid rounded" alt="{{ $post->title }}">
                    </div>
                    @endif

                    <div class="mb-4">
                        <h6>Excerpt:</h6>
                        <p class="text-muted">{{ $post->excerpt }}</p>
                    </div>

                    <div class="content">
                        {!! $post->content !!}
                    </div>

                    @if($post->tags->count() > 0)
                    <div class="mt-4 pt-4 border-top">
                        <h6>Tags:</h6>
                        <div>
                            @foreach($post->tags as $tag)
                            <a href="{{ route('admin.tags.show', $tag) }}" class="badge text-decoration-none me-2 mb-2" style="background-color: {{ $tag->color }}">
                                {{ $tag->name }}
                            </a>
                            @endforeach
                        </div>
                    </div>
                    @endif
                </div>
            </div>

            <!-- Mobile Post Content -->
            <div class="d-lg-none">
                @if($post->featured_image)
                <div class="mb-3">
                    <img src="{{ $post->featured_image_url }}" class="mobile-featured-image" alt="{{ $post->title }}">
                </div>
                @endif

                <div class="card mb-3">
                    <div class="card-body">
                        <h6 class="mb-2">Excerpt:</h6>
                        <p class="text-muted mb-0">{{ $post->excerpt }}</p>
                    </div>
                </div>

                <div class="card mb-3">
                    <div class="card-body">
                        <div class="mobile-content">
                            {!! $post->content !!}
                        </div>
                    </div>
                </div>

                @if($post->tags->count() > 0)
                <div class="card mb-3">
                    <div class="card-body">
                        <h6 class="mb-3">Tags:</h6>
                        <div class="mobile-tags">
                            @foreach($post->tags as $tag)
                            <a href="{{ route('admin.tags.show', $tag) }}" class="badge text-decoration-none" style="background-color: {{ $tag->color }}">
                                {{ $tag->name }}
                            </a>
                            @endforeach
                        </div>
                    </div>
                </div>
                @endif
            </div>

            <!-- Comments Section -->
            @if($post->comments->count() > 0)
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="card-title mb-0">
                        <i class="fas fa-comments me-2"></i>Comments ({{ $post->comments->count() }})
                    </h5>
                    <a href="{{ route('admin.comments.index', ['post' => $post->id]) }}" class="btn btn-sm btn-outline-primary">
                        <span class="d-none d-sm-inline">Manage Comments</span><span class="d-sm-none">Manage</span>
                    </a>
                </div>
                <div class="card-body">
                    <!-- Desktop Comments -->
                    <div class="d-none d-md-block">
                        @foreach($post->comments->take(5) as $comment)
                        <div class="d-flex mb-3 {{ !$loop->last ? 'border-bottom pb-3' : '' }}">
                            <img src="{{ $comment->avatar }}" class="rounded-circle me-3" width="40" height="40" alt="">
                            <div class="flex-grow-1">
                                <div class="d-flex justify-content-between align-items-start">
                                    <div>
                                        <h6 class="mb-1">{{ $comment->name }}</h6>
                                        <p class="mb-2">{{ Str::limit($comment->content, 150) }}</p>
                                        <small class="text-muted">{{ $comment->formatted_date }}</small>
                                    </div>
                                    <div>
                                        @if($comment->status === 'pending')
                                            <span class="badge bg-warning text-dark">Pending</span>
                                        @elseif($comment->status === 'approved')
                                            <span class="badge bg-success">Approved</span>
                                        @elseif($comment->status === 'spam')
                                            <span class="badge bg-danger">Spam</span>
                                        @else
                                            <span class="badge bg-secondary">{{ ucfirst($comment->status) }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>

                    <!-- Mobile Comments -->
                    <div class="d-md-none mobile-comments">
                        @foreach($post->comments->take(5) as $comment)
                        <div class="mobile-comment">
                            <div class="mobile-comment-header">
                                <img src="{{ $comment->avatar }}" class="mobile-comment-avatar" alt="">
                                <div class="mobile-comment-name">{{ $comment->name }}</div>
                                <div class="mobile-comment-date">{{ $comment->formatted_date }}</div>
                            </div>
                            <div class="mobile-comment-content">
                                {{ Str::limit($comment->content, 100) }}
                            </div>
                            <div>
                                @if($comment->status === 'pending')
                                    <span class="badge bg-warning text-dark">Pending</span>
                                @elseif($comment->status === 'approved')
                                    <span class="badge bg-success">Approved</span>
                                @elseif($comment->status === 'spam')
                                    <span class="badge bg-danger">Spam</span>
                                @else
                                    <span class="badge bg-secondary">{{ ucfirst($comment->status) }}</span>
                                @endif
                            </div>
                        </div>
                        @endforeach
                    </div>

                    @if($post->comments->count() > 5)
                    <div class="text-center mt-3">
                        <a href="{{ route('admin.comments.index', ['post' => $post->id]) }}" class="btn btn-outline-primary">
                            View All {{ $post->comments->count() }} Comments
                        </a>
                    </div>
                    @endif
                </div>
            </div>
            @endif
        </div>

        <!-- Sidebar -->
        <div class="col-lg-4">
            <!-- Desktop Statistics -->
            <div class="card mb-4 d-none d-lg-block">
                <div class="card-header">
                    <h5 class="card-title mb-0">
                        <i class="fas fa-chart-bar me-2"></i>Statistics
                    </h5>
                </div>
                <div class="card-body">
                    <div class="row text-center">
                        <div class="col-6 mb-3">
                            <h3 class="text-primary mb-1">{{ number_format($post->views_count) }}</h3>
                            <small class="text-muted">Views</small>
                        </div>
                        <div class="col-6 mb-3">
                            <h3 class="text-success mb-1">{{ $post->comments->count() }}</h3>
                            <small class="text-muted">Comments</small>
                        </div>
                        <div class="col-6">
                            <h3 class="text-info mb-1">{{ $post->approvedComments->count() }}</h3>
                            <small class="text-muted">Approved</small>
                        </div>
                        <div class="col-6">
                            <h3 class="text-warning mb-1">{{ $post->comments->where('status', 'pending')->count() }}</h3>
                            <small class="text-muted">Pending</small>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Post Information -->
            <div class="card mb-4 mobile-sidebar-card">
                <div class="card-header">
                    <h5 class="card-title mb-0">
                        <i class="fas fa-info-circle me-2"></i>Post Information
                    </h5>
                </div>
                <div class="card-body">
                    <!-- Desktop Info -->
                    <div class="d-none d-md-block">
                        <div class="mb-3">
                            <label class="form-label fw-bold">Author:</label>
                            <div class="d-flex align-items-center">
                                <img src="{{ $post->staff->avatar_url }}" class="rounded-circle me-2" width="24" height="24" alt="">
                                <a href="{{ route('admin.staff.show', $post->staff) }}" class="text-decoration-none">
                                    {{ $post->staff->name }}
                                </a>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-bold">Category:</label>
                            <div>
                                <a href="{{ route('admin.categories.show', $post->category) }}" class="badge text-decoration-none" style="background-color: {{ $post->category->color }}">
                                    {{ $post->category->name }}
                                </a>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-bold">Status:</label>
                            <div>
                                @if($post->status === 'published')
                                    <span class="badge bg-success">Published</span>
                                @elseif($post->status === 'draft')
                                    <span class="badge bg-secondary">Draft</span>
                                @else
                                    <span class="badge bg-warning text-dark">{{ ucfirst($post->status) }}</span>
                                @endif
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-bold">Dates:</label>
                            <div class="small">
                                <div><strong>Created:</strong> {{ $post->created_at->format('M d, Y \a\t h:i A') }}</div>
                                <div><strong>Updated:</strong> {{ $post->updated_at->format('M d, Y \a\t h:i A') }}</div>
                                @if($post->published_at)
                                    <div><strong>Published:</strong> {{ $post->published_at->format('M d, Y \a\t h:i A') }}</div>
                                @endif
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-bold">Reading Time:</label>
                            <div>{{ $post->reading_time_text }}</div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-bold">Slug:</label>
                            <div class="small text-muted">{{ $post->slug }}</div>
                        </div>

                        @if($post->allow_comments)
                        <div class="mb-3">
                            <span class="badge bg-info">
                                <i class="fas fa-comments me-1"></i>Comments Enabled
                            </span>
                        </div>
                        @endif
                    </div>

                    <!-- Mobile Info -->
                    <div class="d-md-none">
                        <div class="mobile-info-row">
                            <span class="mobile-info-label">Author:</span>
                            <div class="d-flex align-items-center">
                                <img src="{{ $post->staff->avatar_url }}" class="rounded-circle me-1" width="20" height="20" alt="">
                                <span>{{ $post->staff->name }}</span>
                            </div>
                        </div>

                        <div class="mobile-info-row">
                            <span class="mobile-info-label">Category:</span>
                            <span class="badge" style="background-color: {{ $post->category->color }}">
                                {{ $post->category->name }}
                            </span>
                        </div>

                        <div class="mobile-info-row">
                            <span class="mobile-info-label">Status:</span>
                            @if($post->status === 'published')
                                <span class="badge bg-success">Published</span>
                            @elseif($post->status === 'draft')
                                <span class="badge bg-secondary">Draft</span>
                            @else
                                <span class="badge bg-warning text-dark">{{ ucfirst($post->status) }}</span>
                            @endif
                        </div>

                        <div class="mobile-info-row">
                            <span class="mobile-info-label">Created:</span>
                            <span>{{ $post->created_at->format('M d, Y') }}</span>
                        </div>

                        @if($post->published_at)
                        <div class="mobile-info-row">
                            <span class="mobile-info-label">Published:</span>
                            <span>{{ $post->published_at->format('M d, Y') }}</span>
                        </div>
                        @endif

                        <div class="mobile-info-row">
                            <span class="mobile-info-label">Reading Time:</span>
                            <span>{{ $post->reading_time_text }}</span>
                        </div>

                        @if($post->allow_comments)
                        <div class="mobile-info-row">
                            <span class="mobile-info-label">Comments:</span>
                            <span class="badge bg-info">Enabled</span>
                        </div>
                        @endif
                    </div>
                </div>
            </div>

            <!-- SEO Information -->
            @if($post->meta_title || $post->meta_description || $post->focus_keyword)
            <div class="card mb-4 mobile-sidebar-card">
                <div class="card-header">
                    <h5 class="card-title mb-0">
                        <i class="fas fa-search me-2"></i>SEO Information
                    </h5>
                </div>
                <div class="card-body seo-info-mobile">
                    <!-- Desktop SEO Info -->
                    <div class="d-none d-md-block">
                        @if($post->meta_title)
                        <div class="mb-3">
                            <label class="form-label fw-bold">Meta Title:</label>
                            <div class="small">{{ $post->meta_title }}</div>
                        </div>
                        @endif

                        @if($post->meta_description)
                        <div class="mb-3">
                            <label class="form-label fw-bold">Meta Description:</label>
                            <div class="small">{{ $post->meta_description }}</div>
                        </div>
                        @endif

                        @if($post->focus_keyword)
                        <div class="mb-3">
                            <label class="form-label fw-bold">Focus Keyword:</label>
                            <div>
                                <span class="badge bg-primary">{{ $post->focus_keyword }}</span>
                            </div>
                        </div>
                        @endif

                        @if($post->meta_keywords)
                        <div class="mb-3">
                            <label class="form-label fw-bold">Keywords:</label>
                            <div class="small">{{ $post->meta_keywords }}</div>
                        </div>
                        @endif
                    </div>

                    <!-- Mobile SEO Info -->
                    <div class="d-md-none">
                        @if($post->meta_title)
                        <div class="mobile-info-row">
                            <span class="mobile-info-label">Meta Title:</span>
                            <span>{{ Str::limit($post->meta_title, 30) }}</span>
                        </div>
                        @endif

                        @if($post->focus_keyword)
                        <div class="mobile-info-row">
                            <span class="mobile-info-label">Focus Keyword:</span>
                            <span class="badge bg-primary">{{ $post->focus_keyword }}</span>
                        </div>
                        @endif

                        @if($post->meta_description)
                        <div class="mobile-info-row">
                            <span class="mobile-info-label">Meta Description:</span>
                            <span>{{ Str::limit($post->meta_description, 40) }}</span>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
            @endif

            <!-- Desktop Quick Actions -->
            <div class="card d-none d-lg-block">
                <div class="card-header">
                    <h5 class="card-title mb-0">
                        <i class="fas fa-bolt me-2"></i>Quick Actions
                    </h5>
                </div>
                <div class="card-body">
                    <div class="d-grid gap-2">
                        <a href="{{ route('admin.posts.edit', $post) }}" class="btn btn-primary">
                            <i class="fas fa-edit me-2"></i>Edit Post
                        </a>

                        <form method="POST" action="{{ route('admin.posts.toggle-status', $post) }}" class="d-inline">
                            @csrf
                            @method('PATCH')
                            <button type="submit" class="btn btn-outline-secondary w-100">
                                <i class="fas fa-{{ $post->status === 'published' ? 'eye-slash' : 'eye' }} me-2"></i>
                                {{ $post->status === 'published' ? 'Unpublish' : 'Publish' }}
                            </button>
                        </form>

                        <form method="POST" action="{{ route('admin.posts.toggle-featured', $post) }}" class="d-inline">
                            @csrf
                            @method('PATCH')
                            <button type="submit" class="btn btn-outline-warning w-100">
                                <i class="fas fa-star me-2"></i>
                                {{ $post->is_featured ? 'Remove Featured' : 'Make Featured' }}
                            </button>
                        </form>

                        @if($post->comments->where('status', 'pending')->count() > 0)
                        <a href="{{ route('admin.comments.index', ['post' => $post->id, 'status' => 'pending']) }}" class="btn btn-outline-info">
                            <i class="fas fa-clock me-2"></i>Review Pending Comments ({{ $post->comments->where('status', 'pending')->count() }})
                        </a>
                        @endif

                        <a href="{{ route('blog.show', $post) }}" target="_blank" class="btn btn-outline-success">
                            <i class="fas fa-external-link-alt me-2"></i>View Live Post
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Mobile Quick Actions -->
<div class="mobile-quick-actions d-lg-none">
    <div class="d-grid gap-2">
        <div class="row g-2">
            <div class="col-6">
                <a href="{{ route('admin.posts.edit', $post) }}" class="btn btn-primary w-100">
                    <i class="fas fa-edit me-1"></i>Edit
                </a>
            </div>
            <div class="col-6">
                <a href="{{ route('blog.show', $post) }}" target="_blank" class="btn btn-outline-success w-100">
                    <i class="fas fa-external-link-alt me-1"></i>Live
                </a>
            </div>
        </div>
        @if($post->comments->where('status', 'pending')->count() > 0)
        <a href="{{ route('admin.comments.index', ['post' => $post->id, 'status' => 'pending']) }}" class="btn btn-outline-info w-100">
            <i class="fas fa-clock me-1"></i>Review Pending ({{ $post->comments->where('status', 'pending')->count() }})
        </a>
        @endif
    </div>
</div>
@endsection

@push('scripts')
<script>
// Confirmation for delete actions
function confirmDelete(message = 'Are you sure you want to delete this item?') {
    return confirm(message);
}
</script>
@endpush
