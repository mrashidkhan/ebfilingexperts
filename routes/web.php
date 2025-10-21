<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

// Public Routes
Route::get('/seatselection', [PageController::class, 'selection'])->name('seatselection');
Route::get('/', [PageController::class, 'index'])->name('index');
Route::get('/eb1a-visa', [PageController::class, 'eb1visa'])->name('eb1a-visa');
Route::get('/contactus', [PageController::class, 'contactus'])->name('contactus');
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
Route::get('/blog', [PageController::class, 'blog'])->name('blog');
Route::get('/faqs', [PageController::class, 'faqs'])->name('faqs');
Route::get('/terms-of-use', [PageController::class, 'termsofuse'])->name('terms-of-use');
Route::get('/who-are-we', [PageController::class, 'whoarewe'])->name('who-are-we');
Route::get('/refund-policy', [PageController::class, 'refundpolicy'])->name('refund-policy');
Route::get('/disclaimer', [PageController::class, 'disclaimer'])->name('disclaimer');

Route::get('/testimonials', [PageController::class, 'testimonials'])->name('testimonials');
// Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
Route::get('/privacy-policy', [PageController::class, 'privacypolicy'])->name('privacy-policy');

// 6. ROUTES
// File: routes/web.php

Route::post('/bookings', [App\Http\Controllers\BookingController::class, 'store'])->name('bookings.store');
Route::get('/bookings', [App\Http\Controllers\BookingController::class, 'index'])->name('bookings.index');

