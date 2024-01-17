<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;


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
    return view('frontend.home');
});

Route::get('/', [HomeController::class, 'index'])->name('frontend.home');

Route::get('/projects/software', function(){
    return view('frontend.projects.software');
})->name('frontend.projects.software');

Route::get('/projects/design', function(){
    return view('frontend.projects.design');
})->name('frontend.projects.design');

Route::get('/projects/video', function(){
    return view('frontend.projects.video');
})->name('frontend.projects.video');