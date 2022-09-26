<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tweet extends Model
{
    use HasFactory;
    //$guarded アプリケーションから変更できないカラムを設定する
    protected $guarded = [
        'id',
        'created_at',
        'updated_at'
    ];

    public static function getAllOrderByUpdated_at()
    {
        //getがないと実行されないので注意が必要
        return self::orderBy('updated_at','desc')->get();
    }
}
