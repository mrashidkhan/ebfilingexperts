<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\VisaController;



// Admin Controllers
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\AdminPostController;
use App\Http\Controllers\Admin\AdminCategoryController;
use App\Http\Controllers\Admin\AdminTagController;
use App\Http\Controllers\Admin\AdminCommentController;
use App\Http\Controllers\Admin\AdminStaffController;

// VisaController
// use App\Http\Controllers\VisaController;

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


// =====================================
// WORK & EMPLOYMENT VISAS ROUTES
// =====================================
Route::get('/work-visas', [VisaController::class, 'workVisas'])->name('work-visas');
Route::get('/visas/h1b-visa', [VisaController::class, 'h1bVisa'])->name('h1b-visa');
Route::get('/visas/h2a-visa', [VisaController::class, 'h2aVisa'])->name('h2a-visa');
Route::get('/visas/h2b-visa', [VisaController::class, 'h2bVisa'])->name('h2b-visa');
Route::get('/visas/e3-visa', [VisaController::class, 'e3Visa'])->name('e3-visa');
Route::get('/visas/tn-visa', [VisaController::class, 'tnVisa'])->name('tn-visa');
Route::get('/visas/l1-visa', [VisaController::class, 'l1Visa'])->name('l1-visa');
Route::get('/visas/eb1c-visa', [VisaController::class, 'eb1cVisa'])->name('eb1c-visa'); // Permanent Residency for L1A
Route::get('/visas/e2-visa', [VisaController::class, 'e2Visa'])->name('e2-visa'); // Treaty Investor Visa

// ====================================
// STUDENT VISAS ROUTES
// ====================================
Route::get('/student-visas', [VisaController::class, 'studentVisas'])->name('student-visas');
Route::get('/visas/f1-visa', [VisaController::class, 'f1Visa'])->name('f1-visa');
Route::get('/visas/m1-visa', [VisaController::class, 'm1Visa'])->name('m1-visa');
Route::get('/visas/j1-visa', [VisaController::class, 'j1Visa'])->name('j1-visa');

// ====================================
// BUSINESS & INVESTOR VISAS ROUTES
// ====================================
Route::get('/business-investor-visas', [VisaController::class, 'businessInvestorVisas'])->name('business-investor-visas');
Route::get('/visas/e2-visa', [VisaController::class, 'e2Visa'])->name('e2-visa');
Route::get('/visas/e1-visa', [VisaController::class, 'e1Visa'])->name('e1-visa');
Route::get('/visas/eb5-visa', [VisaController::class, 'eb5Visa'])->name('eb5-visa');

// ====================================
// FAMILY-BASED VISAS ROUTES
// ====================================
Route::get('/family-visas', [VisaController::class, 'familyVisas'])->name('family-visas');
Route::get('/visas/k1-visa', [VisaController::class, 'k1Visa'])->name('k1-visa');
Route::get('/visas/k3-visa', [VisaController::class, 'k3Visa'])->name('k3-visa');
Route::get('/visas/cr1-ir1-visa', [VisaController::class, 'cr1Ir1Visa'])->name('cr1-ir1-visa');
Route::get('/visas/ir5-visa', [VisaController::class, 'ir5Visa'])->name('ir5-visa');

// ====================================
// TOURIST & VISITOR VISAS ROUTES
// ====================================
Route::get('/tourist-visitor-visas', [VisaController::class, 'touristVisitorVisas'])->name('tourist-visitor-visas');
Route::get('/visas/b1-b2-visa', [VisaController::class, 'b1B2Visa'])->name('b1-b2-visa');
Route::get('/visas/b1-visa', [VisaController::class, 'b1Visa'])->name('b1-visa');
Route::get('/visas/b2-visa', [VisaController::class, 'b2Visa'])->name('b2-visa');

// ====================================
// SPECIAL CATEGORY VISAS ROUTES
// ====================================
Route::get('/special-visas', [VisaController::class, 'specialVisas'])->name('special-visas');
Route::get('/visas/p1-visa', [VisaController::class, 'p1Visa'])->name('p1-visa');
Route::get('/visas/r1-visa', [VisaController::class, 'r1Visa'])->name('r1-visa');
Route::get('/visas/i-visa', [VisaController::class, 'iVisa'])->name('i-visa');
Route::get('/visas/u-visa', [VisaController::class, 'uVisa'])->name('u-visa');
