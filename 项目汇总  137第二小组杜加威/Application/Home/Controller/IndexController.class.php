<?php
namespace Home\Controller;
use Think\Controller;

class IndexController extends Controller {

    public function index(){

		//网站配置
		//$config = M('config');
		//$configs = $config ->field("title,keywords,description,copyright,logo,status") ->find();
		
		// 判断session
		if($_SESSION){
			$this->assign("lo",$_SESSION);
		}else{
			$this->assign("lo",'');
		}
		
        $this->display();
    

    }
}