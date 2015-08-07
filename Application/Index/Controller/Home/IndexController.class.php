<?php
namespace University\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function test(){
        echo "string";
        $db = M('data');
        $result = $db->find(1);
        dump($result);
        dump($_SERVER);
    }

    public function index(){
        $this->display('index');
    }

    public function contact(){
    	$this->display('contact');
    }

    public function services(){
    	$this->display('services');
    }

    public function blog(){
    	$this->display('blog');
    }

    public function about(){
    	$this->display('about');
    }
}