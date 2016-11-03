<?php
namespace Admin\Controller;
use Think\Controller;
use Think\Exception;

/*
文章内容管理
 */
class ContentController extends CommonController {
    
    public function index(){
    	$conds = array();
    	$title = $_GET['title'];
    	if($title){
    		$conds['title'] = $title;
    	}
    	if($_GET['catid']){
    		$conds['catid'] = intval($_GET['catid']);
    	}

    	$page = $_REQUEST['p'] ? $_REQUEST['p'] : 1;
    	$pageSize = 2;
    	$news = D("News")->getNews($conds,$page,$pageSize);
        // print_r($news);exit();
    	$count = D('News')->getNewsCount($conds);

    	$res = new \Think\Page($count,$pageSize);
    	$pageres = $res->show();

    	$this->assign('pageres',$pageres);
    	$this->assign('news',$news);

    	$this->assign('webSiteMenu',D("Menu")->getBarMenus());
    	$this->display();
    }

    public function add() {
    	if($_POST){
    		if(!isset($_POST['title']) || !$_POST['title']){
    			return show(0,'标题不存在');
    		}
    		if(!isset($_POST['small_title']) || !$_POST['small_title']){
    			return show(0,'短标题不存在');
    		}
    		if(!isset($_POST['catid']) || !$_POST['catid']){
    			return show(0,'文章栏目不存在');
    		}
    		if(!isset($_POST['keywords']) || !$_POST['keywords']){
    			return show(0,'关键字不存在');
    		}
    		if(!isset($_POST['content']) || !$_POST['content']){
    			return show(0,'文章内容不存在');
    		}
            if($_POST['news_id']){
                return $this->save($_POST);
            }
    		$newsId =D("News")->insert($_POST);
    		if($newsId){
    			$newsContentData['content'] = $_POST['content'];
    			$newsContentData['news_id'] = $newsId;
    			$cId = D("NewsContent")->insert($newsContentData);
    			if($cId){
    				return show(1,'新增成功');
    			}else{
    				return show(1,'主表新增成功,副表插入失败');
    			}
    		}else{
    			return show(0,'新增失败');
    		}

    	}else{
	    	$webSiteMenu = D('Menu')->getBarMenus();
	    	$titleFontColor = C("TITLE_FONT_COLOR");
	    	$copyFrom = C("COPY_FORM");
	    	$this->assign('webSiteMenu',$webSiteMenu);
	    	$this->assign('titleFontColor',$titleFontColor);
	    	$this->assign('copyfrom',$copyFrom);
	    	$this->display();
    	}
    }


    public function edit(){
        $newsId = $_GET['id'];
        if(!$newsId){
            $this->redirect('/admin.php?c=content');
        }
        $news = D("News")->find($newsId);
        if(!$news){
            $this->redirect('/admin.php?c=content');
        }
        $newsContent = D("NewsContent")->find($newsId);
        if($newsContent){
            $news['content'] = $newsContent['content'];
        }
        $webSiteMenu = D("Menu")->getBarMenus();
        $this->assign('webSiteMenu',$webSiteMenu);
        $this->assign('titleFontColor',C("TITLE_FONT_COLOR"));
        $this->assign('copyfrom',C("COPY_FORM"));

        $this->assign('news',$news);
        $this->display();
    }

    public function save($data){
        $newsId = $data['news_id'];
        unset($data['news_id']);
        try{
            $id = D("News")->updateById($newsId,$data);
            $newsContentData['content'] = $data['content'];
            $condId = D("NewsContent")->updateNewsById($newsId,$newsContentData);
            if($id === false || $condId === false){

                return show(0,'更新失败');
            }
            return show(1,'更新成功');
        }catch(Exception $e){
            return show(0,$e->getMessage());
        }
    }
}