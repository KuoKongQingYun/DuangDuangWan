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
            $this->assign('pid',$videoData['id']);
            $this->assign('title',$videoData['title']);
            $this->assign('description',$videoData['description']);

            $videoData=$videoModel->where(array(pid=>I('get.id')))->select();
            foreach ($videoData as &$value) {
                $value['url']=U('Home/Video/sub',array('id'=>$value['id']));
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
    public function upload(){
        $videoModel=M('Video');
        $userModel=M('User');
        $userLogin['id']=I('cookie.UserID');
        $userLogin['password']=I('cookie.Key');
        $userData=$userModel->where($userLogin)->find();
        if(is_null($userData))
        {
            $this->redirect('Home/Login/index');
        }
        else
        {
            $videoData=$videoModel->where(array(id=>I('post.pid')))->find();
            $this->assign('ptitle',$videoData['title']);
            $this->assign('pid',I('post.pid'));

            $ch=curl_init();
            curl_setopt($ch, CURLOPT_URL, "https://openapi.youku.com/v2/oauth2/authorize_submit");
            curl_setopt($ch, CURLOPT_HEADER, true);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_POSTFIELDS, "client_id=78cb1297cad3da80&response_type=token&state=&redirect_uri=http%3A%2F%2Fwww.duangduangwan.cn%2Findex.php%2FHome%2FUser%2Fupload.html&auth_type=1&needreg=&account=609898048%40qq.com&password=y3260603");
            $data=curl_exec($ch);
            preg_match('/access_token=(.*?)&/',$data,$matches);
            $this->assign('access_token',$matches[1]);

            $this->assign('button1title',$userData['name']);
            $this->assign('button1url',U("Home/User/index"));
            $this->assign('button2title','退出登陆');
            $this->assign('button2url',U("Home/Login/logout"));
            $this->display();
        }
    }
    public function uploadComplete(){
        $videoModel=M('Video');
        $userModel=M('User');

        $userLogin['id']=I('cookie.UserID');
        $userLogin['password']=I('cookie.Key');
        $userData=$userModel->where($userLogin)->find();
        if(is_null($userData))
        {
            $this->redirect('Home/Login/index');
        }
        else
        {
            $videoData['uid']=I('cookie.UserID');
            $videoData['title']=I('post.vtitle');
            $videoData['vid']=I('post.vid');
            $videoData['pid']=I('post.pid');
            $videoModel->data($videoData)->add();
            $this->redirect('Home/Video/index',array(id=>I('post.pid')));
        }
    }
    public function sub(){
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
            $this->assign('pid',$videoData['id']);
            $this->assign('title',$videoData['title']);
            $this->assign('description',$videoData['description']);

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