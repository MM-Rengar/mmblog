<?php
namespace app\home\controller;

class Index
{
	public function _empty(){
		echo '找不到页面';
	}
	
    public function index()
    {
		echo "home:hello world!";
    }
}
