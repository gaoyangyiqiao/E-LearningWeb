<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){


        $this->title="E-Learning";
        $this->display('Index/index');

    }
}