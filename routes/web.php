<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FilipinodessertsController;
use App\Http\Controllers\LutongbahayController;
use App\Http\Controllers\StreetfoodController;

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
  return view('auth.login');
});


Auth::routes();


Route::group(['middleware' => ['auth']], function () {
  Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

 
  Route::get('/addFilipinodesserts', [App\Http\Controllers\FilipinodessertsController::class, 'Filipinodesserts'])->name('Filipinodesserts.addFilipinodesserts');
  Route::post('/saveFilipinodesserts', [FilipinodessertsController::class, 'saveFilipinodesserts']);
  Route::get('/listFilipinodesserts', [App\Http\Controllers\FilipinodessertsController::class, 'listFilipinodesserts'])->name('Filipinodesserts.listFilipinodesserts');
  Route::post('/editFilipinodesserts/{id}', [FilipinodessertsController::class, 'editFilipinodesserts']);
  Route::get('/deleteFilipinodesserts/{id}', [FilipinodessertsController::class, 'deleteFilipinodesserts']);
  Route::get('/goToFilipinodesserts', [App\Http\Controllers\FilipinodessertsController::class, 'goToFilipinodesserts'])->name('Filipinodesserts.goToFilipinodesserts');
 

  
  Route::get('/addLutongbahay', [App\Http\Controllers\LutongbahayController::class, 'Lutongbahay'])->name('Lutongbahay.addLutongbahay');
  Route::post('/saveLutongbahay', [LutongbahayController::class, 'saveLutongbahay']);
  Route::get('/listLutongbahay', [App\Http\Controllers\LutongbahayController::class, 'listLutongbahay'])->name('Lutongbahay.listLutongbahay');
  Route::post('/editLutongbahay/{id}', [LutongbahayController::class, 'editLutongbahay']);
  Route::get('/deleteLutongbahay/{id}', [LutongbahayController::class, 'deleteLutongbahay']);
  Route::get('/goToLutongbahay', [App\Http\Controllers\LutongbahayController::class, 'goToLutongbahay'])->name('Lutongbahay.goToLutongbahay');
  
  

  Route::get('/addStreetfood', [App\Http\Controllers\StreetfoodController::class, 'Streetfood'])->name('Streetfood.addStreetfood');
  Route::post('/saveStreetfood', [StreetfoodController::class, 'saveStreetfood']);
  Route::get('/listStreetfood', [App\Http\Controllers\StreetfoodController::class, 'listStreetfood'])->name('Streetfood.listStreetfood');
  Route::post('/editStreetfood/{id}', [StreetfoodController::class, 'editStreetfood']);
  Route::get('/deleteStreetfood/{id}', [StreetfoodController::class, 'deleteStreetfood']);
  Route::get('/goToStreetfood', [App\Http\Controllers\StreetfoodController::class, 'goToStreetfood'])->name('Streetfood.goToStreetfood');
  

});