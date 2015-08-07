<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

<head lang="en">
    <meta charset="UTF-8">
    <title>DuangDuang玩 - 秀出你自己的影视特效</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="format-detection" content="telephone=no">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <link rel="alternate icon" type="image/png" href="/Public/i/favicon.png">
    <link rel="stylesheet" href="http://cdn.amazeui.org/amazeui/2.4.2/css/amazeui.min.css" />
    <style>
    .footer p {
        color: #7f8c8d;
        margin: 0;
        padding: 15px 0;
        text-align: center;
        background: #2d3e50;
    }
    </style>
</head>

<body>
    <header class="am-topbar am-topbar-fixed-top">
        <div class="am-container">
            <h1 class="am-topbar-brand">
      <a href="<?php echo U('Home/Index/index');?>">DuangDuang玩</a>
    </h1>
            <button class="am-topbar-btn am-topbar-toggle am-btn am-btn-sm am-btn-secondary am-show-sm-only" data-am-collapse="{target: '#collapse-head'}"><span class="am-sr-only">导航切换</span> <span class="am-icon-bars"></span></button>
            <div class="am-collapse am-topbar-collapse" id="collapse-head">
                <ul class="am-nav am-nav-pills am-topbar-nav">
                    <li><a href="<?php echo U('Home/Index/index');?>">网站首页</a></li>
                    <li class="am-active"><a href="<?php echo U('Home/Projects/index');?>">视频项目</a></li>
                    <li><a href="<?php echo U('Home/About/index');?>">关于我们</a></li>
                </ul>
                <div class="am-topbar-right">
                    <button onclick="window.location.href='<?php echo U('Home/Register/index');?>';" class="am-btn am-btn-secondary am-topbar-btn am-btn-sm"><span class="am-icon-pencil"></span> 注册</button>
                </div>
                <div class="am-topbar-right">
                    <button onclick="window.location.href='<?php echo U('Home/Login/index');?>';" class="am-btn am-btn-primary am-topbar-btn am-btn-sm"><span class="am-icon-user"></span> 登录</button>
                </div>
            </div>
        </div>
    </header>
    <!-- 能结合 Grid、AVG Grid 使用 -->
    <div class="am-g am-container am-margin-vertical-xl">
        <div class="am-u-sm-6 am-u-md-3 am-u-lg-2">
            <div class="am-thumbnail">
                <img src="http://g2.ykimg.com/0100641F4655BAF17E3D4905889006A54AEF6C-9FFB-4D6E-8CBE-BCB82F5841AA" alt="测试视频1" />
                <h3 class="am-thumbnail-caption">测试视频1</h3>
            </div>
        </div>
    </div>
    <footer class="footer">
        <p>© 2015 <a href="http://www.duangduangwan.cn" target="_blank">DuangDuang玩</a> by the KKQY</p>
    </footer>
    <!--[if lt IE 9]>
<script src="http://libs.baidu.com/jquery/1.11.3/jquery.min.js"></script>
<script src="http://cdn.staticfile.org/modernizr/2.8.3/modernizr.js"></script>
<script src="http://cdn.amazeui.org/amazeui/2.4.2/js/amazeui.ie8polyfill.min.js"></script>
<![endif]-->
    <!--[if (gte IE 9)|!(IE)]><!-->
    <script src="http://cdn.staticfile.org/jquery/2.1.0/jquery.js"></script>
    <!--<![endif]-->
    <script src="http://cdn.amazeui.org/amazeui/2.4.2/js/amazeui.min.js"></script>
    <script src="http://cdn.staticfile.org/masonry/3.1.5/masonry.pkgd.min.js"></script>
</body>

</html>