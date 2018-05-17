<?php
namespace app\index\controller;
use app\index\controller\Base;
use think\Db;
class Cate extends Base
{
    public function index()
    {
        $cateid=input('cateid');
        //找出所属栏目
        $cates=Db::name('cate')->find($cateid);
        $this->assign('cates',$cates);
        //找出文章所属栏目的id
        $artres=Db::name('article')->where(array('cateid'=>$cateid))->paginate(5);
        $this->assign('artres',$artres);
        return $this->fetch('cate');
    }

}


