<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\PostCategory;
use App\Models\PostTag;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display blog listing page (alias for index)
     */
    public function blog()
    {
        return $this->index();
    }

    /**
     * Display blog listing page with recent posts
     */
    public function index()
{
    // Debug: Check all posts
    $allPosts = Post::all();
    \Log::info('All posts count: ' . $allPosts->count());
    \Log::info('All posts status: ', $allPosts->pluck('status')->toArray());
    \Log::info('All posts published_at: ', $allPosts->pluck('published_at')->toArray());

    // Fetch published posts
    $posts = Post::published()
            ->with(['category', 'tags', 'staff'])
            ->orderBy('published_at', 'desc')
            ->get();

    \Log::info('Published posts count: ' . $posts->count());

    // Fetch recent posts for sidebar
    $recentPosts = Post::published()
                      ->with(['category', 'tags'])
                      ->orderBy('published_at', 'desc')
                      ->limit(5)
                      ->get();

    $categories = PostCategory::withCount('posts')
                            ->orderBy('name', 'asc')
                            ->get();

    $tags = PostTag::withCount('posts')
                  ->orderBy('posts_count', 'desc')
                  ->limit(10)
                  ->get();

    return view('pages.blog', [
        'posts' => $posts,
        'recentPosts' => $recentPosts,
        'categories' => $categories,
        'tags' => $tags
    ]);
}

    /**
     * Display single blog post
     */
    public function show($slug)
    {
        $post = Post::where('slug', $slug)->published()->firstOrFail();

        // Increment views
        $post->incrementViews();

        // Fetch recent posts for sidebar
        $recentPosts = Post::published()
                          ->where('id', '!=', $post->id)
                          ->orderBy('published_at', 'desc')
                          ->limit(5)
                          ->get();

        // Fetch related posts (same category or tags)
        $relatedPosts = $post->getRelatedPosts(3);

        // Fetch categories and tags for sidebar
        $categories = PostCategory::withCount('posts')
                                ->orderBy('name', 'asc')
                                ->get();

        $tags = PostTag::withCount('posts')
                      ->orderBy('posts_count', 'desc')
                      ->limit(10)
                      ->get();

        return view('pages.blogshow', [
            'post' => $post,
            'recentPosts' => $recentPosts,
            'relatedPosts' => $relatedPosts,
            'categories' => $categories,
            'tags' => $tags
        ]);
    }

    /**
     * Filter posts by category
     */
    public function category($categorySlug)
    {
        $category = PostCategory::where('slug', $categorySlug)->firstOrFail();

        $posts = $category->posts()
                         ->published()
                         ->orderBy('published_at', 'desc')
                         ->paginate(6);

        $recentPosts = Post::published()
                          ->orderBy('published_at', 'desc')
                          ->limit(5)
                          ->get();

        $categories = PostCategory::withCount('posts')
                                ->orderBy('name', 'asc')
                                ->get();

        $tags = PostTag::withCount('posts')
                      ->orderBy('posts_count', 'desc')
                      ->limit(10)
                      ->get();

        return view('pages.blog', [
            'posts' => $posts,
            'recentPosts' => $recentPosts,
            'categories' => $categories,
            'tags' => $tags,
            'activeCategory' => $category
        ]);
    }

    /**
     * Filter posts by tag
     */
    public function tag($tagSlug)
    {
        $tag = PostTag::where('slug', $tagSlug)->firstOrFail();

        $posts = $tag->posts()
                    ->published()
                    ->orderBy('published_at', 'desc')
                    ->paginate(6);

        $recentPosts = Post::published()
                          ->orderBy('published_at', 'desc')
                          ->limit(5)
                          ->get();

        $categories = PostCategory::withCount('posts')
                                ->orderBy('name', 'asc')
                                ->get();

        $tags = PostTag::withCount('posts')
                      ->orderBy('posts_count', 'desc')
                      ->limit(10)
                      ->get();

        return view('pages.blog', [
            'posts' => $posts,
            'recentPosts' => $recentPosts,
            'categories' => $categories,
            'tags' => $tags,
            'activeTag' => $tag
        ]);
    }

    /**
     * Archive posts by year/month
     */
    public function archive($year, $month = null)
    {
        $query = Post::published()
                    ->whereYear('published_at', $year);

        if ($month) {
            $query->whereMonth('published_at', $month);
        }

        $posts = $query->orderBy('published_at', 'desc')
                      ->paginate(6);

        $recentPosts = Post::published()
                          ->orderBy('published_at', 'desc')
                          ->limit(5)
                          ->get();

        $categories = PostCategory::withCount('posts')
                                ->orderBy('name', 'asc')
                                ->get();

        $tags = PostTag::withCount('posts')
                      ->orderBy('posts_count', 'desc')
                      ->limit(10)
                      ->get();

        $archiveTitle = $month
            ? date('F Y', mktime(0, 0, 0, $month, 1, $year))
            : $year;

        return view('pages.blog', [
            'posts' => $posts,
            'recentPosts' => $recentPosts,
            'categories' => $categories,
            'tags' => $tags,
            'archiveTitle' => $archiveTitle
        ]);
    }

    /**
     * Search posts
     */
    public function search(Request $request)
    {
        $query = $request->input('q');

        if (strlen($query) < 2) {
            return redirect()->route('blog')
                          ->with('error', 'Search query must be at least 2 characters.');
        }

        $posts = Post::published()
                    ->search($query)
                    ->orderBy('published_at', 'desc')
                    ->paginate(6);

        $recentPosts = Post::published()
                          ->orderBy('published_at', 'desc')
                          ->limit(5)
                          ->get();

        $categories = PostCategory::withCount('posts')
                                ->orderBy('name', 'asc')
                                ->get();

        $tags = PostTag::withCount('posts')
                      ->orderBy('posts_count', 'desc')
                      ->limit(10)
                      ->get();

        return view('pages.blog', [
            'posts' => $posts,
            'recentPosts' => $recentPosts,
            'categories' => $categories,
            'tags' => $tags,
            'searchQuery' => $query
        ]);
    }

    /**
     * Store blog comment
     */
    public function storeComment(Request $request)
    {
        $validated = $request->validate([
            'post_id' => 'required|exists:posts,id',
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'content' => 'required|string|min:10',
            'parent_id' => 'nullable|exists:post_comments,id'
        ]);

        PostComment::create($validated);

        return redirect()->back()->with('success', 'Comment posted successfully!');
    }
}
