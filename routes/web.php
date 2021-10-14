<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\stock_item;

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

Route::get('/', [stock_item::class, 'Dashboard']);
Route::get('/stock', [stock_item::class, 'Stock']);
Route::get('/import_stock', [stock_item::class, 'import_stock']);
Route::get('/keepvender', [stock_item::class, 'keepvender']);
