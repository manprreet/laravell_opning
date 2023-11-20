<?php

use App\Http\Controllers\Admin\CouponController;
use App\Http\Controllers\Admin\DishController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\CommonController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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
    return redirect()->route('login');
});

Auth::routes();

Route::get('change-lang/{lang}', function($lang) {
    session(['Accept-Language' => $lang]);
    return redirect()->back();
})->name('app.setLocal');

Route::middleware(['auth', 'localization'])->group(function () {
    Route::get('/menu', [HomeController::class, 'index'])->name('home');
    Route::get('/menu/add-dish', [HomeController::class, ''])->name('');

    Route::get('/settings', [SettingController::class, 'index'])->name('settings');
    Route::get('/settings/delete-zipcode', [SettingController::class, 'deleteZipcode']);
    Route::post('/settings/change-status', [SettingController::class, 'changeStatus']);
    Route::post('/settings/save-zipcode', [SettingController::class, 'saveZipcode']);

    Route::get('/coupons/claim-history', [CouponController::class, 'claimHistoryLog'])->name('claimHistoryLog');
    Route::resource('/coupons', CouponController::class);
    Route::post('/coupons/change-status', [CouponController::class, 'changeStatus']);


    Route::post('get-paginate-data', [CommonController::class, 'getPaginateData'])->name('getPaginateData');

    Route::resource('/menu/dish', DishController::class);
});

//echo route('coupons.store');
//exit;
