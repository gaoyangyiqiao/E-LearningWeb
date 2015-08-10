<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
	
    public function index(){



        $this->display('Index/index');

    }

        public function concrete(){
    	$this->display('Index/article');
    }
}