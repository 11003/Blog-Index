<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liuhai <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 应用公共文件
return[
  // 生成应用公共文件
    '__file__' => ['common.php','config.php','database.php'],


    //定义demo模块的自动生成（按照实际定义的文件名生生
    /*'demo' =>[
        '__file__'  =>  ['common.php'],
        '__dir__'   =>  ['behavior','controller','model','view'],
        'model'     =>  ['Index','Test','UserType'],
        'view'      =>  ['index/index'],
    ],
    */

    'common'    =>[
        '__dir__'   =>['model'],
        'model'     =>['Category','Admin'],
    ],
    'admin'     =>[
        '__dir__'   =>['controller','view'],
        'controller'=>['Index'],
        'view'      =>['index/index'],
    ],
    'api'       =>[
        '__dir__'   =>['controller','view'],
        'controller'=>['Index','Image'],
    ],
];