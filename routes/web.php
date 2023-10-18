<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Auth\Login;
use \App\Http\Controllers\Admin\DashboardController;
use \App\Http\Controllers\NewsController;


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

# For change local lang
Route::get('language/{locale}', function ($locale) {
    app()->setLocale($locale);
    session()->put('locale', $locale);
    return redirect()->back();
});

# Home page
Route::get('/', function () {
    return view('welcome');
})->name("home");

# Static pages
Route::get('/contact', function () {
    return view('pages.contact');
})->name("contact");

Route::get('/about', function () {
    return view('pages.about');
})->name("about");

Route::get('/compliance',function (){
    return view('pages.compliance');
})->name('compliance');


Route::get('/documentation',function (){
    return view('pages.documentation.documentation');
})->name('documentation.index');

Route::get('/goverment',function (){
    return view('pages.documentation.goverment');
})->name('goverment');

Route::get('/rules',function (){
    return view('pages.documentation.rules');
})->name('rules');

Route::get('/infographic',function (){
    return view('pages.infographic');
})->name('infographic');

Route::get('/news',[NewsController::class,'index'])->name('news');



# Admin panels
Route::get('/admin', [Login::class,'index'])->name('login');
Route::post('/login', [Login::class, 'create'])->name('login.post');
Route::post('/logout', [Login::class, 'logout'])->name('logout');

Route::prefix('admin')->as('admin.')->middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
});
