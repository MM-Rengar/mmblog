<?php
namespace app\common;
use \think\Controller;
class Web extends Controller
{
	public function _initialize(){
		if($request->isMobile()){
			echo 'Mobile';
		}
	}
	public function _empty(){
		echo 'web迷路了';
	}
	
}
