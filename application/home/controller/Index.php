<?php
namespace app\home\controller;

class Index
{
	
	
    public function index()
    {
		$request = Request::instance();
		echo "home:hello world!";
    }
}
