<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\NewsController;
use \App\Http\Controllers\PressController;
use \App\Http\Controllers\HomeController;

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

Route::get('/', function () {
    return view('welcome');
})->name("home");

Route::get('/G@#FAW#F@#', function () {
    return view('login');
});

Route::get('language/{locale}', function ($locale) {
    app()->setLocale($locale);
    session()->put('locale', $locale);
    return redirect()->back();
});

Route::get('/news', [NewsController::class, 'index'])->name('news.index');
Route::get('/news/{id}',[NewsController::class, 'show'])->name('news.show');

Route::get('/press',[PressController::class, 'index'])->name('press.index');
Route::get('/rukovodstvo',[HomeController::class, 'administration'])->name('home.administration');

Route::get('/structure',[HomeController::class,'structure'])->name('home.structure');
Route::get('/compliance',[HomeController::class,'compliance'])->name('home.compliance');
Route::get('/vacancy',[HomeController::class,'vacancy'])->name('home.vacancy');