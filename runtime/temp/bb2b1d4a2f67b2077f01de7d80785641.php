<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:75:"D:\phpStudy\PHPTutorial\WWW\Blog1\public/../app/admin\view\article\lis.html";i:1525782788;s:67:"D:\phpStudy\PHPTutorial\WWW\Blog1\app\admin\view\common\header.html";i:1525659823;s:65:"D:\phpStudy\PHPTutorial\WWW\Blog1\app\admin\view\common\left.html";i:1525862985;}*/ ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <title>乘风波浪</title>

    <meta name="description" content="Dashboard">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!--Basic Styles-->
    <link href="/static/admin/style/bootstrap.css" rel="stylesheet">
    <link href="/static/admin/style/font-awesome.css" rel="stylesheet">
    <link href="/static/admin/style/weather-icons.css" rel="stylesheet">

    <!--Beyond styles-->
    <link id="beyond-link" href="/static/admin/style/beyond.css" rel="stylesheet" type="text/css">
    <link href="/static/admin/style/demo.css" rel="stylesheet">
    <link href="/static/admin/style/typicons.css" rel="stylesheet">
    <link href="/static/admin/style/animate.css" rel="stylesheet">
    
</head>
<body>
	<!-- 头部 -->
    <div class="navbar">
    <div class="navbar-inner">
        <div class="navbar-container">
            <!-- Navbar Barnd -->
            <div class="navbar-header pull-left">
                <a href="#" class="navbar-brand">
                    <small>
                        <img src="/static/admin/images/logo.png" alt="">
                    </small>
                </a>
            </div>
            <!-- /Navbar Barnd -->
            <!-- Sidebar Collapse -->
            <div class="sidebar-collapse" id="sidebar-collapse">
                <i class="collapse-icon fa fa-bars"></i>
            </div>
            <!-- /Sidebar Collapse -->
            <!-- Account Area and Settings -->
            <div class="navbar-header pull-right">
                <div class="navbar-account">
                    <ul class="account-area">
                        <li>
                            <a class="login-area dropdown-toggle" data-toggle="dropdown">
                                <div class="avatar" title="View your public profile">
                                    <img src="/static/admin/images/logo.jpg" style="margin-left: -10px;border-radius:50px">
                                </div>
                                <section>
                                    <h2><span class="profile"><span>欢迎,<?php echo \think\Request::instance()->session('username'); ?>!</span></span></h2>
                                </section>
                            </a>
                            <!--Login Area Dropdown-->
                            <ul class="pull-right dropdown-menu dropdown-arrow dropdown-login-area" style="margin-top:-3px;">
                                <li class="username"><a>David Stevenson</a></li>
                                <li class="dropdown-footer">
                                    <a onclick="confirm('你确定要退出吗?')" href="<?php echo url('Login/logout'); ?>">
                                        退出登录
                                    </a>
                                </li>
                                <li class="dropdown-footer">
                                    <a href="<?php echo url('Admin/edit',array('id'=>\think\Request::instance()->session('id'))); ?>">
                                        修改密码
                                    </a>
                                </li>
                            </ul>
                            <!--/Login Area Dropdown-->
                        </li>
                        <!-- /Account Area -->
                        <!--Note: notice that setting div must start right after account area list.
                            no space must be between these elements-->
                        <!-- Settings -->
                    </ul>
                </div>
            </div>
            <!-- /Account Area and Settings -->
        </div>
    </div>
</div>

	<!-- /头部 -->
	
	<div class="main-container container-fluid">
		<div class="page-container">
			<!-- Page Sidebar左侧 -->
            <div class="page-sidebar" id="sidebar">
    <!-- Page Sidebar Header-->
    <div class="sidebar-header-wrapper">
        <input class="searchinput" type="text">
        <i class="searchicon fa fa-search"></i>
        <div class="searchhelper">Search Reports, Charts, Emails or Notifications</div>
    </div>
    <!-- /Page Sidebar Header -->
    <!-- Sidebar Menu -->
    <ul class="nav sidebar-menu">
        <!--Dashboard-->
        <li>
            <a href="#" class="menu-dropdown">
                <i class="menu-icon fa fa-user"></i>
                <span class="menu-text">管理员</span>
                <i class="menu-expand"></i>
            </a>
            <ul class="submenu">
                <li>
                    <a href="<?php echo url('admin/lis'); ?>">
                        <span class="menu-text">管理列表</span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
            </ul>
        </li>

        <li>
            <a href="#" class="menu-dropdown">
                <i class="menu-icon fa fa-file-text"></i>
                <span class="menu-text">文章</span>
                <i class="menu-expand"></i>
            </a>
            <ul class="submenu">
                <li>
                    <a href="<?php echo url('article/lis'); ?>">
                        <span class="menu-text">文章列表</span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
            </ul>
        </li>

        <li>
            <a href="#" class="menu-dropdown">
                <i class="menu-icon fa fa-gear"></i>
                <span class="menu-text">栏目</span>
                <i class="menu-expand"></i>
            </a>
            <ul class="submenu">
                <li>
                    <a href="<?php echo url('cate/lis'); ?>">
                        <span class="menu-text">栏目管理</span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
            </ul>
        </li>

        <li>
            <a href="#" class="menu-dropdown">
                <i class="menu-icon fa fa-link"></i>
                <span class="menu-text">友情链接</span>
                <i class="menu-expand"></i>
            </a>
            <ul class="submenu">
                <li>
                    <a href="<?php echo url('links/lis'); ?>">
                        <span class="menu-text">链接管理</span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
            </ul>
        </li>

        <li>
            <a href="#" class="menu-dropdown">
                <i class="menu-icon fa fa-tags"></i>
                <span class="menu-text">热门标签</span>
                <i class="menu-expand"></i>
            </a>
            <ul class="submenu">
                <li>
                    <a href="<?php echo url('tags/lis'); ?>">
                        <span class="menu-text">Tags标签管理</span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
            </ul>
        </li>

    </ul>
    <!-- /Sidebar Menu -->
</div>
            <!-- /Page Sidebar -->
            <!-- Page Content -->
            <div class="page-content">
                <!-- Page Breadcrumb -->
                <div class="page-breadcrumbs">
                    <ul class="breadcrumb">
                        <li><a href="#">系统</a></li>
                        <li class="active">文章管理</li>
                    </ul>
                </div>
                <!-- /Page Breadcrumb -->

                <!-- Page Body -->
<div class="page-body">
<a href="<?php echo url('article/add'); ?>" type="button" tooltip="添加文章" class="btn btn-sm btn-azure btn-addon"> <i class="fa fa-plus"></i> Add
</a>
<a href="javascript:location.replace(location.href)" type="button" tooltip="刷新" class="btn btn-sm btn-success "> <i class="fa fa-plus"></i> 刷新
</a>
<div class="row">
    <div class="col-lg-12 col-sm-12 col-xs-12">
        <div class="widget">
            <div class="widget-body">
                <div class="flip-scroll">
                    <table class="table table-bordered table-hover">
                        <thead class="">
                            <tr>
                                <th class="text-center" width="1%">ID</th>
                                <th class="text-center">文章名称</th>
                                <th class="text-center">文章关键字</th>
                                <th class="text-center">文章作者</th>
                                <th class="text-center">文章简介</th>
                                <th class="text-center">文章内容</th>
                                <th class="text-center">文章发布时间</th>
                                <th class="text-center">缩略图</th>
                                <th class="text-center">是否推荐</th>
                                <th class="text-center">所属栏目</th>
                                <th class="text-center">点击量</th>
                                <th class="text-center">操作</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php if(is_array($art) || $art instanceof \think\Collection || $art instanceof \think\Paginator): $i = 0; $__LIST__ = $art;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                        <tr>
                                <td align="center"><?php echo $vo['id']; ?></td>
                                <td align="center"><?php echo $vo['title']; ?></td>
                                <td align="center"><?php echo $vo['keywords']; ?></td>
                                <td align="center"><?php echo $vo['author']; ?></td>
                                <td align="center"><?php echo $vo['desc']; ?></td>
                                <td align="center"><?php echo $vo['content']; ?></td>
                                <td align="center"><?php echo date("Y-m-d",$vo['time']); ?></td>
                                <?php if($vo['pic'] != ''): ?>
                                <td align="center"><img src="<?php echo $vo['pic']; ?>" height="50"></td>
                                <?php else: ?>
                                <td align="center">图片暂缺</td>
                                <?php endif; if($vo['state'] != 1): ?>
                                <td align="center" style="color: red;">
                                    推荐
                                </td>
                                <?php else: ?>
                                <td align="center" style="color: #868686;">
                                    不推荐
                                </td>
                                <?php endif; ?>
                                <td align="center"><?php echo $vo['catename']; ?></td>
                                <td align="center"><?php echo $vo['click']; ?></td>
                                <td align="center">
                                    <a href="<?php echo url('edit',array('id'=>$vo['id'])); ?>" class="btn btn-primary btn-sm shiny">
                                        <i class="fa fa-edit"></i> 编辑
                                    </a>
                                    <div style="height: 3px"></div>
                                    <a href="<?php echo url('del',array('id'=>$vo['id'])); ?>" onClick="confirm('确实要删除吗')" class="btn btn-danger btn-sm shiny">
                                        <i class="fa fa-trash-o"></i> 删除
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                        </tbody>
                    </table>
                </div>

                <div>
            </div>
            </div>
        </div>
        <div class="page"><?php echo $art->render(); ?></div>

    </div>
</div>


</div>
                <!-- /Page Body -->
            </div>
            <!-- /Page Content -->
		</div>	
	</div>

	    <!--Basic Scripts-->
    <script src="/static/admin/style/jquery_002.js"></script>
    <script src="/static/admin/style/bootstrap.js"></script>
    <script src="/static/admin/style/jquery.js"></script>
    <!--Beyond Scripts-->
    <script src="/static/admin/style/beyond.js"></script>
    


</body></html>