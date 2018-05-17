<?php
namespace app\admin\controller;
use think\Db;
use think\Controller;
use app\admin\model\Login as Log;
class Login extends Controller
{
    public  function login()
    {
        if(request()->isPost()){
            $login=new Log();
            $status=$login->login(input('username'),input('password'),input('code'));
            if($status == 1){
                return $this->success('登陆成功!',url('Index/index'));
            }elseif($status == 2){
                return $this->error('请检查你的用户名或密码!');
            }elseif($status == 4){
                return $this->error('验证码错误!');
            }else{
                return $this->error('用户名不存在!');
            }
        }
        return $this->fetch();
    }


    //退出
    public function logout(){
        session(NULL);  //清除缓存
        return $this->success('退出成功!',url('login'));
    }

    //验证码
    public function captcha_src(){
        return $this->fetch();
    }
}
