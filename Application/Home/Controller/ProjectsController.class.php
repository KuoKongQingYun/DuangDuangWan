<?php
namespace Home\Controller;
use Think\Controller;
class ProjectsController extends Controller {
    public function index(){
        $videoModel=M('Video');
        $userModel=M('User');
        $userLogin['id']=I('cookie.UserID');
        $userLogin['password']=I('cookie.Key');
        $userData=$userModel->where($userLogin)->find();
        if(is_null($userData))
        {
            $videoType=0;
        }
        else
        {
            $videoType=$userData['type']=='0'?0:1;
        }

        $videoData=$videoModel->where(array('pid' =>0,'type'=>$videoType))->select();
        foreach ($videoData as &$value) {
            $value['url']=U('Home/Video/index',array('id'=>$value['id']));
            $temp=$userModel->where(array(id=>$value['uid']))->find();
            $value['authorName']=$temp['name'];
        }
        $this->assign('videoList',$videoData);
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