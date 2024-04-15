<?php

use App\Http\Controllers\MyController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
// get 在首頁顯示資料
Route::get('/my-get', [MyController::class, 'myGet']);
// post 新增資料
Route::post('/my-post', [MyController::class, 'myPost']);
// delete 刪除資料
Route::get('/my-delete/{id}', [MyController::class, 'myDelete']);
// update 顯示更新頁面及更新資料
Route::match(['get', 'post'], '/my-update/{id}', [MyController::class, 'myUpdate']);