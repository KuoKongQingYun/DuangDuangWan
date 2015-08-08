<?php
namespace Home\Controller;
use Think\Controller;
class RegisterController extends Controller {
    public function index(){
        $this->display();
    }
    public function register(){
    	$userModel = M("User");

        if(is_null(I('name')))
        {
            $this->assign('nameWarning','请输入用户名!');
            $this->display('index');
        }
        else if(is_null(I('password')))
        {
            $this->assign('passwordWarning','请输入密码!');
            $this->display('index');
        }
        else if(is_null(I('password2')))
        {
            $this->assign('password2Warning','请输入确认密码!');
            $this->display('index');
        }
    	else if(I('password')!=I('password2'))
    	{
    		 $this->assign('password2Warning','确认密码与密码不匹配！');
    		 $this->display('index');
    	}
		else if(!is_null($userModel->where(array('email' =>I('email')))->find()))
		{
			$this->assign('emailWarning','该邮箱已经注册过！');
    		$this->display('index');
		}
        else
        {
            $userData['name']=I('name');
            $userData['email']=I('email');
            $userData['password']=md5(md5('Duang')+md5(I('password'))+md5('Duang'));
            $userId=$userModel->data($userData)->add();
            setcookie('UserID',$userId, time()+3600*24,'/');
            setcookie('Key',$userData['password'], time()+3600*24,'/');
            $this->success('注册成功!', U("Index/index"));
        }
       
    }
}