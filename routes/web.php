<?php

use App\Http\Controllers\admin\CustomerController;
use App\Http\Controllers\admin\FactorController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::prefix('admin/panel')->name('admin.')->group(function (){
   Route::get('dashboard',function (){return view('admin.dashboard');})->name('dashboard');
   Route::resource('customers',CustomerController::class);
   Route::resource('factors',FactorController::class);
});
