<?php
namespace App\Repositories\Eloquent;
use Illuminate\Auth\EloquentUserProvider;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Support\Str;

/**
 * Created by PhpStorm.
 * User: linzhibin
 * Date: 2017/6/28
 * Time: 21:42
 */
class CustomUserProvider extends EloquentUserProvider
{
    public function validateCredentials(Authenticatable $user ,array $credentials)
    {
        $plain = $credentials['password'];
        $check = md5($plain);
        return $check == $user->getAuthPassword();
    }


}