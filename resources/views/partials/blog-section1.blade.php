<section class="ptb-60 bg-blog">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="blog1-posts-area">
                    <div class="row">
                        <!-- Dynamic Blog Posts -->
                        @forelse($posts as $post)
                            <div class="col-md-6 mt-3 mb-3">
                                <div class="blog1-single-box">
                                    <a href="{{ route('blog.show', $post->slug) }}">
                                        <div class="thumbnail image-anime">
                                            <img
                                                src="{{ $post->featured_image_url }}"
                                                alt="{{ $post->title }} - Blog Post"
                                                class="img-fluid"
                                                loading="lazy">
                                        </div>
                                        <div class="heading1">
                                            <div class="social-area">
                                                <a href="#" class="date">
                                                    <img src="{{ asset('assets/images/inner-images/date1.svg') }}"
                                                         alt="date"
                                                         loading="lazy">
                                                    {{ $post->published_date }}
                                                </a>
                                                <a href="#" class="time">
                                                    <img src="{{ asset('assets/images/inner-images/time1.svg') }}"
                                                         alt="reading time"
                                                         loading="lazy">
                                                    {{ $post->reading_time_text }}
                                                </a>
                                            </div>
                                            <h4>
                                                <a href="{{ route('blog.show', $post->slug) }}">
                                                    {{ $post->title }}
                                                </a>
                                            </h4>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        @empty
                            <div class="col-md-12 text-center mt-5">
                                <p class="text-muted">No blog posts available at the moment.</p>
                            </div>
                        @endforelse

                    </div>

                    <!-- Pagination -->
                    @if($posts instanceof \Illuminate\Pagination\AbstractPaginator)
                        <div class="row mt-4">
                            <div class="col-md-12">
                                {{ $posts->links() }}
                            </div>
                        </div>
                    @endif
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
                                <h3 class="pb-3">Category</h3>
                                <ul class="category-list">
                                    @foreach($categories as $category)
                                        <li>
                                             {{-- <a href="{{ route('posts.byCategory', $category->slug) }}">
                                                {{ $category->name }}
                                                <span class="post-count">({{ $category->posts_count ?? 0 }})</span>
                                            </a>  --}}

                                                {{ $category->name }}
                                                {{-- <span class="post-count">({{ $category->posts_count ?? 0 }})</span> --}}

                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <!-- Tags Widget -->
                       {{-- @if(isset($tags) && $tags->count())
                            <div class="sidebar-widget_1 tags mt-3 mb-3 pb-3">
                                <h3 class="pb-3">Popular Tags</h3>
                                 <div class="tag-cloud">
                                    @foreach($tags as $tag)
                                        <a href="{{ route('posts.byTag', $tag->slug) }}" class="tag-item">
                                            {{ $tag->name }}
                                        </a>
                                    @endforeach
                                </div>
                            </div>
                        @endif --}}

                        <!-- Instagram Feed Widget -->
                        {{-- <div class="sidebar-widget_1 instagram-feed mt-3 mb-3 pb-0">
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
                        </div>  --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
