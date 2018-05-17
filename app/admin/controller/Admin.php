<?php
namespace app\admin\controller;
use think\Controller;
use think\Db;

class Admin extends Base
{
    public  function add()
    {
        if(request()->isPost())
        {
            $data = [
                'username' => input('username'),
                'password' => md5(input('password'))
            ];
            $validate=\think\Loader::validate('Admin');
            if($validate->check($data)){
                $res=Db::name('admin')->insert($data);
                if($res){
                    return $this->success('添加管理员成功!','lis');
                }else{
                    return $this->error('添加管理员失败');
                }
            }else{
                return $this->error($validate->getError());
            }

        }
        return $this->fetch();
    }
    public function lis()
    {
        //连接数据表
        $res=Db::name('admin')->paginate(3);
        $this->assign('res',$res);
        return $this->fetch();
    }

    public function edit()
    {
        $id=input('id');
        $userinfo=Db::name('admin')->find($id);
        $password=$userinfo['password'];
        //第二步
        if(request()->isPost()){

            $data = [
                'id'       => input('id'),
                'username' => input('username'),
                'password' => input('password') ? md5(input('password')) : $password,
            ];
            if($id == 1){return $this->error('无法操作!');}
            $validate=\think\Loader::validate('Admin');
            if($validate->scene('edit')->check($data)){
                $res=Db::name('admin')->update($data);
                if($res){
                    return $this->success('管理员修改成功','lis');
                }else{
                    return $this->error('管理员修改失败');
                }
            }else{
                return $this->error($validate->getError());
            }

        }
        //第一步
        $res=Db::name('admin')->where('id',$id)->find();
        $this->assign('res',$res);
        return $this->fetch();
    }

    public  function del()
    {
        $res=Db::name('admin')->delete(input('id'));
        if(input('id') == 1){return $this->error('无法操作!');}
        if($res){
            return $this->success('管理员删除成功','lis');
        }else{
            return $this->error('管理员删除失败');
        }
    }
}
