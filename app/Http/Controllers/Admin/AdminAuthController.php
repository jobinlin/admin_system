<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Admin\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

/**
 * Created by PhpStorm.
 * User: linzhibin
 * Date: 2017/6/28
 * Time: 08:28
 */
class AdminAuthController extends Controller
{
    private $redirectPath = '/index';

    private $loginPath = '/login';

    private $redirectAfterLogout = '/login';


    public function __construct()
    {
//        $this->middleware('auth:admin');
    }

    protected function guard()
    {
        return Auth::guard('admin');
    }

    public function login(){
        return view('admin.login');
    }

    public function doLogin(Request $request){

//        $data = Admin::all();
//        dd($data);
        if (Auth::attempt(['adm_name'=>'admin','password'=>'admin']))
        {
            return redirect()->intended('/');
        }
        else
        {

        }
    }

}