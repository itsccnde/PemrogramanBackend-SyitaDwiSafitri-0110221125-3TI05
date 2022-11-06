<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

# method get
Route::get('/mahasiswas',[MahasiswaController::class, 'index']);

# method post
Route::post('/mahasiswas', [MahasiswaController::class, 'store']);

# method put
Route::put('/mahasiswas/{id}', [MahasiswaController::class, 'update']);

# method delete
Route::delete('/mahasiswas/{id}', [MahasiswaController::class, 'delete']);