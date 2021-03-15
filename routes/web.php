<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('hello', function () {
    return 'Hello Laravel!';
})->middleware('role:緋紅女巫,汪達');
// ->middleware('age')
// ->middleware('role:緋紅女巫,汪達')

Route::post('haha', function () {
    return 'haha!';
});

// Route::match(['get', 'post'], 'fgp', function () {
//     return 'This is a request from get or post';
// });


// Route::get('/{any}', function () {
//     return view('welcome');
// })->where('any', '.*');


// Route::get('/ex1', function () {
//     return view('ex1');
// });

// Route::get('/{any?}', function () {
//     return view('welcome');
// })->where(
//     'any',
//     '^(?!api\/)[\/\w\.\,-]*'
// );

// Route::get('cuser/{user}', [UserController::class, 'show']);

// 不在定義之內的路由都會來這條
// The fallback route should always be the last route registered by your application.
Route::fallback(function () {
    return "你來到了錯誤頁！";
});
