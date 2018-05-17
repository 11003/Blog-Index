<?php
namespace app\admin\model;
use think\Model;
use think\Db;
use think\Session;
class Login extends Model
{
    public function login($username,$password,$code)
    {
        $captcha=new \think\captcha\Captcha();
        if(!$captcha->check($code)){
            return 4;
        }
        $admin=Db::name('admin')->where('username','=',$username)->find();
        if($admin){
            if($admin['password'] == md5($password)){
                Session::set('id',$admin['id']);
                Session::set('username',$admin['username']);
                return 1;
            }else{
                return 2;
            }
        }else{
            return 3;
        }
    }

}
