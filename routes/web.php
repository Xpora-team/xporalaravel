<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AkunAdmin_C;
use App\Http\Controllers\inspirasi_post_c;
use App\Http\Controllers\InspirasiUserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SearchController;

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


Route::get('/blank', function () {
    return view('blank');
})->name('blank');

Route::middleware('auth')->group(function() {
    Route::get('/', 'HomeController@index')->name('home');
    Route::get('/about', function () {
        return view('about');
    })->name('about');
    

    Route::get('/profile', 'ProfileController@index')->name('profile');
    Route::put('/profile', 'ProfileController@update')->name('profile.update');
    Route::resource('basic', BasicController::class);
    Route::get('/inspirasipost',[inspirasi_post_c::class,'index']);
    Route::get('/inspirasiuser', [InspirasiUserController::class,'index']);

    Route::get('/produk', [ProductController::class,'index']);

    Route::get('/createinspirasi', function () {
    return view('inspirasi_post.create');
})->name('blank');

Route::get('/search',[SearchController::class,'index']);
});

Route::get('/akunadmin',[AkunAdmin_C::class,'index']);




Route::get('datatable', 'DataTableController@index');
Route::get('get', 'DataTableController@get');
