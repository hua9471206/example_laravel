<?php

namespace App\Http\Controllers;

use App\Models\home\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MyController extends Controller {
    // post 新增資料
    public function myPost(Request $request) {
        // 驗證輸入資料
        $request->validate([
            'title'      => ['required', 'max:50', 'string'],
            'content'    => ['required', 'max:50', 'string'],
            'created_at' => ['required', 'date'],
            'updated_at' => ['required', 'date'],
        ]);

        // 建立 Member 模型
        $model = new Member();
        // $request->all() 取得所有輸入資料
        $result = $model->create($request->all());
        // 判斷是否新增成功
        if ($result) {
            // 新增成功
            return redirect('/my-get');
        } else {
            // 新增失敗
            return '新增失敗';
        }
    }
    // get 在首頁顯示資料
    public function myGet() {
        // 取得 list 資料表所有資料
        $data = DB::table('list')->get();
        // 回傳 my-get 視圖並傳遞 data 變數
        return view('my-get', compact('data'));
    }
    // updatepage 進入更新頁面
    public function myUpdate(Request $request, $id) {
        // 判斷是否為 post 請求
        if ($request->isMethod('post')) {
            // 驗證輸入資料
            $request->validate([
                'title'      => ['required', 'max:50', 'string'],
                'content'    => ['required', 'max:50', 'string'],
                'created_at' => ['required', 'date'],
                'updated_at' => ['required', 'date'],
            ]);
            // 取得 id 為 $id 的資料
            $data = Member::find($id);
            // 更新資料
            $data->update($request->all());
            // 判斷是否更新成功
            if ($data) {
                return redirect('/my-get');
            } else {
                return '更新失敗';
            }
            // 判斷是否為 get 請求 顯示更新頁面資料
        } else {
            // 取得 id 為 $id 的資料
            $data = Member::find($id);
            // 回傳 my-update 視圖並傳遞 data 變數
            return view('my-update', compact('data'));
        }
    }

    // 刪除資料
    public function myDelete($id) {
        // 刪除 id 為 $id 的資料
        $data = Member::find($id)->delete();
        // 判斷是否刪除成功
        if ($data) {
            return redirect('/my-get');
        } else {
            return '刪除失敗';
        }

    }
}
