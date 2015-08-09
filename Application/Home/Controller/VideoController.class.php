<?php
namespace Home\Controller;
use Think\Controller;
class VideoController extends Controller {
    public function index(){
        $videoModel=M('Video');
        $userModel=M('User');

    	$videoData=$videoModel->where(array(id=>I('get.id')))->find();
    	if(is_null($videoData))
    	{
            $this->redirect('Home/Projects/index');
    	}
    	else
    	{
            $this->assign('vid',$videoData['vid']);
            $userLogin['id']=I('cookie.UserID');
            $userLogin['password']=I('cookie.Key');
            $userData=$userModel->where($userLogin)->find();
            if(is_null($userData))
            {
                $this->assign('button1title','登陆');
                $this->assign('button1url',U("Home/Login/index"));
                $this->assign('button2title','注册');
                $this->assign('button2url',U("Home/Register/index"));
                $this->display();
            }
            else
            {
                $this->assign('button1title',$userData['name']);
                $this->assign('button1url',U("Home/User/index"));
                $this->assign('button2title','退出登陆');
                $this->assign('button2url',U("Home/Login/logout"));
                $this->display();
            }
    	}
    }
}