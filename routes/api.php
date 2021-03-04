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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::match(['get', 'post'], 'fgp', function () {
    return 'This is a request from get or post';
});

Route::get('/user/list', function () {
    return 'list';
});

// 📝單個參數
Route::get('/user/{id}', function ($id) {
    return 'User '.$id;
});



// 📝多個參數
Route::get('posts/{post}/comments/{comment}', function ($postId, $commentId) {
    return 'postId 是' .$postId . '，' .'commentID 是' .$commentId;
});

// 📝可選參數
// Route::get('/staff/{name?}', function ($name = null) {
//     return $name;
// });

// Route::get('/staff/{name?}', function ($name = 'John') {
//     return $name;
// });


// 📝正規約束
// Route::get('/crew/{name}', function ($name) {
//     return response()->json($name);
// })->where('name', '[A-Za-z]+'); // name 是大小寫，不能為空

// Route::get('crew/{id}', function ($id) {
//     return response()->json($id);
// })->where('id', '[0-9]+');

// Route::get('crew/{id}/{name}', function ($id, $name) {
//     return response()->json(['id' => $id, 'name' => $name]);
// })->where(['id' => '[0-9]+', 'name' => '[a-z]+']);

// 📝全域限制
Route::get('member/{id}', function ($id) {
    return response()->json(['id'=>$id]);
});

// 📝允許編碼正斜槓字元
Route::get('/search/{search}', function ($search) {
    return $search;
})->where('search', '.*');

// 📝命名路由
Route::get('teamember/profile', function () {
    // 通過路由名稱生成 URL
    return 'my url: ' . route('profile');
})->name('profile');

Route::get('redirect', function () {
    // 通過路由名稱生成重導向
    return redirect()->route('profile');
});

// 📝命名路由傳遞參數
Route::get('teamcrew/{id}/profile/{hp}', function ($id, $hp) {
    $url = route('profile', ['id' => $id,'hp' =>$hp]);
    return $url;
})->name('profile');
