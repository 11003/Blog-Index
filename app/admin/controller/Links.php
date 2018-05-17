<?php
namespace app\admin\controller;
use think\Controller;
use app\admin\model\Links as LinksModel;

class Links extends Base
{
    public  function lis()
    {
        $lis=LinksModel::paginate(3);
        $this->assign('lis',$lis);
        return $this->fetch();
    }

    public function add()
    {
        if(request()->isPost())
        {
            $data = [
                'title' => input('title'),
                'url'   => input('url'),
                'desc'  => input('desc')
            ];
            $validate=\think\Loader::validate('Links');
            if($validate->scene('add')->check($data)){
                $res=db('Links')->insert($data);
                if($res){
                    return $this->success('链接添加成功','lis');
                }else{
                    return $this->error('链接添加失败');
                }
            }else{
                return $this->error($validate->getError());
            }
        }
        return $this->fetch();
    }

    public  function edit()
    {
        $id=input('id');
        if(request()->isPost())
        {
            $data = [
                'id'    => input('id'),
                'title' => input('title'),
                'url'   => input('url'),
                'desc'  => input('desc')
            ];
            $validate=\think\Loader::validate('Links');
            if($validate->scene('edit')->check($data))
            {
                $res=db('links')->update($data);
                if($res){
                    return $this->success('链接修改成功','lis');
                }else{
                    return $this->error('链接修改失败');
                }
            }else{
                return $this->error($validate->getError());
            }
        }
        $res=db('links')->where('id',$id)->find();
        $this->assign('res',$res);
        return $this->fetch();
    }

    public  function del()
    {
        $res=db('links')->delete(input('id'));
        if($res){
            return $this->success('链接删除成功','lis');
        }else{
            return $this->error('链接删除失败');
        }
        return $this->fetch();
    }
}
