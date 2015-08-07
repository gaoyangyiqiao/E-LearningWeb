<?php
namespace Admin\Controller;
use Think\Controller;
class UserController extends Controller {

    public function addUser(){
    	$this->display('Index/addUser');
    }

    public function runAdd(){
    	if (M('user')->add($_POST)) {
    		# code...
    		$this->success('添加用户成功');
    	}
    	else{
    		$this->error('添加失败');
    	}
    }

    public function showUser(){
    	$user = M('user')->select();
    	$this->user = $user;
    	$this->display('Index/userList');
    }
}