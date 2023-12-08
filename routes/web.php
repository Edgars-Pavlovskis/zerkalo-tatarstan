<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

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

/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::view('/', 'landing');

Route::view('/portfolio', 'portfolio');
Route::view('/catalog', 'catalog');
Route::get('/catalog/{id}', [App\Http\Controllers\CatalogController::class, 'openCatalog'])->name('openCatalog');


Auth::routes([
    'verify' => true,
    'register' => false
]);




Route::middleware(['auth'])->group(function () {
    Route::match(['get', 'post'], '/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');


    Route::post('/upload-file', [App\Http\Controllers\HomeController::class, 'fileUpload'])->name('fileUpload');
    Route::post('/upload-gallery', [App\Http\Controllers\HomeController::class, 'galleryUpload'])->name('galleryUpload');
    Route::post('/upload-banner', [App\Http\Controllers\HomeController::class, 'bannerUpload'])->name('bannerUpload');


    Route::view('/pages/slick', 'pages.slick', ['user' => Auth::user()]);
    Route::view('/pages/portfolio', 'pages.portfolio', ['user' => Auth::user()]);
    Route::view('/pages/banners', 'pages.banners', ['user' => Auth::user()]);
    //Route::view('/pages/catalog', 'pages.catalog', ['user' => Auth::user()]);
    Route::get('/pages/catalog',[App\Http\Controllers\HomeController::class, 'showCatalog'])->name('showCatalog');
    Route::get('/pages/catalog/{id}',[App\Http\Controllers\HomeController::class, 'editCatalog'])->name('editCatalog');
    Route::put('/pages/catalog/update/{id}',[App\Http\Controllers\HomeController::class, 'updateCatalog'])->name('updateCatalog');
    Route::get('/pages/catalog/delete/{id}',[App\Http\Controllers\HomeController::class, 'askdeleteCatalog'])->name('askdeleteCatalog');
    Route::get('/pages/catalog/delete/{id}/confirm',[App\Http\Controllers\HomeController::class, 'deleteCatalog'])->name('deleteCatalog');


    Route::view('/pages/datatables', 'pages.datatables', ['user' => Auth::user()]);
    Route::view('/pages/test', 'pages.test', ['user' => Auth::user()]);
    Route::view('/pages/blank', 'pages.blank', ['user' => Auth::user()])->middleware('password.confirm');

});

