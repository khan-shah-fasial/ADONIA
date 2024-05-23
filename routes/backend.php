<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\AuthenticateController;
use App\Http\Controllers\backend\DashboardController;

use App\Http\Controllers\backend\AuthorController;
use App\Http\Controllers\backend\UserController;
use App\Http\Controllers\backend\HomeController;

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

//---------------------- pages -------------------------------------

Route::get('/home-page', [HomeController::class, 'index'])->name('backend.home.page');

Route::get('/about-page', [DashboardController::class, 'index'])->name('backend.about.page');

Route::get('/project-page', [DashboardController::class, 'index'])->name('backend.project.page');

Route::get('/career-page', [DashboardController::class, 'index'])->name('backend.career.page');

Route::get('/caontact-page', [DashboardController::class, 'index'])->name('backend.contact.page');

Route::get('/business-page', [DashboardController::class, 'index'])->name('backend.business.page');

Route::get('/products-page', [DashboardController::class, 'index'])->name('backend.products.page');

//---------------------- pages -------------------------------------

Route::post('/update-home-banner', [HomeController::class, 'home_banner'])->name('home.banner');
Route::post('/update-home-intro', [HomeController::class, 'home_intro'])->name('home.intro');
Route::post('/update-home-marque', [HomeController::class, 'home_marque'])->name('home.marque');
Route::post('/update-home-business', [HomeController::class, 'home_business'])->name('home.business');
Route::post('/update-home-counter', [HomeController::class, 'home_counter'])->name('home.counter');
Route::post('/update-home-project', [HomeController::class, 'home_project'])->name('home.project');







//User
Route::group(['prefix' => 'profile'], function () {
    Route::get('/edit/{id}', [UserController::class, 'edit'])->name('user.edit');
    Route::get('/reset/{id}', [UserController::class, 'password'])->name('user.password');
    Route::post('/update', [UserController::class, 'update'])->name('user.update');
    Route::post('/reset', [UserController::class, 'reset'])->name('user.reset');    
});

//clear cache
Route::get('/clear-cache', function () {
    $exitCode = Artisan::call('cache:clear');
    $exitCode = Artisan::call('config:clear');
    $exitCode = Artisan::call('view:clear');

    // Redirect back to the previous page
    return back()->with('status', 'Cache cleared successfully!');
})->name('clear-cache');


// //setting
// Route::group(['prefix' => 'setting'], function () {
//     Route::get('/index', [BusinessSettingController::class, 'index'])->name('setting.index');
    
//     Route::get('/privacy-policy', [BusinessSettingController::class, 'privacy_policy'])->name('setting.privacy');
//     Route::get('/terms', [BusinessSettingController::class, 'terms'])->name('setting.terms');
//     Route::get('/refund-policy', [BusinessSettingController::class, 'refund_policy'])->name('setting.refund_policy');

//     Route::post('/update', [BusinessSettingController::class, 'update'])->name('setting.update');
// });

// //Contact Page setting
// Route::group(['prefix' => 'contact/page'], function () {
//     Route::get('/index', [ContactSettingController::class, 'index'])->name('contactpage.index');
//     Route::post('/update', [ContactSettingController::class, 'update'])->name('contactpage.update');
// });


// //Author
// Route::group(['prefix' => 'author'], function () {
//     Route::get('/index', [AuthorController::class, 'index'])->name('author.index');
//     Route::get('/add', [AuthorController::class, 'add'])->name('author.add');
//     Route::get('/edit/{id}', [AuthorController::class, 'edit'])->name('author.edit');
//     Route::post('/create', [AuthorController::class, 'create'])->name('author.create');
//     Route::post('/update', [AuthorController::class, 'update'])->name('author.update');
//     Route::post('/delete/{id}', [AuthorController::class, 'delete'])->name('author.delete');
//     //Route::get('/status/{id}/{status}', [AuthorController::class, 'status'])->name('author.status');
// });

