<?php
namespace app\admin\controller;
use think\Controller;
use think\Db;
class Cate extends Base
{

    //增
    public function add()
    {
        //判断按钮post
        if(request()->isPost())
        {
            //使用input助手函数接受数据
            $data=[
                'catename'  =>  input('catename'),
            ];
            //验证信息
            $validate=\think\Loader::validate('Cate');
            if($validate->check($data)){
                //连接数据库
                $res=Db::name('cate')->insert($data);
                //判断添加是否成功
                if($res)
                {
                    return $this->success('添加成功','lis');
                }else{
                    return $this->error('添加失败');
                }
            }else{
                return $this->error($validate->getError($data));
            }
        }
        return $this->fetch();
    }

    //删
    public function del()
    {
        $id=input('id');//获取id字段
        //连接数据库
        $res=Db::name('cate')->delete($id);
        if($res)
        {
            return $this->success('删除成功!','lis');
        }else{
            return $this->error('删除失败!');
        }
    }

    //改
    public function edit()
    {
        //第二步
        if(request()->isPost())
        {
            $data=[
                'id'        =>  input('id'),
                'catename'  =>  input('catename'),
            ];
            $validate=\think\Loader::validate('Cate');
            if($validate->check($data)){
                if(\think\Db::name('cate')->update($data)){
                    return $this->success('修改成功','lis');
                }else{
                    return $this->error('修改失败');
                }
            }else{
                return $this->error($validate->getError($data));
            }
            return;
        }

        //第一步
        $id=input('id');
        $res=Db::name('cate')->where('id',$id)->find();
        //分配资源到html上
        $this->assign('res',$res);
        return $this->fetch();
    }

    //查
    public function lis()
    {
        //连接数据库
        $res=Db::name('cate')->paginate(5);
        //分配数据库值
        $this->assign('res',$res);
        return $this->fetch();

    }

}


