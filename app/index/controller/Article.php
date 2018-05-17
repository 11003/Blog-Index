<?php
namespace app\index\controller;
use app\index\controller\Base;
use think\Db;
class Article extends Base
{
    public function index()
    {
        $arid=input('arid');
        //文章
        $artres=Db::name('article')->find($arid);//$arid是查找详细文章的条件
        //1分配ralat方法 相关阅读
        $ralateres=$this->ralat($artres['keywords'],$artres['id']);
        //文章点击量 setInc
        db('article')->where('id','=',$arid)->setInc('click',5);
        //栏目
        $cates=Db::name('cate')->find($artres['cateid']);
        //推荐文章(cates文章所属的id，1是推荐)
        $recres=db('article')->where(array('cateid'=>$cates['id'],'state'=>1))->limit(8)->select();
        //分配数据
        $this->assign(array(
            'artres' => $artres,
            'cates'  => $cates,
            'recres' => $recres,
            'ralateres' => $ralateres
        ));
        return $this->fetch('article');
    }

    public function ralat($keywords,$id)
    {
        $arr=explode(',',$keywords);
        //用静态方法用来存储数组
        static $ralateres=array();
        foreach($arr as $k=>$v){
            //1文章相关的关键字
            $map['keywords']=['like','%'.$v.'%'];
            //2省略出现两次关键字
            $map['id']=['neq',$id];
            //1找出文章相关的(这样重复查找)
            $artkey=db('article')->where($map)->order('id desc')->limit(8)->select();
            //1把$artkey合并到$ralateres数组里面
            $ralateres=array_merge($ralateres,$artkey);
        }
        if($ralateres){
            //2调用arr_unique函数
            $ralateres=arr_nuique($ralateres);

            return $ralateres;
        }
    }

}
