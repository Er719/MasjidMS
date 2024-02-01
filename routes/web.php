<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DonationController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\EducationalResourceController;

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

Route::get('/', function () {
    return view('index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/jawatankuasa', [App\Http\Controllers\HomeController::class, 'jawatankuasa'])->name('jawatankuasa');

Route::get('/event', [App\Http\Controllers\EventController::class, 'show'])->name('event');

Route::get('/educationalresource', [App\Http\Controllers\EducationalResourceController::class, 'show'])->name('educationalresource');

//route for displaying the donation form
Route::get('/donate', [App\Http\Controllers\DonationController::class, 'show'])->name('donation');

//route for handling the donation form submission
Route::post('/donate', [App\Http\Controllers\DonationController::class, 'store'])->name('donation.store');

//route for displaying the profile form
Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'show'])->name('profile');

//route for handling the profile form submission
Route::post('/profile', [App\Http\Controllers\ProfileController::class, 'store'])->name('profile.store');

