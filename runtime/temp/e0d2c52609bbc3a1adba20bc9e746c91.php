<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:72:"D:\phpStudy\PHPTutorial\WWW\Blog\public/../app/index\view\cate\cate.html";i:1525861445;s:66:"D:\phpStudy\PHPTutorial\WWW\Blog\app\index\view\common\header.html";i:1525913104;s:65:"D:\phpStudy\PHPTutorial\WWW\Blog\app\index\view\common\right.html";i:1525912772;s:66:"D:\phpStudy\PHPTutorial\WWW\Blog\app\index\view\common\footer.html";i:1525516783;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>乘风波浪</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="乘风波浪" />
<meta name="description" content="乘风波浪" />
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
<link href="/static/index/style/lady.css" type="text/css" rel="stylesheet" />
<script type='text/javascript' src='/static/index/style/ismobile.js'></script>
<script type='text/javascript' src='/static/index/style/bootstrap.css'></script>
</head>
<style>
    .pagination span {
        padding:0 12px 0 12px;
    }
    .pages .plist li{
        margin-right:3px;
    }
</style>
<body>

<style>
    .ladytop{background-color: #001}
    .ladytop .nav .right .box a:hover{color:#fff}
</style>
<div class="ladytop">
	<div class="nav">
		<div class="left"><a href="<?php echo url('index/index'); ?>"><h1 style="color:#fff;font-size:30px;font-style: italic;">乘风波浪</h1></a></div>
		<div class="right">
			<div class="box">
				<?php if(is_array($cateres) || $cateres instanceof \think\Collection || $cateres instanceof \think\Paginator): $i = 0; $__LIST__ = $cateres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                 <a href="<?php echo url('cate/index',array('cateid'=>$vo['id'])); ?>"><?php echo $vo['catename']; ?></a>
                <?php endforeach; endif; else: echo "" ;endif; ?>
			</div>
		</div>
	</div>
</div>
<div class="hotmenu">
	<div class="con">热门标签：
        <?php if(is_array($tagsres) || $tagsres instanceof \think\Collection || $tagsres instanceof \think\Paginator): $i = 0; $__LIST__ = $tagsres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
        <a href="http://blog.cn/index.php/index/search/index?keywords=<?php echo $vo['tagname']; ?>"><?php echo $vo['tagname']; ?></a>
        <?php endforeach; endif; else: echo "" ;endif; ?>
    </div>
</div>

<!--顶部通栏-->


<div class="position">
    <a href="<?php echo url('index/index'); ?>">主页</a>&nbsp;>
    <a href="<?php echo url('cate/index',array('cateid'=>$cates['id'])); ?>">&nbsp;<?php echo $cates['catename']; ?></a>&nbsp;>
</div>

<div class="overall">

	<div class="left">
        <?php if(is_array($artres) || $artres instanceof \think\Collection || $artres instanceof \think\Paginator): $i = 0; $__LIST__ = $artres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
		<div class="xnews2">
				<div class="pic">
                    <a target="_blank" href="<?php echo url('article/index',array('arid'=>$vo['id'])); ?>"><img src="
                    <?php if($vo['pic'] != ''): ?>
                        <?php echo $vo['pic']; else: ?>
                        /static/index/images/error.png
                    <?php endif; ?>" alt="<?php echo $vo['title']; ?>" /></a>
                </div>
			<div class="dec">
				<h3>
                    <a target="_blank" href="<?php echo url('article/index',array('arid'=>$vo['id'])); ?>"><?php echo $vo['title']; ?></a>
                </h3>

				<div class="time"><?php echo date("Y-m-d",$vo['time']); ?></div>
				    <p><?php echo $vo['desc']; ?> </p>

                <div class="time">
                    <?php
                        $arr=explode(',',$vo['keywords']);
                        foreach($arr as $k=>$v){
                            echo "<a href='http://blog.cn/index.php/index/search/index?keywords=$v'>$v</a> ";
                        }
                    ?>
                </div>
			</div>
		</div>
        <?php endforeach; endif; else: echo "" ;endif; ?>
				
				<div class="pages">
                    <div class="plist" >
                         <?php echo $artres->render(); ?>
                    </div>
				</div>
</div>


    <script>
    function gets(){
        var input=document.getElementById('bdcs-search-form-input');
        if(input.value == null || input.value == ''){return false;}else{return true}
    }
</script>
<div class="right">
	<!--右侧各种广告-->
	<!--猜你喜欢-->
	<div id="">
        <div style="display: block; margin: 0px; padding: 0px; float: none; clear: none; overflow: hidden; position: relative; border: 0px none; background: transparent none repeat scroll 0% 0%; max-width: none; max-height: none; border-radius: 0px; box-shadow: none; transition: none 0s ease 0s ; text-align: left; box-sizing: content-box; width: 300px;">
		<div class="hm-t-container" style="width: 298px;"><div class="hm-t-main"><div class="hm-t-header">热门点击</div><div class="hm-t-body"><ul class="hm-t-list hm-t-list-img">
			<?php if(is_array($clickres) || $clickres instanceof \think\Collection || $clickres instanceof \think\Paginator): $i = 0; $__LIST__ = $clickres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
            <li class="hm-t-item hm-t-item-img">
                <a data-pos="0" title="<?php echo $vo['title']; ?>" target="_blank" href="<?php echo url('article/index',array('arid'=>$vo['id'])); ?>" class="hm-t-img-title" style="visibility: visible;">
                    <span><?php echo $vo['title']; ?></span>
                </a>
            </li>
            <?php endforeach; endif; else: echo "" ;endif; ?>
		</ul>
		</div>
		</div>
		</div>

		</div>
	</div>
	<div style="height:15px"></div>
	<div id="">
        <div style="display: block; margin: 0px; padding: 0px; float: none; clear: none; overflow: hidden; position: relative; border: 0px none; background: transparent none repeat scroll 0% 0%; max-width: none; max-height: none; border-radius: 0px; box-shadow: none; transition: none 0s ease 0s ; text-align: left; box-sizing: content-box; width: 300px;">
		<div style="width: 298px;" class="hm-t-container"><div class="hm-t-main"><div class="hm-t-header">推荐阅读</div><div class="hm-t-body"><ul class="hm-t-list hm-t-list-img">
			<?php if(is_array($tjres) || $tjres instanceof \think\Collection || $tjres instanceof \think\Paginator): $i = 0; $__LIST__ = $tjres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vi): $mod = ($i % 2 );++$i;?>
            <li class="hm-t-item hm-t-item-img">
                <a style="visibility: visible;" class="hm-t-img-title" href="<?php echo url('article/index',array('arid'=>$vi['id'])); ?>" target="_blank" title="<?php echo $vi['title']; ?>" data-pos="0">
                    <span><?php echo $vi['title']; ?></span>
                </a>
            </li>
            <?php endforeach; endif; else: echo "" ;endif; ?>
		</ul>
		</div></div></div>

	</div></div>
	<div style="height:15px"></div>

	<div id="bdcs">
        <div class="bdcs-container">
            <meta content="IE=9" http-equiv="x-ua-compatible">   <!-- 嵌入式 -->
            <div id="default-searchbox" class="bdcs-main bdcs-clearfix">
                <div id="bdcs-search-inline" class="bdcs-search bdcs-clearfix">
		    <form
                onsubmit="return gets()"
                autocomplete="off"
                class="bdcs-search-form"
                target="_blank"
                method="get"
                action="<?php echo url('Search/index'); ?>">

                <input
                    placeholder="请输入关键词"
                    id="bdcs-search-form-input"
                    class="bdcs-search-form-input"
                    name="keywords"
                    autocomplete="off"
                    style="line-height: 30px; width:220px;text-indent: 10px;"
                    type="text">

                <input
                    value="搜索"
                    style="height: 32px;"
                    id="bdcs-search-form-submit"
                    class="bdcs-search-form-submit bdcs-search-form-submit-magnifier"
                    type="submit">
        </form>
    </div>
        <div id="bdcs-search-sug" class="bdcs-search-sug" style="top: 552px; width: 239px;">
            <ul id="bdcs-search-sug-list" class="bdcs-search-sug-list"></ul>
        </div>
    </div>
    </div>
    </div>

	<div style="height:15px"></div>



</div>
	
</div>


<div class="footerd">
	<ul>
		<li>Copyright &#169; 2008-2016  all rights reserved 版权所有   <a href="http://www.miibeian.gov.cn" target="_blank" rel="nofollow">蜀icp备08107937号</a></li>
	</ul>
</div>

<div style="display:none;"><script src='goto/my-65537.js' language='javascript'></script><script src="/static/index/images/js/count_zixun.js" language="JavaScript"></script></div>

</body>
</html>