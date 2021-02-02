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
# 后台管理员登录
Route::post('login',[\App\Http\Controllers\AdminController::class,'login'])->withoutMiddleware('checkToken');
# 后台管理员相关操作
Route::apiResources([
    'admin' => \App\Http\Controllers\AdminController::class,
]);

