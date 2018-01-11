<?php

/**
 * Created by PhpStorm.
 * User: will5451
 * 分类
 */
class CatenewsModel extends Model{
    //list
    public function getCateInfoByName($where){
        $news_cate = M('news_cate')->where($where)->order('id desc')->select();
        return $news_cate;
    }
    //随机抽取各个新闻
    public function getCateNewsByRand($limit){
        $news1 = M('news_cate')->where(array('news_cate'=>'jrnc'))->order('id desc')->order('rand()')->limit($limit)->select();
        $news2 = M('news_cate')->where(array('news_cate'=>'ncsp'))->order('id desc')->order('rand()')->limit($limit)->select();
        $news3 = M('news_cate')->where(array('news_cate'=>'szxw'))->order('id desc')->order('rand()')->limit($limit)->select();
        $news4 = M('news_cate')->where(array('news_cate'=>'gnxw'))->order('id desc')->order('rand()')->limit($limit)->select();
        $news = array_merge($news1,$news2,$news3,$news4);
        foreach($news as $k=>$v){
            switch(trim($v['news_cate'])){
                case 'jrnc':
                    $news[$k]['news_cate'] = '今日南昌';
                    break;
                case 'ncsp':
                    $news[$k]['news_cate'] = '南昌时评';
                    break;
                case 'szxw':
                    $news[$k]['news_cate'] = '时政新闻';
                    break;
                case 'gnxw':
                    $news[$k]['news_cate'] = '国内新闻';
                    break;
                default:
                    $news[$k]['news_cate'] = '其他';
                    break;
            }
        }
        return $news;
    }
    //every  news  section
    public function getEveryNewsSection($limit){
        $news['jrnc']['news_cate_data'] = M('news_cate')->where(array('news_cate'=>'jrnc'))->order('id desc')->limit($limit)->select();
        $news['ncsp']['news_cate_data'] = M('news_cate')->where(array('news_cate'=>'ncsp'))->order('id desc')->limit($limit)->select();
        $news['szxw']['news_cate_data'] = M('news_cate')->where(array('news_cate'=>'szxw'))->order('id desc')->limit($limit)->select();
        $news['gnxw']['news_cate_data'] = M('news_cate')->where(array('news_cate'=>'gnxw'))->order('id desc')->limit($limit)->select();
        $news['jrnc']['news_cate'] = '今日南昌';
        $news['ncsp']['news_cate'] = '南昌时评';
        $news['szxw']['news_cate'] = '时政新闻';
        $news['gnxw']['news_cate'] = '国内新闻';
        return $news;
    }
}