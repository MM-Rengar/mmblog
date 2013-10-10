<?php
namespace app\common;
use \think\Controller;
class Web extends Controller
{
	public function _initialize(){
		$request = $this->request;
		if($request->isMobile()){
			$url = $request->domain().$request->baseFile().'?s=webapp';
			$this->redirect($url);
		}
	}
	public function _empty(){
		echo 'web/a 迷路了';
	}
	
}
