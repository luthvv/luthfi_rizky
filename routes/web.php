<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;

use App\Http\Controllers\Admin\UserController;
// use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\DashboardController;

use App\Http\Controllers\Backend\WebsiteController;
use App\Http\Controllers\Backend\VideoController;
use App\Http\Controllers\Backend\DesignController;

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

//Backend

Route::get('/', function () {
    return view('frontend.home');
});

Route::get('/admin', [DashboardController::class, 'index'])->name('backend.dashboard');
// Route::get('admin/logout', [LoginController::class, 'logout'])->name('admin.logout');
// Route::get('/admin/user', [UserController::class, 'index'])->name('backend.user');

//Website management
Route::get('/admin/projects/website', [WebsiteController::class, 'index'])->name('backend.projects.website');
Route::get('/admin/projects/website/view/{$id}', [WebsiteController::class, 'view'])->name('backend.projects.view');
Route::get('/admin/projects/website/create', [WebsiteController::class, 'create'])->name('backend.projects.website.create');
Route::post('/admin/projects/website/store', [WebsiteController::class, 'store'])->name('backend.projects.website.store');
Route::get('/admin/projects/website/edit/{$id}', [WebsiteController::class, 'edit'])->name('backend.projects.website.edit');
Route::post('/admin/projects/website/update', [WebsiteController::class, 'update'])->name('backend.projects.website.update');
Route::post('/admin/projects/website/destroy', [WebsiteController::class, 'destroy'])->name('backend.projects.website.destroy');