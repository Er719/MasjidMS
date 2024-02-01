<?php

use Illuminate\Support\Facades\Route;

// --------------------------
// Custom Backpack Routes
// --------------------------
// This route file is loaded automatically by Backpack\Base.
// Routes you generate using Backpack\Generators will be placed here.

Route::group([
    'prefix'     => config('backpack.base.route_prefix', 'admin'),
    'middleware' => array_merge(
        (array) config('backpack.base.web_middleware', 'web'),
        (array) config('backpack.base.middleware_key', 'admin'),
    ),
    'namespace'  => 'App\Http\Controllers\Admin',
], function () { // custom admin routes
    Route::crud('donation', 'DonationCrudController');
    Route::crud('event', 'EventCrudController');
    Route::crud('educational-resource', 'EducationalResourceCrudController');
    Route::crud('user', 'UserCrudController');
    Route::crud('profile', 'ProfileCrudController');
}); // Make sure this line is correctly closed

