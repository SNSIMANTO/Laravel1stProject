<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\democontroller;
use App\Http\Controllers\SingleActionController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\RegistrationControler;
use App\Models\customer;
use App\Http\Controllers\CustomerController;
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

Route::get('/',[democontroller::class,'index']);
//Route::get('/about','App\Http\Controllers\democontroller@about'); bad method
Route::get('/about',[democontroller::class,'some']);
Route::get('/courses',SingleActionController::class);

Route::resource('photo',PhotoController::class);
Route::get('/register',[RegistrationControler::class,'index']);
Route::post('/register',[RegistrationControler::class,'register']);


// Route::get('/customer',function(){
//     $customers=Customer::all();
//     echo"<pre>";
//     print_r($customers->toArray());
// });

Route::get('/customer',[CustomerController::class,'index']);
Route::post('/customer',[CustomerController::class,'store'])->name('customer.create');

//select query in laravel using Eloquent ORM

Route::get('/customer/view',[CustomerController::class,'view']);
//deletequery
Route::get('/customer/delete/{id}',[CustomerController::class,'delete'])->name('customer.delete');
//update data from the database
Route::get('/customer/edit/{id}',[CustomerController::class,'edit'])->name('customer.edit');
Route::post('customer/update/{id}',[CustomerController::class,'update'])->name('customer.upadte');