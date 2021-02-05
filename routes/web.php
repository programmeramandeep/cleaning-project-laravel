<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\ServiceController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get("/", [LandingPageController::class, 'index'])->name('landing.page');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// email verification routes
Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware(['auth'])->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();

    return redirect('/home');
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();

    return back()->with('status', 'verification-link-sent');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');

// Get all the services
Route::get('/services', [ServiceController::class, 'index'])->name('services.index');
// Create service route
Route::get('/services/create', [ServiceController::class, 'create'])->name('services.create');
// Store service route
Route::post('/services', [ServiceController::class, 'store'])->name('services.store');
// Edit service route
Route::get('/services/{service}/edit', [ServiceController::class, 'edit'])->name('services.edit');
// Update service route
Route::put('/services/{service}/update', [ServiceController::class, 'update'])->name('services.update');
// Show service route
Route::get('/services/{service}/show', [ServiceController::class, 'show'])->name('services.show');
// delete service route
Route::delete('/services/{service}', [ServiceController::class, 'destroy'])->name('services.destroy');

Route::get('/contact', [ContactController::class, 'index'])->name('contact.page');
Route::post('/contact', [ContactController::class, 'contact_request'])->name('contact.request');
