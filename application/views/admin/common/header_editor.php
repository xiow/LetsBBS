<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="<?php echo base_url('static/css/bootstrap.min.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('static/css/custom.css');?>" rel="stylesheet">
    <link rel="shortcut icon" href="<?php echo base_url('static/img/favicon.png');?>">

    <!-- 样式文件 -->
    <link rel="stylesheet" href="<?php echo base_url('static/editor/themes/default/css/umeditor.min.css');?>">
    <!-- 引用jquery -->
    <script src="<?php echo base_url('static/editor/third-party/jquery.min.js');?>"></script>
    <!-- 配置文件 -->
    <script type="text/javascript" src="<?php echo base_url('static/editor/umeditor.config.js');?>"></script>
    <!-- 编辑器源码文件 -->
    <script type="text/javascript" src="<?php echo base_url('static/editor/umeditor.min.js');?>"></script>
    <!-- 语言包文件 -->
    <script type="text/javascript" src="<?php echo base_url('static/editor/lang/zh-cn/zh-cn.js');?>"></script>
    <!-- 实例化编辑器代码 -->
    <script type="text/javascript">
    $(function(){
        window.um = UM.getEditor('content', {
            /* 传入配置参数,可配参数列表看umeditor.config.js */
        });
    });
    </script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="http://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <title>管理中心 | <?php echo $site_name;?></title>
</head>
<body>
    <nav class="navbar navbar-default" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo base_url();?>"><?php echo $site_name;?></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li<?php if (uri_string()=='') {echo ' class="active"';}?>><a href="<?php echo base_url();?>">首页</a></li>
                    <li<?php if (uri_string()=='node') {echo ' class="active"';}?>><a href="<?php echo base_url('node');?>">节点</a></li>
                    <li<?php if (uri_string()=='topic/add') {echo ' class="active"';}?>><a href="<?php echo base_url('topic/add');?>">发表</a></li>
                </ul>
                <form class="navbar-form navbar-left" role="search">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search">
                    </div>
                </form>
                <ul class="nav navbar-nav navbar-right">
                    <?php if ($this->session->userdata('username')) : ?>
                    <li><a href="<?php echo base_url('member/'.$this->session->userdata('username')); ?>"><?php echo $this->session->userdata('username'); ?></a></li>
                    <?php if ($this->session->userdata('group_id')==1) {
                        echo '<li><a href="'. base_url('admin') . '">后台</a></li>';}?>
                    <li><a href="<?php echo base_url('settings'); ?>">设置</a></li>
                    <li><a href="<?php echo base_url('logout'); ?>">登出</a></li>
                    <?php else : ?>
                    <li><a href="<?php echo base_url('reg');?>">注册</a></li>
                    <li><a href="<?php echo base_url('login');?>">登录</a></li>
                    <?php endif;?>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container -->
    </nav>
