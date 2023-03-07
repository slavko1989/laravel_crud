<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrudController;


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

Route::get('/',[CrudController::class,'home']);
Route::get('/create',[CrudController::class,'create']);
Route::post('/store',[CrudController::class,'store']);
Route::get('/edit/{id}',[CrudController::class,'edit']);
Route::post('/update',[CrudController::class,'update']);
Route::get('/delete/{id}',[CrudController::class,'delete']);






