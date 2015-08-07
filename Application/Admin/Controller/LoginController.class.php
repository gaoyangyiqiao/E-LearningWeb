<?php
namespace Admin\Controller;
use Think\Controller;
class LoginController extends Controller{

	public function index(){
		$this->display('Index/login');
	}

	public function login(){

		if (!IS_POST) {
			E('This page is not found.');
		}

		$verify = new \Think\Verify();
		if(!$verify->check(I('code'))){
		 	$this->error('code error!');
		}


		$username = I('username');
		$password = I('password');
		$user = M('user')->where(array('username' => $username, ))->find();
		
		if (!$user || $user['password']!=$password) {
			$this->error('username or password error!');
		}

		session('uid',$user['id']);
		session('username',$user['username']);

		$this->redirect('Index/index');
	}

	public function verify(){

		$config =    array(
    	'fontSize'    =>    20,    // 验证码字体大小
    	'length'      =>    2,     // 验证码位数
		);
		$Verify = new \Think\Verify($config);
		$Verify->codeSet = '0123456789'; 
		$Verify->entry();

	}
}