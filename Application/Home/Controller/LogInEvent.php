<?php
/**
 * Created by PhpStorm.
 * User: hello
 * Date: 2015/8/10
 * Time: 14:24
 */

namespace Home\Controller;


use Think\Controller;

class LogInEvent extends Controller{

    public function log_in(){
        if($this->isPost()){

            halt('Log in fail.Please try later.');

        }

        $user_name=I('post.user_name');
        $password=I('post.password','','sha1');
        $auto=I('post.auto');

        $condition=array(
            'name'=>$user_name,
            'password'=>$password
        );

        $user=M('user');
        $result=$user->where($condition)->find();

        if($result){
            session_start();
            $_SESSION['user_name']=$user_name;
            $_SESSION['user_id']=$result['id'];

            if($auto==1){

                cookie('user_id',$result['id'],30*24*3600);
                cookie('user_name',$user_name,30*24*3600);

            }



        }
        else{

            halt('用户名或密码错误');

        }
    }



}