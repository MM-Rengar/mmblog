<?php
namespace app\index\controller;

class Index
{
    public function index($id)
    {
		var_dump($id);
		echo url('index/blog/read','id=5&name=thinkphp');
		//var_dump($data);
	}
	public function test(){
		$data = ['name'=>'thinkphp','url'=>'thinkphp.cn'];
        return ['data'=>$data,'code'=>1,'message'=>'操作完成'];
	}
}
