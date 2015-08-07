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
                    <li class="am-active"><a href="<?php echo U('Home/Index/index');?>">网站首页</a></li>
                    <li><a href="<?php echo U('Home/Projects/index');?>">视频项目</a></li>
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
    <div class="am-alert" data-am-alert>
      <button type="button" class="am-close">&times;</button>
      <p>网站建设中！敬请期待……</p>
    </div>
    <div class="get">
        <div class="am-g">
            <div class="am-u-lg-12">
                <h1 class="get-title">DuangDuang玩</h1>
                <p>
                    一起加入，展现您独到的影视特效
                </p>
                <p>
                    <a href="#" class="am-btn am-btn-sm get-btn">加入我们</a>
                </p>
            </div>
        </div>
    </div>
    <div class="detail">
        <div class="am-g am-container">
            <div class="am-u-lg-12">
                <h2 class="detail-h2">高大上的恶搞？高大上的特效？期待和你一起去实现!</h2>
                <div class="am-g">
                    <div class="am-u-lg-3 am-u-md-6 am-u-sm-12 detail-mb">
                        <h3 class="detail-h3">
            <i class="am-icon-at am-icon-sm"></i>
            有趣Funny
          </h3>
                        <p class="detail-p">
                            吐槽别人的特效？当你看到电视剧里面得到画面高呼“五毛特效”的时候，你有没有想过网友是如何做的？到底是做成“恶搞”博人一笑，还是做成“大片”让人大吃一惊？
                        </p>
                    </div>
                    <div class="am-u-lg-3 am-u-md-6 am-u-sm-12 detail-mb">
                        <h3 class="detail-h3">
            <i class="am-icon-bolt am-icon-sm"></i>
            精彩Brilliant
          </h3>
                        <p class="detail-p">
                            这里将会汇聚大量业余的、专业的从事影视特效制作的高手们，经过他们加工以后的视频将会变得如何？是否会变得具有大片即视感？！变得Duang~Duang~Duang~
                        </p>
                    </div>
                    <div class="am-u-lg-3 am-u-md-6 am-u-sm-12 detail-mb">
                        <h3 class="detail-h3">
            <i class="am-icon-heart am-icon-sm"></i>
            真诚Sincere 
          </h3>
                        <p class="detail-p">
                            我们真诚希望你能加入我们，让这里充满生气，我们更希望我们能为您提供机会，让别人能发现你的才华。
                        </p>
                    </div>
                    <div class="am-u-lg-3 am-u-md-6 am-u-sm-12 detail-mb">
                        <h3 class="detail-h3">
            <i class="am-icon-send-o am-icon-sm"></i>
            共赢Symbiosis
          </h3>
                        <p class="detail-p">
                            “当你们成功的时候，我们才成功。”我们一直在寻找和探索互赢的方式，来保证我们能够长期远行。
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="hope">
        <div class="am-g am-container">
            <div class="am-u-lg-4 am-u-md-6 am-u-sm-12 hope-img">
                <img src="/Public/i/examples/landing.png" alt="" data-am-scrollspy="{animation:'slide-left', repeat: false}">
                <hr class="am-article-divider am-show-sm-only hope-hr">
            </div>
            <div class="am-u-lg-8 am-u-md-6 am-u-sm-12">
                <p>
                    看完了《古剑奇谭》，你还在吐槽那五毛钱的章鱼特效，又迎来了《花千骨》，《盗墓笔记》等一系列穿插特效的热播剧，你还只是在吐槽吗？试试来“DuangDuang玩”自己做特效吧，不论你制作的特效是“狂霸酷炫拽”还是“搞怪接地气”，我们都欢迎，快快来大展身手吧！也许你对亲手做电影特效没兴趣，那不妨也来“DuangDuang玩”看看吧，说不定这里有你看好的非凡特效呢，也可以为你喜欢的作者点赞。更酷的是，在这里你可以穿上战衣，变身超人，成为“DuangDuang玩”影帝呢！再不来你就out了。
                </p>
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