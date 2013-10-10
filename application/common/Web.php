<?php
namespace app\common;
use \think\Controller;
class Web extends Controller
{
	public function _initialize(){
		$request = $this->request;
		if($request->isMobile()){
			echo 'Mobile';
		}
	}
	public function _empty(){
		echo 'web/a 迷路了';
	}
	
}
