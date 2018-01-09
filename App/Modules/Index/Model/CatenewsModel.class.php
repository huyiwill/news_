<?php

/**
 * Created by PhpStorm.
 * User: will5451
 * 分类
 */
class CatenewsModel extends Model{
    //list
    public function cate_list(){
        $news_cate = M('news_cate')->order('id asc')->select();
        return $news_cate;
    }
    //
}