@extends('layouts.master')

@section('title', $post->meta_title ?? $post->title)

@section('page-title', $post->title)

@section('content')

    @include('partials.blogshow-banner')

    <section class="ptb-60 bg-blog">
        <div class="container">
            <div class="row">
                <!-- Main Post Content -->
                <div class="col-lg-8">
                    <div class="blog-single-post">
                        <!-- Featured Image -->
                        <div class="featured-image mb-4">
                            <img
    src="{{ $post->featured_image_url }}"
    alt="{{ $post->title }}"
    class="img-fluid rounded"
    style="max-width: 600px; height: auto;"
    loading="lazy">
                        </div>

                        <!-- Post Header -->
                        <div class="post-header mb-4">
                            <h4 class="post-title mb-3">{{ $post->title }}</h4>

                            <div class="post-meta d-flex align-items-center gap-3 flex-wrap">
                                <!-- Published Date -->
                                <span class="post-date">
                                    <img src="{{ asset('assets/images/inner-images/date1.svg') }}"
                                         alt="date"
                                         loading="lazy"
                                         style="margin-right: 5px;">
                                    {{ $post->published_date_time }}
                                </span>

                                <!-- Reading Time -->
                                <span class="reading-time">
                                    <img src="{{ asset('assets/images/inner-images/time1.svg') }}"
                                         alt="reading time"
                                         loading="lazy"
                                         style="margin-right: 5px;">
                                    {{ $post->reading_time_text }}
                                </span>

                                <!-- Category -->
                                @if($post->category)
                                    <span class="post-category">
                                        <a href="{{ route('blogs.category', $post->category->slug) }}"
                                           class="badge bg-primary">
                                            {{ $post->category->name }}
                                        </a>
                                    </span>
                                @endif

                                <!-- Views -->
                                <span class="post-views">
                                    👁️ {{ $post->views_count ?? 0 }} views
                                </span>
                            </div>
                        </div>

                        <!-- Excerpt/Summary -->
                        @if($post->excerpt)
                            <div class="post-excerpt mb-4">
                                <p class="lead">{{ $post->excerpt }}</p>
                            </div>
                        @endif

                        <!-- Post Content -->
                        <div class="post-content mb-5">
                            {!! $post->content !!}
                        </div>

                        <!-- Tags -->
                        @if($post->tags->count())
                            <div class="post-tags mb-5 pb-4 border-bottom">
                                <h6 class="mb-3">Tags:</h6>
                                <div class="tag-list">
                                    @foreach($post->tags as $tag)
                                        <a href="{{ route('blogs.tag', $tag->slug) }}"
                                           class="tag-item badge bg-light text-dark me-2 mb-2">
                                            #{{ $tag->name }}
                                        </a>
                                    @endforeach
                                </div>
                            </div>
                        @endif

                        <!-- Post Footer -->
                        <div class="post-footer mb-5 pb-4 border-bottom">
                            <div class="row align-items-center">
                                <div class="col-md-6">
                                    @if($post->staff)
                                        <div class="author-info">
                                            <h6 class="mb-2">About Author</h6>
                                            <div class="author-details d-flex align-items-center gap-3">
                                                @if($post->staff->avatar)
                                                    <img src="{{ asset('storage/' . $post->staff->avatar) }}"
                                                         alt="{{ $post->staff->name }}"
                                                         class="rounded-circle"
                                                         width="50"
                                                         height="50"
                                                         loading="lazy">
                                                @else
                                                    <div class="rounded-circle bg-secondary text-white d-flex align-items-center justify-content-center"
                                                         style="width: 50px; height: 50px;">
                                                        {{ substr($post->staff->name, 0, 1) }}
                                                    </div>
                                                @endif
                                                <div>
                                                    <p class="mb-0"><strong>{{ $post->staff->name }}</strong></p>
                                                    @if($post->staff->bio)
                                                        <p class="mb-0 small text-muted">{{ Str::limit($post->staff->bio, 100) }}</p>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                </div>
                                <div class="col-md-6 text-md-end mt-3 mt-md-0">
                                    <!-- Social Share Buttons (optional) -->
                                    <div class="share-buttons">
                                        <a href="https://www.facebook.com/sharer/sharer.php?u={{ url()->current() }}"
                                           target="_blank"
                                           class="btn btn-sm btn-outline-primary me-2">
                                            <i class="bi bi-facebook"></i> Share
                                        </a>
                                        <a href="https://twitter.com/intent/tweet?url={{ url()->current() }}&text={{ $post->title }}"
                                           target="_blank"
                                           class="btn btn-sm btn-outline-info">
                                            <i class="bi bi-twitter"></i> Tweet
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Related Posts -->
                        @if($relatedPosts->count())
                            <div class="related-posts mb-5">
                                <h3 class="mb-4">Related Articles</h3>
                                <div class="row">
                                    @foreach($relatedPosts as $relatedPost)
                                        <div class="col-md-6 mb-4">
                                            <div class="blog1-single-box h-100">
                                                <a href="{{ route('blog.show', $relatedPost->slug) }}">
                                                    <div class="thumbnail image-anime">
                                                        <img
                                                            src="{{ $relatedPost->featured_image_url }}"
                                                            alt="{{ $relatedPost->title }}"
                                                            class="img-fluid"
                                                            loading="lazy">
                                                    </div>
                                                    <div class="heading1">
                                                        <div class="social-area">
                                                            <a href="#" class="date">
                                                                <img src="{{ asset('assets/images/inner-images/date1.svg') }}"
                                                                     alt="date"
                                                                     loading="lazy">
                                                                {{ $relatedPost->published_date }}
                                                            </a>
                                                            <a href="#" class="time">
                                                                <img src="{{ asset('assets/images/inner-images/time1.svg') }}"
                                                                     alt="reading time"
                                                                     loading="lazy">
                                                                {{ $relatedPost->reading_time_text }}
                                                            </a>
                                                        </div>
                                                        <h5>
                                                            <a href="{{ route('blog.show', $relatedPost->slug) }}">
                                                                {{ $relatedPost->title }}
                                                            </a>
                                                        </h5>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endif

                        <!-- Navigation Links -->
                        <div class="post-navigation mb-5 pb-4 border-bottom">
                            <div class="row">
                                <div class="col-md-6">
                                    @php
                                        $prevPost = \App\Models\Post::published()
                                            ->where('published_at', '<', $post->published_at)
                                            ->orderBy('published_at', 'desc')
                                            ->first();
                                    @endphp
                                    @if($prevPost)
                                        <a href="{{ route('blog.show', $prevPost->slug) }}"
                                           class="btn btn-outline-secondary btn-sm">
                                            <i class="bi bi-arrow-left"></i> Previous Post
                                        </a>
                                    @endif
                                </div>
                                <div class="col-md-6 text-md-end">
                                    @php
                                        $nextPost = \App\Models\Post::published()
                                            ->where('published_at', '>', $post->published_at)
                                            ->orderBy('published_at', 'asc')
                                            ->first();
                                    @endphp
                                    @if($nextPost)
                                        <a href="{{ route('blog.show', $nextPost->slug) }}"
                                           class="btn btn-outline-secondary btn-sm">
                                            Next Post <i class="bi bi-arrow-right"></i>
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Sidebar -->
                <div class="col-lg-4">
                    <div class="sticky-top mt-3 mb-3">
                        <div class="blog1-sidebar-area">
                            <!-- Recent Posts Widget -->
                            <div class="sidebar-widget_1 _recent-posts mt-40">
                                <h3 class="pb-3">Recent Posts</h3>

                                @forelse($recentPosts as $recentPost)
                                    <div class="blog1-recent-box mt-16">
                                        <a href="{{ route('blog.show', $recentPost->slug) }}">
                                            <div class="">
                                                <div class="recent-thumb">
                                                    <img
                                                        src="{{ $recentPost->featured_image_url }}"
                                                        alt="{{ $recentPost->title }}"
                                                        loading="lazy">
                                                </div>
                                            </div>
                                            <div class="heading">
                                                <a href="#" class="date">
                                                    <img src="{{ asset('assets/images/inner-images/date1.svg') }}"
                                                         alt="date"
                                                         loading="lazy">
                                                    {{ $recentPost->published_date }}
                                                </a>
                                                <h5>
                                                    <a href="{{ route('blog.show', $recentPost->slug) }}">
                                                        {{ $recentPost->title }}
                                                    </a>
                                                </h5>
                                            </div>
                                        </a>
                                    </div>
                                @empty
                                    <p class="text-muted">No recent posts available.</p>
                                @endforelse

                            </div>

                            <!-- Categories Widget -->
                            @if(isset($categories) && $categories->count())
                                <div class="sidebar-widget_1 categories mt-3 mb-3 pb-3">
                                    <h3 class="pb-3">Categories</h3>
                                    <ul class="category-list">
                                        @foreach($categories as $category)
                                            <li>
                                                <a href="{{ route('blogs.category', $category->slug) }}">
                                                    {{ $category->name }}
                                                    <span class="post-count">({{ $category->posts_count ?? 0 }})</span>
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <!-- Tags Widget -->
                            @if(isset($tags) && $tags->count())
                                <div class="sidebar-widget_1 tags mt-3 mb-3 pb-3">
                                    <h3 class="pb-3">Popular Tags</h3>
                                    <div class="tag-cloud">
                                        @foreach($tags as $tag)
                                            <a href="{{ route('blogs.tag', $tag->slug) }}" class="tag-item">
                                                {{ $tag->name }}
                                            </a>
                                        @endforeach
                                    </div>
                                </div>
                            @endif

                            <!-- Instagram Feed Widget -->
                            <div class="sidebar-widget_1 instagram-feed mt-3 mb-3 pb-0">
                                <h3 class="">Instagram Posts</h3>
                                <div class="feed-all">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p-0">
                                            <div class="instagram-feed">
                                                <blockquote class="instagram-media"
                                                    data-instgrm-permalink="https://www.instagram.com"
                                                    data-instgrm-version="12">
                                                </blockquote>
                                                <script async src="{{ asset('www.instagram.com/embed.js') }}"></script>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

@push('styles')
<style>
    .post-title {
        font-size: 2.5rem;
        font-weight: 700;
        line-height: 1.2;
        color: #0E1871;
    }

    .post-meta {
        font-size: 0.95rem;
        color: #666;
    }

    .post-meta span {
        display: inline-flex;
        align-items: center;
    }

    .post-meta img {
        width: 18px;
        height: 18px;
    }

    .post-content {
        font-size: 1.1rem;
        line-height: 1.8;
        color: #333;
    }

    .post-content h2 {
        font-size: 1.8rem;
        margin-top: 2rem;
        margin-bottom: 1rem;
        color: #0E1871;
        font-weight: 700;
    }

    .post-content h3 {
        font-size: 1.5rem;
        margin-top: 1.5rem;
        margin-bottom: 1rem;
        color: #0E1871;
        font-weight: 600;
    }

    .post-content p {
        margin-bottom: 1.5rem;
    }

    .post-content ul,
    .post-content ol {
        margin-bottom: 1.5rem;
        padding-left: 2rem;
    }

    .post-content li {
        margin-bottom: 0.5rem;
    }

    .post-content blockquote {
        border-left: 4px solid #127a81;
        padding-left: 1.5rem;
        margin: 1.5rem 0;
        font-style: italic;
        color: #666;
    }

    .post-content code {
        background-color: #f5f5f5;
        padding: 0.2rem 0.4rem;
        border-radius: 3px;
        font-family: 'Courier New', monospace;
        color: #d63384;
    }

    .post-content pre {
        background-color: #f5f5f5;
        padding: 1rem;
        border-radius: 5px;
        overflow-x: auto;
        margin-bottom: 1.5rem;
    }

    .post-content pre code {
        color: #000;
    }

    .post-content img {
        max-width: 100%;
        height: auto;
        margin: 1.5rem 0;
        border-radius: 5px;
    }

    .featured-image img {
        border-radius: 8px;
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
    }

    .tag-item {
        display: inline-block;
        padding: 0.4rem 0.8rem;
        margin: 0.3rem;
        background-color: #f0f0f0;
        color: #0E1871;
        text-decoration: none;
        border-radius: 20px;
        font-size: 0.9rem;
        transition: all 0.3s ease;
    }

    .tag-item:hover {
        background-color: #127a81;
        color: #fff;
    }

    .author-info {
        background-color: #f9f9f9;
        padding: 1.5rem;
        border-radius: 8px;
        border-left: 4px solid #127a81;
    }

    .author-details {
        margin-top: 1rem;
    }

    .related-posts h3 {
        font-size: 1.8rem;
        color: #0E1871;
        font-weight: 700;
    }

    .blog1-single-box {
        transition: all 0.3s ease;
    }

    .blog1-single-box:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    }

    @media (max-width: 768px) {
        .post-title {
            font-size: 1.8rem;
        }

        .post-content {
            font-size: 1rem;
        }

        .post-meta {
            flex-direction: column !important;
        }
    }
</style>
@endpush
