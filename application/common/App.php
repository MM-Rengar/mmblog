<?php
namespace app\common;
use \think\Controller;
class App extends Controller
{
	public function _initialize(){
		$request = $this->request;
		if(!$request->isMobile()){
			$this->redirect('?s=home/index/index');
		}
	}
	public function _empty(){
		echo 'web/a 迷路了';
	}
	
}
