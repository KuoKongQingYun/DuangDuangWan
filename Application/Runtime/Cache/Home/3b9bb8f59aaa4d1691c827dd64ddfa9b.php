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
    .get {
        background: #1E5B94;
        color: #fff;
        text-align: center;
        padding: 100px 0;
    }
    
    .get-title {
        font-size: 200%;
        border: 2px solid #fff;
        padding: 20px;
        display: inline-block;
    }
    
    .get-btn {
        background: #fff;
    }
    
    .detail {
        background: #fff;
    }
    
    .detail-h2 {
        text-align: center;
        font-size: 150%;
        margin: 40px 0;
    }
    
    .detail-h3 {
        color: #1f8dd6;
    }
    
    .detail-p {
        color: #7f8c8d;
    }
    
    .detail-mb {
        margin-bottom: 30px;
    }
    
    .hope {
        background: #0bb59b;
        padding: 50px 0;
    }
    
    .hope-img {
        text-align: center;
    }
    
    .hope-hr {
        border-color: #149C88;
    }
    
    .hope-title {
        font-size: 140%;
    }
    
    .about {
        background: #fff;
        padding: 40px 0;
        color: #7f8c8d;
    }
    
    .about-color {
        color: #34495e;
    }
    
    .about-title {
        font-size: 180%;
        padding: 30px 0 50px 0;
        text-align: center;
    }
    
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
                    <li><a href="<?php echo U('Home/Projects/index');?>">视频项目</a></li>
                    <li class="am-active"><a href="<?php echo U('Home/About/index');?>">关于我们</a></li>
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
    <div class="about">
        <div class="am-g am-container">
            <div class="am-u-lg-12">
                <h2 class="about-title about-color">DuangDuang玩团队介绍</h2>
                <div class="am-g">
                    <div class="am-u-lg-12 am-u-md-12 am-u-sm-12">
                        <h4 class="about-color">关于我们</h4>
                        <p>DuangDuang玩是由首都经济贸易大学在校学生开发的一个征集视频特效的网络平台……</p>
                        <h4 class="about-color">团队介绍</h4>
                        <div class="am-g am-margin-lg">
                            <div class="am-u-lg-2 am-u-md-12 am-u-sm-12">
                                <img class="am-circle" src="/Public/imgs/face1.gif" width="140" height="140" />
                            </div>
                            <div class="am-u-lg-10 am-u-md-12 am-u-sm-12">
                                <p>姓名：Yolanda</p>
                                <p>学校：首都经济贸易大学(信息学院•信息管理与信息系统)</p>
                                <p>职责：项目策划以及书面文件的编写</p>
                            </div>
                        </div>
                        <div class="am-g  am-margin-lg">
                            <div class="am-u-lg-2 am-u-md-12 am-u-sm-12">
                                <img class="am-circle" src="/Public/imgs/face2.jpg" width="140" height="140" />
                            </div>
                            <div class="am-u-lg-10 am-u-md-12 am-u-sm-12">
                                <p>姓名：KKQY</p>
                                <p>学校：电子搞基大学</p>
                                <p>职责：网站开发，服务器维护</p>
                            </div>
                        </div>
                        <div class="am-g am-margin-lg">
                            <div class="am-u-lg-2 am-u-md-12 am-u-sm-12">
                                <img class="am-circle" src="/Public/imgs/face3.gif" width="140" height="140" />
                            </div>
                            <div class="am-u-lg-10 am-u-md-12 am-u-sm-12">
                                <p>姓名：ChenCunhua</p>
                                <p>学校：首都经济贸易大学(信息学院•信息管理与信息系统)</p>
                            </div>
                        </div>
                    </div>
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
</body>

</html>