<?php

use App\Http\Controllers\PlaybookController;
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

//specific route::gets are how to have a custom url that doesnt match the functions.
//Route::get('/playbooks', [PlaybookController::class, 'index']);
//Route::get('/playbooks/new', [PlaybookController::class, 'create']);
Route::resource('playbooks', PlaybookController::class);


Route::get('/moves', [\App\Http\Controllers\MoveController::class, 'index']);
