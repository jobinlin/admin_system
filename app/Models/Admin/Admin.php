<?php
namespace App\Models\Admin;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

/**
 * Created by PhpStorm.
 * User: linzhibin
 * Date: 2017/6/28
 * Time: 15:20
 */
class Admin extends Authenticatable
{

    //指定表名
    protected $table = 'admin';

    //指定ID
    protected $primaryKey = 'id';

    //自动管理时间字段
    public $timestamps = false;

    //设置时间管理的字段值
    protected function getDateFormat()
    {
        return time();
    }

    //指定返回时间格式
    protected function asDateTime($val)
    {
        return $val;
    }

}