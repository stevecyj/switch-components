<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ResellerController;

use App\Models\User;

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

Route::get('test', function () {
    // dd('welcome to reseller routes');
    return response('welcome to reseller routes');
});

// Route::get('cert/{hostname}', [ResellerController::class,'show']);
Route::get('cert', [ResellerController::class,'show']);
Route::post('certmass', [ResellerController::class,'showmass']);
Route::post('cert/update', [ResellerController::class,'certUpdate']);
