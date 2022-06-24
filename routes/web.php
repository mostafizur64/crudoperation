<?php

use App\Http\Controllers\CrudController;
use App\Http\Controllers\CurdController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Models\Crud;

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
    $productsitems=Crud::all();
    return view('crudoperation',compact('productsitems') );
});

Route::post('product/store',[CurdController::class,'store'])->name('product.store');
Route::get('product/delete/{id}',[CurdController::class,'delete'])->name('product.delete');
Route::get('product/edit/{product_id}',[CurdController::class,'Edit'])->name('product.edit');
Route::post('product/update',[CurdController::class,'Update'])->name('product.update');


















Route::get('/redirects', [HomeController::class, 'index']);
Route::post('/add_seller', [HomeController::class, 'addseller']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', [HomeController::class, 'index'])->name('dashboard');
