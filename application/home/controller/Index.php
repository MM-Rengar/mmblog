<?php
namespace app\home\controller;
use \think\Request;
class Index
{
    public function index()
    {
		$request = Request::instance();
		if($request->isMobile()){
			echo 'Mobile';
		}else{
			echo "home:hello world!";
		}
		$info = $request->header();
		var_dump($info);
    }
}
