<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HomeController1;
use App\Http\Controllers\PesanController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\BahanController;


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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/', [HomeController1::class, 'home1']);
Route::get('/about', [AboutController::class, 'about1']);
Route::get('/contact', [ContactController::class, 'contact1']);

Route::resource('/employee', EmployeeController::class);

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/home2', [HomeController::class, 'index']);

Route::get('pesan/{id}', [PesanController::class, 'indexMenu']);
Route::post('pesan/{id}', [PesanController::class, 'pesan']);
Route::get('check-out', [PesanController::class, 'check_out']);
Route::delete('check-out/{id}', [PesanController::class, 'delete']);
Route::get('konfirmasi-check-out', [PesanController::class, 'konfirmasi']);

Route::get('profile', [ProfileController::class, 'index']);
Route::post('profile', [ProfileController::class, 'update']);

Route::get('history', [HistoryController::class, 'indexhistory']);
Route::get('history/{id}', [HistoryController::class, 'detail']);

Route::get('home3', [HomeController::class, 'indexadmin'])->name('admin.main')->middleware('is_admin');
Route::resource('/admin', PesanController::class);
Route::resource('/admin2', HistoryController::class);
Route::resource('/admin3', BahanController::class);

Route::get('/history/cetak_pdf/{id}', [HistoryController::class, 'cetak_pdf'])->name('cetak_pdf');


?>