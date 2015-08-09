<?php
namespace Home\Controller;
use Think\Controller;
class UserController extends Controller {
    public function index(){
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
    		$this->assign('button1title',$userData['name']);
            $this->assign('button1url',U("Home/User/index"));
            $this->assign('button2title','退出登陆');
            $this->assign('button2url',U("Home/Login/logout"));
    		$this->display();
    	}
    }
    public function upload(){
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
	        $this->assign('vtitle',I('post.vtitle'));
    		$this->assign('vid',I('post.vid'));
        	$this->assign('button1title',$userData['name']);
            $this->assign('button1url',U("Home/User/index"));
            $this->assign('button2title','退出登陆');
            $this->assign('button2url',U("Home/Login/logout"));
    		$this->display();
    	}
    }
    public function uploadComplete(){
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
    		$this->assign('vtitle',I('post.vtitle'));
    		$this->assign('vid',I('post.vid'));
        	$this->assign('button1title',$userData['name']);
            $this->assign('button1url',U("Home/User/index"));
            $this->assign('button2title','退出登陆');
            $this->assign('button2url',U("Home/Login/logout"));
    		$this->display();
    	}
    }
    public function videoComplete(){
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
    		$videoModel=M('Video');
    		$videoData['pid']='0';
    		$videoData['uid']=I('cookie.UserID');
    		$videoData['title']=I('post.title');
    		$videoData['description']=I('post.description');
    		$videoData['vid']=I('post.vid');
    		$videoModel->data($videoData)->add();
    		$this->assign('button1title',$userData['name']);
            $this->assign('button1url',U("Home/User/index"));
            $this->assign('button2title','退出登陆');
            $this->assign('button2url',U("Home/Login/logout"));
            $this->redirect('Home/User/video');
    	}
    }
    public function video(){
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
    		$videoModel=M('Video');
    		$videoData=$videoModel->where( array('uid' =>I('cookie.UserID')))->select();
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
    		$this->assign('button1title',$userData['name']);
            $this->assign('button1url',U("Home/User/index"));
            $this->assign('button2title','退出登陆');
            $this->assign('button2url',U("Home/Login/logout"));
            $this->display();
    	}
    }
}