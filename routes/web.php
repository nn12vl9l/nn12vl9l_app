<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecipiController;
use App\Models\Recipi;

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

Route::get('/', [RecipiController::class, 'index'])
    ->name('root');

Route::resource('/recipis', RecipiController::class);
