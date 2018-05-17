<?php
namespace app\admin\controller;
use think\Controller;
use think\Db;
class Article extends Base
{
    public  function lis()
    {
        $art=Db::name('article')
            ->alias('a')
            ->join('cate c','c.id = a.cateid','LEFT')
            ->field('a.id,a.title,a.desc,a.keywords,a.content,a.state,a.pic,a.cateid,a.click,a.author,a.time,c.catename')
            ->paginate(5);
        $this->assign('art',$art);
        return $this->fetch();
    }

    public function add()
    {
        if(request()->isPost())
        {
            $data = [
                'title'     => input('title'),
                'desc'      => input('desc'),
                'keywords'  => str_replace('，',',',input('keywords')),
                'content'   => input('content'),
                'author'    => input('author'),
                'state'     => input('state') ? 1 : 0,
                'cateid'    => input('cateid'),
                'time'      => time()
            ];
            //文件上传
            if($_FILES['pic']['tmp_name']){
                $file=request()->file('pic');
                if($file){
                    //图片上传的路径
                    $info=$file->move(ROOT_PATH.'public'.DS.'/static/admin/uploads/');
                    if($info){
                        //图片路径
                        $data['pic']='/static/admin/uploads/'.date('Ymd').'/'.$info->getFilename();
                    }else{
                        return $file->getError();
                    }
                }else{
                    return $this->error('上传文件失败');
                }
            }
            $validate=\think\Loader::validate('Article');
            if($validate->check($data)){
                $res=Db::name('article')->insert($data);
                if($res){
                    return $this->success('文章添加成功','lis');
                }else{
                    return $this->error('文章添加失败');
                }
            }else{
                return $this->error($validate->getError());
            }
        }

        $cateres=Db::name('cate')->select();
        $this->assign('cateres',$cateres);
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
                'desc'   => input('desc'),
                'keywords'  => str_replace('，',',',input('keywords')),
                'content'  => input('content'),
                'author'  => input('author'),
                'state'  => input('state'),
                'cateid'  => input('cateid'),
            ];
            if($_FILES['pic']['tmp_name']){
                $file=request()->file('pic');
                if($file){
                    $info=$file->move(ROOT_PATH.'public'.DS.'/static/admin/uploads');
                    if($info){
                        $data['pic']='/static/admin/uploads/'.date('Ymd').'/'.$info->getFilename();
                    }else{
                        return $this->getError();
                    }
                }else{
                    return $this->error();
                }
            }
            $validate=\think\Loader::validate('Article');
            if($validate->check($data))
            {
                $res=db('article')->update($data);
                if($res){
                    return $this->success('文章修改成功','lis');
                }else{
                    return $this->error('文章修改失败');
                }
            }else{
                return $this->error($validate->getError());
            }
        }
        $artres=db('article')->where('id',$id)->find();
        $this->assign('artres',$artres);

        $cateres=db('cate')->select();
        $this->assign('cateres',$cateres);
        return $this->fetch();
    }

    public  function del()
    {
        $res=db('article')->delete(input('id'));
        if($res){
            return $this->success('文章删除成功','lis');
        }else{
            return $this->error('文章删除失败');
        }
        return $this->fetch();
    }
}
