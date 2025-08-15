<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\democontroller;
use App\Http\Controllers\SingleActionController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\RegistrationControler;
use App\Models\customer;
use App\Http\Controllers\CustomerController;
use Illuminate\Http\Request; //data storeing
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

Route::get('/customer/create',[CustomerController::class,'index']);
Route::post('/customer/create',[CustomerController::class,'create'])->name('customer.create');

//select query in laravel using Eloquent ORM

Route::get('/customer/view',[CustomerController::class,'view'])->name('customer.view');
//to show the trash data this route will work
Route::get('/customer/trash',[CustomerController::class,'trash'])->name('customer.trash');
//deletequery
Route::get('/customer/delete/{id}',[CustomerController::class,'delete'])->name('customer.delete');
//permanet delete from the trash
Route::get('/customer/force-delete/{id}',[CustomerController::class,'forceDelete'])->name('customer.force-delete');

//restore trash data to customer-view
Route::get('/customer/restore/{id}',[CustomerController::class,'restore'])->name('customer.restore');

//update data from the database
Route::get('/customer/edit/{id}',[CustomerController::class,'edit'])->name('customer.edit');
Route::post('customer/update/{id}',[CustomerController::class,'update'])->name('customer.upadte');

Route::get('/hireme',[CustomerController::class,'hireme']);


//session helper laravel(data retrieving..)
Route::get('get-all-session',function(){
    $session=session()->all();
    p($session);
});

//session helper laravel(data storing..)
Route::get('set-session',function(Request $request){
    $request->session()->put('user_name','SN Simanto');
    $request->session()->put('user_id','1');
    $request->session()->flash('Status','Success');

    return redirect('get-all-session');

});

//session helper laravel(data deleting..)
Route::get('destroy-session',function(){
    session()->forget('user_name');
    session()->forget('user_id');
    return redirect('get-all-session');

});
