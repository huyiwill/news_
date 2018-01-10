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
    //
}