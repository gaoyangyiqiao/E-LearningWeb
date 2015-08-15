<?php
namespace Home\Controller;
use Think\Controller;
class ArticleController extends Controller {
    public function index(){
        $this->display('Index/article');
    }

    public function user(){
        $this->display('Index/homePage');
    }
}