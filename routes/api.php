<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use app\Http\Controllers\HeloController;
use App\Http\Controllers\SiswaController;


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

Route::get('halo', function(){
    return['me' => 'Ganteng'];
});


//Route::get('haloController', [HeloController::class,index]);
//Route::post('haloController', [HeloController::class,store]);
//Route::get('haloController', [HeloController::class,show]);
//Route::put('haloController', [HeloController::class,update]);
//Route::detele('haloController', [HeloController::class,destroy]);

Route::get('siswa', [SiswaController::class,'index']);
Route::get('siswa/{id}', [SiswaController::class,'show']);
Route::post('siswa', [SiswaController::class,'store']);
Route::post('siswa/{id}', [SiswaController::class,'uodate']);
Route::delete('siswa/{id}', [SiswaController::class,'destroy']);
