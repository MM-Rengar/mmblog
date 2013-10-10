<?php
namespace app\home\controller;
use \think\Request
class Index
{
    public function index()
    {
		$request = Request::instance();
		echo "home:hello world!";
    }
}
