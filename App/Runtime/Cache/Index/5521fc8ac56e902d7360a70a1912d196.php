<?php if (!defined('THINK_PATH')) exit();?>﻿﻿<!DOCTYPE html>
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
                            <a href="./">首页</a>
                        </li>

                        <?php if(is_array($news_list)): foreach($news_list as $key=>$news_list): ?><li>
                                <span class="wsmenu-click" onclick="window.location.href = '<?php echo ($news_list["url"]); ?>'"></span>
                                <a href="<?php echo ($news_list["url"]); ?>"><?php echo ($news_list["name"]); ?></a>
                            </li><?php endforeach; endif; ?>

                        <li>
                            <span class="wsmenu-click"></span>
                            <a href="">其他
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
                            <form class="navbar-form" role="search">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Search">
                                </div>
                                <button type="submit" class="btn btn-search">
                                    <i class="icon-search"></i>
                                    <br/>Search
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
<div class="slate_gray">
  <div class="container">
    <div class="row header_news_panel">
      <!-- Tab panes -->
      <div class="col-sm-8 tab-content tab-content_mob-p0">

        <div role="tabpanel" class="tab-pane fade in active" id="home">
          <img style="width: 680px;height: 450px;" src="<?php echo ($one_data["imgs"]); ?>" alt="main img" class="tab-pane__img">
          <div class="header_news_text tab-pane__block">
            <p class="tab-pane__category yel_line"><?php echo ($one_data["twnc"]); ?></p>

            <a href="<?php echo U('Index/Index/index_news_detail/',array('url'=>$one_data['title_href']));?>" class="tab-pane__title"><?php echo ($one_data["title"]); ?></a>
            <p class="tab-pane__text"><?php echo ($one_data["desc"]); ?></p>
          </div>
        </div>

        <?php if(is_array($data)): foreach($data as $key=>$data): ?><div role="tabpanel" class="tab-pane fade" id="<?php echo ($data["idss"]); ?>">
            <img style="width: 680px;height: 450px;" src="<?php echo ($data["imgs"]); ?>" alt="main img" class="tab-pane__img">
            <div class="header_news_text tab-pane__block">
              <p class="tab-pane__category yel_line"><?php echo ($data["twnc"]); ?></p>
              <a href="<?php echo U('Index/Index/index_news_detail/',array('url'=>$data['title_href']));?>" class="tab-pane__title"><?php echo ($data["title"]); ?></a>
              <p class="tab-pane__text"><?php echo ($data["desc"]); ?></p>
            </div>
          </div><?php endforeach; endif; ?>
      </div>
      <!-- END Tab panes -->
      <!-- Nav tabs -->
      <div class="col-sm-4 news-tabs">
        <p class="news-tabs__title h2">图片新闻</p>
        <ul class="news-tabs__nav nav nav-tabs shadow_text" role="tablist">

          <li role="presentation" class="active">
            <a href="#home" role="tab" data-toggle="tab">
              <span class="time"><?php echo ($one_data["time"]); ?></span>
              <?php echo ($one_data["desc"]); ?>
            </a>
          </li>

          <?php if(is_array($datas)): foreach($datas as $key=>$datas): ?><li role="presentation">
              <a href="#<?php echo ($datas["idss"]); ?>" role="tab" data-toggle="tab">
                <span class="time"><?php echo ($datas["time"]); ?></span>
                <?php echo ($datas["desc"]); ?>
              </a>
            </li><?php endforeach; endif; ?>

          <!--<li role="presentation">-->
          <!--<a href="#messages" role="tab" data-toggle="tab">-->
          <!--<span class="time">today, 12:33</span>-->
          <!--Volkswagen hit by multiple probes in US Volkswagen hit by multiple probes in US-->
          <!--</a>-->
          <!--</li>-->
          <!--<li role="presentation">-->
          <!--<a href="#settings" role="tab" data-toggle="tab">-->
          <!--<span class="time">today, 14:44</span>-->
          <!--Volkswagen hit by multiple probes in US Volkswagen hit by multiple probes in US-->
          <!--</a>-->
          <!--</li>-->
        </ul>
      </div>
      <!-- END Nav tabs -->
    </div>
  </div>
</div>
<!-- END header slider -->
<!-- top news-->
<section>
  <!-- top news -->
  <!-- title -->
  <div class="wrap wrap_white">
    <div class="container title">
      <h1 class="title__h1 underscore">最新资讯</h1>
    </div>
  </div>
  <!-- END title -->
  <div class="wrap wrap_gray pt20">
    <div class="container">
      <div class="row">
        <?php if(is_array($popular_news)): foreach($popular_news as $key=>$item): ?><div class="col-sm-3">
          <div class="thumbnail thumbnail_small">
            <?php if($item["news_img_url"] != '' ): ?><a href="<?php echo U('Index/Catenews/get_news_detail/',array('id'=>$item['id'] , 'url'=>$item['news_content_url']));?>" class="thumbnail__link">
              <img src="<?php echo ($item["news_img_url"]); ?>" height="153" width="270" alt="News">
            </a><?php endif; ?>
            <div class="caption thumbnail__caption">
              <div class="news caption__news">
                <p class="news__category yellow-line"><?php echo ($item["news_cate"]); ?></p>
                <a href="<?php echo U('Index/Catenews/get_news_detail/',array('id'=>$item['id'] , 'url'=>$item['news_content_url']));?>" class="news__link">
                  <p class="news__text"><?php echo ($item["news_title"]); ?></p>
                </a>
              </div>
              <div class="posted">
                <span class="posted__date"><?php echo ($item["news_time"]); ?></span>
                <ul class="posted__icon">
                  <li>
                                                <span>
                                                <i class="icon-eye"></i>
                                                  <?php echo rand(1,10000); ?>
                                            </span>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div><?php endforeach; endif; ?>
      </div>


      <?php if(is_array($every_news_section)): foreach($every_news_section as $key=>$items): ?><div class="wrap wrap_white">
          <div class="container title">
            <h1 class="title__h1 underscore"><?php echo ($items["news_cate"]); ?></h1>
          </div>
        </div>
        <div class="row">
          <?php if(is_array($items["news_cate_data"])): foreach($items["news_cate_data"] as $key=>$item): ?><div class="col-sm-3">
              <div class="thumbnail thumbnail_small">
                <?php if($item["news_img_url"] != '' ): ?><a href="<?php echo U('Index/Catenews/get_news_detail/',array('id'=>$item['id'] ,'url'=>$item['news_content_url']));?>" class="thumbnail__link">
                    <img src="<?php echo ($item["news_img_url"]); ?>" height="153" width="270" alt="News">
                  </a><?php endif; ?>
                <div class="caption thumbnail__caption">
                  <div class="news caption__news">
                    <p class="news__category yellow-line"><?php echo ($item["news_title"]); ?></p>
                    <a href="<?php echo U('Index/Catenews/get_news_detail/',array('id'=>$item['id'] , 'url'=>$item['news_content_url']));?>" class="news__link">
                      <p class="news__text"><?php echo ($item["news_title"]); ?></p>
                    </a>
                  </div>
                  <div class="posted">
                    <span class="posted__date"><?php echo ($item["news_time"]); ?></span>
                    <ul class="posted__icon">
                      <li>
                                                <span>
                                                <i class="icon-eye"></i>
                                                  <?php echo rand(1,10000); ?>
                                            </span>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div><?php endforeach; endif; ?>
        </div><?php endforeach; endif; ?>


    </div>
    <!-- btn load-->
    <div class="ajax_load">
      <i class="icon-arrows-cw"></i>Load more
      <svg width="128" height="40" viewBox="0 0 128 40" xmlns="http://www.w3.org/2000/svg">
        <rect x='0' y='0' fill='none' width='128' height='40'></rect>
      </svg>
    </div>
    <!-- END btn load-->
  </div>
  <!-- /container-->
</section>
<!-- /top news -->

﻿<!-- Footer -->
<footer class="footer slate_gray">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <p class="copyright">Copyright &copy; 2017.Company name All rights reserved.<a target="_blank"
                                                                                               href="http://sc.chinaz.com/moban/">
                    &#x7F51;&#x9875;&#x6A21;&#x677F;</a></p>
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