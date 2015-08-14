<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
	
    public function index(){

        session_start();//开始会话

        $_SESSION['hello']='test session';

        $this->title="E-Learning";
        $user=D('User');
       print_r( $user->getDbFields());//获取字段
       echo session_id().' session '.'</br>';
        echo $_SESSION['hello'];

//       $this->department_list='<li><a href="#"><h3>软件学院</h3></a></li>
//           <li><a href="#"><h3>数学系</h3></a></li>
//                        <li><a href="#"><h3>历史学系</h3></a></li>
//                        <li><a href="#"><h3>哲学系</h3></a></li>
//                        <li><a href="#"><h3>物理学院</h3></a></li>
//                        <li><a href="#"><h3>政府管理学院</h3></a></li>';
       $this->display('Index/signin');

    }


}