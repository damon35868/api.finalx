<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\UserController;
use App\Models\Goods;
use App\Models\Post;
use App\Models\User;
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


// 匹配
Route::match(['get', 'post'], '/show', function () {
    return [
        'code' => 200,
        'message' => 'show'
    ];
});


// 重定向
Route::redirect('red', 'show');


// 路由参数
Route::get('test/{name}', function ($name) {
    return $name;
})->where('name', '.*');
// ->whereAlpha('name');
// ->where('name', '[a-z]+'); //参数正则匹配




// 路由组 中间件 group
Route::middleware(['test'])->group(function () {
    Route::get('md1', function () {
        return 'md1';
    });

    Route::get('md2', function () {
        return 'md2';
    });
});


// controller group
Route::controller(TestController::class)->group(function () {
    Route::get('cl1', 'index');
    Route::get('cl2', 'show');
});

// 前缀
Route::prefix('admin')->group(function () {
    Route::get('pr1', function () {
        return 'pr1';
    });

    Route::get('pr2', function () {
        return 'pr2';
    });
});


// model ORM- 直接操作数据库
// 使用其他参数
// Route::get('/users/{user:name}', [UserController::class, 'index']);
// 默认使用ID
Route::get('/users/{user}', [UserController::class, 'index']);

// Route::get('/users/{user}/posts/{post}', function (User $user, Post $post) {
//     return $post;
// })->scopeBindings();




Route::get('/posts/{post}', [PostController::class, 'index']);


// Route::fallback(function () {
//     return 'API 404';
// });



Route::get('/goods', function () {
    return Goods::query()->get();
});
