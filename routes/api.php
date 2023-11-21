<?php

use App\Models\sertifikat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\APIController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post("tes",[APIController::class, "test"]);
Route::post("top5_data",[APIController::class, "top5"]);
Route::post("makeSertif",[APIController::class, "makeSertif"]);
Route::post("loginmhs",[APIController::class, "login"]);
Route::post("create_data",[APIController::class, "store"]);
Route::post("show_data",[APIController::class, "show"]);
Route::post("edit_data",[APIController::class, "edit"]);
Route::post("updateAkun",[APIController::class, "updateAkun"]);
Route::post("delete_data",[APIController::class, "destroy"]);
Route::post("all_data",[APIController::class, "index"]);



