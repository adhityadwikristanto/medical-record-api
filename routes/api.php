<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MedrecController;
use App\Http\Controllers\RawatJalanController;
use App\Http\Controllers\RawatInapController;
use App\Http\Controllers\MedcheckupController;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\RiwayatRekamMedisController;
use App\Http\Controllers\API\AuthController;

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

// Route::get('medrec', [MedrecController::class, 'index']);
// Route::get('medrec/{id}/find', [MedrecController::class, 'find']);
// Route::post('medrec/add', [MedrecController::class, 'insert']);
// Route::put('medrec/{id}/update', [MedrecController::class, 'update']);
// Route::delete('medrec/{id}/delete', [MedrecController::class, 'delete']);

Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);

Route::middleware(['auth:sanctum'])->group(function()
{
    Route::post('logout', [AuthController::class, 'logout']);

    Route::get('medrec', [MedrecController::class, 'index']);
    Route::get('medrec/{id}/find', [MedrecController::class, 'find']);
    Route::post('medrec/add', [MedrecController::class, 'insert']);
    Route::put('medrec/{id}/update', [MedrecController::class, 'update']);
    Route::delete('medrec/{id}/delete', [MedrecController::class, 'delete']);
    // Route::get('medrec/{id}/riwayat', [MedrecController::class, 'riwayat']);

    Route::get('rawatjalan', [RawatJalanController::class, 'index']);
    Route::get('rawatjalan/{id}/find', [RawatJalanController::class, 'find']);
    Route::post('rawatjalan/add', [RawatJalanController::class, 'insert']);
    Route::put('rawatjalan/{id}/update', [RawatJalanController::class, 'update']);
    
    Route::get('rawatinap', [RawatInapController::class, 'index']);
    Route::get('rawatinap/{id}/find', [RawatInapController::class, 'find']);
    Route::post('rawatinap/add', [RawatInapController::class, 'insert']);
    Route::put('rawatinap/{id}/update', [RawatInapController::class, 'update']);
    
    Route::get('medcheckup', [MedcheckupController::class, 'index']);
    Route::get('medcheckup/{id}/find', [MedcheckupController::class, 'find']);
    Route::post('medcheckup/add', [MedcheckupController::class, 'insert']);
    Route::put('medcheckup/{id}/update', [MedcheckupController::class, 'update']);
    
    // Route::get('riwayatrekammedis', [RiwayatRekamMedisController::class, 'index']);
    // Route::get('riwayatrekammedis/{id}/find', [RiwayatRekamMedisController::class, 'find']);
    // Route::post('riwayatrekammedis/add', [RiwayatRekamMedisController::class, 'insert']);
    // Route::put('riwayatrekammedis/{id}/update', [RiwayatRekamMedisController::class, 'update']);
    // Route::get('riwayatrekammedis/{id}/riwayat', [RiwayatRekamMedisController::class, 'riwayat']);

    Route::get('riwayatrekammedis', [RiwayatRekamMedisController::class, 'index']);
    Route::get('riwayatrekammedis/{id}/find', [RiwayatRekamMedisController::class, 'find']);
    Route::post('riwayatrekammedis/add', [RiwayatRekamMedisController::class, 'insert']);
    Route::put('riwayatrekammedis/{id}/update', [RiwayatRekamMedisController::class, 'update']);
    Route::post('riwayatrekammedis/{id}/riwayat', [RiwayatRekamMedisController::class, 'riwayat']);

    Route::get('dokter', [DokterController::class, 'index']);
    Route::get('dokter/{id}/find', [DokterController::class, 'find']);
    Route::post('dokter/add', [DokterController::class, 'insert']);
    Route::put('dokter/{id}/update', [DokterController::class, 'update']);
});


// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
