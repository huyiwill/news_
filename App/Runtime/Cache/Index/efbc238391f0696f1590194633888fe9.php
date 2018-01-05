<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<html lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta content="" name="description">
        <meta content="" name="keywords">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="HandheldFriendly" content="true">
        <meta content="telephone=no" name="format-detection">
        <!-- favicon -->
        <link rel="shortcut icon" type="image/png" href="favicon.png" />
        <!--[if (gt IE 9)|!(IE)]><!-->
        <!-- custom CSS -->
        <link href="__CSS__/main.css" rel="stylesheet" type="text/css" />
        <!-- END custom CSS -->
        <!--<![endif]-->
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <title>News</title>
    </head>
    <body>
        <!-- Header -->
        <header id="header" class="header">
            <div class="header__top">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="wrap-logo">
                                <a href="index.html" class="logo"></a>
                            </div>
                        </div>
                        <div class="col-sm-offset-2 col-md-offset-5 col-sm-6 col-md-4 hidden-xs">
                            <div class="col-xs-4 col-sm-5">
                                <div class="weather">
                                    <div class="weather__temperature">
                                        <span class="icon-sun"></span>
                                        <em class="active">+8 C</em>
                                        <em>+2 C</em>
                                        <em>+3 C</em>
                                    </div>
                                    <div class="weather__city">
                                        <em>London</em>
                                        <div class="weather__city__list">
                                            <ul>
                                                <li class="active">
                                                    <a href="#">London</a>
                                                </li>
                                                <li>
                                                    <a href="#">Moscow</a>
                                                </li>
                                                <li>
                                                    <a href="#">Kiev</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-7">
                                <div class="exchange">
                                    <p class="exchange__name">Central Bank Rate</p>
                                    <p class="exchange__course">
                                        $<span>32.32</span>&#8364;<span>28.23</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="wsmenucontent overlapblackbg"></div>
            <div class="wsmenuexpandermain slideRight">
                <a id="navToggle" class="animated-arrow slideLeft">
                    <span></span>
                </a>
            </div>
            <div class="header_down">
                <div class="container">
                    <div class="wrapper clearfix bigmegamenu">
                        <!--Main Menu HTML Code-->
                        <nav class="wsmenu slideLeft clearfix">
                            <ul class="mobile-sub wsmenu-list">
                                <li class="visible-xs">
                                    <form class="navbar-form mob_search" role="search">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Search">
                                        </div>
                                        <button type="submit" class="btn btn-search">
                                            <i class="icon-search"></i>
                                        </button>
                                    </form>
                                </li>

                                <li class="active">
                                    <span class="wsmenu-click"></span>
                                    <a href="index.html">Home</a>
                                </li>
                                <li>
                                    <span class="wsmenu-click"></span>
                                    <a href="category.html">Policy</a>
                                </li>
                                <li>
                                    <span class="wsmenu-click"></span>
                                    <a href="category.html">Sport</a>
                                </li>
                                <li>
                                    <span class="wsmenu-click"></span>
                                    <a href="category.html">Holidays</a>
                                </li>
                                <li>
                                    <span class="wsmenu-click"></span>
                                    <a href="category.html">Religion</a>
                                </li>
                                <li>
                                    <span class="wsmenu-click"></span>
                                    <a href="category.html">People</a>
                                </li>
                                <li>
                                    <span class="wsmenu-click"></span>
                                    <a href="category.html">Main</a>
                                </li>
                                <li>
                                    <span class="wsmenu-click"></span>
                                    <a href="">Other
                                        <span class="arrow"></span>
                                    </a>
                                    <ul class="wsmenu-submenu">
                                        <li>
                                            <a href="404.html">404 page</a>
                                        </li>
                                        <li>
                                            <a href="category.html">Category page</a>
                                        </li>
                                        <li>
                                            <a href="news.html">News page</a>
                                        </li>
                                        <li>
                                            <a href="search-result.html">Search result</a>
                                        </li>
                                        <li>
                                            <a href="full-width.html">Full width</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="navbar-right hidden-xs">
                                    <form class="navbar-form " role="search">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Search">
                                        </div>
                                        <button type="submit" class="btn btn-search">
                                            <i class="icon-search"></i>
                                            <br>Search
                                        </button>
                                    </form>
                                </li>
                                <li>
                                    <div class="visible-xs col-sm-offset-5 col-sm-4">
                                        <div class="col-sm-5">
                                            <div class="weather">
                                                <div class="weather__temperature">
                                                    <span class="icon-sun"></span>
                                                    <em>+8 C</em>
                                                </div>
                                                <div class="weather__city">
                                                    <em>London</em>
                                                    <div class="weather__city__list">
                                                        <ul>
                                                            <li class="active">
                                                                <a href="#">London</a>
                                                            </li>
                                                            <li>
                                                                <a href="#">Moscow</a>
                                                            </li>
                                                            <li>
                                                                <a href="#">Kiev</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-7">
                                            <div class="exchange">
                                                <p class="exchange__name">Central Bank Rate</p>
                                                <p class="exchange__course">
                                                    $<span>32.32</span>&#8364;<span>28.23</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </nav>
                        <!--Menu HTML Code-->
                    </div>
                </div>
            </div>
        </header>
        <!-- END header -->
        <!-- header slider -->
        <div class="wrapper">
            <article class="container articles">
                <div class="row">
                    <div class="col-sm-4 col-md-3 right_sidebar hidden-xs hidden-sm" data-spy="affix" data-offset-top="112" data-offset-bottom="80">
                        <div class="news-tabs">
                            <p class="news-tabs__title h2">News feed</p>
                            <ul class="news-tabs__nav nav nav-tabs shadow_text" role="tablist">
                                <li role="presentation" class="active">
                                    <a href="#home" role="tab" data-toggle="tab">
                                        <span class="time">today, 12:30</span>
                                        Volkswagen hit by multiple probes in US
                                    </a>
                                </li>
                                <li role="presentation">
                                    <a href="#profile" role="tab" data-toggle="tab">
                                        <span class="time">today, 12:30</span>
                                        Volkswagen hit by multiple probes in US
                                    </a>
                                </li>
                                <li role="presentation">
                                    <a href="#messages" role="tab" data-toggle="tab">
                                        <span class="time">today, 12:30</span>
                                        Volkswagen hit by multiple probes in US
                                    </a>
                                </li>
                                <li role="presentation">
                                    <a href="#settings" role="tab" data-toggle="tab">
                                        <span class="time">today, 12:30</span>
                                        Volkswagen hit by multiple probes in US
                                    </a>
                                </li>
                                <li role="presentation">
                                    <a href="#home" role="tab" data-toggle="tab">
                                        <span class="time">today, 12:30</span>
                                        Volkswagen hit by multiple probes in US
                                    </a>
                                </li>
                                <li role="presentation">
                                    <a href="#profile" role="tab" data-toggle="tab">
                                        <span class="time">today, 12:30</span>
                                        Volkswagen hit by multiple probes in US
                                    </a>
                                </li>
                                <li role="presentation">
                                    <a href="#messages" role="tab" data-toggle="tab">
                                        <span class="time">today, 12:30</span>
                                        Volkswagen hit by multiple probes in US
                                    </a>
                                </li>
                                <li role="presentation">
                                    <a href="#settings" role="tab" data-toggle="tab">
                                        <span class="time">today, 12:30</span>
                                        Volkswagen hit by multiple probes in US
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-9 p0 wrap-headline">
                        <img src="<?php echo ($banner); ?>" alt="img" class="wrap-headline__img">
                        <div class="headline clearfix">
                            <div class="headline__data">
                                <a href="<?php echo U('Index/Index/index/',array('n'=>2));?>" class="headline__category headline__category_orange">首页</a>
                                <p class="headline__category"><?php echo ($one_news_time); ?></p>
                            </div>
                            <!--<div class="share">-->
                                <!--<ul class="share__list">-->
                                    <!--<li class="share__row">-->
                                        <!--<a class="share__link share__link_bg-facebook" href="#">-->
                                            <!--<i class="bg bg_facebook">&ensp;</i>-->
                                        <!--</a>-->
                                        <!--<span class="share__number">13</span>-->
                                    <!--</li>-->
                                    <!--<li class="share__row">-->
                                        <!--<a class="share__link share__link_bg-twitter" href="#">-->
                                            <!--<i class="bg bg_twitter">&ensp;</i>-->
                                        <!--</a>-->
                                        <!--<span class="share__number">26</span>-->
                                    <!--</li>-->
                                    <!--<li class="share__row">-->
                                        <!--<a class="share__link share__link_bg-google" href="#">-->
                                            <!--<i class="bg bg_google">&ensp;</i>-->
                                        <!--</a>-->
                                        <!--<span class="share__number">17</span>-->
                                    <!--</li>-->
                                <!--</ul>-->
                            <!--</div>-->
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-9 article_text">
                        <div class="current">
                            <h1 class="text-center yel_line current__title"><?php echo ($one_news_title); ?></h1>
                            <?php if($content_title != null): ?><p class="current__text"><?php echo ($content_title); ?></p><?php endif; ?>

                          <?php if($one_news_imgs_tags != null): for($i=0;$i<count($one_news_imgs_tags);$i++){ echo "<img src='".$one_news_imgs_tags[$i]."' alt=\"img\" class=\"current__img\">"; if(isset($news_tag) && !empty($news_tag)){ echo '<blockquote class="quote current__quote">'.$news_tag[$i].'</blockquote>'; } } endif; ?>

                            <?php if($content_main != null): if(is_array($content_main)): foreach($content_main as $key=>$new_main): ?><p class="current__text"><?php echo ($new_main); ?></p><?php endforeach; endif; endif; ?>

                        </div>
                    </div>
                    <div class="col-sm-12 col-md-9 tags">
                        <p>Tags:</p>
                        <ul>
                            <li>
                                <a href="#" title="World" class="font">World</a>
                            </li>
                            <li>
                                <a class="yellow font" href="#" title="Sport">Sport</a>
                            </li>
                            <li>
                                <a href="#" title="Cats" class="font">Cats</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-sm-9 col-md-8 col-lg-6 comments">
                        <p class="comments__title">Comments</p>
                        <div class="comments__media">
                            <div class="media-middle">
                                <i class="media-object" style="background-image: url('__IMAGES__/content/comment.png')"></i>
                                <div class="comm_info">
                                    <h4 class="media-heading">Maria</h4>
                                    <span class="time">today, 12:30</span>
                                </div>
                            </div>
                            <p class="media-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>
                        <div class="comments__media">
                            <div class="media-middle">
                                <i class="media-object" style="background-image: url('__IMAGES__/content/comment.png')"></i>
                                <div class="comm_info">
                                    <h4 class="media-heading">Maria</h4>
                                    <span class="time">today, 12:30</span>
                                </div>
                            </div>
                            <p class="media-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>
                        <div class="comments__media">
                            <div class="media-middle">
                                <i class="media-object" style="background-image: url('__IMAGES__/content/comment.png')"></i>
                                <div class="comm_info">
                                    <h4 class="media-heading">Maria</h4>
                                    <span class="time">today, 12:30</span>
                                </div>
                            </div>
                            <p class="media-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>
                        <div class="comments__form">
                            <form action="#" method="POST">
                                <div class="form-group">
                                    <input type="text" style="width: 200px;" class="form-control" placeholder="Your name">
                                </div>
                                <div class="form-group">
                                    <textarea name="text" id="input" class="form-control" rows="7" required="required"></textarea>
                                </div>
                                <button type="submit" class="btn btn-comment">send</button>
                            </form>
                        </div>
                    </div>
                </div>
            </article>
        </div>
        <!-- Footer -->
        <footer class="footer slate_gray">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <p class="copyright">Copyright &copy; 2017.Company name All rights reserved.<a target="_blank" href="http://sc.chinaz.com/moban/">&#x7F51;&#x9875;&#x6A21;&#x677F;</a></p>
                    </div>
                    <div class="col-sm-6">
                        <div class="social navbar-right">
                            <p class="social__text">We are in social networks</p>
                            <ul class="social__list">
                                <li class="social__item">
                                    <a class="facebook" href="#">
                                        <i class="icon-facebook"></i>
                                    </a>
                                </li>
                                <li class="social__item">
                                    <a class="twitter" href="#">
                                        <i class="icon-twitter"></i>
                                    </a>
                                </li>
                                <li class="social__item">
                                    <a class="gplus" href="#">
                                        <i class="icon-gplus"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- END Footer -->
        <!-- All JavaScript libraries -->
		<script src="__JS__/jquery.min.js"></script>
		<script src="__JS__/bootstrap.min.js"></script>
		<!-- Custom JavaScript -->
        <script src="__JS__/main.js"></script>
    </body>
</html>