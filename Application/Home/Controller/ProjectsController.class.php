<?php
namespace Home\Controller;
use Think\Controller;
class ProjectsController extends Controller {
    public function index(){
        $videoModel=M('Video');
        $userModel=M('User');
        $videoData=$videoModel->where(array('pid' =>0,'type'=>0))->select();
        foreach ($videoData as &$value) {
            $value['url']=U('Home/Video/index',array('id'=>$value['id']));
            $ch=curl_init();
            curl_setopt($ch, CURLOPT_URL, "https://openapi.youku.com/v2/videos/show.json?client_id=78cb1297cad3da80&video_id=".$value['vid']);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            $data=curl_exec($ch);
            $jsonData=json_decode($data);
            $value['img']=$jsonData->{'bigThumbnail'};
        }
        $this->assign('videoList',$videoData);
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