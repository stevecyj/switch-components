<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ToolController;
use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\ProjectController;




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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Secure CRUD
Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);


Route::apiResource('projects', ProjectController::class)->middleware('auth:api');


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

// 📝路由分組、前綴
Route::prefix('admin')->group(function () {
    Route::get('users', function () {
        $url = route('sadmin');
        return $url;
    })->name('sadmin');
    Route::get('list', function () {
        $url = route('slist');
        return $url;
    })->name('slist');
});

Route::group([
    'middleware' =>['checkValidIp'],
    'prefix' => 'cart'
], function () {
    Route::post('/store', [ItemController::class, 'store']);
    Route::put('/{id}', [ItemController::class, 'update'])->withoutMiddleware(checkValidIp::class);
});

// 📝路由模型綁定(隱式)
Route::get('users/{user}', function (\App\Models\User $user) {
    return $user;
});

// 📝路由模型綁定(顯式)
Route::get('prof/{user}', function (User $user) {
    return $user;
});

// 📝 to UserController
Route::get('cuser/{user}', [UserController::class, 'show']);

Route::resource('posts', PostController::class);

// 📝 Request
Route::get("chkrequest/{user}", [UserController::class, 'chkrequest']);

// 📝 Response
Route::get("chkresponse", [UserController::class,'chkresponse']);

// 📝 get picksee 縮網址，外部的 api
Route::get('getshorturl/{id}/shared-url', [UserController::class,'sharedUrl']);

// 📝 get ubike open data
Route::get('ubike-open-data', [UserController::class,'openDataUbike']);

// test ToolController
Route::get('tool', [ToolController::class, 'updateProjectCost']);
