<?php
/**
 * Created by PhpStorm.
 * User: linzhibin
 * Date: 2017/6/28
 * Time: 17:54
 */

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{
    public function index(){
        return view('admin.index');
    }
}