<?php
namespace app\admin\controller;
use think\Db;
use think\Controller;


class Base extends Controller
{
    public  function _initialize()
    {
        if(!session('id')){
            return $this->error('请登陆!',url('Login/login'));
        }
    }

}
