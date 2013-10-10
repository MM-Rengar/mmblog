<?php
namespace app\common;
use \think\Controller;
class App extends Controller
{
	public function _initialize(){
		$request = $this->request;
		if(!$request->isMobile()){
			$this->redirect('http://127.77.37.104/index.php?s=home');
		}
	}
	public function _empty(){
		echo 'web/a 迷路了';
	}
	
}
