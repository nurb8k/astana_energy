<?php

use App\Http\Controllers\ManagerController;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Auth\Login;
use \App\Http\Controllers\Admin\DashboardController;
use \App\Http\Controllers\NewsController;
use \App\Http\Controllers\HomeController;
use \App\Http\Controllers\InfographicController;
use \App\Http\Controllers\LanguageController;
use \App\Http\Controllers\FilePoundController;
use \App\Http\Controllers\TagController;
use App\Livewire\InfographicComponent;
use App\Livewire\NewsComponent;


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

# Livewire components
Route::get('/infographic', function () {
    return view('pages.infographic');
})->name('infographic');

//Route::get('/news',NewsComponent::class)->name('news.index');

Route::get('/news', function () {
    return view('pages.news');
})->name('news.index');


Route::post('locale',[LanguageController::class,'switch'])->name('lang.switch');

# Home page
Route::get('/',[HomeController::class,'index'])->name("home");

# Static pages
Route::get('/contact', function () {
    return view('pages.contact');
})->name("contact");

Route::get('/about', function () {
    $managers = \App\Models\Manager::query()->get();
    return view('pages.about',compact('managers'));
})->name("about");

Route::get('/compliance',function (){
    return view('pages.compliance');
})->name('compliance');

Route::get('/otchetnost',function (){
    return view('pages.reports');
})->name('reports');


Route::get('/struktura-kompanii',function (){
    return view('pages.structure');
})->name('structure');


Route::get('/documentation',function (){
    return view('pages.documentation.documentation');
})->name('documentation.index');

Route::get('/goverment',function (){
    return view('pages.documentation.goverment');
})->name('goverment');

Route::get('/nasha-istoriya',function (){
    return view('pages.documentation.history');
})->name('history');

Route::get('/plan-zakupok',function (){
    return view('pages.documentation.plan');
})->name('plan');

Route::get('/vakansii',function (){
    return view('pages.documentation.vacancies');
})->name('vacancies');


Route::get('/rules',function (){
    return view('pages.documentation.rules');
})->name('rules');

#Filepound
Route::post('/upload',[FilePoundController::class,'store']);
Route::post('/upload/update',[FilePoundController::class,'update']);
Route::delete('/delete',[FilePoundController::class,'destroy']);


Route::get('/news/{id}',[NewsController::class,'show'])->name('news.show');

# Admin panels
Route::get('/admin', [Login::class,'index'])->name('login')->middleware('throttle:5,1');
Route::post('/login', [Login::class, 'create'])->name('login.post')->middleware('throttle:5,1');
Route::post('/logout', [Login::class, 'logout'])->name('logout');

Route::prefix('admin')->as('admin.')->middleware('auth')->group(function () {

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');

    Route::prefix('news')->as('news.')->group(function () {
//        Route::get('/create-news',[NewsController::class,'create'])->name('index');
        Route::get('/edit-news/{id}',[NewsController::class,'edit'])->name('edit');
        Route::post('/update-news',[NewsController::class,'update'])->name('update');
        Route::post('/delete-news',[NewsController::class,'destroy'])->name('destroy');
        Route::get('/list-news',[NewsController::class,'list'])->name('list');
        Route::post('/delete-img-news/{id}',[NewsController::class,'imgDelete'])->name('img.destroy');
        Route::post('/create-news-post',[NewsController::class,'store'])->name('store');
    });

    Route::prefix('tag')->as('tag.')->group(function () {
        Route::get('/',[TagController::class,'index'])->name('index');
    });

    Route::prefix('manager')->as('manager.')->group(function () {
        Route::get('/',[ManagerController::class,'index'])->name('index');
    });

    Route::prefix('infographic')->as('infographic.')->group(function () {
        Route::get('/infographic', [InfographicController::class, 'create'])->name('create');
        Route::post('/infographic-store', [InfographicController::class, 'store'])->name('store');
        Route::get('/infographic-list', [InfographicController::class, 'list'])->name('list');
        Route::post('/infographic{id}', [InfographicController::class, 'destroy'])->name('destroy');
    });

});
