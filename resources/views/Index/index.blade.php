<!doctype html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>尼禄博客张海强的个人博客</title>
    <meta name="keywords" content="尼禄博客张海强的个人博客,PHP博客,技术博客">
    <meta name="description" content="尼禄博客张海强的个人博客,PHP博客,技术博客">
    <link rel="stylesheet" type="text/css" href="/home/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/home/css/nprogress.css">
    <link rel="stylesheet" type="text/css" href="/home/css/style.css">
    <link rel="stylesheet" type="text/css" href="/home/css/font-awesome.min.css">
    <link rel="apple-touch-icon-precomposed" href="/home/images/icon.png">
    <link rel="shortcut icon" href="/home/images/favicon.ico">
    <script src="/home/js/jquery-2.1.4.min.js"></script>
    <script src="/home/js/nprogress.js"></script>
    <script src="/home/js/jquery.lazyload.min.js"></script>

    <!--[if gte IE 9]>
    <script src="/home/js/jquery-1.11.1.min.js" type="text/javascript"></script>
    <script src="/home/js/html5shiv.min.js" type="text/javascript"></script>
    <script src="/home/js/respond.min.js" type="text/javascript"></script>
    <script src="/home/js/selectivizr-min.js" type="text/javascript"></script>
    <![endif]-->
    <!--[if lt IE 9]>
    <script>window.location.href = 'upgrade-browser.html';</script>
    <![endif]-->
</head>
<body class="user-select">
<header class="header">
    <nav class="navbar navbar-default" id="navbar">
        <div class="container">
            <div class="header-topbar hidden-xs link-border">
                <ul class="site-nav topmenu">
                    <li><a href="#">标签云</a></li>
                    <li><a href="#" rel="nofollow">读者墙</a></li>
                    <li><a href="#" title="RSS订阅">
                            <i class="fa fa-rss">
                            </i> RSS订阅
                        </a></li>
                </ul>
                勤记录 懂分享
            </div>
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#header-navbar" aria-expanded="false"><span class="sr-only"></span> <span
                            class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span>
                </button>
                <h1 class="logo hvr-bounce-in"><a href="/" title="张海强的博客"><img src="/home/images/201610171329086541.png"
                                                                               alt="张海强的博客"></a></h1>
            </div>
            <div class="collapse navbar-collapse" id="header-navbar">
                <form class="navbar-form visible-xs" action="/" method="get">
                    <div class="input-group">
                        <input type="text" name="search" class="form-control" placeholder="请输入关键字" maxlength="20"
                               autocomplete="off">
                        <span class="input-group-btn">
		<button class="btn btn-default btn-search" name="search" type="submit">搜索2</button>
		</span></div>
                </form>

                <ul class="nav navbar-nav navbar-left" style="margin-left:50px;">
                    <li><a title="首页" href="/">首页</a></li>
                    <li><a title="PHP应用" href="?cate_id=3">PHP应用</a></li>
                    <li><a title="微信开发" href="?cate_id=11">微信开发</a></li>
                    <li><a title="JavaScript" href="?cate_id=9">JavaScript</a></li>
                    <li><a title="PHP基础专题" href="?cate_id=2">PHP基础专题</a></li>
                    <li><a title="Linux系统" href="?cate_id=6">Linux系统</a></li>
                    <li><a title="Windows系统" href="?cate_id=5">Windows系统</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<section class="container">
    <div class="content-wrap">
        <div class="content">
            <div id="focusslide" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#focusslide" data-slide-to="0" class="active"></li>
                    <li data-target="#focusslide" data-slide-to="1"></li>
                    <li data-target="#focusslide" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <a href="http://tp.cn//home/index/tag?tag=8" target="_blank" title="Laravel框架应用篇">
                            <img src="/home/images//201610241227558789.jpg" alt="Laravel框架应用篇"
                                 class="img-responsive"></a>
                    </div>
                    <div class="item">
                        <a href="http://tp.cn//home/index/tag?tag=23" target="_blank" title="PHP入门专题篇">
                            <img src="/home/images//201610181557196870.jpg" alt="PHP入门专题篇" class="img-responsive"></a>
                    </div>
                    <div class="item">
                        <a href="http://tp.cn//home/index/tag?tag=2" target="_blank" title="微信开发学习篇">
                            <img src="/home/images//582abf1f0072.jpg" alt="微信开发篇" class="img-responsive"></a>
                    </div>
                </div>
                <a class="left carousel-control" href="#focusslide" role="button" data-slide="prev" rel="nofollow">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> <span
                            class="sr-only">上一个</span> </a> <a class="right carousel-control" href="#focusslide"
                                                               role="button" data-slide="next" rel="nofollow"> <span
                            class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <span class="sr-only">下一个</span>
                </a></div>
            <article class="excerpt-minic excerpt-minic-index">
                <h2><span class="red">【顶置】</span><a target="_blank" href="/article/75"
                                                    title="Linux(Centos7.2)配置Laravel开发环境及git中laravel项目的部署">Linux(Centos7.2)配置Laravel开发环境及git中laravel项目的部署</a>
                </h2>
                <p class="note">
                    一、配置linux的lamp环境及解析两个虚拟主机，Linux系统Lamp环境的配置，这里不再详细说明，有需求的可以看以前的博客，或者更偷懒一些，使用一键安装脚本，阿里云主机的，可以使用镜像市场的PHP环境。有一点需要注意，Laravel框架的网站入口为框架目录中的public目录，所以在配置虚拟主机时...</p>
            </article>
            <div class="title">
                <h3>最新发布</h3>
                <!-- 		<div class="more">
                            <a href="#" title="" >xxx</a>
                            <a href="#" title="" >xxx</a>
                            <a href="#" title="" >xxx</a>
                            <a href="#" title="" >xxx</a>
                            <a href="#" title="" >xxx</a>
                        </div> -->
            </div>
            <!-- 文章列表 -->
            @foreach ($list as $article)
                <article class="excerpt excerpt-1" style="">
                    <a class="focus" href="/article/{{$article->id}}" target="_blank"><img class="thumb"
                                                                                           data-original="{{$article->cover}}"
                                                                                           style="display: inline;"></a>
                    <header><a class="cat" href="/article/{{$article->id}}"><i></i>{{$article->cate_name}}</a>
                        <h2><a href="/article/{{$article->id}}" target="_blank" class="atitle">{{$article->title}}</a>
                        </h2>
                    </header>
                    <p class="meta">
                        <time class="time"><i class="glyphicon glyphicon-time"></i> {{$article->created_at}}</time>
                        <span class="views"><i class="glyphicon glyphicon-eye-open"></i> {{$article->count}}</span>
                        <a class="comment" href="##comment" title="来源" target="_blank"><i
                                    class="glyphicon glyphicon-comment"></i> 来源:@if($article->source == 1) 原创 @else
                                转载 @endif</a>
                    </p>
                    <p class="note">{{mb_substr(strip_tags($article->content),1,250)}}</p>
                </article>
            @endforeach
            <nav class="pagination" style="display:block">
                <ul>
                    @foreach ($counts as $count)
                        <li @if($count == $page) class="active" @endif ><a href="?page={{$count}}">{{$count}}</a></li>
                    @endforeach
                    <li><span>共 {{count($counts)}} 页</span></li>
                </ul>
            </nav>
        </div>
    </div>
    <aside class="sidebar">
        <div class="fixed">
            <!-- 右侧联系方式 -->

            <div class="widget widget_search">
                <form class="navbar-form" action="/" method="get">
                    <div class="input-group">
                        <input type="text" name="search" class="form-control" size="35" placeholder="请输入关键字"
                               maxlength="15" autocomplete="off">
                        <span class="input-group-btn">
		<button class="btn btn-default btn-search" type="submit">搜索</button>
		</span></div>
                </form>
            </div>
            <div class="widget widget_hot">
                <h3>最新评论文章</h3>
            </div>

        </div>
        <div class="widget widget_sentence">
            <h3>标签云</h3>
            <div class="widget-sentence-content">
                <ul class="plinks ptags">
                    @foreach($tags as $key=>$tag)
                        <li><a href="?tag_id=" title="" draggable="false">{{$tag->name}} <span
                                        class="badge">{{$tag->count}}</span></a></li>
                    @endforeach
                </ul>
            </div>
        </div>

        <!-- 多说公共JS代码 start (一个网页只需插入一次) -->
        <div style="padding:5px 0 0 20px">
            <!-- 多说最新评论 start -->
            <div class="ds-recent-comments" data-num-items="20" data-show-avatars="1" data-show-time="1"
                 data-show-title="1" data-show-admin="1" data-excerpt-length="70"></div>
            <!--PC和WAP自适应版-->
            <div id="SOHUCS" sid="请将此处替换为配置SourceID的语句"></div>
            <script type="text/javascript">
                (function () {
                    var appid = 'cyqS4lKzB';
                    var conf = 'prod_13384ffc9d8bdb21c53c6f72d46f7866';
                    var width = window.innerWidth || document.documentElement.clientWidth;
                    if (width < 960) {
                        window.document.write('<script id="changyan_mobile_js" charset="utf-8" type="text/javascript" src="https://changyan.sohu.com/upload/mobile/wap-js/changyan_mobile.js?client_id=' + appid + '&conf=' + conf + '"><\/script>');
                    } else {
                        var loadJs = function (d, a) {
                            var c = document.getElementsByTagName("head")[0] || document.head || document.documentElement;
                            var b = document.createElement("script");
                            b.setAttribute("type", "text/javascript");
                            b.setAttribute("charset", "UTF-8");
                            b.setAttribute("src", d);
                            if (typeof a === "function") {
                                if (window.attachEvent) {
                                    b.onreadystatechange = function () {
                                        var e = b.readyState;
                                        if (e === "loaded" || e === "complete") {
                                            b.onreadystatechange = null;
                                            a()
                                        }
                                    }
                                } else {
                                    b.onload = a
                                }
                            }
                            c.appendChild(b)
                        };
                        loadJs("https://changyan.sohu.com/upload/changyan.js", function () {
                            window.changyan.api.config({appid: appid, conf: conf})
                        });
                    }
                })(); </script>
            <!-- 多说最新评论 end -->
        </div>
        <!-- 多说公共JS代码 end -->

        <!-- 淘宝广告区域 -->
        <div class="widget widget_sentence">

            <script type="text/javascript">
                document.write('<a style="display:none!important" id="tanx-a-mm_13610958_19026348_66546886"></a>');
                tanx_s = document.createElement("script");
                tanx_s.type = "text/javascript";
                tanx_s.charset = "gbk";
                tanx_s.id = "tanx-s-mm_13610958_19026348_66546886";
                tanx_s.async = true;
                tanx_s.src = "http://p.tanx.com/ex?i=mm_13610958_19026348_66546886";
                tanx_h = document.getElementsByTagName("head")[0];
                if (tanx_h) tanx_h.insertBefore(tanx_s, tanx_h.firstChild);
            </script>

        </div>
        <div class="widget widget_sentence">

            <script type="text/javascript">
                document.write('<a style="display:none!important" id="tanx-a-mm_13610958_19026348_66548751"></a>');
                tanx_s = document.createElement("script");
                tanx_s.type = "text/javascript";
                tanx_s.charset = "gbk";
                tanx_s.id = "tanx-s-mm_13610958_19026348_66548751";
                tanx_s.async = true;
                tanx_s.src = "http://p.tanx.com/ex?i=mm_13610958_19026348_66548751";
                tanx_h = document.getElementsByTagName("head")[0];
                if (tanx_h) tanx_h.insertBefore(tanx_s, tanx_h.firstChild);
            </script>

        </div>
        <br>
        <!-- 淘宝广告区域 END-->
        <div class="widget widget_sentence">
            <h3>友情链接</h3>
            <div class="widget-sentence-link">
                <a href="http://www.thinkphp.cn/" title="ThinkPHP官网" target="_blank">ThinkPHP官网</a>&nbsp;&nbsp;&nbsp;<a
                        href="https://laravel-china.org/" title="Laravel社区" target="_blank">Laravel社区</a>&nbsp;&nbsp;&nbsp;<a
                        href="http://ckplayer.com/" title="ckplayer" target="_blank">ckplayer</a>&nbsp;&nbsp;&nbsp;<a
                        href="http://www.ijquery.cn/" title="jQuery库" target="_blank">jQuery库</a>
            </div>
        </div>
    </aside>
</section>
<footer class="footer">
    <div class="container">
        <p>Copyright &copy; 2014-2016.ZHQ All rights reserved.<a target="_blank" href="#">&#x7F51;&#x9875;&#x6A21;&#x677F;</a>
        </p>
    </div>
    <div id="gotop"><a class="gotop"></a></div>
</footer>
<script src="/home/js/bootstrap.min.js"></script>
<script src="/home/js/jquery.ias.js"></script>
<script src="/home/js/scripts.js"></script>
</body>
</html>
