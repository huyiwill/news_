<?php
//
use \phpspider\core\requests;
use \phpspider\core\selector;

/**
 * 新闻类别
 * @author  <[c@easycms.cc]>
 */
class CatenewsAction extends CommonAction{
    public $img;
    public $title;
    public $desc;
    public $one_data_;
    public $data_;
    public $cate = array(
        'jrnc', //今日南昌
        'ncsp', // 南昌时评
        'szxw', //时政新闻
        'gnxw',//国内新闻http://www.ncnews.com.cn/xwzx/gnxw/

    );

    //cate
    public function cate_list(){
        $c = include './App/Conf/news.cate.config.php';
        $cate_m = new CatenewsModel();

    }


    //news.html  页面  右侧新闻列表详情数据
    public function index2(){
        $news_content_url = $_GET['url'];
        $index_m = new IndexModel();
        $twnc_m = new TwncModel();
        $arr = $index_m ->bwzg_rd_detail($news_content_url);
        $right_list = $twnc_m -> twnc_list(5);

        $this -> assign('right_list',$right_list);
        $this -> assign('one_news_title',$arr['one_news_title']);
        $this -> assign('one_news_time',$arr['one_news_time']);
        $this -> assign('one_news_imgs_tags',$arr['one_news_imgs_tags']);
        $this -> assign('content_title',$arr['content_title']);
        $this -> assign('content_main',$arr['content_main']);
        $this -> assign('banner',$arr['banner']);
        $this -> assign('news_tag',$arr['news_tag']);
        $this -> display('news');
    }

}
