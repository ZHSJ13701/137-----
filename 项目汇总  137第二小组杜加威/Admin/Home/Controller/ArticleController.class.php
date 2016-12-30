<?php
namespace Home\Controller;
use Think\Controller;
class ArticleController extends Controller {

	function __construct()
	{
		parent::__construct();
		session_start();
		if( !isset($_SESSION['userid']) )
		{
			//未登录或session失效，跳转首页
			Header('HTTP/1.1 303 See Other'); 
			Header('Location: /');
			return;
		}
		$userid = (int)$_SESSION['userid'];
		$data = M('user')->where('id='.$userid)->select();
		if(!$data[0]['power'])
		{
			//权限不足，跳转首页
			Header("HTTP/1.1 303 See Other"); 
			Header("Location: /");
			return;
		}
	}

    public function index()
    {
		$page = I('page');
		if( $page <= 0 )
			$page = 1;
		$count = M('article')->count();
		$max_page = ceil($count/10);
		$start = ($page-1)*10;
		if($start > $count)
		{
			$start = 0;
			$page = 1;
		}
		$data = M('article')->limit($start,10)->select();
		$this->data = $data;
		$this->count = $count;
		$this->page = $page;
		$this->maxpage = $max_page;
		$this->display();
    }

	public function delete()
	{
		$id = I('id');
		$ret = M('article')->delete($id);
		if($ret <= 0)
			$this->ret = 'error';
		else
			$this->ret = 'success';
		$this->display();
	}

	public function add()
	{
		$this->display();
	}

	public function alter()
	{
		$id = I('id');
		$data = M('article')->where('id='.$id)->select();
		$data = $data[0];
		$this->data = $data;
		$this->display();
	}

	public function update()
	{
		try{
		$id = I('id');
		$title = I('title');
		$type = I('type');
		$keyword = I('keyword');
		$content = I('content');
		if(strlen($title) && strlen($content))
		{
			$tmp = M('ArticleType')->where('id='.$type)->count();
			if( $tmp==0 )
			{
				E('Article type error!');
			}
			$data = ['article_title' => $title, 'article_content' => $content, 'article_type' => $type, 'key_word' => $keyword];
			if(!empty($_FILES['photo']['tmp_name']))
			{
				if($_FILES['photo']['error'] > 0)
				{
					E('Upload error!');
				}
				$tmp_path = $_FILES['photo']['tmp_name'];
				$file_type = substr($_FILES['photo']['name'], strrpos($_FILES['photo']['name'], '.'));
				$path = './Public/Admin/img/'.md5_file($tmp_path).$file_type;
			
				if( !move_uploaded_file($_FILES['photo']['tmp_name'], $path) )
				{
					E('Move photo error!');
				}
				$data['img'] = $path;
			}
			$ret = M('article')->where('id='.$id)->save($data);
			
			if( $ret != 1 )
			{
				E('Update database error!');
			}
			$this->ret = 'success';
		}else
			$this->ret = 'error';
		}catch(\Think\Exception $e)
		{
			$this->ret = 'error';
		}finally{	
			$this->display();
		}
	}

	public function save()
	{
		try{
		$title = I('title');
		$type = (int)I('type');
		$keyword = I('keyword');
		$content = I('content');
		if(strlen($title) && strlen($content))
		{
			$tmp = M('ArticleType')->where('id='.$type)->count();
			if($tmp!=1)
			{
				E('Article type error!');
			}	
			if($_FILES['photo']['error'] > 0)
			{
				E('Upload error!');
			}
			$tmp_path = $_FILES['photo']['tmp_name'];
			$file_type = substr($_FILES['photo']['name'], strrpos($_FILES['photo']['name'], '.'));
			$path = './Public/Admin/img/'.md5_file($tmp_path).$file_type;
			
			if( !move_uploaded_file($_FILES['photo']['tmp_name'], $path) )
			{
				E("Move photon error!");
			}
			$data = ['article_title' => $title, 'article_content' => $content, 'article_type' => $type, 'img' => $path, 'key_word' => $keyword, 'create_time' => date('Y-m-d H:i:s',time())];
			$ret = M('article')->add($data);
			
			if($ret > 0)
			{
				E('Insert database error!');
			}
			$this->ret = 'success';
		}
		throw new Exception('error');
		}catch(\Think\Exception $e){
			$this->ret = 'error';
		}finally{
			$this->display();
			return;
		}
	}

	
}
