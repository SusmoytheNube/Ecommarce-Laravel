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

// For Frontend
use App\Http\Controllers\Frontend\FrontendController;

Route::get('/',[FrontendController::class,"index"])->name("Frontend.home");
Route::get('/story',[FrontendController::class,"story"])->name("Frontend.story");
Route::get('/menu',[FrontendController::class,"menu"])->name("Frontend.menu");
Route::get('/news',[FrontendController::class,"news"])->name("Frontend.news");
Route::get('/newsdetails',[FrontendController::class,"newsdetails"])->name("Frontend.newsdetails");
Route::get('/contact',[FrontendController::class,"contact"])->name("Frontend.contact");

// For Backend
use App\Http\Controllers\Backend\BackendController;
use App\Http\Controllers\Backend\ProductController;

Route::get('/dashboard',[BackendController::class,"index"])->name("Backend.dashboard");

Route::get('/product',[ProductController::class,"index"])->name("Backend.product");
Route::post('/addProduct',[ProductController::class,"insert"])->name("Backend.addProduct");
Route::get('/manageProduct',[ProductController::class,"manageP"])->name("Backend.manageProduct");

Route::get('/activep/{id}',[ProductController::class,"activeP"])->name("activeProduct");
Route::get('/inactivep/{id}',[ProductController::class,"inactiveP"])->name("inactiveProduct");
Route::get('/deleteProduct/{id}',[ProductController::class,"deleteP"])->name("deleteProduct");
Route::get('/editProduct/{id}',[ProductController::class,"editP"])->name("editProduct");
Route::post('/updateProduct/{id}',[ProductController::class,"updateP"])->name("updateProduct");
