<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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


Route::get("/test", function(){
    return ["pesan" =>"Hallo"];
});

Route::post('/register', [RegistrasiController::class, 'register']);
Route::post('/login', [RegistrasiController::class, 'login']);

use App\http\controllers\API\ProdiController;
Route::group(['middleware' => ['auth:sanctum']], function(){
    Route::resource("prodi", ProdiController::class);
});
//Route::resource("prodi", ProdiController::class);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});