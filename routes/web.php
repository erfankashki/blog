<?php

use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
// use BlogController


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
    return view('client.header');
});

Route::get('/admin', function () {
    return view('dashboard.index');
})->middleware(['auth'])->name('dashboard');


Route::prefix('admin')->middleware('auth')->name('admin.')->group(function(){
    Route::resource('category',CategoryController::class);
});
    
require __DIR__.'/auth.php';
