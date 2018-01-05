<?php
//
use \phpspider\core\requests;
use \phpspider\core\selector;

/**
 * 前台首页
 * @author  <[c@easycms.cc]>
 */
class IndexAction extends CommonAction{
    public $img;
    public $title;
    public $desc;

    //news index
    public function index(){
        //$url1    = "http://www.ncnews.com.cn/xwzx/ncxw"; //nanchang  news  station
        $url    = "http://www.ncnews.com.cn/xwzx/ncxw/bwzg_rd/"; //本网原创
        $domain = "http://www.ncnews.com.cn";
        $index_m = new IndexModel();
        //$res = $index_m -> index($url1);
        $res = $index_m -> bwzg_rd($url);

        $this->assign('one_data', $res['one_data']);
        $this->assign('data', $res['data']);
        $this->assign('datas', $res['data']);
        $this->display('index');
    }

    public function index_news_detail(){
        $news_content_url = $_GET['url'];
        $index_m = new IndexModel();
        $arr = $index_m ->bwzg_rd_detail($news_content_url);

        $this -> assign('one_news_title',$arr['one_news_title']);
        $this -> assign('one_news_time',$arr['one_news_time']);
        $this -> assign('one_news_imgs_tags',$arr['one_news_imgs_tags']);
        $this -> assign('content_title',$arr['content_title']);
        $this -> assign('content_main',$arr['content_main']);
        $this -> assign('banner',$arr['banner']);
        $this -> assign('news_tag',$arr['news_tag']);
        $this-> display('news');
    }

    //循环爬取
    public function index_spider(){
        $spider_m = new SpiderModel();
        $spider_m -> spider1();
    }

}
