<?php

//二维变一维
function arr_nuique($arr2d){
    foreach($arr2d as $k=>$v){
        $v=join(',',$v);//2把$v以,的形式展示
        $temp[]=$v;   //2这样就变成了一维数组
    }
    if($temp){
        //3把一维数组去重
        $temp=array_unique($temp);
        //一维变二维
        foreach($temp as $k=>$v){
            $temp[$k]=explode(',',$v);  //去重成功后返回变为二维
        }
        return $temp;
    }
}
