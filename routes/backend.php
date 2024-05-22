<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\AuthenticateController;
use App\Http\Controllers\backend\DashboardController;
use App\Http\Controllers\backend\FaqController;
use App\Http\Controllers\backend\TestimonialController;
use App\Http\Controllers\backend\TeamController;
use App\Http\Controllers\backend\AwardController;
use App\Http\Controllers\backend\BlogCategoryController;
use App\Http\Controllers\backend\BlogCommentController;
use App\Http\Controllers\backend\BlogController;
use App\Http\Controllers\backend\NewsCategoryController;
use App\Http\Controllers\backend\NewsController;
use App\Http\Controllers\backend\PracticeAreaController;
use App\Http\Controllers\backend\TrumbowygController;
use App\Http\Controllers\backend\MediaCoverageController;
use App\Http\Controllers\backend\PublicationController;
use App\Http\Controllers\backend\ContactController;
use App\Http\Controllers\backend\BusinessSettingController;
use App\Http\Controllers\backend\ContactSettingController;
use App\Http\Controllers\backend\AuthorController;
use App\Http\Controllers\backend\UserController;

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

//authentication
Route::get('/', function () { return redirect(route('backend.login')); });
Route::get('/login', [AuthenticateController::class, 'index'])->name('backend.login');
Route::post('/login', [AuthenticateController::class, 'login'])->name('backend.login');
Route::get('/logout', [AuthenticateController::class, 'logout'])->name('backend.logout');

//dashborad
Route::get('/dashboard', [DashboardController::class, 'index'])->name('backend.dashboard');

//setting
Route::group(['prefix' => 'setting'], function () {
    Route::get('/index', [BusinessSettingController::class, 'index'])->name('setting.index');
    
    Route::get('/privacy-policy', [BusinessSettingController::class, 'privacy_policy'])->name('setting.privacy');
    Route::get('/terms', [BusinessSettingController::class, 'terms'])->name('setting.terms');
    Route::get('/refund-policy', [BusinessSettingController::class, 'refund_policy'])->name('setting.refund_policy');

    Route::post('/update', [BusinessSettingController::class, 'update'])->name('setting.update');
});

//Contact Page setting
Route::group(['prefix' => 'contact/page'], function () {
    Route::get('/index', [ContactSettingController::class, 'index'])->name('contactpage.index');
    Route::post('/update', [ContactSettingController::class, 'update'])->name('contactpage.update');
});

//clear cache
Route::get('/clear-cache', function () {
    $exitCode = Artisan::call('cache:clear');
    $exitCode = Artisan::call('config:clear');
    $exitCode = Artisan::call('view:clear');

    // Redirect back to the previous page
    return back()->with('status', 'Cache cleared successfully!');
})->name('clear-cache');


//Author
Route::group(['prefix' => 'author'], function () {
    Route::get('/index', [AuthorController::class, 'index'])->name('author.index');
    Route::get('/add', [AuthorController::class, 'add'])->name('author.add');
    Route::get('/edit/{id}', [AuthorController::class, 'edit'])->name('author.edit');
    Route::post('/create', [AuthorController::class, 'create'])->name('author.create');
    Route::post('/update', [AuthorController::class, 'update'])->name('author.update');
    Route::post('/delete/{id}', [AuthorController::class, 'delete'])->name('author.delete');
    //Route::get('/status/{id}/{status}', [AuthorController::class, 'status'])->name('author.status');
});

//User
Route::group(['prefix' => 'profile'], function () {
    Route::get('/edit/{id}', [UserController::class, 'edit'])->name('user.edit');
    Route::get('/reset/{id}', [UserController::class, 'password'])->name('user.password');
    Route::post('/update', [UserController::class, 'update'])->name('user.update');
    Route::post('/reset', [UserController::class, 'reset'])->name('user.reset');    
});
