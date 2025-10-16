<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

// Public Routes
Route::get('/seatselection', [PageController::class, 'selection'])->name('seatselection');
Route::get('/', [PageController::class, 'index'])->name('index');
Route::get('/eb1a-visa', [PageController::class, 'eb1a-visa'])->name('eb1a-visa');
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




Route::get('/testimonials', [PageController::class, 'testimonials'])->name('testimonials');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
Route::get('/privacy-policy', [PageController::class, 'privacyPolicy'])->name('privacy.policy');

Route::get('/media-news', function () {
    return view('pages.media-news');
})->name('media-news');

Route::get('/webinar', function () {
    return view('pages.webinar');
})->name('webinar');

Route::get('/why-choose-us', function () {
    return view('pages.why-choose-us');
})->name('why-choose-us');

Route::get('/leadership-team', function () {
    return view('pages.leadership-team');
})->name('leadership-team');

Route::get('/reports', function () {
    return view('pages.reports');
})->name('reports');

Route::get('/privacy-policy', function () {
    return view('pages.privacy-policy');
})->name('privacy-policy');

Route::get('/terms-of-use', function () {
    return view('pages.terms-of-use');
})->name('terms-of-use');

Route::get('/refund-policy', function () {
    return view('pages.refund-policy');
})->name('refund-policy');


Route::get('/reviews', function () {
    return view('pages.reviews');
})->name('reviews');

Route::get('/case-studies', function () {
    return view('pages.case-studies');
})->name('case-studies');

Route::get('/vodcast', function () {
    return view('pages.vodcast');
})->name('vodcast');

Route::get('/partnerships-boundless', function () {
    return view('pages.partnerships-boundless');
})->name('partnerships-boundless');

Route::get('/resources', function () {
    return view('pages.resources');
})->name('resources');

Route::get('/blog', function () {
    return view('pages.blog');
})->name('blog');

Route::get('/faqs', function () {
    return view('pages.faqs');
})->name('faqs');


Route::get('/eb1a-visa', function () {
    return view('pages.eb1a-visa');
})->name('eb1a-visa');

// Route::get('/o-1avisa', function () {
//     return view('pages.o-1avisa');
// })->name('o-1avisa');

Route::get('/eb2-niw', function () {
    return view('pages.eb2-niw');
})->name('eb2-niw');

Route::get('/turing-ai', function () {
    return view('pages.turing-ai');
})->name('turing-ai');

Route::get('/who-are-we', function () {
    return view('pages.who-are-we');
})->name('who-are-we');

Route::get('/our-story', function () {
    return view('pages.our-story');
})->name('our-story');
