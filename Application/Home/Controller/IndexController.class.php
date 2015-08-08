<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
    	$userModel=M('User');
    	$userLogin['id']=I('cookie.UserID');
    	$userLogin['password']=I('cookie.Key');
    	$userData=$userModel->where($userLogin)->find();
    	if(is_null($userData))
    	{
    		$this->display();
    	}
    	else
    	{
    		$this->assign('name',$userData['name']);
    		$this->display('index_logined');
    	}
    }
}