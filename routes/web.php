<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelpDeskController;
use App\Http\Controllers\WebserviceController;

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
    return view('/index');
});
//Route::get('/getSession', [WebserviceController::class, 'getSession']);
Route::get('/dobLog',  [WebserviceController::class,'dob']);
Route::get('/oprLog',  [WebserviceController::class,'opr']);

Route::get('/dobPrijava',  [WebserviceController::class,'doblog']);
Route::post('/dobPrijava', [WebserviceController::class,'Dprijava'])->name('Dprijava');
Route::get('/oprPrijava',  [WebserviceController::class,'oprlog']);
Route::post('/oprPrijava', [WebserviceController::class,'Oprijava'])->name('Oprijava');

Route::get('/dobData',  [WebserviceController::class,'dobdata']);
Route::post('/dobData', [WebserviceController::class,'Dpodatki'])->name('Dpodatki');
Route::get('/oprData',  [WebserviceController::class,'oprdata']);
Route::post('/oprData', [WebserviceController::class,'Opodatki'])->name('Opodatki');
//Route::get('/out', [WebserviceController::class, 'odjava']);
//Route::post('/out', [WebserviceController::class,'logout'])->name('logout');
