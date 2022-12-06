<?php
  
use Illuminate\Support\Facades\Route;
  
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TabelController;
use App\Http\Controllers\CekotController;
  
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
    return view('welcome');
});

// Route::get('/pesan', function () {
//     return view('pesan');
// });

// Route::get('/tabel', function () {
//     return view('tabel');
// });

Route::get('/home', function () {
    return view('home');
});
 
Route::get('/admin', function () {
    return view('adminHome');
});

Route::get('/cekot', function () {
    return view('cekot');
});

Route::get('/galery', function () {
    return view('galery');
});

Route::get('/data', function () {
    return view('dataPesan');
});

Route::get('logout', [HomeController::class, 'logout'])->name('logout');
Route::get('/admin',[TabelController::class, 'visit']);
// Route::get('/admin',[CekotController::class, 'pesan']);

Auth::routes();
  
/*------------------------------------------
--------------------------------------------
All Normal Users Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:user'])->group(function () {
  
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::post('/proses',[CekotController::class, 'proses']);
});



  
/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:admin'])->group(function () {
    
    Route::get('/admin/tabel',[TabelController::class, 'index']);
    Route::get('/admin/dataPesan',[CekotController::class, 'viewDat']);
    Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin.home');
});
  
/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:manager'])->group(function () {
  
    Route::get('/manager/home', [HomeController::class, 'managerHome'])->name('manager.home');
});