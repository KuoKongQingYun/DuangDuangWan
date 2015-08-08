<?php
namespace Home\Controller;
use Think\Controller;
class UserController extends Controller {
    public function index(){
        $this->display();
    }
    public function upload(){
    	$this->assign('access_token',I('get.access_token'));
        $this->display();
    }
}