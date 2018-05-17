<?php
namespace app\admin\validate;
use think\Validate;

class Links extends Validate
{
    //验证方式
    protected $rule =   [
    'title'     => 'require|max:10|unique:links',
    'url'       => 'require|min:5'
    ];

    //验证规则
    protected $message  =   [
    'title.require' => '名称必须有',
    'title.max'     => '名称最多不能超过10个字符',
    'title.unique'  => '名称不能重复',
    'url.min'       => '地址最多不能小于5个字符',
    'url.require'   => '地址必须有',
    ];

    //场景验证
    protected $scene = [
        'edit'  =>  ['title','url'],
        'add'  =>  ['title','url'],
    ];
}