<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\BlogController;


// Admin Controllers
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\AdminPostController;
use App\Http\Controllers\Admin\AdminCategoryController;
use App\Http\Controllers\Admin\AdminTagController;
use App\Http\Controllers\Admin\AdminCommentController;
use App\Http\Controllers\Admin\AdminStaffController;

// Public Routes
Route::get('/seatselection', [PageController::class, 'selection'])->name('seatselection');
Route::get('/', [PageController::class, 'index'])->name('index');
Route::get('/eb1a-visa', [PageController::class, 'eb1visa'])->name('eb1a-visa');
Route::get('/contactus', [PageController::class, 'contactus'])->name('contactus');
Route::post('/store-booking', [PageController::class, 'storeBooking'])->name('store-booking');

Route::get('/o1avisa', [PageController::class, 'o1avisa'])->name('o1avisa');
Route::get('/eb2-niw', [PageController::class, 'eb2niw'])->name('eb2-niw');
Route::get('/our-story', [PageController::class, 'ourstory'])->name('our-story');
Route::get('/why-choose-us', [PageController::class, 'whychooseus'])->name('why-choose-us');
Route::get('/leadership-team', [PageController::class, 'leadershipteam'])->name('leadership-team');
Route::get('/reports', [PageController::class, 'reports'])->name('reports');
Route::get('/annual-report-2024', [PageController::class, 'annualreport2024'])->name('annual-report-2024');
Route::get('/partnerships-boundless', [PageController::class, 'partnershipsboundless'])->name('partnerships-boundless');
Route::get('/media-news', [PageController::class, 'medianews'])->name('media-news');
Route::get('/webinar', [PageController::class, 'webinar'])->name('webinar');
Route::get('/turing-ai', [PageController::class, 'turingai'])->name('turing-ai');
Route::get('/reviews', [PageController::class, 'reviews'])->name('reviews');
Route::get('/resources', [PageController::class, 'resources'])->name('resources');
Route::get('/case-studies', [PageController::class, 'casestudies'])->name('case-studies');
Route::get('/vodcast', [PageController::class, 'vodcast'])->name('vodcast');
Route::get('/blog', [BlogController::class, 'blog'])->name('blog');
Route::get('/faqs', [PageController::class, 'faqs'])->name('faqs');
Route::get('/terms-of-use', [PageController::class, 'termsofuse'])->name('terms-of-use');
Route::get('/who-are-we', [PageController::class, 'whoarewe'])->name('who-are-we');
Route::get('/refund-policy', [PageController::class, 'refundpolicy'])->name('refund-policy');
Route::get('/disclaimer', [PageController::class, 'disclaimer'])->name('disclaimer');

Route::get('/testimonials', [PageController::class, 'testimonials'])->name('testimonials');
// Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
Route::get('/privacy-policy', [PageController::class, 'privacypolicy'])->name('privacy-policy');



Route::post('/bookings', [App\Http\Controllers\BookingController::class, 'store'])->name('bookings.store');
Route::get('/bookings', [App\Http\Controllers\BookingController::class, 'index'])->name('bookings.index');

/* Admin Authentication Routes */
Route::middleware('guest:admin')->prefix('admin')->name('admin.')->group(function () {
    // Login routes
    Route::get('/login', [App\Http\Controllers\Admin\AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [App\Http\Controllers\Admin\AuthController::class, 'login'])->name('login.post');

    // Register routes (optional - you might want to disable this in production)
    Route::get('/register', [App\Http\Controllers\Admin\AuthController::class, 'showRegisterForm'])->name('register');
    Route::post('/register', [App\Http\Controllers\Admin\AuthController::class, 'register'])->name('register.post');

    // Forgot password routes
    Route::get('/forgot-password', [App\Http\Controllers\Admin\AuthController::class, 'showForgotPasswordForm'])->name('password.request');
    Route::post('/forgot-password', [App\Http\Controllers\Admin\AuthController::class, 'sendResetLinkEmail'])->name('password.email');
    Route::get('/reset-password/{token}', [App\Http\Controllers\Admin\AuthController::class, 'showResetPasswordForm'])->name('password.reset');
    Route::post('/reset-password', [App\Http\Controllers\Admin\AuthController::class, 'resetPassword'])->name('password.update');
});

Route::middleware('auth:admin')->prefix('admin')->name('admin.')->group(function () {
    // Logout route
    Route::post('/logout', [App\Http\Controllers\Admin\AuthController::class, 'logout'])->name('logout');

    // Profile management
    Route::get('/profile', [App\Http\Controllers\Admin\AuthController::class, 'profile'])->name('profile');
    Route::put('/profile', [App\Http\Controllers\Admin\AuthController::class, 'updateProfile'])->name('profile.update');
    Route::put('/profile/password', [App\Http\Controllers\Admin\AuthController::class, 'updatePassword'])->name('profile.password');

    // Dashboard
    Route::get('/', [AdminDashboardController::class, 'index'])->name('dashboard');
    Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('dashboard.index');

    // Posts Management
    Route::resource('posts', AdminPostController::class);
    Route::patch('posts/{post}/toggle-status', [AdminPostController::class, 'toggleStatus'])->name('posts.toggle-status');
    Route::patch('posts/{post}/toggle-featured', [AdminPostController::class, 'toggleFeatured'])->name('posts.toggle-featured');

    Route::post('posts/bulk-action', [AdminPostController::class, 'bulkAction'])->name('posts.bulk-action');

    // Categories Management
    Route::resource('categories', AdminCategoryController::class);
    Route::patch('categories/{category}/toggle-status', [AdminCategoryController::class, 'toggleStatus'])->name('categories.toggle-status');
    Route::post('categories/update-order', [AdminCategoryController::class, 'updateOrder'])->name('categories.update-order');

    // Tags Management
    Route::resource('tags', AdminTagController::class);
    Route::patch('tags/{tag}/toggle-status', [AdminTagController::class, 'toggleStatus'])->name('tags.toggle-status');
    Route::delete('tags/bulk-delete', [AdminTagController::class, 'bulkDelete'])->name('tags.bulk-delete');

    // Comments Management
    Route::resource('comments', AdminCommentController::class)->except(['create', 'store']);
    Route::patch('comments/{comment}/approve', [AdminCommentController::class, 'approve'])->name('comments.approve');
    Route::patch('comments/{comment}/reject', [AdminCommentController::class, 'reject'])->name('comments.reject');
    // Route::patch('comments/{comment}/spam', [AdminCommentController::class, 'spam'])->name('comments.spam');
    Route::patch('comments/{comment}/toggle-featured', [AdminCommentController::class, 'toggleFeatured'])->name('comments.toggle-featured');
    Route::post('comments/bulk-action', [AdminCommentController::class, 'bulkAction'])->name('comments.bulk-action');
    Route::post('comments/{comment}/reply', [AdminCommentController::class, 'reply'])->name('comments.reply');
    Route::get('comments/pending', [AdminCommentController::class, 'pending'])->name('comments.pending');
    Route::get('comments/spam', [AdminCommentController::class, 'spam'])->name('comments.spam');

    // Staff Management
    Route::resource('staff', AdminStaffController::class);
    Route::patch('staff/{staff}/toggle-status', [AdminStaffController::class, 'toggleStatus'])->name('staff.toggle-status');
    Route::delete('staff/{staff}/remove-avatar', [AdminStaffController::class, 'removeAvatar'])->name('staff.remove-avatar');
    Route::get('staff/{staff}/profile', [AdminStaffController::class, 'profile'])->name('staff.profile');

});

Route::get('/login', function () {
    return redirect()->route('admin.login');
})->name('login');


/* Blog Routes */
Route::get('/blogs', [BlogController::class, 'index'])->name('blogs');
Route::get('/blog/{slug}', [BlogController::class, 'show'])->name('blog.show');
Route::get('/blogs/category/{categorySlug}', [BlogController::class, 'category'])->name('blogs.category');
Route::get('/blogs/tag/{tagSlug}', [BlogController::class, 'tag'])->name('blogs.tag');
Route::get('/blogs/archive/{year}/{month?}', [BlogController::class, 'archive'])->name('blogs.archive');
// New route for comment submission
Route::post('blog/comments/store', [BlogController::class, 'storeComment'])->name('blog.comments.store');

/* Blog Routes */
Route::get('/blog', [BlogController::class, 'blog'])->name('blog');
Route::get('/blog/{slug}', [BlogController::class, 'show'])->name('blog.show');
Route::get('/blogs/category/{categorySlug}', [BlogController::class, 'category'])->name('blogs.category');
Route::get('/blogs/tag/{tagSlug}', [BlogController::class, 'tag'])->name('blogs.tag');
Route::get('/blogs/archive/{year}/{month?}', [BlogController::class, 'archive'])->name('blogs.archive');
Route::post('blog/comments/store', [BlogController::class, 'storeComment'])->name('blog.comments.store');
