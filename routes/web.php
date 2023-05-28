<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PhoneController;
 use App\Http\Controllers\EmployeeControol;
 use Illuminate\Support\Facades\session;


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
    //session::get(;empid);
    return view('welcome');
});
Route::get('/invoic', function () {
    return view('invoic');
});

Route::get('/phone',function(){
   return view('phone');})->name('phone');

Route::get('/nokia', function () {
     return view('nokia.nokia');
})->name('nokia');
Route::get('/getempid',[EmployeeControol::class,'GetEmpId'])->name('getempid');
Route::get('/phoneType',[PhoneController::class,'phoneType'])->name('phonetype');

Route::POST('/invoic',[PhoneController::class,'invoic'])->name('invoic');
Route::get('/checkout/{id}',[PhoneController::class,'CheckOut'])->name('checkout');
Route::get('/A1',[PhoneController::class,'A1'])->name('A1');
Route::get('/A2',[PhoneController::class,'A2'])->name('A2');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/phone',[PhoneController::class,'phoneType'])->name('phone');