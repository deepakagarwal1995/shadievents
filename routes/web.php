<?php

// use App\Http\Controllers\VisitorsController;
// use App\Http\Controllers\OrdersController;

use App\Http\Controllers\VisitorsController;
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

Route::get('/', [VisitorsController::class, 'index'])->name('index');
Route::get('/portfolio', [VisitorsController::class, 'portfolio'])->name('portfolio');
Route::get('/portfolio/{slug}', [VisitorsController::class, 'portfolioSingle'])->name('portfolioSingle');
Route::get('/services', [VisitorsController::class, 'services'])->name('services');
Route::get('/service/{slug}', [VisitorsController::class, 'service'])->name('service');
Route::post('/enquiry-submit', [VisitorsController::class, 'enquiryStore'])->name('enquiry-store');
Route::get('/blog', [VisitorsController::class, 'blog'])->name('blog');
Route::get('/blog/{slug}', [VisitorsController::class, 'blogSingle'])->name('blogSingle');
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





Route::get('/storage-link', function () {
    $target = storage_path('app/public');
    $link = public_path('/storage');
    echo symlink($target, $link);
    // echo "symbolic link created successfully";
});
