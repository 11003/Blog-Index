<?php
namespace app\index\controller;
use think\Controller;
use think\Db;
class Base extends Controller
{
    public function _initialize()
    {
        //头部
        $cateres=Db::name('cate')->order('id asc')->select();
        $tagsres=Db::name('tags')->order('id asc')->select();
        //主页
        $artres=db('article')->order('id desc')->paginate(5);
        $this->assign(array(
            'cateres' => $cateres,
            'tagsres' => $tagsres,
            'artres'  => $artres
        ));
        //执行right方法
        $this->right();
    }

    public function right()
    {
        //按点击量排序
        $clickres=db('article')->order('click desc')->limit(5)->select();
        //推荐排序
        $tjres=db('article')->where('state','=',1)->order('click desc')->limit(5)->select();
        $this->assign(array(
            'clickres' => $clickres,
            'tjres'    => $tjres
        ));
    }

}


