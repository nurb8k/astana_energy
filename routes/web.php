<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Auth\Login;
use \App\Http\Controllers\Admin\DashboardController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('language/{locale}', function ($locale) {
    app()->setLocale($locale);
    session()->put('locale', $locale);
    return redirect()->back();
});

Route::get('/', function () {
    return view('welcome');
})->name("home");

Route::get('/contact', function () {
    return view('pages.contact');
})->name("contact");

Route::get('/about', function () {
    return view('pages.about');
})->name("about");

Route::get('/admin', [Login::class,'index'])->name('login');
Route::post('/login', [Login::class, 'create'])->name('login.post');

Route::prefix('admin')->as('admin.')->middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
});
