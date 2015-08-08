<?php
namespace Home\Controller;
use Think\Controller;
class LoginController extends Controller {
    public function index(){
        $this->display();
    }
    public function login(){
        $userModel = M("User");
		if(is_null(I('email')))
        {
            $this->assign('emailWarning','请输入邮箱!');
            $this->display('index');
        }
        else if(is_null(I('password')))
        {
            $this->assign('passwordWarning','请输入密码!');
            $this->display('index');
        }
        else
        {
        	$userData=$userModel->where(array('email' =>I('email'),'password'=>md5(md5('Duang')+md5(I('password'))+md5('Duang'))))->find();
			if(is_null($userData))
			{
				$this->assign('warning','用户名或密码不正确!');
	    		$this->display('index');
			}
	        else
	        {
	            setcookie('UserID',$userData['id']);
	            setcookie('Key',$userData['password']);
	            $this->success('登陆成功!', U("Index/index"));
	        }
        }
    }
    public function logout()
    {
    	setcookie('UserID','', time() - 3600,$path='/');
    	setcookie('Key','', time() - 3600,$path='/');
    	$this->display('index');
    }
}