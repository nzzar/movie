<?php

use App\Models\Movie;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\AjaxController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderAjaxController;
use App\Http\Controllers\TheaterController;
use App\Http\Controllers\TheatersController;

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

Route::prefix('admin')
    ->middleware(['admin'])
    ->group( function () {
    Route::get('akun', [AdminController::class, 'user']); 
    Route::delete('akun/{id}', [AdminController::class, 'destroy'])->name('akun.destroy'); 
    Route::get('theaters', [AdminController::class, 'theaters']); 
    Route::get('orders', [AdminController::class, 'orders']);
    Route::get('/', [AdminController::class, 'index']);

});




Route::get('login', [AuthController::class, 'login']);
Route::post('login', [AuthController::class, 'authenticate']);
Route::get('logout', [AuthController::class, 'logout']);
Route::get('register', [AuthController::class, 'register_form']);
Route::post('register', [AuthController::class, 'register']);

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/movie/{id}', [DetailController::class, 'index']);
Route::get('/upcoming', function () {
    $upcoming = Movie::getUpcoming();
    return view('page.upcoming', [
        'title' => 'upcoming',
        'active' => 'upcoming',
        'posts' => $upcoming
    ]);
});

Route::get('/cities', function () {
    $cities = Movie::getCities();
    return $cities;
});

Route::get('/theater/', [TheatersController::class, 'theater']);

Route::get('/schedules/{theater}', function ($theater) {
    $schedules = Movie::getSchedules($theater);
    return $schedules;
});

Route::get('/schedules/{theater}/{id}', function ($theater, $id) {
    $schedules = Movie::getSchedulesDetail($theater, $id);
    return $schedules;
});

Route::post('search', [AjaxController::class, 'ajaxSearch'])->name('search');
Route::get('search', [SearchController::class, 'index']);

Route::get('/order', [OrderController::class, 'index']);
Route::post('/pay', [OrderController::class, 'insertData']);
Route::post('/payment', [OrderController::class, 'order']);
Route::get('/payment', [OrderController::class, 'order']);

Route::controller(OrderAjaxController::class)->group(function () {
    Route::post('order-ajax-cities', 'cities')->name('order.cities');
    Route::post('order-ajax-pending-payment', 'pendingPayment')->name('order.pending.payment');
    Route::post('order-ajax-success-payment', 'successPayment')->name('order.success.payment');
    Route::post('order-ajax-theaters', 'theaters')->name('order.theaters');
    Route::post('order-ajax-schedules', 'schedules')->name('order.schedules');
    Route::post('order-ajax-schedules-details', 'schedulesDetails')->name('order.schedules.details');
});

// Auth::routes(['verify' => true]);
// require __DIR__.'/auth.php';