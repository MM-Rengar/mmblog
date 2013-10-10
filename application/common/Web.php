<?php
namespace app\common;
use \think\Controller;
class Web extends Controller
{
	public function _initialize(){
		$request = $this->request;
		if($request->isMobile()){
			$this->redirect('http://127.77.37.104/index.php?s=webapp');
		}
	}
	public function _empty(){
		echo 'web/a 迷路了';
	}
	
}
