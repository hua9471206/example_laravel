<?php

namespace App\Models\home;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model {
    use HasFactory;
    // 定義模型對應的資料表
    protected $table = 'list';
    // 定義主鍵
    protected $primaryKey = 'id';
    // 不使用時間戳記
    protected $timestamp = false;
    // 定義可以被批量賦值的欄位
    protected $fillable = ['title', 'content', 'created_at', 'updated_at'];
}
