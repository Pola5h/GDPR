<?php
// GDPR Cookie Consent Manager routes

use Illuminate\Support\Facades\Route;
use Vendor\GdprCookieConsentManager\Http\Controllers\AdminController;

Route::group([
    'prefix' => config('gdprcookie.admin_route', 'gdpr-cookie-admin'),
    'middleware' => config('gdprcookie.admin_middleware', ['web', 'auth']),
], function () {
    Route::get('/', [AdminController::class, 'index'])->name('gdprcookie.admin.index');
    Route::post('/update', [AdminController::class, 'update'])->name('gdprcookie.admin.update');
});
