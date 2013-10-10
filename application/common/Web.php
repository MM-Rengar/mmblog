<?php
namespace app\common;
use \think\Controller;
class Web extends Controller
{
	public function _initialize(){
		$request = $this->request;
		if($request->isMobile()){
			$this->redirect('?s=webapp/index/index');
		}
	}
	public function _empty(){
		echo 'web/a 迷路了';
	}
	
}
