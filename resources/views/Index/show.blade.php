<!doctype html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>张海强的博客-</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <link rel="stylesheet" type="text/css" href="/home/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/home/css/nprogress.css">
    <link rel="stylesheet" type="text/css" href="/home/css/style.css">
    <link rel="stylesheet" type="text/css" href="/home/css/font-awesome.min.css">
    <link rel="apple-touch-icon-precomposed" href="/home/images/icon.png">
    <link rel="shortcut icon" href="/home/images/favicon.ico">
    <script src="/js/angular.min.js"></script>
    <script src="/js/article_show.js"></script>
    <script src="/ueditor/ueditor.parse.js"></script>
    <script src="/home/js/jquery-2.1.4.min.js"></script>
    <script src="/home/js/nprogress.js"></script>
    <script src="/home/js/jquery.lazyload.min.js"></script>
    <script type="text/javascript">
        uParse('.article-content', {
            rootPath: "/ueditor",
        })
    </script>
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
<body class="user-select single" ng-app="myApp">
<div ng-controller="article">

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
                <h1 class="logo hvr-bounce-in"><a href="/" title="张海强的个人博客"><img
                                src="/home/images/201610171329086541.png" alt="张海强的个人博客"></a></h1>
            </div>
            <div class="collapse navbar-collapse" id="header-navbar">
                <form class="navbar-form visible-xs" action="/" method="get">
                    <div class="input-group">
                        <input type="text" name="keywords" class="form-control" placeholder="请输入关键字" maxlength="20"
                               autocomplete="off">
                        <span class="input-group-btn">
		<button class="btn btn-default btn-search" name="search" type="submit">搜索</button>
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
            <header class="article-header">
                <h1 class="article-title"><a href="#" title="{{$article->title}}">{{$article->title}}</a></h1>
                <div class="article-meta"> <span class="item article-meta-time">
	  <time class="time" data-toggle="tooltip" data-placement="bottom" title=""
            data-original-title="发表时间：{{$article->created_at}}"><i
                  class="glyphicon glyphicon-time"></i> {{$article->created_at}}</time>
	  </span> <span class="item article-meta-source" data-toggle="tooltip" data-placement="bottom" title=""
                    data-original-title="来源：原创"><i class="glyphicon glyphicon-globe"></i> 张海强的个人博客</span> <span
                            class="item article-meta-category" data-toggle="tooltip" data-placement="bottom" title=""
                            data-original-title="分类："><i class="glyphicon glyphicon-list"></i> <a href="#" title=""></a></span>
                    <span class="item article-meta-views" data-toggle="tooltip" data-placement="bottom" title=""
                          data-original-title="浏览量：{{$article->count}}"><i
                                class="glyphicon glyphicon-eye-open"></i> @{{content.id}}</span>
                    <!-- <span class="item article-meta-comment" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="评论量"><i class="glyphicon glyphicon-comment"></i> 4</span> -->
                </div>
            </header>

            <article class="article-content" style="background: #f0f0f0;">
                {!! $article->content !!}
            </article>
            <div class="article-tags">标签：
                <foreach name="" item="mytag">
                    <a href="//home/index/tag?tag=" rel="tag">噢噢噢噢</a>
                </foreach>
            </div>
            <div class="relates">
                <div class="title">
                    <h3>相关推荐</h3>
                </div>
                <!-- <ul>
                  <li><a href="#" title="" >相关栏目推荐</a></li>
                  <li><a href="#" title="" >相关栏目推荐</a></li>
                  <li><a href="#" title="" >相关栏目推荐</a></li>
                </ul> -->
            </div>
            <div class="title" id="comment">
                <h3>评论</h3>
            </div>
            <div id="respond">
                <!-- 多说评论框 start -->
                <div class="ds-thread" data-thread-key="" data-title="" data-url="/home/index/show?id="></div>
                <!-- 多说评论框 end -->
                <!-- 多说公共JS代码 start (一个网页只需插入一次) -->
                <!--PC和WAP自适应版-->
                <div id="SOHUCS" sid="{{$article->id}}}"></div>
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

                <!-- 多说公共JS代码 end -->

            </div>

        </div>
    </div>
    <aside class="sidebar">
        <div class="fixed">
            <!--   <div class="widget widget-tabs">
                <ul class="nav nav-tabs" role="tablist">
                  <li role="presentation" class="active"><a href="#notice" aria-controls="notice" role="tab" data-toggle="tab" draggable="false">统计信息</a></li>
                  <li role="presentation"><a href="#contact" aria-controls="contact" role="tab" data-toggle="tab" draggable="false">联系站长</a></li>
                </ul>
              </div> -->
            <div class="widget widget_search">
                <form class="navbar-form" action="/" method="get">
                    <div class="input-group">
                        <input type="text" name="search" class="form-control" size="35" placeholder="请输入关键字"
                               maxlength="15" autocomplete="off">
                        <span class="input-group-btn">
		<button class="btn btn-default btn-search" name="search" type="submit">搜索</button>
		</span></div>
                </form>
            </div>
        </div>
        <div class="widget widget_hot">
            <h3>最新评论文章</h3>
        </div>
        <div style="padding:5px 0 0 20px">
            <!-- 多说最新评论 start -->
            <div class="ds-recent-comments" data-num-items="20" data-show-avatars="1" data-show-time="1"
                 data-show-title="1" data-show-admin="1" data-excerpt-length="70"></div>
            <!-- 多说最新评论 end -->
        </div>

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
    </aside>
</section>
<footer class="footer">
    <div class="container">
        <p>Copyright &copy; 2016.Company name All rights reserved.<a target="_blank" href="http://sc.chinaz.com/moban/">&#x7F51;&#x9875;&#x6A21;&#x677F;</a>
        </p>
    </div>
    <div id="gotop"><a class="gotop"></a></div>
</footer>
</div>
<script src="/home/js/bootstrap.min.js"></script>
<script src="/home/js/jquery.ias.js"></script>
<script src="/home/js/scripts.js"></script>
</body>
</html>
