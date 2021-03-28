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

// 匯出 excel
Route::get('cert/excel/export', [ResellerController::class,'export']);

// 獲取列表
Route::get('list', [ResellerController::class,'getList']);

// 獲取單筆記錄
Route::get('single/{id}', [ResellerController::class,'getSingle']);

// 新增記錄
Route::post('list', [ResellerController::class,'newSingle']);

// 修改記錄
Route::put('list/{id}', [ResellerController::class,'modify']);

// 刪除記錄
Route::delete('list/{id}', [ResellerController::class,'strikeOut']);

// api 驗證
// Route::post('register', [Auth\RegisterController::class,'register']);
