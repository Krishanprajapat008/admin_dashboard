<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\adminController;

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
    return view('login');
});

Route::get('login',[adminController::class,'index']);
Route::post('/adminlogin',[adminController::class,'login']);

route::view('addcustomer', 'addcustomer');
route::view('addmachine', 'addmachine');
route::view('dashboard', 'dashboard');

Route::post('/add_customer',[adminController::class,'add_customer']);
Route::post('/add_machine',[adminController::class,'add_machine']);

Route::get('customerpage',[adminController::class,'customerpage']);
Route::get('machinelist',[adminController::class,'machinelist']);

