<?php

// use App\Http\Controllers\VisitorsController;
// use App\Http\Controllers\OrdersController;
use Illuminate\Support\Facades\Route;
use TCG\Voyager\Facades\Voyager;

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
    return view('visitors.index');
});
Route::get('/portfolio', function () {
    return view('visitors.portfolio');
})->name('portfolio');
Route::get('/services', function () {
    return view('visitors.services');
})->name('services');
Route::get('/meet-the-co', function () {
    return view('visitors.meet');
})->name('meet');
Route::get('/contact-us', function () {
    return view('visitors.contact');
})->name('contact');

// Route::get('/', [VisitorsController::class, 'index'])->name('index');
// Route::post('/place-order', [OrdersController::class, 'order'])->name('orderNow');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
