<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\User as Us;
class User extends Controller
{
    public function create(){
        return view('user.create');
    }
    public function store(Request $request){
        $data=$request->except('_token');
        if($data['pwd']!=$data['pwd1']){
            echo "两次密码不一致";die;
        }
        unset($data['pwd1']);
        $data['pwd']=password_hash($data['pwd'],PASSWORD_BCRYPT);
        $res=Us::insertGetId($data);
        if($res>0){
            $user_name=$data['user_name'];
            $app_id=Us::getAppId($user_name);
            $app_secret=Us::getSecret();
            $appInfo=[
                'user_id'=>$res,
                'app_id'=>$app_id,
                'app_secret'=>$app_secret,
            ];
            Us::insertGetId($appInfo);
            return redirect('login');
        }else{
            echo "注册失败";die; 
        }
    }
}
