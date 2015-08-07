<?php
namespace University\Controller;
use Think\Controller;
class TestController extends Controller {
	public function test(){
		$this->success('yes!');
    }
}
?>