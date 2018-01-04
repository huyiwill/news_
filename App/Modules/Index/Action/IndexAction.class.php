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
        $url    = "http://www.ncnews.com.cn/xwzx/ncxw"; //nanchang  news  station
        $domain = "http://www.ncnews.com.cn";
        $con    = file_get_contents($url);
        //p(htmlspecialchars($con));
        //匹配头条
        $pattern = '/<div class=\"topnewslist\".*?>.*?<\/div>/ismu';
        //match banner  新闻
        $pattern = '/<ul class=\"headnewslist\">(.*?)<\/ul>/ismu';
        preg_match($pattern, $con, $arr);
        //p($arr);
        //match images
        $pat1 = '/<a href=\"(.*?)\" target=\"_blank\" class=\"pic\">(.*?)<\/a>/iu';
        preg_match_all($pat1, $arr[0], $images);
        $img_href = $images[1];   //1
        //imgages  url  address
        $imgs = array();
        foreach($images[2] as $img_v){
            $pat = '/<img .*? data-original=\"(.*?)\".*?>/iu';
            $pat = '/http:\/\/(.*)(\.jpg|\.png)\"/isu';
            preg_match_all($pat, $img_v, $img);
            $imgs[] = rtrim($img[0][0], '"');   //2
        }

        $pat2 = '/<h3><a href=\"(.*?)\" target=\"_blank\">(.*?)<\/a><\/h3>/';
        preg_match_all($pat2, $arr[0], $titles);
        $title_href = array();

        foreach($titles[1] as $title_v){
            $sub = substr($title_v, 0, 1);
            if($sub == 'h'){
                $title_href[] = $title_v;      //3
            }elseif($sub == '.'){
                $title_v      = ltrim($title_v, '.');
                $title_href[] = $url . $title_v;      //3
            }else{
                $title_v      = ltrim($title_v, '.');
                $title_href[] = $url . $title_v;      //3
            }
        }
        $title = $titles[2];                   //4

        $pat3 = '/<p>(.*?)<\/p>/';
        preg_match_all($pat3, $arr[0], $desc);
        $desc = $desc[1];                       //5

        $data = array();
        //count($title)
        for($i = 1; $i < 4; $i++){
            $data[$i]['img_href']   = $img_href[$i];
            $data[$i]['imgs']       = $imgs[$i];
            $data[$i]['title_href'] = $title_href[$i];
            $data[$i]['title']      = $title[$i];
            $data[$i]['desc']       = $desc[$i];
            $data[$i]['twnc']       = "图文南昌";
            $time                   = pathinfo($img_href[$i])['filename'];
            $time_arr               = explode('_', $time);
            $data[$i]['time']       = date("Y-m-d", strtotime(ltrim($time_arr[0], 't')));
            $data[$i]['idss']       = "message" . $i;
        }

        $time     = pathinfo($img_href[0])['filename'];
        $time_arr = explode('_', $time);
        $one_data = array(
            'img_href'   => $img_href[0],
            'imgs'       => $imgs[0],
            'title_href' => $title_href[0],
            'title'      => $title[0],
            'desc'       => $desc[0],
            'twnc'       => "图文南昌",
            'time'       => date("Y-m-d", strtotime(ltrim($time_arr[0], 't')))
        );
        //p($data);
        $this->assign('one_data', $one_data);
        $this->assign('data', $data);
        $this->assign('datas', $data);
        $this->display('index');
    }

    public function index_news_detail(){
        $news_content_url = $_GET['url'];
        $news_detail      = requests::get($news_content_url);
        $news_content     = selector::select($news_detail, "//div[contains(@class,'newsread')]");
        //xpath
        $one_news_title     = selector::select($news_detail, "//div[contains(@class,'read')]//h3"); //1
        $one_news_top       = selector::select($news_detail, "//div[contains(@class,'newsinfo')]");
        $one_news_top       = selector::remove($one_news_top, "//i[contains(@id,'fontsize')]");
        $one_news_time      = trim($one_news_top);      //2

        $one_news_imgs_tags = selector::select($news_content,"//div[contains(@align,'center')]");
        $pattern = '/<img[^>]*.?>/i';
        foreach($one_news_imgs_tags as $k=>$tag){
            if(preg_match($pattern,$tag)){
                $one_news_imgs_tags[$k] = selector::select($tag, "//img"); //3
            }
        }

        $p = "/<img[^>]*src[=\"\'\s]+([^\"\']*)[\"\']?[^>]*>((?:(?!<img\b)[\s\S])*)/i";
        //$news_content= '<div align="left">34534<p>sdfas</p></div>';
        $p = '/<div[^>]*?align=\"left\"*?>(.*?)(<p>(.*?)<\/p>)*<\/div>/ism';
        $p = '/<div[^>]*?align=\"left\"*?>(.*?)(<p[^>]*?>(.*?)<\/p>.*?)?<\/div>/ism';

        //preg_match_all($p,$news_content,$content);
        $one_news_content   = selector::select($news_content,"//div[contains(@align,'left')]");
        $content = selector::select($news_content,$p,'regex');
        p($content);
        $this->display('news');
    }

    Public function index2(){
        $cats     = D('Category');
        $link     = M('link');
        $portrait = M('Member_user');
        $article  = M('article');
        //首页中部3篇文章推荐展示
        $mPushArticle = $article->where('isslides=1 and islock=0')->order('rand()')->select();
        //首页下部4个分类推荐展示
        $dPushCats = $cats->limit('4')->where('ispush=1 and isverify=1')->relation(true)->select();
        $approval1 = $article->where('ispush=1 and islock=0')->order('article_id desc')->limit('5')->select();
        $approval3 = $article->where('ispush=1 and islock=0')->order('rand()')->limit('5')->select();
        $approval2 = $article->where('ispush=1 and islock=0')->order('article_id desc')->limit('5')->select();
        $links     = $link->where("isverify=1")->select();
        $portraits = $portrait->where('islock=0')->limit('24')->order('user_id desc')->select();
        //首页中部3篇文章推荐展示
        $this->assign('modelid1', $mPushArticle);
        //这个是页面下面的4个板块
        $this->assign('modelid0', $dPushCats);
        //按赞的次数进行遍历
        $this->assign('approval', $approval1);
        //随机精选5篇文章
        $this->assign('approval3', $approval3);
        //评论最多5篇的文章
        $this->assign('links', $links);
        //显示首页友情链接
        $this->assign('portrait', $portraits);
        //显示首页右侧用户注册头像
        $this->assign('approval2', $approval2);
        //显示模板
        $this->display('index');
    }
}
