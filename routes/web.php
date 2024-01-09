<?php

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
// Route navbar
use App\Models\MBarber;

Route::get('/', function () {
    $dataBearber = MBarber::all(); // Anda dapat mengganti ini dengan metode lain sesuai kebutuhan
    return view('ui.index',['dataBearber' => $dataBearber]);});


Route::get('/about', function () {
    $dataBearber = MBarber::all();
    return view('ui.About', ['dataBearber' => $dataBearber]);
});

Route::get('/careers', function () {return view('ui.Careers');});
Route::get('/cancellation-policy', function () {return view('ui.CancelPollicy');});
Route::get('/contact', function () {return view('ui.Contact');});
// Route::get('/cancellation-policy', function () {return view('ui.CancelPollicy');});
Route::get('/admin', function () {return view('chociceAdmin.dashboard');});


// admin
// barber
use App\Http\Controllers\CTranssaksi;
Route::resource('/transaksi', CTranssaksi::class); // route resource

use App\Http\Controllers\CTrxAdmin;
Route::resource('/admin/booking', CTrxAdmin::class); // route resource
Route::get('booking/serach', [CTrxAdmin::class, 'search'])->name('booking.search');

use App\Http\Controllers\CBaerber;
Route::resource('/admin/barber', CBaerber::class); // route resource
Route::get('barber/serach', [CBaerber::class, 'search'])->name('barber.search');

use App\Http\Controllers\CServicess;
Route::resource('/admin/services', CServicess::class);
Route::get('services/serach', [CServicess::class, 'search'])->name('services.search');

use App\Http\Controllers\Ckarir;
Route::resource('/admin/karir', Ckarir::class);
Route::get('karir/serach', [Ckarir::class, 'search'])->name('karir.search');
Route::post('/careers', [Ckarir::class, 'store'])->name('karir.store');



use App\Http\Controllers\Cservices;
Route::get('/services',[Cservices::class,'services']);






