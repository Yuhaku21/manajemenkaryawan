<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\manajemenController;

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
//Tampil UI Master
Route::get('/home', [manajemenController::class, 'tampilUi']);
Route::get('/daguku', [manajemenController::class, 'tampilDaguku']);
