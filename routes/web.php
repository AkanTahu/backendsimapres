<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
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
    return view('menu');
});

Route::get('/inputData', function () {
    return view('inputData');
});


Route::get('/cekSertif', [Controller::class, 'showDataSertif']);
Route::get('/cekSertif/{id_sertif}', [Controller::class, 'validSertif']);
Route::get('/cekSertif/tolak/{id_sertif}', [Controller::class, 'tolakSertif']);

Route::get('/data', [Controller::class, 'showDatamhs']);
Route::get('/data/{id}', [Controller::class, 'editmhs']);
Route::put('/data/{id}', [Controller::class, 'updateDatamhs']);
Route::delete('/data/{id}', [Controller::class, 'hapus']);
Route::post('/tambah', [Controller::class, 'createmhs']);

