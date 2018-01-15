<?php
/**
* 前台公共类
* @author  <[c@easycms.cc]>
*/
class CommonAction extends Action
{
	Public function _initialize(){
        if (ismobile()) {
            //C('DEFAULT_THEME','mobile');
            C('DEFAULT_THEME','news');
        }
        $c = include './App/Conf/news.cate.config.php';
		//全局首页，用户个人中心导航分类展示
		$cats=M('Category')->where('isverify=1 and isshow=1')->order('sort desc')->select();
        $this->assign('news_list', $c['news_list']);
		$this->assign('cats',$cats);

	}
	
	//空操作
	public function _empty(){
		$this->redirect(__ROOT__);
	}



    //cate  nav cate_list
    public function cate_list(){
        $c = include './App/Conf/news.cate.config.php';
        return $c;
    }
}
